<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");


?>

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
    <img src="/extra/panel/icoWheelZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Wheel
    
        <div tooltip="Фиатные деньги: 3% | RTP: 97.6%" flow="up" class="fiatbtn visual">?</div>

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
</style>
</div>
    
    
    <div class="cardh2">
        <div class="card-header pd-y-20  align-items-center justify-content-between d-none d-sm-block"style="border-color: #fff">
            
                                               	 <div class="btn-group ">

           
            </div>
                                               	

<style>
.cardh2 {
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


.dicebtn{
    background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%);
    border-radius: 3px;
    box-shadow: 0 8px 15px #5346ad;
    color: #dfeefd;

    cursor: pointer;
margin: 5px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .03em;
    margin-top: 10px;

    width: 90%;
}

.dicebtn:hover{
background: linear-gradient(45deg,#7e6afc ,#5a53f1 98.44%);
    color: #dfeefd;
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
    background: linear-gradient(45deg,#2858dd,#29abe2 98.44%);
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





.cut-wheel {
    height: 300px;
    overflow: hidden;
}
.x50-history {
    display: flex;
    font-size: 28px;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0%;
    position: absolute;
}

.line-x50 {
    width: 4px;
    margin: 0 2px;
    cursor: pointer;
    border-radius: 2px;
}
.x2-color {
    background: #000;
    height: 12px;
}
.x5-color {
    background: #d83c33;
    height: 24px;
}
.x3-color {
    background: #da9a00;
    height: 18px;
}
.x50-arrow {
    width: 28px;
    height: 35px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    top: 100px;
    position: absolute;
}
.x50-status {
    font-size: 18px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    bottom: 50%;
    position: absolute;
}
.col-md-12 {
    flex: 0 0 auto;
    width: 100%;
}

.buttons-control {
    flex-wrap: nowrap;
    display: flex;
    align-items: center;
    width: 100%;
    border-radius: 0 0 5px 5px;
    overflow: hidden;
}

.form-control2 {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.9375rem + 2px);
    padding: 0.46875rem 0.625rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fff;
    background-color: #323546;
    background-clip: padding-box;
    border: 1px solid #7f8ea1;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

</style>



        </div>
        <div class="card-body " style="padding-bottom: 30px;    margin-top: -5rem;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
<style>
    #square1 {

  animation: spin 15s ease ;
    animation-name: square1;

        
    }
 
@keyframes square1 {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}



     @media screen and (max-width: 432px){


#centeritems {
 max-width: 100%;
}

#hidehistory {
display: none;
}

#kolesocenter {
margin-left: -23rem;
}

#dicebuttons {
           width: 320px;
               min-width: 300px;
               white-space: nowrap;
}
#stavkibtn {
display: block;

margin-left: -602px;
    min-width: 1503px;    
    
}

}
</style>               
                    
                   
<div id="centeritems" class="card-body p-lg-15" style="width: 200%;">
					  
                      <center style="position: relative;">
                        <div class="wheel" style="transform:rotate(180deg)">
                          <div class="wheel-cut" style="position:relative">
                            <div id="kolesocenter" class="cut-wheel">
                          <!-- <img src="x50.svg" class="x50" width="400" style="transition: all 10s cubic-bezier(0.4, 0.1, 0, 1) 0s; transform: rotate(3deg);">-->
                          
                          <?
                          include 'koleso.php';
                          
                          ?>
                          
                            </div>
                            
                           
     
                          <!--
                            <div class="x50-history">
            
                            <div class="line-x50 x2-color" idroll="1372246" onclick="verifyX50(1372246)"></div>
                            <div class="line-x50 x3-color" idroll="1372247" onclick="verifyX50(1372247)"></div>
                            <div class="line-x50 x2-color" idroll="1372248" onclick="verifyX50(1372248)"></div>
                            <div class="line-x50 x2-color" idroll="1372249" onclick="verifyX50(1372249)"></div>
                            <div class="line-x50 x3-color" idroll="1372250" onclick="verifyX50(1372250)"></div>
                            <div class="line-x50 x5-color" idroll="1372251" onclick="verifyX50(1372251)"></div>
                            <div class="line-x50 x2-color" idroll="1372252" onclick="verifyX50(1372252)"></div>
                            <div class="line-x50 x2-color" idroll="1372253" onclick="verifyX50(1372253)"></div>
                            <div class="line-x50 x2-color" idroll="1372254" onclick="verifyX50(1372254)"></div>
                            <div class="line-x50 x2-color" idroll="1372255" onclick="verifyX50(1372255)"></div>
                            <div class="line-x50 x2-color" idroll="1372256" onclick="verifyX50(1372256)"></div>
                            <div class="line-x50 x2-color" idroll="1372257" onclick="verifyX50(1372257)"></div>
                            <div class="line-x50 x5-color" idroll="1372258" onclick="verifyX50(1372258)"></div>
                            <div class="line-x50 x5-color" idroll="1372259" onclick="verifyX50(1372259)"></div>
                            <div class="line-x50 x2-color" idroll="1372260" onclick="verifyX50(1372260)"></div>
                            <div class="line-x50 x5-color" idroll="1372261" onclick="verifyX50(1372261)"></div>
                            <div class="line-x50 x2-color" idroll="1372262" onclick="verifyX50(1372262)"></div>
                            <div class="line-x50 x2-color" idroll="1372263" onclick="verifyX50(1372263)"></div>
                            <div class="line-x50 x3-color" idroll="1372264" onclick="verifyX50(1372264)"></div>
                            <div class="line-x50 x5-color" idroll="1372265" onclick="verifyX50(1372265)"></div>
                            </div>
                            -->
                            

             
 <style>
 .hbottom{
     margin-top:-10%;
 }
.x2 {
    background: linear-gradient(90deg,#1e54e1 9.84%,#3079f2 96.11%);
}
.x3 {
background: linear-gradient(90deg,#f4a202,#fac257);
}
.x10 {
    background: linear-gradient(90deg,#01a155 4.51%,#12b969);
}
.x15 {
background: linear-gradient(90deg,#8e2de2,#4a00e0);
}
.x20 {
    background: linear-gradient(90deg,#fc3c00,#ff8b4a);
}
.x100 {
background: linear-gradient(90deg,#e02e2e,#ff4b4d);
}
.historybtn{
    align-items: center;
    border-radius: 4px;
    color: #fff;

    font-weight: 500;
    height: 36px;
    justify-content: center;
    margin-right: 12px;
     display: inline; 
    width: 72px;
}
.x100-info_arrow {
    background: url(/images/arrowwheel.png) bottom no-repeat;
    background-size: cover;
    height: 45px;
    margin: 0 auto;
    width: 45px;
}
 </style>   
 
 <script>
     function errorbuy()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для доступа к игре, необходим ранг Smart',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
 </script>
                            
                            
                          </div>

                        </div>
                        <center>
                                           <div class="x100-info_arrow" style="    margin-top: -100px;transform: rotate(180deg);"></div>
                          <span class="x50-status" style="color: #8392a5;font-family: 'Gilroy-Bold'; Font-Size: 24px;">Вращение...</span>
                        </center>
                      </center>
       <br>
        <br>
        
                  

 <script>
     function vipcheck()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Проверка доступна только для VIP игроков!',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
 </script>
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
    background: #3a3f4e;
    color: #78819d;
}

 .bt-light {
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
 color:#312C48;
    text-align: center;
    FONT-FAMILY: 'GILROY-BOLD';
    font-size:16px;
}
    .dice_sidebar_field__body {
    background: #3a3f4e;
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
.dice .bt-light {
    background: #3a3f4e;
    color: #78819d;
}

.dice .bt-light {
    border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
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
  
 .bt-light {
    background: #3a3f4e;
    color: #78819d;
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

 .bt-light {
    border-radius: 4px;
    color: #b6b0d7;
    font-weight: 600;
    padding: 0 12px;
} 
    
</style>    
        
        
        <br>
                                <div id="dicebuttons" class="dice_sidebar" style="margin: auto;">
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
          <div class="dice_sidebar_field__header"  style="    margin-left: 127px;">Сумма ставки</div>
            
            <div class="dice_sidebar_field__body"style="     background: #f4f2ff;">
                <button class="dice_sidebar-toolbar_btn"onclick="$('#diceGameAmount').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;">Min</button>
                <button class="dice_sidebar-toolbar_btn" onclick="var x = ($('#diceGameAmount').val()*2);$('#diceGameAmount').val(parseFloat(x.toFixed(2)));updateResultSize()">X2</button>
                <div class="input_gradient">
                    <input class="diceinput" value="1" id="diceGameAmount" autocomplete="off" onkeyup="validateDiceGameAmount(this);updateResultSize()"><span></span></div>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#diceGameAmount').val(Math.max(($('#diceGameAmount').val()/2).toFixed(2), 1));updateResultSize()">/2</button>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#userBalance').attr('myBalance');$('#diceGameAmount').val($('#userBalance').attr('myBalance'));updateResultSize();">Max</button></div></div>
</div>
                      
                      
                      
                      
                     <center  style="margin-top:10px">
                        <div id="stavkibtn" class="row" style="justify-content:space-around;margin-top:15px; flex-wrap: initial;width:100%">
<button class="x2-bets__btn" data-color="blue" style="width:20%;margin:10px" onClick="errorbuy()">
    <span>Ставка</span>
    <span>2x</span>
    </button>  

<button class="x3-bets__btn" data-color="blue" style="width:20%;margin:10px"onClick="errorbuy()">
    <span>Ставка</span>
    <span>3x</span>
    </button>  

<button class="x10-bets__btn" data-color="blue" style="width:20%;margin:10px"onClick="errorbuy()">
    <span>Ставка</span>
    <span>10x</span>
    </button>  

<button class="x15-bets__btn" data-color="blue" style="width:20%;margin:10px"onClick="errorbuy()">
    <span>Ставка</span>
    <span>15x</span>
    </button>  
 <button class="x20-bets__btn" data-color="blue" style="width:20%;margin:10px"onClick="errorbuy()">
    <span>Ставка</span>
    <span>20x</span>
    </button>     
    <button class="x100-bets__btn" data-color="blue" style="width:20%;margin:10px"onClick="errorbuy()">
    <span>Ставка</span>
    <span>100x</span>
    </button>  
                        </div>
                        
                        
                        
                     </center>
                    </div>
                    
       
                    
                    
                   </div>  
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->
    


              
<style>


.x2-bets__btn {
    background: linear-gradient(90deg,#1e54e1 9.84%,#3079f2 96.11%);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}

.x3-bets__btn {
background: linear-gradient(90deg,#f4a202,#fac257);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}
.x10-bets__btn {
    background: linear-gradient(90deg,#01a155 4.51%,#12b969);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}
.x15-bets__btn {
background: linear-gradient(90deg,#8e2de2,#4a00e0);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}
.x20-bets__btn {
background: linear-gradient(90deg,#fc3c00,#ff8b4a);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}
.x100-bets__btn {
background: linear-gradient(90deg,#e02e2e,#ff4b4d);
    align-items: center;
    background-color: transparent;
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    justify-content: space-between;
    padding: 20px;
    transition: .3s;
    width: 100%;
}
    .x100-bets__info {
background: #f4f2ff;
    border-radius: 7px;
    overflow: hidden;
    position: relative;
    transition: .3s;
}
.x100-bets__info-top {
    align-items: center;
border-bottom: 1px solid #e7e2f9;
    display: flex;
    font-weight: 500;
    justify-content: space-between;
    padding: 12px;
}
.x100-bets__info-bottom {
    height: 210px;
    overflow-y: auto;
}
.x100-bets__info-top .color[data-color=blue] {
    background: linear-gradient(90deg,#1e54e1 9.84%,#3079f2 96.11%);
}

.x100-bets__info-top .color {
    border-radius: 4px;
    display: none;
    height: 18px;
    margin-right: 12px;
    min-width: 18px;
    width: 18px;
}
.x100-bets__info-top .total_users {
    align-items: center;
    color: #b6b0d7;
    display: flex;
    flex-grow: 1;
    gap: 6px;
}
.x100-bets__info-top .arrow {
    color: #b6b0d7;
    display: none;
    margin-left: 8px;
}

.x100 .bt {
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
.x100-bets__info-bottom {
    height: 210px;
    overflow-y: auto;
}

.x100-bets__info--empty {
    align-items: center;
    color: #b6b0d7;
    display: flex;
    font-size: 18px;
    font-weight: 500;
    height: 190px;
    justify-content: center;
    line-height: 24px;
}
.x100-bets__info--list {
    align-content: flex-start;
    align-items: flex-start;
    display: flex;
    flex-wrap: wrap;
}
    
</style>

    
    
    
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