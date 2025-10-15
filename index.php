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
		
		
		function gameInProcess()
{
new Noty({
  type: 'success',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'Игра в разработке',
  animation: {
    open: 'animated bounceInLeft', // Animate.css class names
    close: 'animated bounceOutLeft' // Animate.css class names
  }
}).show();

}



</script>
<style>

.games_Online__pysYz {
    position: absolute;
    left: 6px;
    top: 7px;
    color: #fff;
    font-size: 13px;
    display: flex;
    align-items: center;
    z-index: 1;
    pointer-events: none;
    touch-action: none;
}

.col7 {
flex: 0 0 100%;
max-width: 100%;
}


.page-header {
    padding: 10px 0 20px
}

.page-header-kyc {
    padding-top: 14px;
    padding-bottom: 25px
}

.page-header-kyc div[class*=col-] {
    padding-left: 30px;
    padding-right: 30px
}

.page-header-kyc .page-title {
    font-weight: 400
}

.page-header-kyc p {
    font-size: 1em
}

.page-title {
    color: #2c80ff;
    font-size: 1.5em;
    font-weight: 300;
    line-height: 1;
    letter-spacing: -0.01em;
    margin-bottom: 7px
}

.page-user {
    min-height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column
}
.container{
	overflow: hidden;
	background: transparent;
}
p.large {
    font-size: 1.1em
}


</style>
     <script src="https://www.w3schools.com/lib/w3.js"></script>
 
    
            <div class="row ">

                <div class="col-sm-6 col-lg-2 mg-t-10">


                    <!--<div class="spinner-border" role="status">-->
                    <!--      <span class="sr-only">Loading...</span>-->
                    <!--    </div>-->


                 


                                                 


      


                </div>

  <style>

 .game_shape { 
    padding: 20px; /* Поля */
    background: #fff; /* Цвет фона */
     width: 100%;
     height: 380px;
    border-radius: 20px;
    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
   }
   
    .center { 
	text-align: 150px;
   }
   
    .sign {
    float: right; /* Выравнивание по правому краю */
    border: 1px solid #333; /* Параметры рамки */
    padding: 7px; /* Поля внутри блока */
    margin: 10px 0 5px 5px; /* Отступы вокруг */
    background: #f0f0f0; /* Цвет фона */ 
   }
   .sign figcaption {
    margin: 0 auto 5px; /* Отступы вокруг абзаца */
   }
   
    .game_shape1 { 
            display: flex;
    padding: 20px; /* Поля */


     height: 180px;
    border-radius: 20px;
   }
   
       .game_shape12 { 
            display: flex;



    height: 310px;
    border-radius: 20px;
    margin: 8px;
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
   
       .game_shape13 { 
            display: flex;



     height: 215px;
    border-radius: 20px;
    margin-top: 20px;
   }
   .bott222 {
       
   padding: 10px 15px;
   }
.hover-effect3 {
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.hover-effect3:hover{
margin-top: 2px;
-webkit-transition: all 0.2s ease;
-moz-transition: all 0.2s ease;
transition: all 0.2s ease;
}
.mode-block {
    display: flex;
    justify-content: center;
    position: relative;
    user-select: none;
    transition: .2s all ease;
    border-radius: 8px;
    overflow: hidden;
}

    .termsshape1 { 
            display: flex;
    padding: 20px; /* Поля */

     width: 45%;
     height: 70px;
    border-radius: 20px;
    box-shadow: 1px 6px 10px 6px rgb(211 220 236 / 45%);
   }
   .icon {
    display: inline-flex;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
}

@media screen and (max-width: 600px) {
  .hidemobile22 {
    visibility: hidden;
    display: none;
    width: 100px;

  }
}

@media screen and (max-width: 600px) {
  .hidemobile3 {
    visibility: hidden;
    display: none;
  }
}

.show-on-mobile2 { display: none; }
/* Smartphone Portrait and Landscape */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px){ .show-on-mobile2 { display: inline; }}








   .gsh {
    background: #ffb60f;
    background: radial-gradient(circle at 80px 40px, #f9eec7, #ffb60f, #ffb60f);
    padding: 20px;
    width: 50%;
   }

 *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
      'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
      'Segoe UI Symbol';
    }

    .container {

      margin: 0 auto;
    }

    .itc-slider__wrapper {
      overflow: hidden;
    }

    .itc-slider__item {
      flex: 0 0 50%;
      max-width: 50%;
      height: 250px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: rgba(255, 255, 255, 0.8);
      font-size: 7rem;
    }

    .itc-slider__item:nth-child(1) {
background-color: rgb(0 0 0 / 0%);
    }

    .itc-slider__item:nth-child(2) {
background-color: rgb(0 0 0 / 0%);
    }

    .itc-slider__item:nth-child(3) {
background-color: rgb(0 0 0 / 0%);
    }

    .itc-slider__item:nth-child(4) {
background-color: rgb(0 0 0 / 0%);
    }


  </style> 

  <? 
  $game1 = rand(25,35);
  $game2 = rand(10,15);
    $game3 = rand(12,23);
      $game4 = rand(15,66);
        $game5 = rand(10,56);
          $game6 = rand(11,25);
            $game7 = rand(10,15);
              $game8 = rand(25,35);
                $game9 = rand(10,45);
                  $game10 = rand(10,29);
                                    $gamew = rand(30,69);
  ?>




                <div class="col7 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                    
                        <div class="col7 col-xl-10 mg-t-10">
                        <div class="row row-xs mg-b-25">
                                
  <link href="/css/itc-slider.css" rel="stylesheet">
  <script src="/js/itc-slider.js" defer></script>
    
<style>
       .scale {
    display: inline-block; /* Строчно-блочный элемент */
    overflow: hidden; /* Скрываем всё за контуром */
   }
   .scale img {
    transition: 1s; /* Время эффекта */
    display: block; /* Убираем небольшой отступ снизу */
   }
   .scale img:hover {
    transform: scale(1.01); /* Увеличиваем масштаб */
   }
    
</style>
  <style>
 @media screen and (max-width: 432px){


#hidenlive {
        display: none;
}


#infa {
        display: none;
}



#gameses {
             height: 7.7rem;
}

#bonuses22 {
      display:none;
}
#bonuses222 {
      display:none;
}
#banner {
         height: 90px;
}
#bannernew{
    min-width: 95%;
}
            .scale11 {
    display: inline-block; /* Строчно-блочный элемент */
    overflow: hidden; /* Скрываем всё за контуром */
   }
   .scale11 img {
    transition: 1s; /* Время эффекта */
    display: block; /* Убираем небольшой отступ снизу */
   }
   .scale11 img:hover {
    transform: scale(1.02); /* Увеличиваем масштаб */
   }


.home-header {
    align-items: center;
    display: flex;
    margin-bottom: 20px;
}

.home-header__icon {
    align-items: center;
    background: radial-gradient(73.33% 73.33% at 50% 50%,#9db1ff 0,#6d3eff 100%);
    border-radius: 6px;
    display: flex;
    height: 32px;
    justify-content: center;
    margin-right: 8px;
    width: 32px;
}
 .home-header__text {
    font-size: 16px;
    font-weight: 600;
    line-height: 19px;
}

.home-header__text {
    color: #2c3034;
}

 </style>               

   
   
 
   <div class="container">

  <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
    <div class="itc-slider__wrapper">
      <div class="itc-slider__items">



        <div id="banner" onclick="location.href = '/tournament';" class="itc-slider__item scale" style="border-radius:1.3rem; cursor:pointer;">
 <img src="/extra/index/TourGold1.png" style="max-width: 100%;max-height: 100%;" alt="">
        </div>
          
        <div id="banner" onclick="location.href = '/bonus';" class="itc-slider__item scale" style="border-radius:1.3rem; cursor:pointer;">
 <img src="/extra/index/Banner2.png" style="max-width: 100%;max-height: 100%;" alt="">
        </div>
        
        <div id="banner" onclick="location.href = '/ref';" class="itc-slider__item scale"style="border-radius:1.3rem;cursor:pointer;">
 <img src="/extra/index/Banner1.png" style="max-width: 100%;max-height: 100%;" alt="">
        </div>

      </div>
    </div>
    <ol class="itc-slider__indicators">
      <li class="itc-slider__indicator" data-slide-to="0"></li>
      <li class="itc-slider__indicator" data-slide-to="1"></li>
      <li class="itc-slider__indicator" data-slide-to="2"></li>
    </ol>
  </div>




</div>

</div>


   </div>
           
    
                                 <center>    




<div class="home-header" style="    align-items: center;  display: flex;  margin-left: 20px;">
  <div class="home-header__icon" style="    align-items: center; background: radial-gradient(73.33% 73.33% at 50% 50%,#8872ff 0,#7463ff 100%); border-radius: 6px;  display: flex;   height: 32px;  justify-content: center;  margin-right: 8px;  width: 32px;">
        
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.4783 17H6.52174C6.23652 17 6 16.7733 6 16.5C6 16.2267 6.23652 16 6.52174 16H13.4783C13.7635 16 14 16.2267 14 16.5C14 16.7733 13.7635 17 13.4783 17Z" fill="white"></path><path d="M15.8894 5.35845L13.0692 7.4071C12.6955 7.6793 12.1597 7.51455 11.9976 7.0776L10.665 3.46739C10.4394 2.8442 9.57224 2.8442 9.34663 3.46739L8.00706 7.07044C7.8449 7.51455 7.31613 7.6793 6.94246 7.39994L4.12232 5.35129C3.55829 4.95016 2.81095 5.51604 3.04361 6.18221L5.97656 14.5272C6.07527 14.8138 6.34318 15 6.63929 15H13.3583C13.6544 15 13.9223 14.8066 14.021 14.5272L16.954 6.18221C17.1937 5.51604 16.4463 4.95016 15.8894 5.35845ZM11.7649 11.97H8.23972C7.95066 11.97 7.71095 11.7265 7.71095 11.4328C7.71095 11.1391 7.95066 10.8955 8.23972 10.8955H11.7649C12.054 10.8955 12.2937 11.1391 12.2937 11.4328C12.2937 11.7265 12.054 11.97 11.7649 11.97Z" fill="white"></path></svg></div>
        
        <div class="home-header__text">Beeze Original Games</div></div>
 
                                    
                   <div  style="margin-left: 1rem;">                 
                                    
                                    
                                       
<style>
    .game_shape12:hover
{


}
    
</style>                                  
                                 

               
                                           
                                <div id="gameses" class="game_shape12 blackz " style="float: left;">

                                                         <a href="/dice" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/indexprop/Dice.png" style="max-width: 100%;max-height: 100%;" height="" alt="">
                                                        <div class="games_Online__pysYz" style="margin-left: 78%;"><i class="fa fa-user" aria-hidden="true"></i>⠀<?echo $game1?></div>  
                                                         
                                                           </a>
                                                           </div>   
                                                           
   <div id="gameses" class="game_shape12 blackz " style="float: left;">

                                                         <a href="/x50" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/indexprop/x50.png" style="max-width: 100%;max-height: 100%;" height="" alt="">
                                                        <div class="games_Online__pysYz" style="margin-left: 78%;"><i class="fa fa-user" aria-hidden="true"></i>⠀<?echo $gamew?></div>  
                                                         
                                                           </a>
                                                           </div>    \
                                                           
                         <div id="gameses"class="game_shape12 blackz" style="float: left;">
                                    
                                                         <a  href="/bubbles" class="mode-block scale1">
                                                        <img src="/extra/indexprop/Bubbles.png" style="max-width: 100%;max-height: 100%;" alt="">
                                                      
                                                        <div class="games_Online__pysYz" style="margin-left: 78%;"><i class="fa fa-user" aria-hidden="true"></i>⠀<?echo $game8?></div>  
                                                           </a>
                                                           </div> 
                                                           

                                <div id="gameses"class="game_shape12 blackz" style="float: left;">
                                    
                                                         <a href="/mines" class="mode-block scale1">
                                                        <img src="/extra/indexprop/Mines.png" style="max-width: 100%;max-height: 100%;" alt="">
                                                        <div class="games_Online__pysYz" style="margin-left: 78%;"><i class="fa fa-user" aria-hidden="true"></i>⠀<?echo $game3?></div>  
                                                           </a>
                                                           </div>    
                             

</div>



</center>

        
        
 <center>    


  <div id="bonuses22">        

<div class="home-header" style="    align-items: center;  display: flex;  margin-left: 20px;margin-top: 20px;margin-bottom: 10px;">
  <div class="home-header__icon" style="    align-items: center; background: radial-gradient(73.33% 73.33% at 50% 50%,#8872ff 0,#7463ff 100%); border-radius: 6px;  display: flex;   height: 32px;  justify-content: center;  margin-right: 8px;  width: 32px;">
        
<svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_4562_111350)"><path d="M1.3623 14H2.9373V4.37499C2.9373 2.93999 3.50896 2.33333 4.86229 2.33333H10.9873V0.874997C10.9873 0.291665 10.6956 0 10.1123 0H1.3623C0.778971 0 0.487305 0.291665 0.487305 0.874997V13.125C0.487305 13.7083 0.778971 14 1.3623 14Z" fill="white"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.8623 17.5H13.6123C14.1956 17.5 14.4873 17.2083 14.4873 16.625V4.375C14.4873 3.79167 14.1956 3.5 13.6123 3.5H4.8623C4.27897 3.5 3.9873 3.79167 3.9873 4.375V16.625C3.9873 17.2083 4.27897 17.5 4.8623 17.5ZM11.2723 10.8912C11.559 10.6898 11.559 10.3101 11.2723 10.1088L8.43017 8.11274C8.05158 7.84685 7.4873 8.08098 7.4873 8.50394V12.496C7.4873 12.919 8.05158 13.1531 8.43017 12.8872L11.2723 10.8912Z" fill="white"></path></g><defs><clipPath id="clip0_4562_111350"><rect width="14" height="18" fill="white" transform="translate(0.487305)"></rect></clipPath></defs></svg></div>
        
        <div class="home-header__text">Live Games</div></div>
 
                                    
                   <div  style="margin-left: 1rem;">                 
                                

       

      
                                        
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=352" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live1.png" style="    max-width: 213px" alt="">
                                                        
                                                        
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
                                                        
                                                           </a>
                                                           </div>    
                                                         
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=432" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live2.png" style="    max-width: 213px" alt="">
                                                         
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>  
                                                          
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=387" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live3.png" style="    max-width: 213px" alt="">
                                                                                           
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>  
                                                       
                               <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=332" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live4.png" style="    max-width: 213px" alt="">
                                                                                      
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                                                          
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=313" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live5.png" style="    max-width: 213px" alt="">
                                                                                           
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>  
                                                         
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=452" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live6.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>   
                                                      
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=511" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live7.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                                                         
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=377" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live8.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  
                                                        
                               <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=312" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live9.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  
                                                       
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=251" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live10.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  
                                                         
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=424" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live11.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  
                                                    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=334" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live12.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>   
                                                       
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=275" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live13.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                                                         
                               <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px; ">

                                                         <a href="/game?id=350" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/live14.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                                                         
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/live?=allgames" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/more.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  

</div>
</div>


</center>        
        
        
<center>
    <div id="bonuses222">        

<div class="home-header" style="    align-items: center;  display: flex;  margin-left: 20px;margin-top: 20px;margin-bottom: 10px;">
  <div class="home-header__icon" style="    align-items: center; background: radial-gradient(73.33% 73.33% at 50% 50%,#8872ff 0,#7463ff 100%); border-radius: 6px;  display: flex;   height: 32px;  justify-content: center;  margin-right: 8px;  width: 32px;">
        
<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.8608 2.49919C2.8015 2.4988 2.7435 2.48173 2.69344 2.44993C2.64338 2.41814 2.60328 2.37289 2.57773 2.31938C2.55217 2.26587 2.54219 2.20624 2.54892 2.14732C2.55565 2.0884 2.57883 2.03256 2.6158 1.98619C3.11367 1.36625 3.74433 0.865967 4.46128 0.522212C5.17823 0.178456 5.9632 0 6.7583 0C7.55341 0 8.33837 0.178456 9.05533 0.522212C9.77228 0.865967 10.4029 1.36625 10.9008 1.98619C10.9378 2.03263 10.961 2.08855 10.9677 2.14756C10.9744 2.20657 10.9643 2.26628 10.9387 2.31983C10.913 2.37338 10.8727 2.41861 10.8225 2.45033C10.7723 2.48205 10.7142 2.49899 10.6548 2.49919H2.8608Z" fill="white"></path><path d="M3.32104 9.21809C3.24332 9.21782 3.16688 9.19828 3.09857 9.16123C3.03025 9.12417 2.97219 9.07075 2.92959 9.00575C2.88698 8.94075 2.86116 8.8662 2.85443 8.78878C2.8477 8.71135 2.86028 8.63346 2.89104 8.56209L3.45304 7.24609C3.46331 7.22237 3.46753 7.19646 3.46531 7.1707C3.46309 7.14495 3.45451 7.12014 3.44033 7.09853C3.42615 7.07691 3.40682 7.05915 3.38408 7.04686C3.36133 7.03457 3.33589 7.02812 3.31004 7.02809H3.00904C2.88465 7.02809 2.76536 6.97868 2.67741 6.89072C2.58945 6.80277 2.54004 6.68348 2.54004 6.55909C2.54004 6.4347 2.58945 6.31541 2.67741 6.22746C2.76536 6.1395 2.88465 6.09009 3.00904 6.09009H4.25904C4.33737 6.08981 4.41452 6.10916 4.48345 6.14636C4.55238 6.18357 4.61089 6.23744 4.65365 6.30307C4.69641 6.3687 4.72205 6.44399 4.72823 6.52208C4.73441 6.60016 4.72094 6.67855 4.68904 6.75009L3.75204 8.93709C3.71535 9.02073 3.655 9.0918 3.57842 9.14155C3.50183 9.1913 3.41236 9.21756 3.32104 9.21709V9.21809Z" fill="white"></path><path d="M6.44557 9.21809C6.36786 9.21782 6.29142 9.19828 6.2231 9.16122C6.15479 9.12417 6.09673 9.07075 6.05412 9.00575C6.01152 8.94075 5.98569 8.8662 5.97897 8.78877C5.97224 8.71135 5.98482 8.63346 6.01557 8.56209L6.57757 7.24609C6.58785 7.22236 6.59207 7.19646 6.58985 7.1707C6.58763 7.14494 6.57904 7.12014 6.56486 7.09852C6.55068 7.07691 6.53135 7.05915 6.50861 7.04686C6.48587 7.03456 6.46043 7.02811 6.43457 7.02809H6.13257C6.00819 7.02809 5.8889 6.97867 5.80094 6.89072C5.71299 6.80277 5.66357 6.68347 5.66357 6.55909C5.66357 6.4347 5.71299 6.31541 5.80094 6.22745C5.8889 6.1395 6.00819 6.09009 6.13257 6.09009H7.38257C7.46021 6.09008 7.53664 6.10935 7.60499 6.14616C7.67334 6.18298 7.73149 6.23618 7.77421 6.30101C7.81693 6.36584 7.84289 6.44025 7.84976 6.51758C7.85663 6.59492 7.8442 6.67275 7.81357 6.74409L6.87657 8.93209C6.8408 9.01684 6.78083 9.08918 6.70418 9.14004C6.62752 9.19091 6.53757 9.21806 6.44557 9.21809Z" fill="white"></path><path d="M9.5709 9.21826C9.49343 9.21785 9.41728 9.1983 9.34919 9.16136C9.28111 9.12441 9.22322 9.0712 9.18066 9.00648C9.1381 8.94175 9.1122 8.86751 9.10527 8.79036C9.09833 8.71321 9.11057 8.63554 9.1409 8.56426L9.7029 7.24826C9.71802 7.21232 9.71924 7.17204 9.7063 7.13525C9.69336 7.09847 9.66719 7.06782 9.6329 7.04926C9.61048 7.03705 9.58542 7.03053 9.5599 7.03026H9.2579C9.13739 7.02469 9.02366 6.9729 8.94035 6.88565C8.85703 6.7984 8.81055 6.6824 8.81055 6.56176C8.81055 6.44112 8.85703 6.32512 8.94035 6.23787C9.02366 6.15062 9.13739 6.09883 9.2579 6.09326H10.5079C10.5855 6.09326 10.662 6.11252 10.7303 6.14934C10.7987 6.18615 10.8568 6.23936 10.8995 6.30418C10.9423 6.36901 10.9682 6.44343 10.9751 6.52076C10.982 6.59809 10.9695 6.67592 10.9389 6.74726L10.0019 8.93426C9.96592 9.01872 9.90585 9.09071 9.8292 9.14122C9.75254 9.19173 9.6627 9.21853 9.5709 9.21826Z" fill="white"></path><path d="M14.5708 4.68726C14.303 4.68778 14.0425 4.77427 13.8276 4.93398C13.6127 5.0937 13.4548 5.3182 13.3771 5.57443C13.2994 5.83065 13.306 6.10506 13.3959 6.35725C13.4859 6.60944 13.6545 6.82607 13.8768 6.97526C13.8981 6.98957 13.9156 7.00893 13.9276 7.03161C13.9396 7.05428 13.9459 7.07958 13.9458 7.10526V10.4683C13.9458 10.7687 13.8375 11.0592 13.6408 11.2863C13.4441 11.5135 13.1722 11.6622 12.8748 11.7053C12.8526 11.7082 12.83 11.7065 12.8086 11.7001C12.7871 11.6936 12.7673 11.6828 12.7504 11.6681C12.7334 11.6534 12.7198 11.6354 12.7104 11.615C12.701 11.5947 12.696 11.5726 12.6958 11.5503V4.37426C12.6955 4.12566 12.5966 3.88733 12.4207 3.71164C12.2448 3.53594 12.0064 3.43726 11.7578 3.43726H1.7578C1.50937 3.43752 1.2712 3.53633 1.09553 3.71199C0.91987 3.88765 0.821065 4.12583 0.820801 4.37426V14.0623C0.820801 14.1854 0.84507 14.3073 0.892221 14.4211C0.939372 14.5348 1.00848 14.6381 1.0956 14.7252C1.18271 14.8122 1.28612 14.8812 1.39992 14.9282C1.51372 14.9752 1.63567 14.9994 1.7588 14.9993H11.7588C11.8819 14.9993 12.0039 14.975 12.1176 14.9278C12.2314 14.8807 12.3347 14.8116 12.4217 14.7245C12.5087 14.6373 12.5777 14.5339 12.6248 14.4201C12.6718 14.3063 12.6959 14.1844 12.6958 14.0613V13.1203C12.6955 13.0802 12.7106 13.0416 12.7379 13.0124C12.7653 12.9832 12.8028 12.9656 12.8428 12.9633C13.4792 12.9258 14.0772 12.6466 14.5146 12.1828C14.9519 11.7191 15.1956 11.1057 15.1958 10.4683V7.10526C15.1959 7.07951 15.2024 7.05418 15.2146 7.03151C15.2268 7.00884 15.2444 6.98952 15.2658 6.97526C15.4882 6.82603 15.6568 6.6093 15.7468 6.35701C15.8367 6.10473 15.8432 5.83022 15.7654 5.57395C15.6875 5.31767 15.5294 5.09318 15.3144 4.93354C15.0993 4.7739 14.8386 4.68757 14.5708 4.68726ZM5.5078 13.2803H2.6968C2.57629 13.2747 2.46256 13.2229 2.37925 13.1356C2.29594 13.0484 2.24945 12.9324 2.24945 12.8118C2.24945 12.6911 2.29594 12.5751 2.37925 12.4879C2.46256 12.4006 2.57629 12.3488 2.6968 12.3433H5.5098C5.63031 12.3488 5.74404 12.4006 5.82735 12.4879C5.91066 12.5751 5.95715 12.6911 5.95715 12.8118C5.95715 12.9324 5.91066 13.0484 5.82735 13.1356C5.74404 13.2229 5.63031 13.2747 5.5098 13.2803H5.5078ZM11.7578 9.37426C11.7578 9.53984 11.6921 9.69866 11.5751 9.81585C11.4581 9.93303 11.2994 9.99899 11.1338 9.99926H2.3838C2.21804 9.99926 2.05907 9.93341 1.94186 9.8162C1.82465 9.69899 1.7588 9.54002 1.7588 9.37426V5.93726C1.7588 5.77167 1.82451 5.61285 1.94151 5.49567C2.0585 5.37849 2.21721 5.31252 2.3828 5.31226H11.1328C11.215 5.31212 11.2963 5.32819 11.3723 5.35954C11.4482 5.39089 11.5172 5.43691 11.5754 5.49496C11.6335 5.55301 11.6797 5.62195 11.7111 5.69785C11.7426 5.77374 11.7588 5.8551 11.7588 5.93726L11.7578 9.37426Z" fill="white"></path></svg></div>
     
        <div class="home-header__text">Slots</div></div>
 
                                    
                   <div  style="margin-left: 1rem;">                 
                                    
                                    
                                       
                                  
                                 

               
                                           
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=112" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live1.png" style="    max-width: 213px" alt="">
                                                                                                     
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=175" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live2.png" style="    max-width: 213px" alt="">
                                                                                                    
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=133" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live3.png" style="    max-width: 213px" alt="">
                                                                                                  
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                               <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=198" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live4.png" style="    max-width: 213px" alt="">
                                                                                                         
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=201" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live5.png" style="    max-width: 213px" alt="">
                                                                                                       
 <div class="labelinfoimg " style="font-style: italic;    margin-bottom: -1.5rem;margin-right: -8rem; width: 3rem;background: linear-gradient(293deg,#f2be54 .06%,#fb9168 98.49%);">TOP</div>
 
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=220" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live6.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=178" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live7.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=168" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live8.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    
                               <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/game?id=203" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/live/live9.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>    

                                                           
                                <div id="gameses" class="game_shape12 blackz " style="float: left;    height: 150px;">

                                                         <a href="/slot?=allgames" class="mode-block scale1" style="">
                                                        <img class="" src="/extra/index/slot/more.png" style="    max-width: 213px" alt="">
                                                           </a>
                                                           </div>  
</div>
</div>
    
    
</center>












                        </div>



<style>
 .caption_Left__1XjxL {
    display: flex;
    align-items: center;
}
.caption_Right__3I0KL {
    margin-left: 57%;
    color: #e9eefe;
}
.caption_Caption__uOxoF
{
    display: flex;
    align-items: center;
}
.caption_Left__1XjxL svg {
    margin-right: -5px;
    font-size: 16px;
}

.icon {
    display: inline-flex;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
}
.caption_Caption__uOxoF {
    /* margin-bottom: 25px; */
    font-weight: 500;
    font-size: 16px;
}

    .labelinfoimg2 {
    color: #ffffff !important;
    position: absolute;
    z-index: 1;
    bottom: 140px;
    right: 10px;
    padding: 4px 6px;
    font-weight: bold;
    font-size: 12px;
    /* background-color: rgb(110 100 207); */
    border-radius: 6px;
    background: linear-gradient(45deg,#4641b9,#6155c5 98.44%);
    transition: background-color .3s ease;
    box-shadow: 0px 10px 30px #5954c3;
}

    
</style>
<style>

@keyframes trambling-animation{
	0%,50%,100%{
		transform:rotate(0deg);
	}
	10%,30%{
		transform:rotate(-3deg);
	}
	20%,40%{
		transform:rotate(3deg);
	}
}
.trambling{
	animation:1.2s ease-in-out 0s normal none infinite running trambling-animation;
}


.labelinfoimg {
    color: #ffffff !important;
    position: absolute;
    z-index: 1;
bottom: 141px;
    right: 136px;
    padding: 4px 6px;
    font-weight: bold;
    font-size: 12px;
    width: 70px;
    background: linear-gradient(90deg,#64d662 .06%,#16b31d 98.49%);
    border-radius: 6px;
    transition: background-color .3s ease;
    box-shadow: inset 0 2px 5px #fff6;
}
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
.table2 {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    border-color: grey;
    font-variant: normal;
}
</style>


                        

                    </div>


                    <script>
                            function sendMesSupport() {
    if ($("#mesSupport").val() == "") {
        return $("#errorMesSupport").show().html("Введите сообщение");
    }
    $.ajax({
        type: 'POST',
        url: '/action.php',
        beforeSend: function () {
            $("#errorMesSupport").hide();
        },
        data: {
            type: "sendMesSupport",
            sid: Cookies.get('sid'),
            mes: $("#mesSupport").val()
        },
        success: function (data) {
            location.reload();
        }
    });
}
                        </script>

                </div>


<?


require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");

?>

    


<script>history.pushState(null, null, window.location.pathname.split("?")[0]);</script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=t0l4mk8srjk1" name="c-1m1i84a7sfb0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=j3m5luo2lm13" name="c-m1yvhjw86w55" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>