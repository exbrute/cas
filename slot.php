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
    
    Slots
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
width: 98px;height: 152px;
}


}


</style>

        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12  mg-b-20" style="margin-left: 10px;
    margin-bottom: -16px;">
                    
                    
                    
       
       
       
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/TheDogHouseMegaways.svg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/TheDogHouseMegaways.svg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">The Dog House</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                    
                    
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/SweetBonanza.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/SweetBonanza.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Sweet Bonanza</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                                        
                    
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/GatesOfOlympys.svg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/GatesOfOlympys.svg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Gates Of Olympys</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                                       
                                       
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/SugarRush.svg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/SugarRush.svg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Sugar Rush</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                                    
                                       
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/MadameDestiny.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/MadameDestiny.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Madame Destiny</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                                                                         
                                       
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/Cleocatra.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/Cleocatra.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Cleocatra</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>
                                                                
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/BigBass.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/BigBass.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Big Bass Bonanza</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>                                      
                                       

     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/StarlightW.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/StarlightW.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Starlight Princess</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   

     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/FruitParty.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/FruitParty.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Fruit Party</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   

     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/SweetBonanzaXmas.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/SweetBonanzaXmas.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Sweet Bonanza Xmas</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   


     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/ExtraJuicy.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/ExtraJuicy.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Extra Juicy</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   

     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/ZofH.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/ZofH.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Zeus Of Hades</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   


 
     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/DogHouseMega.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/DogHouseMega.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">The Dog House Megaways</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   



     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/SantasGreatGifts.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/SantasGreatGifts.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Santas Great Gifts</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   



     <div id="dicebuttons" class="game_  blackz">
    <a href="/game" class="">
        <div class="game_image">
            <div class="vue-load-image" src="/slots_materials/WWGM.jpg" center-type="cover">
                <img class="vue-load-image" src="/slots_materials/WWGM.jpg"></div></div> 
                <div class="provider_container">
                    <p class="small_provider provider_container2">Wild West Gold Megaways</p></div> 
                    <div class="game_badges">
                        <img src="/slots_materials/icon_hot.svg" class="game_badge"> <!----></div> </div></a>   



                                                    
                   </div>  
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->
    


         <script>
function slotdep()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для доступа к игре, вам необходимо иметь депозит от 1000р за последние 7 дней!',
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