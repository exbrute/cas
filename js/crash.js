$(document).ready(() => {
    window.webSocket = io.connect(':8080');
    window.crash = {
        chart : $('.chart'),
        chartInfo : $('.chart-info'),
        bet : $('.bet-amount'),
        withdraw : $('.bet-cashout'),
        balance : $('.balance'),
        wb : $('.withdraw-button'),
        bb : $('.bet-button'), 
        bc : $('.players_bet'),
        bs : $('.players_sum'),
        history : $('#history'),
        bets : $('#bets'),
        hidden : false,
        m : 0,
        aw : localStorage.getItem('aw'),
        aw_checked : false
    }

    $.ajax({
        url : '/regme',
        type : 'post',
        success : (res) => {window.persona = res;}
    });

    webSocket.on('crash', (res) => {
        if(res.type == 'timer') 
        {
            $(crash.chartInfo).text((res.time >= 0) ? 'Старт через ' + res.time.toFixed(1) + '...' : 'Принимаем ставки...');
            $('title').text((res.time >= 0) ? 'Старт через ' + res.time.toFixed(1) + '...' : 'Принимаем ставки...');
        }
        if(res.type == 'slider') 
        {
            $.plot(crash.chart, [res.data], res.options);
            if(res.m !== false) 
            {
                crash.m = res.m;
                $(crash.chartInfo).text(res.multiplier);
                $('title').text(res.multiplier);
                if(crash.m >= crash.aw && crash.aw_checked === false && crash.aw > 1)
                {
                    crash.aw_checked = true;
                    webSocket.emit('withdraw', {
                        hash : persona.hash,
                        multiplier : crash.aw
                    });
                }
            }
            $(crash.chartInfo).css({
                'transition' : 'color 200ms ease',
                'color' : res.color
            });
            if(typeof persona != 'undefined' && persona.bet_value !== false) $(crash.wb).text('Вывести (' + (persona.bet_value*res.m).toFixed(0) + ')');
        }
        if(res.type == 'newGame') 
        {
            crash.bets.html('');
            crash.bc.text('0');
            crash.bs.text('0');
            crash.wb.hide();
            crash.wb.text('Вывести');
            crash.bb.show();
            this.hidden = false;
            persona.bet = false;
            persona.bet_value = false;
            crash.aw = 0;
            crash.aw_checked = false;
            localStorage.setItem('aw', 0);
        }

        if(res.type == 'history')
        {
            // console.log(res);
            var html = '';
            for(var i in res.history) html += '<a style=""><div class="koff__item" style="color: '+res.history[i].color+';border-color: '+res.history[i].color+';">'+res.history[i].m+'x</div></a>';
            crash.history.html(html);
        }
        
        if(res.type == 'bets')
        {
            crash.bs.text(res.bs);
            crash.bc.text(res.bc);

            var html = '';
            for(var i in res.bets)
            {
                var bet = res.bets[i];
                html += '<tr class="crash-table__tr player-bet" style=""><td class="crash-table__td crash-table__td--avatar"><div class="crash-table__avatar"><div class="crash-table__avatar-img" style="background: url(' + bet.user.avatar + ') no-repeat top; background-size: cover;"></div><div class="crash-table__avatar">' + bet.user.username + '</div></div></td><td class="crash-table__td crash-table__td--linestav"><div class="linestav linestav--crash-table"><p class="inl">Поставил: <span class="0Sums">' + bet.price + '</span></p><div class="inl coinico"><img src="/img/coins.png" width="15"></div></div></td> ';
                if(bet.status == 1)
                {
                    html += '<td class="crash-table__td crash-table__td--koff"><div class="koff__item koff__item--crash-table multiplier" style="color: ' + bet.withdraw.color + ';border-color: ' + bet.withdraw.color + ';">' + bet.withdraw.m.toFixed(2) + 'x</div></td><td class="crash-table__td crash-table__td--total"><div class="linestav linestav--crash-table-total"><p class="inl"><span class="win">' + bet.won + '</span></p><div class="inl coinico"><img src="/img/coins.png" width="15"></div></div></td>';
                } else {
                    html += '<td class="crash-table__td crash-table__td--chronometer" colspan="2"> <img class="crash-table__chronometer" src="/img/chronometer.png" width="31" height="24"></td> ';
                }
                html += '</tr>';
            }
            crash.bets.html(html);
        }
    });

    crash.bb.click(() => {
        $.ajax({
            url : '/crash/addBet',
            type : 'post',
            data : {
                bet : parseFloat(crash.bet.val()) || 0
            },
            success : (res) => {
                if(res.success)
                {
                    var withdraw = parseFloat(crash.withdraw.val()) || 0;
                    localStorage.setItem('aw', withdraw);
                    crash.aw = withdraw;

                    crash.bb.hide();
                    crash.wb.text('Вывести (' + res.bet + ')');
                    persona.bet_value = res.bet;
                    crash.wb.show();
                } else {
                    crash.alert(res.msg, 'error');
                }
            },
            error : (err) => {
                console.log(err.responseText);
            }
        })
    });

    crash.alert = function(msg, status) {
        $.notify({
            position : 'bottom-left',
            type: status,
            message: msg
        });
    }

    crash.wb.click(() => {
        webSocket.emit('withdraw', {
            hash : persona.hash,
            multiplier : crash.m
        });
    });

    webSocket.on('withdraw', (res) => {
        if(res.success) 
        {
            persona.bet_value = false;
            crash.wb.text('Выигрыш (' + res.won + ')');

            crash.aw = 0;
            crash.aw_checked = false;
            localStorage.setItem('aw', 0);

            return crash.alert(res.msg, 'success');
        }
        return crash.alert(res.msg, 'error');
    });
});