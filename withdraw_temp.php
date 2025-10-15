

<div class="col-lg-8 col-xl-8 mg-t-10 " style="margin-bottom:500px">
    
    
<style>
    .header-wrappers{
 
     
    background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
    color: #fff;
    font-size: 16px;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 1rem;
    
     
    }
</style>

<div class="header-wrappers">
    <img src="/extra/panel/icoHistoryZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Вывод
</div>
 <div class="wrapperhistory" style="display: flex;">






<div id="deposits" onclick="location.href = '/deposit';" class="mainn" style="width: 50%;">
    <img src="/extra/panel/icoDeposit2ZZ.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Пополнить</span>
</div>
<div id="withdraws"onclick="location.href = '/withdraw';" class="mainn" style="width: 50%;">
    <img src="/extra/panel/icoWithdraw2ZZ.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Вывести</span>
</div>

</div>
<style>
        .mainn{
background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
            color:#fff;

    font-size: 14px;
    border-radius: 10px;
    padding: 10px;
    margin-right: 0.5rem;
        margin-bottom: 5px;
    cursor:pointer;
    }   
 </style>   
    <div class="card" style="color: #8897a9;    border-radius: 1.25rem;border: 1px solid rgba(72,94,144,.16);">
       <div class="card-header pd-t-20  align-items-start justify-content-between bd-b-0 pd-b-0"style="border-color: #fff">
        <div >
           
            <p class="tx-13  mg-b-0 tx-light" style="margin-top:2rem;">Выберите платежную систему, укажите реквизиты и сумму</p>
        </div>
        <div class="card-body pd-20 bd-b pd-b-20">
            <div class="row">
                <div class="col-12">
                    <div class="mg-b-20 systems-wt" style="margin-left:-5px;margin-top:-15px;overflow-x: auto;">
                        <div style="width: 32%;border-radius: 1rem;"class="mg-l-5 btn-withdraw mg-t-5 wd-65 ht-65 bg-gray-100  d-inline-flex align-items-center justify-content-center" onclick="$('#sbpvibor').removeClass('HidenSbp'); $('#walletNumber').attr('placeholder','+7XXXXXXXXX'); $('#nameWt').html('Номер СБП');$('#withdrawSystem').val('4'); $('.btn-withdraw').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass(' bd-1 bd')">
                            <img class="logo-wt" alt="qiwi" src="files/assets/qiwiicon.png" width="5">
                        </div>
                        <div style="width: 32%;border-radius: 1rem;"class="btn-withdraw mg-t-10 mg-l-5 wd-65 ht-65 bg-gray-100  d-inline-flex align-items-center justify-content-center" onclick="$('#sbpvibor').addClass('HidenSbp'); $('#walletNumber').attr('placeholder','+7XXXXXXXXX');$('#nameWt').html('QIWI кошелек'); $('#withdrawSystem').val('2'); $('.btn-withdraw').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass(' bd-1 bd')">
                            <img class="logo-wt" alt="payeer" src="files/assets/qiwi.png" width="40">
                        </div>
                        
                        
                        <div style="width: 32%;border-radius: 1rem;" class="mg-l-5 mg-t-10 btn-withdraw wd-65 ht-65 bg-gray-100  d-inline-flex align-items-center justify-content-center" onclick="$('#sbpvibor').addClass('HidenSbp');$('#walletNumber').attr('placeholder','Номер без приставки FK');$('#withdrawSystem').val('11'); $('#nameWt').html('FKWallet кошелек'); $('.btn-withdraw').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass(' bd-1 bd')">
                            <img class="logo-wt" alt="advcash" src="files/assets/fk.png" width="40">
                        </div>
                           
                        
                        
                    </div>

                    <hr>
    
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group">
                                <label for="inputAddress" class="tx-normal typeahead la-mob"><span id="nameWt">Кошелек:</span> <span class="tx-danger">*</span></label>
                                <input type="text" class="form-control tx-16 tx-normal"style="border: 2px solid #eae4ff;  border-radius: 0.4rem;" id="walletNumber" placeholder="">
                            </div>
<style>
    .HidenSbp{
        display:none;
    }

</style>                            
                            <select id="sbpvibor" class="HidenSbp" style="    margin-top: -1rem;margin-bottom: 1rem;background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);border-radius: 0.8rem;color: #000;">    
  <option value="Select">Сбербанк</option>}  
  <option value="Vineet">Тинькофф Банк</option>  
  <option value="Sumit">Райффайзен Банк</option>  
  <option value="Dorilal">Альфа-Банк</option>  
  <option value="Omveer">ВТБ</option>  
  <option value="Rohtash">Ozon Банк</option>  
  <option value="Maneesh">МТС Банк</option>  
  <option value="Maneesh">Уралсиб</option> 
  <option value="Maneesh">Ренессанс Банк</option> 
</select>
                            
                            <div class="form-group d-none">
                                <input type="number" class="form-control tx-light tx-16 tx-normal"style="border: 2px solid #eae4ff;  border-radius: 0.4rem;" id="withdrawSystem">
                                <input type="number" class="form-control tx-light tx-16 tx-normal" style="border: 2px solid #eae4ff;  border-radius: 0.4rem;"id="withdrawOf" value="7">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" class="tx-normal la-mob">Сумма: <span class="tx-danger">*</span></label>
                                <div id="the-basics" class="input-group tx-light tx-16 ">
                                    <input id="WithdrawSize" autocomplete="off" class="form-control tx-normal " style="border: 2px solid #eae4ff;  border-radius: 0.4rem;" placeholder="200">

                                </div>
                                <span class="nav-line-profile badge bt-com" style="margin-top:10px; background-color: #e5e9f2;color: #8392a5;">Комиссия: 0%</span>
                                <span class="nav-line-profile badge bt-com" style="margin-top:10px;     background-color: #91e19e;color: #02a32e;">Быстрый вывод включен</span>


                            </div>
                        </div>

                        

                        <div class="col-6">



                        </div>
                    </div>
                    
                    
                           	<? if ($bonusVK == 0){?>
<button id="btnwt" onclick="vknoWithdraw()" class="btn btn-primary  tx-normal btn-la-mob" style="border-color: #2576ea;    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);">Создать выплату</button>
    <?}else if($bonusVK == 1){?>
<button id="btnwt" onclick="withdraw()" class="btn btn-primary  tx-normal btn-la-mob" style="border-color: #2576ea;    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);">Создать выплату</button>
    <?}?>
                    
                    <button id="error_withdraw" style="margin-left: 7px; padding: 8px 22px; pointer-events: none; display:none" class="btn tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d "></button>
                        
                        
                        






                        
                        
                        <script>
                            
                             function withdraw() {
                        if ($('#WithdrawSize').val() == '' || $('#walletNumber').val() == '' || $('#withdrawSystem').val() == '') {
                            $('#error_withdraw').show();
                            return $('#error_withdraw').html('Заполните все поля');
                        }
                        $.ajax({
                            type: 'POST',
                            url: 'action.php',
                            beforeSend: function() {
                                $('#btnwt').addClass('disabled');
                            },
                            data: {
                                type: "withdrawuser",
                                system: $('#withdrawSystem').val(),
                                sum: $('#WithdrawSize').val(),
                                wallet: $('#walletNumber').val()
                            },
                            success: function(data) {
                                
                                $('#error_withdraw').hide();
                                $('#succes_withdraw').hide();

                                $('#btnwt').removeClass('disabled');
                                var obj = jQuery.parseJSON(data);
                                if (obj.success == "success") {
                                    $.ajax({
                                    type: 'POST',
                                    url: 'action.php',
                                    beforeSend: function () {
                                        $('#gmw a').hide();
                                        $('#gmw div').show()
                                    },
                                    data: {
                                        type: "getMoreWithdraws",
                                        of:  7
                                    },
                                    success: function (data) {
                                        $('#gmw a').show();
                                        $('#gmw div').hide();
                                        $("#wtBl").html(data);
                                    }
                                });

                                    $('#succes_withdraw').show();
                                    $('#emptyHistory').hide();
                                    var tt = $('#withdrawT').html();
                                    $('#withdrawT').html(obj.add_bd + tt);
                                    updateBalance(obj.success.balance, obj.new_balance);
                                     updateBalanceMobile(obj.success.balance, obj.new_balance);
                                }

                               else{
                                    $('#error_withdraw').show();
                                    return $('#error_withdraw').html(obj.error);
                                }

                            }
                        });
                    }


                            
                        </script>
                        
                        

                </div>

            </div>
        </div><!-- card-body -->

            </div>
            <style>
                
.list-item {
    background: #ffffff;
    border-radius: 1rem;
    margin-top: 0.5rem;
    height: 4rem;
        border-top: 0px solid #004eff00;
  transition: 200ms;
  box-shadow: 0px 0px 50px #f5f4ff;
}

.list-item:hover {
  transform: scale(0.98); /* (150% зум - Примечание: если масштаб слишком велик, он будет выходить за пределы видового экрана) */
      background: #ede9ff;
}
.tx-color-03{
        color: #bbb5d8;
}
.bonuses-title-content {
    display: flex;
    justify-content: center;
    position: relative;
margin: 15px 0;
    overflow: hidden;
}
.bonuses-title-container:first-child {
    padding-left: 20px;
}


.bonuses-title-container:last-child {
    padding-left: 10px;
    padding-right: 20px;
}

.bonuses-title-container {
    display: flex;

    z-index: 3;
}
.bonuses-title {
    position: relative;
    display: block;
    font-style: normal;
    font-weight: 700;
    font-size: 30px;
    line-height: 30px;
    text-align: center;
    text-transform: uppercase;
background: linear-gradient(45.87deg, #6f7dff 6.6%, #852fff 102.94%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.bonuses-title::before {
    height: 1px;
    width: calc(100% - 20px);
    display: block;
    position: absolute;
    top: 15px;
    right: -100%;
background: linear-gradient(270deg,#c3beff,#8237ff 49.48%,rgba(50,49,72,.2));
    content: "";
}
.bonuses-title::after {
    height: 1px;
    width: calc(100% - 20px);
    display: block;
    position: absolute;
    top: 15px;
    left: -100%;
background: linear-gradient(270deg,#c3beff,#8237ff 49.48%,rgba(50,49,72,.2));
    content: "";
}
            </style>

</div>
<div data-v-7e2626f1="" class="bonuses-title-content"><div data-v-7e2626f1="" class="bonuses-title-container"><div data-v-7e2626f1="" class="bonuses-title">
          ВЫПЛАТЫ
        </div></div></div>

            <ul class="list-unstyled mg-b-0 bd-0 bd-t table-responsive" id="wtBl" style="    overflow: hidden;">
    
    
    
    
    
    
    
    





</ul>