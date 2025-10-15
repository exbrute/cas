           <?php
  $onlinedice = rand(35,67);
    $onlinemines = rand(55,98);
  ?>                                                     
                                <div class="show-on-mobile game_shape13" style="float: left;">
                                                         <a href="/bonus" class="mode-block">
                                                        <img src="/extra/welcomebonusmobile2.png" width="385" height="220" alt="Приветственный бонус!">
                                                           </a>
                                                           </div>
                                                           
                                                           
                                                           
                                                           
                                                           
                                                           
                                <div class="game_shape12m blackz show-on-mobile" style="float: left; margin-top: 20px;">
                                    
                                                         <a href="/dice" class="mode-block2" >
                                                        <img src="/extra/index/main_dice.png" style="height: 33vh" alt="">
                                                      
                                                           </a>
                                                           </div>    
                                <div class="game_shape12m blackz show-on-mobile" style="float: left; margin-top: 20px;">
                                    
                                                         <a href="/bonusdice" class="mode-block2" >
                                                        <img src="/extra/index/bonus_dice2.png" style="height: 33vh" alt="">
                                                                                                                     <div class="labelinfoimg2 trambling">НОВИНКА</div>
                                                      
                                                           </a>
                                                           </div>  
                                <div class="game_shape12m blackz show-on-mobile" style="float: left; margin-top: 20px;">
                                    
                                                         <a href="/mines" class="mode-block2" >
                                                        <img src="/extra/index/main_mines.png" style="height: 33vh" alt="">
                                                      
                                                           </a>
                                                           </div>  
                                <div class="game_shape12m blackz show-on-mobile" style="float: left; margin-top: 20px; opacity: 0.5" onClick="gameInProcess();">
                                    
                                                         <a class="mode-block2" >
                                                        <img src="/extra/index/main_wheel.png" style="height: 33vh" alt="">
                                                                                                                                                                             <div class="labelinfoimg ">В РАЗРАБОТКЕ</div>
                                                      
                                                           </a>
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


     height: 255px;
    border-radius: 20px;
   }
   
       .game_shape12m { 
            display: flex;


    border-radius: 20px;
    margin: 5px;

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
   

   .bott222 {
       
   padding: 10px 15px;
   }
.hover-effect3 {
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
transition: all 0.3s ease;
}
.hover-effect3:hover{
margin-top:-2px;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
transition: all 0.3s ease;
}
.mode-block2 {
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


  </style> 
  
                                                       
                                                           
        <style>
        .afga3{

        }
.icon-wrap{
    color: #0d84fa;
}
        
.navmobile {
box-shadow: 0px -1px 5px #9acdff;
    list-style: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
	margin: -100px auto 0;
    width: 100%;
    max-width: 420px;
    margin: 0 auto;
    background-color: white;
    border-radius: 1.25rem;
    
    	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 70px;
}


.hidden {
  display: none !important;
}
.icon {
    display: inline-flex;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
}
.navmobile li>a, .navmobile li>button {
    display: flex;
    align-items: center;
    flex-direction: column;
    line-height: 11px;
    border: none;
    outline: none;
    background: transparent;
    cursor: pointer;
    text-align: center;
    justify-content: center;
    padding: 0;
    touch-action: manipulation;
    font-size: 11px;
    color: #111;
    text-transform: uppercase;
    font-weight: 500;
}
        
.show-on-mobile { display: none; }
/* Smartphone Portrait and Landscape */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px){ .show-on-mobile { display: inline; }}
			
			</style>