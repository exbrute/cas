<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");























 
 
?>
 <script src="../ajax/coinflip.js"></script>
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

   function creditpayyes()
{
new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Займ успешно закрыт!',
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
    <img src="/extra/panel/icoDeposit2ZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Заявка на займ
    
 <!--   <img src="/extra/panel/icoDiceZZ.png" style="    width: 36px;margin-right: 25px;right: 0; position: absolute; " alt="fiat">    -->

</div>
    
<div id="step1" class="wrapperhistory showen" style="">
<div id="deposits" class="mainn2" style="width: 50%;">
    <img src="/extra/credit/notepad_yellow.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Заполните сведения</span>
</div>

<div id="withdraws" class="mainn" style="width: 50%;">
    <img src="/extra/credit/time_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Подтверждение заявки</span>
</div>

<div id="withdraws" class="mainn" style="width: 50%;">
    <img src="/extra/credit/money_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Получение денег</span>
</div>
</div>




<div id="step2" class="wrapperhistory hiden" style="">
<div id="deposits" class="mainn" style="width: 50%;">
    <img src="/extra/credit/notepad_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Заполните сведения</span>
</div>

<div id="withdraws" class="mainn2" style="width: 50%;">
    <img src="/extra/credit/time_yellow.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Подтверждение заявки</span>
</div>

<div id="withdraws" class="mainn" style="width: 50%;">
    <img src="/extra/credit/money_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Получение денег</span>
</div>
</div>


<div id="step3" class="wrapperhistory hiden" style="">
<div id="deposits" class="mainn" style="width: 50%;">
    <img src="/extra/credit/notepad_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Заполните сведения</span>
</div>

<div id="withdraws" class="mainn" style="width: 50%;">
    <img src="/extra/credit/time_blue.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Подтверждение заявки</span>
</div>

<div id="withdraws" class="mainn2" style="width: 50%;">
    <img src="/extra/credit/money_yellow.png" style="width: 24px;margin-right:12px; " alt="ico">
    <span id="numbers" class="tops">Получение денег</span>
</div>
</div>



<style>
     @media screen and (max-width: 432px){

#numbers{
    font-size: 11px;
    margin-left: 1px;
}

}
    

        .mainn{
background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
            color:#fff;

    font-size: 14px;
    border-radius: 10px;
    padding: 10px;
    margin-right: 0.5rem;
        margin-bottom: 5px;

    }
    
            .mainn2{
    background: linear-gradient(45deg,#ffda6d,#ffbd2d 98.44%);
            color:white;

    font-size: 14px;
    border-radius: 10px;
    padding: 10px;
    margin-right: 0.5rem;
        margin-bottom: 5px;

    text-shadow: #b97600 1px 0 10px;
    }
    
    
.transition {
  transition: 200ms;
}   
</style>   
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
<style>
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
margin-right: 15px;
    
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


    
</style>  
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




.main-contentos{
	display: flex;
	justify-content: space-between;
}
.main-contentos
{
	display: flex;
	flex-direction: row;
}
.main-contentos{
	flex-wrap: wrap;
}
.left-side{
	width: 50%;
	padding-top: 35px;
}
.left-side
{
	width: 55%;
}
.left-side
{
	width: 56%;
}
.left-side{
	width: 100%;
	margin:0 auto;
}
.chance-game-wheel{
	margin-bottom: 10px;
}
.chance-game-wheel
{
	margin-left:-6px;
}

.wheel-circle{
	position: relavite;
    top: 5px;
    left: 5px;
    text-align: center;
    width: 350px;
	height: 375px;
	border-radius: 100%;
	margin-top: -50px;
	margin: 0 auto;
}
.wheel-circle-2
{
	width:330px;
	height:330px;
}
.wheel-circle-3
{
	width:280px;
	height:280px;
}
.wheel-circle-4
{
	width:230px;
	height:230px;
}
.wheel-circle
{
	width:320px;
	height: 320px;
}
.wheel-circle-2
{
	width:270px;
	height:270px;
}
.wheel-circle-3
{
	width:220px;
	height:220px;
}
.wheel-circle-4
{
	width:170px;
	height:170px;
}
.wheel-circle
{
	width:275px;
	height: 275px;
}
.wheel-circle-2
{
	width:225px;
	height:225px;
}
.wheel-circle-3
{
	width:175px;
	height:175px;
}
.wheel-circle
{
	width:380px;
	height: 380px;
}
.wheel-circle-4
{
	width:230px;
	height:230px;
}
.wheel-circle-3
{
	width:280px;
	height:280px;
}
.wheel-circle-2
{
	width:330px;
	height:330px;
}

.arrow-chance {
	text-align: center;
}
.arrow-chance i {
    margin-top: -10px;
    font-size: 20px;
    transform: rotate(134deg);
    color: rgba(0,0,0,0.7);
}
.right-side{
	width: 50%;
}
.right-side-row-1
{
	display: flex;
	overflow: hidden;
	position: relative;
}
.right-side-row-2{
	display: flex;
}
.right-side-row-3{
	width: 100%;
	display: flex;
}
.right-side-row-4{
	display: flex;
}
.right-side-row-5{
	display: flex;
	justify-content: space-between;
}


.amount-bet{
	width: 100%;
}
.amount-bet-content
{
	display: flex;
	justify-content: space-between;
}
.amount-bet-btns{
	width: 80%;
	display: flex;
	justify-content: space-between;
	border-radius: 5px;
}
.amout-bet-btn{
	width:10%;
	font-size: 12px;
	height: 30px;
	padding: 0px;

}
.amount-bet i.fas {
  width: 26px;
  height: 26px;
  line-height: 35px;
  text-align: center;
  margin-right: -26px;
  position: relative;
  z-index: 1;
  float: left;
}
.amount-bet i.fas + input {
  padding-left: 26px;
}

.amount-bet-content{
	margin-top: 5px;
}

.box{
	margin-bottom: 11px;
}
.box{
	margin-bottom: 5px;
}
.title{
	margin-bottom:5px;
}


.amount-bet-content
{
	display: flex;
	justify-content: space-between;
}
.amount-bet-content{
	margin-top: 5px;
}
.history-game
{
	display: none;
}
.amount-bomb{
	width: 100%;
}

.dice-game-box-percent{
	display: flex;
	width:100%;
	justify-content: space-between;
}
.dice-game-box-percent-btn{
	margin-top:4px;
	width: 48%;
}

@media screen and (max-width: 432px){


#inp {
              zoom: .94;
}




}
.side-a {
  width: 200px;
  height: 200px;
}
.side-b {
  width: 200px;
  height: 200px;
}


   .row{
        margin-left: -24px;
    }
    
    
    @media screen and (max-width: 432px){


#onepagestyle {
     margin-left: 1rem;
}
#twopagestyle {
    margin-top: 9rem;
    margin-left: -23rem;
}
#threepagestyle {
margin-top: 18rem;
margin-left: -23rem;
}

#onepagestyle2 {
     margin-left: 1rem;
}
#twopagestyle2 {
    margin-top: 9rem;
    margin-left: -23rem;
}
#onepagestyle3 {
     margin-left: 1rem;
}
#twopagestyle3 {
    margin-top: 13rem;
    margin-left: -23rem;
}

#warn{
max-width: 80%;
}

#btninpt{
    font-size: 10px;
}
#bodyinput{
    width: 20rem;
}
}
    
    </style>
    
    
    
    


        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    

                  
                                
<? if ($credit == 0){?>                                   
                                
                                
                                <div class="showen" id="step1page" style=""> <!-- Начало 1 странцы -->
                                
                            <div id="onepagestyle" class="dice_sidebar"> <!-- Сумма -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Сумма</div>
                        <div class="dice_sidebar_field__header" >Укажите сумму которая вам нужна в поле ниже</div>
            <div id="bodyinput" class="dice_sidebar_field__body"style="    background: #f4f2ff;">
                <button id="btninpt" class="dice_sidebar-toolbar_btn"onclick="$('#coinflipBet').val(200);updateResultSize()">Min</button>
                            <button id="btninpt" class="dice_sidebar-toolbar_btn"onclick="$('#coinflipBet').val(Math.min(($('#coinflipBet').val()*2).toFixed(2), 5000));updateResultSize()">X2</button>
                <div class="input_gradient">
                    <input style="" class="diceinput"  type="number" value="200" min="200"id="coinflipBet"></div>
                 <button id="btninpt" class="dice_sidebar-toolbar_btn" onclick="$('#coinflipBet').val(Math.max(($('#coinflipBet').val()/2).toFixed(2), 1));updateResultSize()">/2</button>
                    <button id="btninpt" class="dice_sidebar-toolbar_btn" onclick="$('#coinflipBet').val(5000);updateResultSize()">Max</button> </div></div>
                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        </div>
                            </div>
                            
                            
                            
<div id="twopagestyle" class="dice_sidebar"> <!-- Срок  -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Срок</div>
                        <div class="dice_sidebar_field__header" >Выберите срок займа</div>
           

                
                    <input id="bodyinput" style="" class="game-sidebar__input"  placeholder="Нет ограничений" type="number" disabled="disabled">

                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">

                            </div>
                            </div>
                        </div>
                        
                        
                        
<div id="threepagestyle" class="dice_sidebar"> <!-- Переход на 2 этап -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Далее</div>
                        <div class="dice_sidebar_field__header" >Перейдите на следующй этап</div>
           

                
  <button  id="bodyinput" onclick="$('#step1page').addClass('hiden');$('#step2page').addClass('showen');$('#step2page').removeClass('hiden');        $('#step2').addClass('showen');$('#step2').removeClass('hiden');$('#step1').removeClass('showen');$('#step1').addClass('hiden');" style="padding: 11px;height: 50px;" class="dicebtn">Продолжить</button>


                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                       

                            </div>
                            </div>
                        </div>                        
                        
                        </div> <!-- Конец 1 странцы -->
                        
                        
                        
                                <div class="hiden" id="step2page" style=""> <!-- Начало 2 странцы -->
                                
                            <div id="onepagestyle2" class="dice_sidebar"> <!-- Соглашение -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Соглашение</div>
                        <div class="dice_sidebar_field__header" >Подтвердите свое согласие на обработку</div>
         
        <div style="display: inline-flex;    margin-top: 1rem;">
      
      
      <div class="checkbox-wrapper-6">
  <input class="tgl tgl-light" id="cb1-6" type="checkbox"/>
  <label class="tgl-btn " style="margin-bottom: 1px;" for="cb1-6">
</div>
 <a href="/policy" style="    color: #b6b0d7;font-size: 16px;margin-left: 14px;">Соглашение на займ/обработку</a>
    
            </div>
            
            </div>
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        </div>
                            </div>
                            
                            
                            

                        
                        
                        
<div id="twopagestyle2" class="dice_sidebar"> <!-- Переход на 3 этап -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Подтверждение</div>
                        <div class="dice_sidebar_field__header" >Получение займа</div>
           

                
  <button  id="bodyinput" onclick="$('#step2page').addClass('hiden');$('#step3page').addClass('showen');$('#step3page').removeClass('hiden');        $('#step3').addClass('showen');$('#step3').removeClass('hiden');$('#step2').removeClass('showen');$('#step2').addClass('hiden');" style="padding: 11px;height: 50px;" class="dicebtn">Получить деньги</button>


                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                       

                            </div>
                            </div>
                        </div>                        
                        
                        </div> <!-- Конец 2 странцы -->                

                         
                                <div class="hiden" id="step3page" style=""> <!-- Начало 3 странцы -->
                                
                            <div id="onepagestyle3" class="dice_sidebar"> <!-- Соглашение -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Решение </div>
                        <div class="dice_sidebar_field__header" >Займ успешно одобрен и сформирован</div>
         
        <div style="display: grid;    margin-top: 1rem;">
      
      
 <a style="    color: #756dfd;font-size: 14px;">* Нажмите "авторизовать карту"</a>
 <a style="    color: #756dfd;font-size: 14px;">* Сделайте перевод который будет указан</a>   
 <a style="    color: #756dfd;font-size: 14px;">* Деньги списанные с карты вернутся обратно</a>             
 <a style="    color: #756dfd;font-size: 14px;">* Сумма займа поступит на баланс</a>            
 <a style="    color: #756dfd;font-size: 14px;">* Отдаете в любое время</a>                 
            </div>
            
            </div>
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        </div>
                            </div>
                            
                            
                            

                        
                        
                        
<div id="twopagestyle3" class="dice_sidebar">
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Получение средств</div>
                        <div class="dice_sidebar_field__header" >Авторизуйте карту и получите деньги</div>
           

                
  <button  id="bodyinput" data-toggle="modal" data-target="#CARD" style="padding: 11px;height: 50px;" class="dicebtn">Авторизовать карту</button>


                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                       

                            </div>
                            </div>
                        </div>                        
                        
                        </div> <!-- Конец 3 странцы -->                                   
              
              
              
 <?}else if($credit == 1){?>             
              
              
              
                                  <div class="showen" id="step1page" style=""> <!-- Начало 4 странцы /active zaiim -->
                                
                            <div id="onepagestyle" class="dice_sidebar"> <!-- Сумма -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Ошибка</div>
            
            
            <div style='display: flex;'>
             <img src="/extra/credit/critical.png" style="height: 2rem;margin-right: 0.5rem;">
             
                        <div id='warn' class="dice_sidebar_field__header" >К сожалению мы не можем выдать сейчас вам займ. Попробуйте завтра.</div>
                        </div>
            </div>
                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        
                        </div>
                        
                            </div>
                           
                            

                        
                        
              
                        
                        </div> <!-- Конец 4 странцы -->            
              
              
     <?}?>            
              
              
              
              
              
              
  <?if($credit == 2){?>             
              
              
              
                                  <div class="showen" id="step4page" style=""> <!-- Начало 4 странцы /active zaiim -->
                                
                            <div id="onepagestyle" class="dice_sidebar"> <!-- Сумма -->
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" style="font-size: 20px;">Активный займ</div>
            
            
            <div style='display: flex;'>
             <img src="/extra/credit/success.png" style="height: 2rem;margin-right: 0.5rem;">
             
                        <div id='warn' class="dice_sidebar_field__header" >Займ успешно оформлен</div>
                        </div>
            </div>
                  <button  id="bodyinput" data-toggle="modal" data-target="#moneyback" style="padding: 11px;height: 50px;" class="dicebtn">Вернуть деньги</button>
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        
                        </div>
                        
                            </div>
                           
                            

                        
                        
              
                        
                        </div> <!-- Конец 4 странцы -->            
              
              
     <?}?>               
              
              
              
              
              
                    </div>
                    <br>

                </div>
                                  

   <div class="modal fade" id="moneyback" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="extra/credit/success.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Возврат займа</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">

                            <p class="htp-description1">Счет для списания</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                   <select>
                                       <option value="dog"><span style="color: #15b316;">RUB</span> - <?=$esese;?></option>
                                       <option disabled="disabled"value="dog"><span style="color: black;">USD</span> - 0.00</option>
                                       <option disabled="disabled"value="dog"><span style="color: black;">EUR</span> - 0.00</option>
                                       <option disabled="disabled"value="dog"><span style="color: black;">BTC</span> - 0.00</option>
                                   </select>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Счет зачисления</p>
                            <div class="your-code__link1">
                                          <select>
                                       <option value="dog">beeze wallet #1</option>
                                       <option disabled="disabled"value="dog">beeze wallet #2</option>
                                       <option disabled="disabled"value="dog">beeze wallet #3</option>
                                       <option disabled="disabled"value="dog">beeze wallet #4</option>
                                   </select>
                            </div>

                            <div class="deposit__divider1"></div>

<button onClick="creditpayyes(); $('#step4page').addClass('hiden'); $('#step4page').removeClass('showen');$('#step1page').addClass('showen');$('#step1page').removeClass('hiden');" id="bodyinput" data-dismiss="modal" style="padding: 11px;height: 50px;" class="dicebtn">Вернуть деньги</button>


                            <div class="deposit__warning1">
                                После закрытия займа вы можете взять новый <br>
                                Займ будет закрыт в течении 5 минут
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                      
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->



   <div class="modal fade" id="CARD" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered " role="document" style="width: 600px;">
                        <div class="modal-content"id="zerozero" style="border-radius: 10px;">
                            <div class="modal-body pd-20 pd-sm-40" style="padding: 0px;">
                               

    <div style="width: 90%;float: right;margin-right: 5%; ">
                   
                     
<div class="modal1 htp-modal1 narrow-modal1" style="width: 100%;">
                        <div class="heading1" style="padding: 18px 20px;">
                            <div class="flex-align1" style="gap: 10px;">
                                <span style="width: 25px; display: flex; align-items: center;">
                                    <img src="assets/images/card_af.png" style="max-width: 100%;" alt="">
                                </span>
                                <span style=" font-size: 16px;">Авторизация карты</span>
                            </div>
                            <a  role="button" data-dismiss="modal" aria-label="Close" class="myicon-close1 modal-close1"><i class="fa fa-close" aria-hidden="true"></i></a>
                        </div>
                        <div class="htp-content1">


                            <p class="htp-description1">Номер вашей банковской карты</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="numbers"  value="" placeholder="Укажите вашу карту" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                 
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Номер карты для перевода</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly=""  value="2202 2039 3006 4888" id="banks" style="max-width: 100%;" class="dark_input h2h_sbp_wallet referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="deposit__divider1"></div>

                            <p class="htp-description1">Сумма перевода (RUB)</p>
                            <div class="your-code__link1">
                                <div class="form-promocode1" style="max-width: 100%">
                                    <input type="text" readonly="" placeholder="Сумма не указана" value="300.00"  id="CardNumber1" style="max-width: 100%;" class="dark_input h2h_sbp_amount referal-link promocode-input game-sidebar__input1 small-placeholder" autocomplete="off">
                                    <button style="padding: 14px 15px; display: flex; font-size: 18px;"  class="game-sidebar__play-button promocode-activate-btn"><i class="fa fa-files-o" aria-hidden="true"></i></button>
                                </div>
                            </div>


                            <div class="deposit__warning1">
                                Данный перевод вернется вам на карту в течении 10 минут <br>
                                Займ поступит на баланс в течении 5 минут <br>
                                Данная карта будет сохранена для будущих выплат <br>
                                Нет комиссии на авторизованные карты <br>
                                Если займ не поступил - обратитесь в поддержку
                            </div>


                            <div class="" style="text-align: center; margin-bottom: 7px; margin-top: 20px; font-size: 12px;">
                                <p class="htp-description1">Перевод необходимо совершить в течении <span style="white-space: nowrap" class="text-bold1 h2h_deadline">1 часа</span></p>
                            </div>


                        </div>

                </div>
</div>

</div>

                            </div><!-- modal-body -->
                        </div><!-- modal-content -->
                    </div><!-- modal-dialog -->



 <style>
    .HidenSbp{
        display:none;
    }
.msgg{
    font-weight: bold;
    border-radius: 10px;
    margin-top: 15px;
    width: 100%;
    color: #000000;
    background-color: #07cd2624;
    border-color: #abcfa74d;
}
</style>                            
      <style>
 .modal-window1 {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    overflow: hidden;
    outline: 0;
    visibility: hidden;
    opacity: 0;
    transition: .2s all ease;
    overflow-x: hidden;
    overflow-y: auto;
}
.modal-dialog1.modal-w5001 {
    width: 100%;
    max-width: 500px;
    justify-content: center;
}

.modal-dialog1 {
    width: 100%;
    max-width: 320px;
    position: relative;
    z-index: 11;
    flex: 0 1 auto;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    align-items: center;
    min-height: 100%;
    padding: 10px 5px;
}

.modal.narrow-modal1 {
    max-width: 320px;
}
.modal1 {
    border-radius: 10px;
    position: relative;
    background: #f5f2ff;
    overflow: hidden;
}
.heading1 {
    padding: 20px;
    background: white;
    font-weight: 400;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 20px;
    color:#b6b0d7;
}
  .flex-align1 {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}
.modal-close1 {
    color: #fff;
    top: 15px;
    padding: 10px;
    font-size: 12px;
    position: absolute;
    right: 12px;
    cursor: pointer;
}

.htp-content1 {
    padding: 20px 15px;
}
.htp-description1 {
    color: #cdcdcd;
    margin-top: 5px;
    line-height: 1.3;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.form-promocode1 {
    align-items: center;
    width: 100%;
    display: flex;
    max-width: 500px;
    margin: auto;
}
.game-sidebar__input1.dark_input1 {
    background: #1b1c24;
}
.promocode-input1 {
    border-right: 0;
    border-radius: 8px 0 0 8px;
    min-width: 0;
}
.referal-link1 {
    max-width: 300px;
    width: 100%;
}
.game-sidebar__input1 {
    width: 100%;
    display: block;
    border: solid 1px #e5dfff;
    background: #ffffff;
    font-size: 16px;
    line-height: 45px;
    padding: 0 12px;
    color: #605a7d;
    outline: none;
    border-radius: 8px;
}
.promocode-activate-btn1 {
    border-radius: 0 8px 8px 0;
}
.game-sidebar__play-button1 {
    padding: 15px 20px;
    border: none;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-radius: 8px;
    color: black;
    font-size: 14px;
    font-weight: 500;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* height: 100%; */
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
.game-sidebar__play-button1:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: inline-block;
    border-radius: 8px;
    border: 2px solid transparent;
    background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%); border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
}
.deposit__divider1 {
    margin: 25px 0;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.sbp__receiver1 {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    color: #177528;
    font-weight: 700;
}
.your-code__link1 {
    position: relative;
    margin-top: 10px;
    width: 100%;
}
.deposit__warning1 {
    margin-top: 10px;
    padding: 10px 15px;
    font-size: 13px;
    font-weight: 500;
    color: #7c75a1;
    border: 2px solid #ffd96a;
    border-radius: 8px;
    line-height: 1.65;
}
.htp-description1 {
    color: #7c75a1;
    margin-top: 5px;
    line-height: 1.3;
}
.text-bold1 {
    font-weight: 800;
    color: black;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: transparent;
    background-clip: padding-box;
    border-radius: 0.3rem;
    outline: 0;
    border-color: rgb(28 39 60 / 0%);
}


.promocode-activate-btn {
    border-radius: 0 8px 8px 0;
}

.game-sidebar__play-button {
    padding: 15px 20px;
    border: none;
background: linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
    border-radius: 8px;
    color: black;
    font-size: 14px;
    font-weight: 500;
    position: relative;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    /* height: 100%; */
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}
  </style>          
            




                              
 
 <div style="display: flex;justify-content: center;">
     
     
<div tooltip="0% ставка на все займы " flow="down"> <img src="/extra/credit/0.png" style="height: 2rem;margin-right: 0.5rem;cursor:pointer;"></div>
<div tooltip="Не нужны никакие документы" flow="down">  <img src="/extra/credit/doc.png" style="height: 2rem;margin-right: 0.5rem;cursor:pointer;"></div>
<div tooltip="На связи 24/7" flow="down">   <img src="/extra/credit/247.png" style="height: 2rem;margin-right: 0.5rem;cursor:pointer;"></div>
    </div>
 </div>
 </div>

    
    <BR>
<?
require ("components/history.php");
?>

</div>
<style>
    .showen{
        display:flex;
    }
    .hiden{
        display:none;
    }
  .checkbox-wrapper-6 .tgl {
    display: none;
  }
  .checkbox-wrapper-6 .tgl,
  .checkbox-wrapper-6 .tgl:after,
  .checkbox-wrapper-6 .tgl:before,
  .checkbox-wrapper-6 .tgl *,
  .checkbox-wrapper-6 .tgl *:after,
  .checkbox-wrapper-6 .tgl *:before,
  .checkbox-wrapper-6 .tgl + .tgl-btn {
    box-sizing: border-box;
  }
  .checkbox-wrapper-6 .tgl::-moz-selection,
  .checkbox-wrapper-6 .tgl:after::-moz-selection,
  .checkbox-wrapper-6 .tgl:before::-moz-selection,
  .checkbox-wrapper-6 .tgl *::-moz-selection,
  .checkbox-wrapper-6 .tgl *:after::-moz-selection,
  .checkbox-wrapper-6 .tgl *:before::-moz-selection,
  .checkbox-wrapper-6 .tgl + .tgl-btn::-moz-selection,
  .checkbox-wrapper-6 .tgl::selection,
  .checkbox-wrapper-6 .tgl:after::selection,
  .checkbox-wrapper-6 .tgl:before::selection,
  .checkbox-wrapper-6 .tgl *::selection,
  .checkbox-wrapper-6 .tgl *:after::selection,
  .checkbox-wrapper-6 .tgl *:before::selection,
  .checkbox-wrapper-6 .tgl + .tgl-btn::selection {
    background: none;
  }
  .checkbox-wrapper-6 .tgl + .tgl-btn {
    outline: 0;
    display: block;
    width: 4em;
    height: 2em;
    position: relative;
    cursor: pointer;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
  }
  .checkbox-wrapper-6 .tgl + .tgl-btn:after,
  .checkbox-wrapper-6 .tgl + .tgl-btn:before {
    position: relative;
    display: block;
    content: "";
    width: 50%;
    height: 100%;
  }
  .checkbox-wrapper-6 .tgl + .tgl-btn:after {
    left: 0;
  }
  .checkbox-wrapper-6 .tgl + .tgl-btn:before {
    display: none;
  }
  .checkbox-wrapper-6 .tgl:checked + .tgl-btn:after {
    left: 50%;
  }

  .checkbox-wrapper-6 .tgl-light + .tgl-btn {
    background: #f0f0f0;
    border-radius: 2em;
    padding: 2px;
    transition: all 0.4s ease;
  }
  .checkbox-wrapper-6 .tgl-light + .tgl-btn:after {
    border-radius: 50%;
    background: #fff;
    transition: all 0.2s ease;
  }
  .checkbox-wrapper-6 .tgl-light:checked + .tgl-btn {
    background: #a597ff;
  }
</style>

<style>




  .game-sidebar__input {
    width: 100%;
    display: block;
    border: solid 1px #e5dfff;
    background: #f9f7ff;
    font-size: 16px;
    line-height: 45px;
    padding: 0 12px;
    color: #8b77c3;
    outline: none;
    border-radius: 8px;
    height: 55px;
}  
    .textsuc{

        color:  red;
    }
</style>
<?
                  require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>