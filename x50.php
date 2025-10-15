<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");


?>
 <script src="../ajax/func.js"></script>

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
    <img src="/extra/panel/icox50ZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    x50
    
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


#dnoneweel{
    display:none;
}

}

    </style>
    
    
    
    




        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    

                    <div class="pd-dc">
                        <h5 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 d-flex justify-content-center d-md-none" id="diceResultMobile"style="color: #cfd5f1;"></h5>
                        <p class="tx-13  tx-semibold tx-spacing-0 tx-color-03 d-flex justify-content-center tx-thin d-md-none"></p>
                        <div class="row row-sm mg-t-10 ">
                            <div class="col-6 col-xs-6 col-md-6">
                                
                            <div id="dicebuttons" class="dice_sidebar">
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" >Сумма</div>
            <div class="dice_sidebar_field__body"style="    background: #f4f2ff;">
                <button class="dice_sidebar-toolbar_btn"onclick="$('#amountBetInputWheelGame').val(1);updateResultSize()">Min</button>
                            <button class="dice_sidebar-toolbar_btn"onclick="$('#amountBetInputWheelGame').val(Math.min(($('#amountBetInputWheelGame').val()*2).toFixed(2), 1000000));updateResultSize()">X2</button>
                <div class="input_gradient">
                    <input style="" class="diceinput" type="number" value="<?=$min_bet?>" id="amountBetInputWheelGame" onkeyup="chanceGameCalculate()" onkeydown="chanceGameCalculate()"></div>
                 <button class="dice_sidebar-toolbar_btn" onclick="$('#amountBetInputWheelGame').val(Math.max(($('#amountBetInputWheelGame').val()/2).toFixed(2), 1));updateResultSize()">/2</button>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#userBalance').attr('myBalance');$('#amountBetInputWheelGame').val($('#userBalance').attr('myBalance'));updateResultSize();">Max</button> </div></div>
                
                    <div class="dice_sidebar_field dice_sidebar-toolbar">
                        <br>
                        <div class="dice_sidebar_field__header"  id="historyGameContentWheelGame">Нажмите на цвет, который по вашему выпадет</div>
                        


                                                <div class="dice-game-box-percent">
                                                <button type="button" style="    background: linear-gradient(90deg,#272d3c 9.84%,#454545 96.11%);color: #fff;" class="btn btn-wheel-black dice-game-box-percent-btn" onclick="startWheelGame('2')">x2</button>
                                                <button type="button"  style="color: #fff;background: linear-gradient(90deg,#e02e2e,#ff4b4d);" class="btn btn-danger btn-wheel-red dice-game-box-percent-btn" onclick="startWheelGame('3')">x3</button>
                                                </div><div class="dice-game-box-percent">
                                                <button type="button" class="btn btn-wheel-blue dice-game-box-percent-btn" onclick="startWheelGame('5')" style="background: linear-gradient(90deg,#1e54e1 9.84%,#3079f2 96.11%);color: #fff;">x5</button>
                                                <button type="button" class="btn btn-wheel-yellow dice-game-box-percent-btn" onclick="startWheelGame('50')" style="  background: linear-gradient(90deg,#f4a202,#fac257);color: #fff;border: 0;">x50</button>
                                                </div>
                                   
                        
                        
                        </div>
                              
                              
                                
                                <div class="dice_sidebar-footer">
                                 <br>
                                    <p class="dice_sidebar-hash" style="  color:#8392a5; FONT-FAMILY: 'GILROY-BOLD';"> HASH: <span id="hashBet">Засекречен</span></p>
                                 
                                  <div class="dice_sidebar-btns" href="#modalVerify" data-toggle="modal" style="   FONT-FAMILY: 'GILROY-BOLD';color:#b6b0d7;"><a class="bt bt-light">Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg>
                                </a></div>
                                   <a class="bt bt-light onmob" >Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg></a>
                                
                                 
                               
                                    </div></div>
 

                            </div>
                            
                        </div>

                            
                    </div>
                    <br>

                </div>
                                  
<div class="tab-pane fad" id="newdouble">
                    <div id="inp" class="main-contentos">
                        <div class="left-side" style="padding-top: 0 !important;">
                            <div class="chance-game-wheel">
                                <div id="activeBorder" class="wheel-circle">
                                    <img id="x50" src="x50_2.svg" style="position: relative; margin-top: 30px;transform: rotate(183deg);">
                                    <div id="wheelCircle" class="wheel-circle">
                                    </div>
                                </div>
                                
                                
                                
                                <div id="dnoneweel" class="wheel-circle" style="position: absolute;margin-left: 34rem; margin-top: 1rem;filter: blur(20px);"> 
                                    <img id="" src="x50_2.svg" style="position: relative; margin-top: 30px;transform: rotate(183deg);">
                                    
                                </div>
                                
                                
                                <div class="arrow-chance"> <i class="fas fa-location-arrow" id="chanceArrow"></i> </div>
                            </div>
                        </div>
              </div>
                        </div>
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->                             


    
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