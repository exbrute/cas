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

<div class="col-xs-12 col7 col-xl-10 mg-t-10 ">
    
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
    <img src="/extra/panel/icoMinesZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Mines
    
        <div tooltip="Фиатные деньги: 3% | RTP: 98%" flow="up" class="fiatbtn visual">?</div>

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
    
    
    
            <div class="cardh2 pd-b-15" style="background:#fff;  background-image: url(/extra/bgcard3.png);">
                <div class="card-header pd-y-20  align-items-center justify-content-between d-none d-sm-block"style="border-color: #fff">
           

                </div>
                <style>
.col7 {
flex: 0 0 100%;
max-width: 100%;
}
</style>
<style>
.bd-danger {
    border-color: #973443;
}
.bd-success {
    border-color: #4a43bd;
}
.tx-success {
    color: #35317c;
}
.mines-sq-success2 {
    pointer-events: none!important;
    color: #4a44b3!important;
  background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%); 
    background: #7e6afc;
    border-color: #5e55f2!important;
}
.mines-sq-success2 {
      background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%); 
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
.bg-gray-100 {
    background-color: #2a2c38;
}
.editnew2 {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.9375rem + 2px);
    padding: 0.46875rem 0.625rem;
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    color: #b2bed1;
    background-color: #343643;
    background-clip: padding-box;
    /* border: 1px solid #c0ccda; */
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


.minesbtnn {
    align-items: center;
    background: linear-gradient(45deg,#2858dd,#29abe2 98.44%);
    border-radius: 4px;
    color: #fff;
    display: flex;
    font-size: 12px;
    font-weight: 600;
    height: 40px;
    justify-content: center;
    line-height: 17px;
    text-align: center;
    width: 45%;
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

.active2{
    
    background-color:  #e5f2ff;


}

.tablebtn{
    
font-size: 11px;
    width: 100px;
    border-radius: 1.2rem;
    border-color: #edf6ff;
    height: 2.5rem;

}

</style>

<style>

.btnnew2{
color: #fff;
    background: linear-gradient(45deg, #ffffff 0%, #fafafa 100%);
    border-color: #eaeaea;
}

.btnnew2:Hover{
color: #fff;
background: linear-gradient(45deg, #fcfcfc 0%, #fafafa 100%);
    border-color: #eaeaea;
}

</style>
                <div class="row row-xs pd-20 mob-min">
                    <div class="col-xs-12 col-lg-5">
                        <div class="tab-content ">
                            <div class="tab-pane fade show active " id="handMines" role="tabpanel" aria-labelledby="home-tab5">

                                <div class=" d-none d-sm-block" id="mines">
                                    <h6 class="mg-b-15 "style="color: #8392a5;">Количество бомб:</h6>
                                  <!--  <span class="irs irs--round js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: visible;">2</span><span class="irs-max" style="visibility: visible;">24</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 5.08706%;">3</span></span><span class="irs-grid" style="width: 93.5351%; left: 3.13246%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.78249%;">2</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -1.78249%;">8</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -2.75686%;">13</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -2.75686%;">19</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.75686%;">24</span></span><span class="irs-bar irs-bar--single" style="left: 0px; width: 7.48406%;"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-handle single" style="left: 4.25159%;"><i></i><i></i><i></i></span></span>
                                    -->
                                    <input class="js-range-slider mg-t-10 col-xs-6 irs-hidden-input" tabindex="-1"type="hidden" readonly="">
                                    
                                   <div class="dice_sidebar">
    <div class="dice_sidebar-header">
        </div>
            <div class="dice_sidebar_field dice_sidebar-toolbar">
            <div class="dice_sidebar_field__header" >Сумма</div>
            <div class="dice_sidebar_field__body"style="   background: #f4f2ff;">
                <button class="dice_sidebar-toolbar_btn"onclick="$('#minesAmount').val('1');getMinesRate()" style="border-top-right-radius: 0; padding: 0;">Min</button>
                <button class="dice_sidebar-toolbar_btn" onclick="var x = ($('#minesAmount').val()*2);$('#minesAmount').val(parseFloat(x.toFixed(2)));getMinesRate()">X2</button>
                <div class="input_gradient">
                    <input class="diceinput" value="1" id="minesAmount" autocomplete="off" onkeyup="validateDiceGameAmount(this);updateResultSize()"><span></span></div>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#minesAmount').val(Math.max(($('#minesAmount').val()/2).toFixed(2), 1));getMinesRate()">/2</button>
                    <button class="dice_sidebar-toolbar_btn" onclick="$('#minesAmount').val($('#userBalance').attr('myBalance'));getMinesRate()">Max</button></div></div>
                
    
                              
                              
                                
                                <div class="dice_sidebar-footer">
                                 <br>
                                    <p class="dice_sidebar-hash" style="  color:#8392a5; FONT-FAMILY: 'GILROY-BOLD';"> HASH: <span id="minesHash">Начните игру</span></p>
                                 
                                  <div class="dice_sidebar-btns" href="#modalVerify" data-toggle="modal" style="   FONT-FAMILY: 'GILROY-BOLD';color:#b6b0d7"><a class="bt bt-light" >Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg>
                                </a></div>
                                   <a class="bt bt-light onmob" >Проверка на честность <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path d="M10.5 1.64062L3 4.97396V9.97396C3 14.599 6.2 18.924 10.5 19.974C14.8 18.924 18 14.599 18 9.97396V4.97396L10.5 1.64062ZM10.5 6.64062C11.6667 6.64062 12.8333 7.55729 12.8333 8.72396V9.97396C13.3333 9.97396 13.8333 10.474 13.8333 11.0573V13.974C13.8333 14.474 13.3333 14.974 12.75 14.974H8.16667C7.66667 14.974 7.16667 14.474 7.16667 13.8906V10.974C7.16667 10.474 7.66667 9.97396 8.16667 9.97396V8.72396C8.16667 7.55729 9.33333 6.64062 10.5 6.64062ZM10.5 7.64062C9.83333 7.64062 9.25 8.05729 9.25 8.72396V9.97396H11.75V8.72396C11.75 8.05729 11.1667 7.64062 10.5 7.64062Z" fill="currentColor"></path></svg></a>
                                
                                 
                       
         
         
                                    </div></div>
                                </div>
     <? if($sid){?>
                                <div class="d-none d-sm-block">
                                    <a id="buttonStartMines" href="#" class="btn dicebtn btn-block pd-t-10 pd-b-10 tx-15 " style="" onclick="createGameMines();">Играть <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.9 15.0225L16.15 10.2593C16.35 10.1439 16.35 9.85518 16.15 9.73971L7.9 4.97657C7.70001 4.86111 7.45 5.00544 7.45 5.23638L7.45 14.7627C7.45 14.9936 7.7 15.1379 7.9 15.0225ZM17 11.7316C18.3333 10.9618 18.3333 9.03727 17 8.26747L8.75 3.50433C7.41667 2.73453 5.75 3.69678 5.75 5.23638L5.75 14.7627C5.75 16.3023 7.41667 17.2645 8.75 16.4947L17 11.7316Z" fill="currentColor"></path></svg></a>
                                    <a id="buttonFinishMines" href="#" class="btn dicebtn btn-block mg-t-20 pd-t-10 pd-b-10 tx-15 " style="display:none " onclick="finishMines();"> </a>
     <? }else{?>  
         <div class="d-none d-sm-block">
                                    <a id="buttonStartMines" href="#" class="btn dicebtn btn-block pd-t-10 pd-b-10 tx-15 " style="" onclick="authplease()">Играть <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="font-icon" style="width: 20px; min-width: 20px; height: 20px;"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.9 15.0225L16.15 10.2593C16.35 10.1439 16.35 9.85518 16.15 9.73971L7.9 4.97657C7.70001 4.86111 7.45 5.00544 7.45 5.23638L7.45 14.7627C7.45 14.9936 7.7 15.1379 7.9 15.0225ZM17 11.7316C18.3333 10.9618 18.3333 9.03727 17 8.26747L8.75 3.50433C7.41667 2.73453 5.75 3.69678 5.75 5.23638L5.75 14.7627C5.75 16.3023 7.41667 17.2645 8.75 16.4947L17 11.7316Z" fill="currentColor"></path></svg></a>
                                    <a id="buttonFinishMines" href="#" class="btn dicebtn btn-block mg-t-20 pd-t-10 pd-b-10 tx-15 " style="display:none " onclick="finishMines();"> </a>    
          <? }?> 
     
    
                                </div>
                                <button id="errorMines" style="padding: 11px; pointer-events: none; margin-top: 15px; display:none" class="btn btn-block tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d mg-b-15 "></button>
                               
                            </div>
                            
                            <div id="checkMines" style="display:none!important">
                            <div class="justify-content-center mg-t-20 d-none d-sm-flex">
                                <button id="checkBet" class="btn btn-outline-secondary justify-content-center" href="#checkModal" data-toggle="modal">Проверить игру</button>
                            </div>
                        </div>

                        </div>




                            

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
.bg-gray-100 {
    background-color: #f4f2ff;
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
width: 438px
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
.irs--round .irs-line {
    top: 36px;
    height: 4px;
    background-color: #22232a;
    border-radius: 4px;
}

.irs--round .irs-bar {
    top: 36px;
    height: 4px;
    background-color: #000;
}
.irs--round .irs-handle {
    top: 26px;
    width: 24px;
    height: 24px;
    border: 3px solid #090b0e;
    background-color: #31363a;
    border-radius: 24px;
}

.irs--round .irs-single {
    font-size: 14px;
    line-height: 1;
    text-shadow: none;
    padding: 3px 5px;
    background-color: #22232a;
    color: #c0c0c0;
    border-radius: 4px;
}
.irs--round .irs-grid-pol {
    background-color: #000000;
}
.irs--round .irs-grid-text {
    color: #83929b;
    font-size: 14px;
}
.bgbtn {
background-color: #2a2c38;
}
.btnnew{
    font-weight: bold;
    color: #fff;
    background: linear-gradient(45deg, #1e88e5 0%, #0a83fb 100%);
    border-color: #1e88e5;
}
.btnnew:Hover{
        font-weight: bold;
    color: White;
background: linear-gradient(45deg, #1c82db 0%, #0d7cea 100%);
    border-color: #1e88e5;
}

.cardh2 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #2f3140;
    background-clip: border-box;
    border: 1px solid rgba(72,94,144,.16);
    border-radius: 1.25rem;
    background-image: url(/extra/bgcard3.png);
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
.custom-select2 {
    border-color: #2a2c38;
    background-color: #2a2c38;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin-bottom: 5%;
    height: 41px;
     color: #596882;
        width: 100%;
            border-radius: 0.25rem;
}
.step-link>div .step-title {
    margin-left: 0;
       color: #312c48;
}
.irs--round .irs-handle {
    top: 26px;
    width: 24px;
    height: 24px;
    border: 3px solid #c9c7d5;
    background-color: #e7e2f9;
    border-radius: 24px;
}
.irs--round .irs-single {
    font-size: 16px;
    line-height: 1;
    font-weight: bold;
    padding: 3px 5px;
    background-color: #e7e2f9;
    color: #312c4878;
    border-radius: 4px;
}
.irs--round .irs-line {
    top: 36px;
    height: 4px;
    background-color: #e7e2f9;
    border-radius: 4px;
}
.irs--round .irs-bar {
    top: 36px;
    height: 4px;
    background-color: #b8b4d1;
}
.irs--round .irs-grid-pol {
    background-color: #d9d1f5;
}
.bd{
    border: 1px solid rgb(99 72 144 / 6%);
}
.mines-sq-success {
      background: linear-gradient(45deg,#5a53f1,#7e6afc 98.44%); 
}
</style>


                    </div>

                    <div class="col-xs-12 col-lg-7 ">
                        <style>
                        </style>
                        <div id="mbl" class="disabled">
                            <div class="d-flex justify-content-center ">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),1)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),2)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),3)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),4)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),5)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),6)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),7)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),8)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),9)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),10)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),11)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),12)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),13)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),14)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),15)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),16)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),17)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),18)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),19)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),20)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),21)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),22)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),23)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),24)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),25)"></div>                            </div>
                        </div>


                        <div class="d-flex justify-content-center ">
                            <ul class="steps mg-t-20 ">

                                <svg href="#carousel" data-slide="prev" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="carousel-control-prev tx-gray-400 css-i6dzq1 mg-t-20 ">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                                <div id="carousel" class="carousel slide pointer-event" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner pd-t-4 pd-b-2" id="minesRate">
                                        <div class="1 carousel-item active justify-content-center"><li class="1 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background: #ffffff;color: #b6b0d8; padding:2px 7px;">Шаг 1</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,14</span><span class="step-desc">x1.14</span></div></a></li><li class="2 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#background: #2f3140;color: #fff;; padding:2px 7px;">Шаг 2</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,30</span><span class="step-desc">x1.3</span></div></a></li></div><div class="3 carousel-item justify-content-center"><li class="3 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 3</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,49</span><span class="step-desc">x1.49</span></div></a></li><li class="4 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 4</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,73</span><span class="step-desc">x1.73</span></div></a></li></div><div class="5 carousel-item justify-content-center"><li class="5 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 5</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,02</span><span class="step-desc">x2.02</span></div></a></li><li class="6 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 6</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,37</span><span class="step-desc">x2.37</span></div></a></li></div><div class="7 carousel-item justify-content-center"><li class="7 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 7</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,82</span><span class="step-desc">x2.82</span></div></a></li><li class="8 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 8</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">3,38</span><span class="step-desc">x3.38</span></div></a></li></div><div class="9 carousel-item justify-content-center"><li class="9 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 9</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">4,11</span><span class="step-desc">x4.11</span></div></a></li><li class="10 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 10</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">5,05</span><span class="step-desc">x5.05</span></div></a></li></div><div class="11 carousel-item justify-content-center"><li class="11 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 11</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">6,32</span><span class="step-desc">x6.32</span></div></a></li><li class="12 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 12</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">8,04</span><span class="step-desc">x8.04</span></div></a></li></div><div class="13 carousel-item justify-content-center"><li class="13 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 13</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">10,45</span><span class="step-desc">x10.45</span></div></a></li><li class="14 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 14</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">13,94</span><span class="step-desc">x13.94</span></div></a></li></div><div class="15 carousel-item justify-content-center"><li class="15 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 15</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">19,17</span><span class="step-desc">x19.17</span></div></a></li><li class="16 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 16</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">27,38</span><span class="step-desc">x27.38</span></div></a></li></div><div class="17 carousel-item justify-content-center"><li class="17 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 17</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">41,07</span><span class="step-desc">x41.07</span></div></a></li><li class="18 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 18</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">65,71</span><span class="step-desc">x65.71</span></div></a></li></div><div class="19 carousel-item justify-content-center"><li class="19 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 19</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">115</span><span class="step-desc">x115</span></div></a></li><li class="20 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 20</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">230</span><span class="step-desc">x230</span></div></a></li></div><div class="21 carousel-item justify-content-center"><li class="21 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 21</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">575</span><span class="step-desc">x575</span></div></a></li><li class="22 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 22</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2 300</span><span class="step-desc">x2300</span></div></a></li></div>                                    </div>
                                </div>
                                <svg href="#carousel" data-slide="next" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="carousel-control-next tx-gray-400 css-i6dzq1 mg-t-20">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>

                                
                            </ul>



                        </div>
                        



                        <div id="visiblemobile" class="col-12  dislaynon" style="padding:0;">
                            <div class="row row-xs mg-b-10" id="minesMobile">
                                <div class="col-6">
                                    <span class="tx-11 " style="color: #909db3;">Бомбы</span>
                                    <select class="custom-select2 text-center tx-20  mg-t-5" id="countBombMobile" onchange="getMinesRateMobile()" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;">
                                        <option value="2">2</option>
                                        <option value="3" selected="">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select>
                                    <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center ">
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor tx-13 mb-mines">2</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor tx-13 mb-mines">5</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor tx-13 mb-mines">14</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btnvibor tx-13 mb-mines">21</button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <span class="tx-11 " style="color: #909db3;">Размер игры</span>

                                    <div class="input-group mg-t-5">
                                        <input value=" 1" id="minesAmountMobile" onkeyup="getMinesRateMobile()" class="editnew tx-20 justify-content-center align-self-center text-center " autocomplete="off" placeholder="Сумма" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0">
                                    </div>
                                    <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center ">
                                        <button onclick="$('#minesAmountMobile').val($('#userBalance').attr('myBalance'));$('#minesAmount').val($('#userBalance').attr('myBalance'));getMinesRateMobile();" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor   tx-13 mb-mines">Max</button>
                                        <button onclick="$('#minesAmountMobile').val('1');$('#minesAmount').val('1');getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor   tx-13 mb-mines">Min</button>
                                        <button onclick="var x = ($('#minesAmountMobile').val()*2);$('#minesAmountMobile').val(parseFloat(x.toFixed(2)));$('#minesAmount').val(parseFloat(x.toFixed(2)));getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btnvibor   tx-13 mb-mines">x2</button>
                                        <button onclick="$('#minesAmountMobile').val(Math.max(($('#minesAmountMobile').val()/2).toFixed(2), 1));$('#minesAmount').val(Math.max(($('#minesAmountMobile').val()/2).toFixed(2), 1));getMinesRateMobile()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btnvibor   tx-13 mb-mines">/2</button>
                                    </div>


                                </div>
                            </div>
                            <a id="buttonStartMinesMobile" href="#" class="btn dicebtn btn-block  tx-12 " style="" onclick="createGameMinesMobile()">Создать игру</a>
                            <a id="buttonFinishMinesMobile" href="#" class="btn dicebtn btn-block   tx-12 " style="display:none " onclick="finishMines()">
                                                                                            </a>
                        </div>
                    </div>

                </div>
            </div>

            
<script>
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
    <style>
        .dislaynon{
            display:none;
        }
         @media screen and (max-width: 432px){


#visiblemobile {
          display:block;
}

}
    </style>
    <BR>
<?
require ("components/history.php");
?>

</div>
<?

                  require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>