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
    <img src="/extra/panel/icoSlotsZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Онлайн игра
</div>
    
    

                                               	 <div class="btn-group ">

           
            </div>
                                               	

<style>
.cardh2 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #FFF;
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
        background: linear-gradient(90deg,#ffc658 -18.18%,#f4a100 49.18%,#ffc658 120%);
    border-radius: 3px;
    box-shadow: 0 8px 15px #f5a30440;
    color: #2c3034;
    cursor: pointer;
margin: 5px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: .03em;
    margin-top: 10px;

    width: 90%;
}

.dicebtn:hover{
    background: linear-gradient(90deg,#ffb82e -18.18%,#e99a00 49.18%,#ffb82e 120%);

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



.game_ {
    align-items: center;
    border: 0;
    border-radius: 10px;
    box-shadow: 0 5px 10px 2px rgb(8 10 12/5%);
    cursor: pointer;
    display: inline-flex;
    height: 207px;
    justify-content: center;
    margin: 5px;
    overflow: hidden;
    position: relative;
    transition: .2s ease;
    width: 140px;
}
.game_ .game_image {
    height: 207px;
    width: 140px;
}
.vue-load-image {
    background-color: initial;
    display: inline-block;
    height: 207px;
    overflow: hidden;
    position: relative;
    width: 140px;
}
.provider_container {
    align-items: center;
    background: linear-gradient(180deg,rgba(3,25,58,0),#0a0a0a);
    bottom: 0;
    display: flex;
    justify-content: center;
    left: 0;
    opacity: 1;
    padding: 5px 0;
    position: absolute;
    right: 0;
    z-index: 1;
}
.small_provider {
    font-size: 8px;
    letter-spacing: .14em;
    line-height: 100%;
    margin-bottom: 0;
    text-transform: uppercase;
}
.provider_container2 {
    color: #fff;
    opacity: 1;
}
.game_badges {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    position: absolute;
    right: 0;
    top: 0;
}
.game_badge {
    box-sizing: border-box;
    height: 2rem;
    opacity: 1;
    padding: 0;
    position: relative;
    width: 2rem;
}

.game_ .game_image {
    height: 207px;
    width: 140px;
}
.info {
    display: flex;
    flex-direction: column;
    height: 100%;
    justify-content: space-between;
    opacity: 0;
    pointer-events: none;
    text-align: center;
    transition: .45s ease;
    width: 100%;
}
.info:before {
    background-color: rgba(32,43,77,.9);
    content: "";
    height: 100%;
    left: 0;
    opacity: .85;
    position: absolute;
    top: 0;
    width: 100%;
}
.info .title, .info .title2 {
    color: #fff;
    display: flex;
    font-weight: 700;
    height: 30px;
    justify-content: center;
    margin: 0 auto;
    text-align: center;
    z-index: 1;
}
.info .title {
    font-size: .875rem;
    line-height: 1rem;
    padding-bottom: 20px;
    padding-top: 25px;
    width: 90%;
}
.go {
    background-image: url(/image/button__play.svg);
    background-repeat: no-repeat;
    background-size: 100%;
    height: 42px;
    margin: 0 auto;
    opacity: .95;
    width: 42px;
    z-index: 1;
}
.info .title3 {
    color: #fff;
    font-size: 8px;
    font-weight: 500;
    letter-spacing: .14em;
    line-height: 100%;
    padding-bottom: 5px;
    text-transform: uppercase;
    z-index: 1;
}


.blackz {
   -webkit-transition: all 1s ease;
   -moz-transition: all 1s ease;
   -o-transition: all 1s ease;
   -ms-transition: all 1s ease;
   transition: all 1s ease;
}

.blackz:hover {
   -webkit-filter: brightness(750%);
   filter: brightness(75%);
}

 @media screen and (max-width: 432px){

#dicebuttons {
width: 20.6rem;
}


}
</style>


<?
$selectedgame = "/provider";

?>

    
        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12  mg-b-20" style="margin-left: 10px;
    margin-bottom: 30px;">
                    
                    
<div id="dicebuttons" class="slot__body">
    <div class="slot__body-header">
        <div class="slot__body-header-left">
            <button type="button" class="slot__body-header-back" onclick="location.href = '/index';">
                <div class="slot__body-header-back-icon2">
                    <svg  style="    margin-top: 0.4rem;"width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.2941 5.90397C11.684 5.90397 12 5.58793 12 5.19809C12 4.80825 11.684 4.49221 11.2941 4.49221V5.90397ZM0.206748 4.69895C-0.068916 4.97462 -0.068916 5.42156 0.206748 5.69723L4.69895 10.1895C4.97462 10.4651 5.42156 10.4651 5.69723 10.1895C5.97289 9.91374 5.97289 9.46684 5.69723 9.1912L1.70415 5.19809L5.69723 1.20502C5.97289 0.929352 5.97289 0.482415 5.69723 0.206748C5.42156 -0.068916 4.97462 -0.068916 4.69895 0.206748L0.206748 4.69895ZM11.2941 4.49221H0.705882V5.90397H11.2941V4.49221Z" fill="#B7AFD6"></path></svg></div> Назад</button>
                    </div>
                    <div class="slot__body-header-center">
                        <button type="button" class="slot__body-header-hider">
                            </button></div>
                                            <div class="slot__body-header-btns"><!---->
                                           
                                           <div class="cgame__demo svelte-pumpwr">
                                               <span class="demo__text svelte-pumpwr demo__text_active"style="color:#b6b0d7;">Real</span> 
                                               
                                <div class="checkbox-wrapper-6">
  <input class="tgl tgl-light" id="cb1-6" type="checkbox"/>
  <label class="tgl-btn " style="margin-bottom: 1px;" for="cb1-6">
</div>

<style>
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
<script>

document.addEventListener("DOMContentLoaded", function(event){
if(location.pathname === "/game") { 
document.getElementById('slotg').src = '/provider'; 
} 
});
</script>
 
 
 
                                                       <span class="demo__text svelte-pumpwr" style="color:#b6b0d7;">Demo</span></div>
                                  
                                           

                                                    <button type="button" class="slot__body-header-btn" onClick="window.location.href = window.location.href;">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_3298_12939)"><path d="M15.3359 2.66666V6.66666H11.3359" stroke="#B7AFD6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M0.664062 13.3333V9.33334H4.66406" stroke="#B7AFD6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2.3374 6.00001C2.67551 5.04453 3.25015 4.19028 4.00771 3.51696C4.76526 2.84363 5.68104 2.37319 6.66959 2.14952C7.65813 1.92584 8.68723 1.95624 9.66086 2.23786C10.6345 2.51948 11.5209 3.04315 12.2374 3.76001L15.3307 6.66668M0.664062 9.33334L3.7574 12.24C4.47389 12.9569 5.36031 13.4805 6.33394 13.7622C7.30756 14.0438 8.33666 14.0742 9.32521 13.8505C10.3138 13.6268 11.2295 13.1564 11.9871 12.4831C12.7446 11.8097 13.3193 10.9555 13.6574 10" stroke="#B7AFD6" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_3298_12939"><rect width="16" height="16" fill="white"></rect></clipPath></defs></svg></button>
                                                        <button type="button" class="slot__body-header-btn slot__body-header-toggle gamemode">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 6.3499999 6.3500002" xml:space="preserve" class=""><g><g id="layer1" transform="translate(0 -290.65)"><path id="path9321" d="m.793766 291.17809a.26460982.26460982 0 0 0 -.26354987.26562v1.05885a.26460982.26460982 0 1 0 .52709977 0v-.4222l1.4004311 1.4025a.2652861.2652861 0 0 0 .3751711-.37517l-1.4024984-1.40043h.4221964a.2646485.2646485 0 1 0 0-.52917zm3.7052003 0a.2646485.2646485 0 1 0 0 .52917h.4196127l-1.4019816 1.40043a.26516505.26516505 0 0 0 .374654.37517l1.4004314-1.40043v.42013a.2648417.2648417 0 0 0 .5296834 0v-1.05885a.26460982.26460982 0 0 0 -.2661335-.26562zm-1.8577677 2.90835a.26460982.26460982 0 0 0 -.1834516.0801l-1.4004311 1.4025v-.68575a.26460982.26460982 0 0 0 -.29455589-.26768.26460982.26460982 0 0 0 -.23254388.26768v1.3224a.26460982.26460982 0 0 0 .26354987.26562h1.3224a.2646485.2646485 0 1 0 0-.52917h-.6841961l1.4009482-1.40043a.26460982.26460982 0 0 0 -.1917195-.45527zm1.0609173 0a.26460982.26460982 0 0 0 -.1855185.45527l1.4004312 1.40043h-.6836791a.2646485.2646485 0 0 0 0 .52917h1.3218832a.26460982.26460982 0 0 0 .2661335-.26562v-1.3224a.26460982.26460982 0 0 0 -.2950723-.26768.26460982.26460982 0 0 0 -.2346111.26768v.68368l-1.4004314-1.40043a.26460982.26460982 0 0 0 -.1891355-.0801z" font-variant-ligatures="normal" font-variant-position="normal" font-variant-caps="normal" font-variant-numeric="normal" font-variant-alternates="normal" font-feature-settings="normal" text-indent="0" text-align="start" text-decoration-line="none" text-decoration-style="solid" text-decoration-color="rgb(0,0,0)" text-transform="none" text-orientation="mixed" white-space="normal" shape-padding="0" isolation="auto" mix-blend-mode="normal" solid-color="rgb(0,0,0)" solid-opacity="1" vector-effect="none" fill="#B7AFD6" data-original="#000000" class=""></path></g></g></svg></button>
                                                            <button class="slot__body-header-btn">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.33333 2H3.33333C2.97971 2 2.64057 2.14048 2.39052 2.39052C2.14048 2.64057 2 2.97971 2 3.33333V5.33333M14 5.33333V3.33333C14 2.97971 13.8595 2.64057 13.6095 2.39052C13.3594 2.14048 13.0203 2 12.6667 2H10.6667M10.6667 14H12.6667C13.0203 14 13.3594 13.8595 13.6095 13.6095C13.8595 13.3594 14 13.0203 14 12.6667V10.6667M2 10.6667V12.6667C2 13.0203 2.14048 13.3594 2.39052 13.6095C2.64057 13.8595 2.97971 14 3.33333 14H5.33333" stroke="#B7AFD6" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg></button></div></div>
                                                                <div class="slot__body-separate"></div>
                                                                <div class="slot__body-wrapper mobiled" style="aspect-ratio: 1280 / 720;">
                                                                    <div class="slot__body-wrapper-body">
                                                                        <iframe id="slotg" src="provider.php" class="slot__body-wrapper-frame" frameborder="0"></iframe></div>
                                                                        <div class="slot__body-wrapper-type">
                                                                       </div></div>
                                                                       
                                                            
                                                                       
<button type="button" class="slot__body-header-back" onclick="Valuta();" style="left: 1rem;top:1rem;    position: relative;font-size: 14px;">
                 Валюта
                 <div class="slot__body-header-back-icon3"><svg xmlns="http://www.w3.org/2000/svg" fill="#b9b1d7" style="    width: 12px;margin-top: 4px;" viewBox="0 0 384 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M240 32C319.5 32 384 96.47 384 176C384 255.5 319.5 320 240 320H128V352H288C305.7 352 320 366.3 320 384C320 401.7 305.7 416 288 416H128V448C128 465.7 113.7 480 96 480C78.33 480 64 465.7 64 448V416H32C14.33 416 0 401.7 0 384C0 366.3 14.33 352 32 352H64V320H32C14.33 320 0 305.7 0 288C0 270.3 14.33 256 32 256H64V64C64 46.33 78.33 32 96 32H240zM320 176C320 131.8 284.2 96 240 96H128V256H240C284.2 256 320 220.2 320 176z"/></svg>
                    </div></button>
                                                                       
                                                                       </div>

                                                  
                   </div>  
            </div><!-- card-body -->
  </div>  
<style>
    
    .cgame__demo.svelte-pumpwr.svelte-pumpwr {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-right: 7px;
}

.demo__text_active.svelte-pumpwr.svelte-pumpwr {
    color: #000;
}
.demo__text.svelte-pumpwr.svelte-pumpwr {
    font-size: 0.8rem;
    color: #000;
}



</style>    

         <script>
function slotdep()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для доступа к игре, необходим ранг Gambler',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}

</script>      


    <BR>
<?
require ("components/history.php");

$none = "/images/bodys.jpg";
?>

</div>
<style>
.slot__body-header-back-icon2 {
    background: #eae4ff;
    border-radius: 4px;
    /* color: #fff; */
    height: 24px;
    justify-content: center;

    width: 24px;
}
.slot__body-header-back-icon3 {
    background: #eae4ff;
    border-radius: 4px;
    /* color: #fff; */
    height: 24px;
    justify-content: center;
    margin-right: -8px;
    width: 24px;
}
    .slot__body {
width: 69.5rem;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 0px 15px #75757521;
    overflow: hidden;
    height: 105%;
}
.slot__body-header {
    align-items: center;
    display: flex;
    justify-content: space-between;
    padding: 20px 20px 0;
}
.slot__body-header-left {
    align-items: center;
    display: flex;
}
.slot__body-header-back {
align-items: center;
    background: #f7f5fe;
    border-radius: 4px;
    color: #b9b1d7;
    display: flex;
    font-size: 12px;
    font-weight: 700;
    line-height: 14px;
    padding: 7px 17px 7px 7px;
    text-align: center;
}
.slot__body-header-back-icon {
    align-items: center;
    display: flex;
}
@media screen and (min-width: 980px)
.slot__body-header-center {
    display: flex;
}
.slot__body-header-center {
    align-items: center;
    display: none;
    height: 38px;
}
button {
    align-items: center;
    background: transparent;
    border: none!important;
    border-radius: 4px;
    color: inherit;
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: inherit;
    font-weight: 600;
    gap: 4px;
    justify-content: center;
    line-height: 1.2;
    outline: none;
    padding: 0;
    transition: .3s;
}
.slot__body-header-hider {
    background: transparent;
}
.slot__body-header-demo {
    margin-right: 10px;
}

.toggle {
    background: #f6f7fb;
    border-radius: 9999px;
    cursor: pointer;
    display: inline-flex;
    height: 20px;
    padding: 3px;
    width: 35px;
}
.toggle__checkbox {
    display: none;
    visibility: hidden;
}
input, textarea {
    border: none;
    outline: none!important;
}
.slot__body-header-btns {
    align-items: center;
    display: flex;
}
.toggle__ticker--checked {
    right: 100%;
    transform: translate(100%);
}
.toggle__ticker {
    aspect-ratio: 1/1;
    background: radial-gradient(73.33% 73.33% at 50% 50%,#9db1ff 0,#6d3eff 100%);
    border-radius: 999px;
    position: absolute;
    right: 0;
    top: 0;
    width: 14px;
}
.toggle__container, .toggle__ticker {
    height: 100%;
    transition: all .3s ease-in-out;
}
.slot__body-separate {
background: #303030;
    border-radius: 8px;
    height: 2px;
    margin: 15px 0 0;
    width: 100%;
}
.slot__body-wrapper {
    align-items: center;
    aspect-ratio: 1280/720;
    display: flex;
    justify-content: center;
    padding: 0;
}
.slot__body-wrapper-body {
    height: 100%;
    position: relative;
    width: 100%;
}
.slot__body-wrapper-type {
    display: none;
}


.slot__body-wrapper-frame {
    height: 100%;
    width: 100%;
}
.toggle__container {
    height: 100%;
    transition: all .3s ease-in-out;
}
.btn-primary {
    background: linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%)!important;
    border-radius: 4px;
    color: #fff!important;
    padding: 12px;
}
.slot__body-wrapper-type .btn-orange {
    background: linear-gradient(90deg,#f4a202,#fac257);
    border-radius: 4px;
    color: #282d38;
    font-weight: 600;
}

.slot__body-wrapper-type button {
    align-items: center;
    background: transparent;
    border: 0;
    border-radius: 4px;
    color: inherit;
    cursor: pointer;
    display: flex;
    font-family: inherit;
    font-size: inherit;
    font-size: 16px;
    gap: 4px;
    height: 42px;
    justify-content: center;
    line-height: 1.2;
    outline: none;
    padding: 4px 18px;
    transition: .3s;
}
.btn-orange {
    background: linear-gradient(90deg,#f4a202,#fac257)!important;
    border-radius: 4px;
    color: #2c3034!important;
    font-weight: 600;
    padding: 12px;
}
.slot__body-header-btn+.slot__body-header-btn {
    margin-left: 10px;
}

.slot__body-header-btn {
background: #f7f5fe;
    border-radius: 4px;
    height: 38px;
    justify-content: center;
    width: 38px;
}
.slot__body-header-toggle svg {
    height: 16px;
    width: 16px;
}
.toggle__container {
    align-items: center;
    display: flex;
    position: relative;
    width: 100%;
}
.slot__body-header-back-icon {
    background: #eaecf5;
    border-radius: 4px;
    height: 24px;
    justify-content: center;
    margin-right: 7px;
    width: 24px;
}

.slot__body-header-demo {
    margin-right: 10px;
}

.toggle {
    background: #f6f7fb;
    border-radius: 9999px;
    cursor: pointer;
    display: inline-flex;
    height: 20px;
    padding: 3px;
    width: 35px;
}
.toggle__checkbox {
    display: none;
    visibility: hidden;
}
.toggle__container {
    height: 100%;
    transition: all .3s ease-in-out;
}
.toggle__ticker {
    height: 100%;
    transition: all .3s ease-in-out;
}
.toggle__ticker--checked {
    right: 100%;
    transform: translate(100%);
}

.toggle__ticker {
    aspect-ratio: 1/1;
    background: radial-gradient(73.33% 73.33% at 50% 50%,#9db1ff 0,#6d3eff 100%);
    border-radius: 999px;
    position: absolute;
    right: 0;
    top: 0;
    width: 14px;
}
.toggle__container {
    align-items: center;
    display: flex;
    position: relative;
    width: 100%;
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