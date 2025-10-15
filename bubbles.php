<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");


?>
 <script>
     function vipcheck()
{
new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Game verified',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}



   function authplease()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Авторизуйтесь!',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
 </script>
<script>


function bots() {
if(navigator.onLine) {
 $.ajax({
            url: 'bots.php',
            timeout: 10000,
            success: function(data) {
				
				
            },
            error: function() {
            }
        });
		} else {
}
		}
		
		setInterval('bots()',1000);
var online = "1";
	 function historys() {
	     online = window.online
if(online == "1") {
 $.ajax({
            url: 'core.php',
            timeout: 10000,
            success: function(data) {
				var obj = jQuery.parseJSON(data);
                $("#response").prepend(obj.game);
				$('#response').children().slice(15).remove();
				
				 $("#myresponse").prepend(obj.my_game);
				$('#myresponse').children().slice(15).remove();
				$("#oe").html(obj.online);
            },
            error: function() {
            }
        });
		} 
		}
		
		setInterval('historys()',100);
</script>
<div class="col7 col-xl-10 mg-t-10">
    
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
    <img src="/extra/panel/icoBubblesZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Bubbles
    
 <!--   <img src="/extra/panel/icoDiceZZ.png" style="    width: 36px;margin-right: 25px;right: 0; position: absolute; " alt="fiat">    -->
    <div tooltip="Фиатные деньги: 3% | RTP: 97.6%" flow="up" class="fiatbtn visual">?</div>
</div>
    
   
    <div class="cardh2">

                                               	 <div class="btn-group ">
           
           
                                               	

<style>
.visual {
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -o-transition: all 1s ease;
   -ms-transition: all 1s ease;
   transition: all 1s ease;
}

.visual:hover {
   -webkit-filter: brightness(950%);
   filter: brightness(95%);
}
.fiatbtn {
    align-items: center;
    background: linear-gradient(90deg,#6256e5 .06%,#6a5df6 98.49%);
    border-radius: 4px;
    color: #fff;
    display: flex;
 position: absolute;
 right: 0;
    font-weight: 600;
    height: 40px;
    justify-content: center;
    line-height: 17px;
    margin-right: 25px;
    text-align: center;
    margin-top: -37px;
    width: 36px;
    cursor:pointer;
}
.fiatbtn:hover {
background: linear-gradient(90deg,#5f54da .06%,#6559e7 98.49%);
}




.cardh2 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color:#fff;
    background-clip: border-box;
    border: 1px solid rgba(72,94,144,.16);
    border-radius: 1.25rem;
        background-image: url(/extra/bgcard3.png);
}

.col7 {
flex: 0 0 100%;
max-width: 100%;
}
</style>
<style>
.carddd{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #2f3140;
    background-clip: border-box;
    /* border: 1px solid rgba(72,94,144,.16); */
    border-radius: 1.25rem;
}


.dicebtn {
   color: black;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-color: #FFDB6F;
    border-radius: 8px;
    cursor: pointer;
    display: block;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .03em;
    margin-top: 10px;
    padding: 15px;
    width: 100%;
}

.dicebtn:hover{
background: linear-gradient(45deg,#FFBB29 ,#FFDB6F 98.44%);

}

.cardh {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(72,94,144,.16);
    border-radius: 1.25rem;
}
</style>

<style>
.bgbtn {
    background-color: #f0f4ff;
}
.btnnew2{
color: #fff;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
}

.diceosn{
color: #c5c5c5;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
font-weight: bold;


}

.diceact{
color: #fff;
    background: linear-gradient(45deg, #0586f9 0%, #3094e7 100%);
    border-color: #eaeaea;
font-weight: bold;

}

.btnnew2:Hover{
color: #fff;
background: linear-gradient(45deg, #fcfcfc 0%, #fafafa 100%);
    border-color: #eaeaea;
}

</style>
<style>

.active2{
    
    background-color:  #e5f2ff;
    border-color: #edf6ff;

}

.tablebtn{
    
font-size: 11px;
    width: 100px;
    border-radius: 1.2rem;
    border-color: #e6e6e6;
    height: 2.5rem;

        text-align: center;


}

.editnew {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.9375rem + 2px);
    padding: 0.46875rem 0.625rem;
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    color: #596882;
    background-color: #2a2c38;
    background-clip: padding-box;
    /* border: 1px solid #c0ccda; */
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    
    margin-bottom: 5%;
    
    
}


.btnvibor {
    align-items: center;
background: #262832;
    color: #8392a5;
    font-size: 12px;
    font-weight: 600;

    justify-content: center;
    line-height: 17px;
    text-align: center;
}
.btnvibor:hover{
    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);
    color: white;
}



.divider-text2 {
    position: relative;
    display: flex;
    align-items: center;
    text-transform: uppercase;
    color: #838d9b;
    font-size: 10px;
    font-weight: bold;
    font-family: -apple-system,BlinkMacSystemFont,inter ui,Roboto,sans-serif;
    letter-spacing: .5px;
    margin: 15px 0;
}



 @media screen and (max-width: 432px){


#buttonscenterz {
          right: -84px;
}

#dicebuttons {
           width: 320px;
               min-width: 300px;
               white-space: nowrap;
}


}

</style>

        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    <div class="pd-dc">
                        
                     
                        
                        <div class="row row-sm mg-t-10 ">
                            <div class="col-6 col-xs-6 col-md-6">
                                
<script>
      function updateResultSize() {
        let percent = Number($('#dicePercent').val())
        let bet = Number($('#diceBet').val())
        $('#diceResult').html(((100 / percent) * bet).toFixed(2));
        $('#betProfit').html(((100 / percent) * bet).toFixed(2));
        $('#minButton').html(Math.floor((percent / 100) * 999999));
        $('#maxButton').html(999999 - Math.floor((percent / 100) * 999999));
      }

      function bubble() {
        $.ajax({
          type: 'POST',
          url: 'bubblesfunc.php',
          data: {
            type: 'bubble',
            per: $('#betInputBubble').val(),
            sum: $('#betBubbles').val(),
          },
          success: function(data) {
            var obj = jQuery.parseJSON(data);
            if (obj.success == "success") {
              $('#userBalance').text((obj.new_balance));
              $('.infoButton').show().addClass('winColor').removeClass('errorColor')
              $('.goal__multiplier').text(obj.number)
              $('#hash').fadeOut('slow', function() {
                $('#hash').fadeIn('slow', function() {});
              });
              $('#hash').html(obj.hash);
            } else {
              $('#userBalance').text((obj.new_balance));
              $('.infoButton').show().addClass('errorColor').removeClass('winColor')
              $('.goal__multiplier').text(obj.number)
              $('#hash').fadeOut('slow', function() {
                $('#hash').fadeIn('slow', function() {});
              });
              $('#hash').html(obj.hash);
            }
          }
        });
      }

      function validateBetSizeBubble(inp) {
        if (inp.value > 5000) inp.value = 5000;
        if (inp.value < 1) inp.value = 1;
        inp.value = inp.value.replace(/[,]/g, '.').replace(/[^\d,.]*/g, '').replace(/([,.])[,.]+/g, '$1').replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
      }

      function validatePurBubble(inp) {
        if (inp.value > 10000) inp.value = 10000;
        if (inp.value < 1.10) inp.value = 1.10;
        inp.value = inp.value.replace(/[,]/g, '.').replace(/[^\d,.]*/g, '').replace(/([,.])[,.]+/g, '$1').replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
      }

      function validateСhanceBubble(inp) {
        if (inp.value > 80) inp.value = 80;
        if (inp.value < 0.01) inp.value = 0.01;
        inp.value = inp.value.replace(/[,]/g, '.').replace(/[^\d,.]*/g, '').replace(/([,.])[,.]+/g, '$1').replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');
      }

      function calcBubbles(set) {
        if (set == 1) {
          var coeff = (100 / $("#chanceInputBubble").val()) * 0.95;
          var chance = (100 / $("#betInputBubble").val() * 0.95);
          $("#chanceInputBubble").val(parseFloat(chance).toFixed(2));
        } else {
          var coeff = (100 / $("#chanceInputBubble").val()) * 0.95;
          var chance = (100 / coeff) * 0.95;
          $("#betInputBubble").val(parseFloat(coeff));
        }
      }

      function makeFloat(inp) {
        inp.value = parseFloat(inp.value).toFixed(2);
      }



    </script>

                            <div id="dicebuttons" class="dice_sidebar">
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" >Сумма</div>
            <div class="dice_sidebar_field__body"style="    background: #f4f2ff;">
                <button class="dice_sidebar-toolbar_btn"onclick="$('#betBubbles').val(1)" style="border-top-right-radius: 0; padding: 0;">Min</button>
                <button class="dice_sidebar-toolbar_btn" onclick="var x = ($('#betBubbles').val()*2);$('#betBubbles').val(parseFloat(x.toFixed(2)));">X2</button>
                <div class="input_gradient">
                    <input class="diceinput" value="1"type="number" id="betBubbles" onkeyup="validateBetSizeBubble(this);"><span></span></div>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#betBubbles').val(Math.max(($('#betBubbles').val()/2).toFixed(2), 0.01));">/2</button>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#betBubbles').val(Number($('#userBalance').text()));updateResultSize()">Max</button></div></div>
                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        <div class="dice_sidebar_field__header">Цель</div>
                        <div class="dice_sidebar_field__body" style="    background: #f4f2ff;">
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#betInputBubble').val(1.5);calcBubbles(1);">X1.5</button>
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#betInputBubble').val(2);calcBubbles(1);">X2</button>
                            <div class="input_gradient">
                                <input class="diceinput" value="2" onchange="makeFloat(this);" onkeyup="validatePurBubble(this);calcBubbles(1);" id="betInputBubble"><span></span></div>
                                <button class="dice_sidebar-toolbar_btn" onclick="$('#betInputBubble').val(5);calcBubbles(1);">X5</button>
                                <button class="dice_sidebar-toolbar_btn"onclick="$('#betInputBubble').val(10);calcBubbles(1);">X10</button></div></div>
                              
                     <div class="dice_sidebar_field dice_sidebar-toolbar">
                        <div class="dice_sidebar_field__header">Шанс</div>
                        <div class="dice_sidebar_field__body" style="    background: #f4f2ff;">
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#chanceInputBubble').val(25);calcBubbles(2)">25%</button>
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#chanceInputBubble').val(50);calcBubbles(2)">50%</button>
                            <div class="input_gradient">
                                <input class="diceinput" value="47.50" id="chanceInputBubble" onchange="makeFloat(this);" onkeyup="validateСhanceBubble(this);calcBubbles(2)"><span></span></div>
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#chanceInputBubble').val(75);calcBubbles(2)">75%</button>
                                <button class="dice_sidebar-toolbar_btn"onclick="$('#chanceInputBubble').val(90);calcBubbles(2)">90%</button></div></div>                             
                                
                                <div class="dice_sidebar-footer">
                                 <br>
                                 
                                 
                                  <div class="dice_sidebar-btns"href="#modalVerify" data-toggle="modal"  style="   FONT-FAMILY: 'GILROY-BOLD';color:#b6b0d7"><a class="bt bt-light" >Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg>
                                </a></div>
                                   <a class="bt bt-light onmob" >Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg></a>
                                
                                 
                               
         
         
                                    </div></div>
                  
                  
                  
                  
                  
                  
                  
                  
              
   

<style>
.winColor {
    background: linear-gradient(to right, rgb(12, 191, 136), rgb(18, 202, 86)) 0% 0% repeat scroll rgba(0, 0, 0, 0);
    background-color: #3bbc73;
    color: #f4fcfd;
}
.winColor:hover{
    color:white;
}
.errorColor {
    background-color: #d54d5b;
    background: linear-gradient(to left, #de4658, #ff5b6f) !important;
    color: #f4fcfd;
}
.errorColor:hover{
    color:white;
}
button{
    FONT-FAMILY: 'GILROY-BOLD';
}
div{
    FONT-FAMILY: 'GILROY-BOLD';
}
     .dice_sidebar-btns {
    display: grid;
    gap: var(--padding);
}
.dice_sidebar-btns:hover{
    opacity:0.9;
}
.bt {
    align-items: center;
    background: transparent;
    border: 0;
    border-radius: 4px;
    color: inherit;
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: inherit;
    gap: 4px;
    justify-content: center;
    line-height: 1.2;
    outline: none;
    padding: 0;
    transition: .3s;
}
.bt-light {
background:#f4f2ff;
    color: #78819d;
        border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
}


    .diceinput {
        border: none;
    border-radius: 4px;
    position: relative;
    width: 100%;
    z-index: 1;
background: #e7e2f9;
color: #312c48;
    text-align: center;
    FONT-FAMILY: 'GILROY-BOLD';
    font-size:16px;
}
    .dice_sidebar_field__body {
    background: #f4f2ff;
}
.dice_sidebar {
    border-right: 1px solid #282d38;
}

.dice_sidebar {
    border-right: 1px solid var(--primary-100);
    display: flex;
    flex-direction: column;
    gap: var(--padding);
    min-width: 350px;
    padding: var(--padding);
    width: 350px;
}

.dice_sidebar_field {
    font-size: 14px;
}

.dice .input_gradient {
    flex-grow: 1;
    position: relative;
}
.dice_sidebar-btns {
    display: grid;
    gap: var(--padding);
}

.dice_sidebar-footer {
    margin-top: auto;
}
.dice_sidebar-hash {
    color: var(--primary-300);
    display: flex;
    font-size: 12px;
    font-weight: 500;
    gap: 4px;
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
}



 .dice_sidebar_field__body input {
    height: 40px;
}

.dice_sidebar-toolbar_btn {
    background: linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%);
    border-radius: 4px;
    color: #fff;
    font-size: 15px;
    font-weight: 500;
    min-width: 44px;
    width: 44px;
}
.dice_sidebar_field__body {
    background: #3a3f4e;
}

.dice_sidebar_field__body {
    background: var(--primary-100);
    border-radius: 4px;
    display: flex;
    gap: 6px;
    justify-content: space-between;
    padding: 8px;
}
.dice_sidebar_field__header {
    color: #78819d;
}

.dice_sidebar_field__header {
    align-items: center;
    color: #b6b0d7;
    display: flex;
    font-weight: 500;
    justify-content: space-between;
}
.dice_sidebar_field__header {
    gap: 12px;
    margin-bottom: 8px;
}
 .dice_sidebar-header {
    color: #f2f0ff;
}

.dice_sidebar-header {
    align-items: center;
    display: flex;
    font-weight: 600;
    gap: 8px;
}
  


.dice_sidebar-footer .bt {
    height: 42px;
}
.onmob {
    display: none;
}
.dice_sidebar-hash span {
    display: block;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.transition {
  transition: 200ms;
}
    
</style>    

                            </div>
                            
                        </div>

                            
                    </div>
                    <br>

                </div>
                        
                <div id="buttonscenterz" class="col-lg-6 " style="margin-left: -84px;">
                    <div class="col-lg-12 but-dice">
                        
                        <h4 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 justify-content-center d-none d-sm-flex " style="color: #cfd5f1;" id="">Bubbles</h4>
           
                       
                         <p class="dice_sidebar-hash" style="justify-content: center;  color:#8392a5; FONT-FAMILY: 'GILROY-BOLD';"> HASH: <span id="hash">Начните игру</span></p>
                       
                        <div class="row row-sm">
                       
                            <? if($sid){?>
                            <div class="form-group" style="width: 100%;">
                         
                                <button id="bubbles_start" onclick="bubble()" style="padding: 11px;" class="dicebtn ny">Создать игру</button>
                            </div>

                            
                           <? }else{?>  

                            <div class="form-group"style="width: 100%;">

                                <button onclick="authplease();" id="" style="padding: 11px;" class="dicebtn">Создать игру</button>
                            </div>


<? }?> 
               <div class="btn btn-block infoButton flex" style="display: none">
                        <span class="goal__multiplier"></span></div>             
                        </div>
                    </div>
                    <div class="form-group col-md-12 but-dice ht-30">
<center><div class="spinner-border" id="betLoad" role="status" style="color: #7a86a1;
    border: .1em solid currentColor;
    border-right-color: transparent;display:none">
                          <span class="sr-only">Loading...</span>
                        </div></center>




<div id="error_bet" class="bt2 dice-game_result__lose " style="display:none;">

<span style="margin-left: 5%">   </span>

</div>

<div id="succes_bet" class="bt2 dice-game_result__win" style="display:none;">
<span style="margin-left: 5%">   </span>

</div>


    <style>
   
  
  .dice-game_result__win {
    background: linear-gradient(0deg,#72d370,#72d370),linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%)!important;
    color: #fff!important;
}
    .dice-game_result__lose {
  background: linear-gradient(0deg,#ff3030,#ff3030),linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%)!important;
    color: #fff!important;
}
  .bt2 {
    font-weight: 600;
    gap: 8px;
    height: 42px;
}
.bt2 {
    align-items: center;
    background: transparent;
    border: 0;
    border-radius: 4px;
    color: inherit;
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: 16;
    gap: 4px;
    justify-content: center;
    line-height: 1.2;
    outline: none;
    padding: 0;
    transition: .3s;
}
  
    </style>
    <style>
    
    .errbet {
    display: flex;
    width: 100%;
    height: 3.25rem;
    font-size: 16px;
    font-weight: bold;
    line-height: 3.5;
    color: #f24a50;
    background-color: #542e38;
    padding: 5px 15px;
    border-radius: 0.75rem;
 align-items: center;
 justify-content: center;
}
.waitbet {
    display: flex;
    width: 100%;
    height: 3.25rem;
    font-size: 16px;
    font-weight: bold;
    line-height: 3.5;
    color: #878993;
    background-color: #272933;
    padding: 5px 15px;
    border-radius: 0.75rem;
    align-items: center;
    justify-content: center;
}

    .succbet {
    display: flex;
    width: 100%;
    height: 3.25rem;
    font-size: 16px;
    font-weight: bold;
    line-height: 3.5;
color: #59d056;
    background-color: #2e5436;
    padding: 5px 15px;
    border-radius: 0.75rem;
 align-items: center;
 justify-content: center;
}

    </style>

                 
                    </div>
                </div>
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->
    


                             <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content" style="border-radius: 20px;">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel18">Как играть в Dice?</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   Для начала игры укажите сумму и процент выигрыша. Далее попробуйте угадать, нажав на одну из кнопок больше или меньше, промежуток в котором выпадет победное число. Если число выпало в выбранном промежутке, то сумма умножается на коэффициент и возвращается на основной баланс, если же не угадали, то ставка сгорает.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">ОК</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>


    
    <BR>
<?
require ("components/history.php");
?>

</div>
<style>
    
    .textsuc{

        color:  red;
    }
</style>
<?
                  require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>