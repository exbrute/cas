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

.badge7 {
    font-size: 10px;
    font-weight: 500;
    font-family: -apple-system,BlinkMacSystemFont,inter ui,Roboto,sans-serif;
    padding: 3px 5px 4px;
    border-radius: 40px;
}
</style>

<script>
function wheelbonus()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Отключено',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
function createPromo()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для создания промо-кодов нужен депозит от 1000р за всё время.',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
function promo3()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Промокод закончился или вы его уже активировали',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
function nyerror()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Данный бонус выдается 1 раз за все время.',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}

function promo2()
{
new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Промокод активирован',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
function getVK()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для получения бонуса привяжите профиль ВКонтакте',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}

function getVK2()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Для активации промо-кода привяжите профиль ВКонтакте',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}
</script>

<script>



function actPromokod() {


if ($("#prNum123").val() == ""){


}


$.ajax({
type: 'POST',
url: '/action.php',
beforeSend: function() {
$('.btn-get-actpromo').addClass("disabled");
},
data: {
type: "activePromo",

promoactive: $("#prNum123").val(),

},
success: function(data) {
$('.btn-get-actpromo').removeClass("disabled");
$('#error_actpromo').hide();
var obj = jQuery.parseJSON(data);
if (obj.success == "success") {
promo2();
$(".maksksmaksks").hide();
$(".btn-get-actpromo").hide()


updateBalance(obj.balance, obj.new_balance);
updateBalanceMobile(obj.balance, obj.new_balance);

return false;
}else{

promo3();
$("#succes_actpromo").hide();

}
}
});

}

</script>

<script type="text/javascript">
	
	

	function actPromo() {
										
										
										if ($("#prNum").val() == ""){
										    $('#error_actpromo').show();
										return $('#error_actpromo').html('Введите промокод');
										
										}
									
										
									$.ajax({
                                        type: 'POST',
                                        url: '/action.php',
										beforeSend: function() {
											$('.btn-get-actpromo').addClass("disabled");
										},	
                                        data: {
                                            type: "activePromo",
                                            
                                            promoactive: $("#prNum").val(),
											
                                        },
                                        success: function(data) {
                                            $('.btn-get-actpromo').removeClass("disabled");
											$('#error_actpromo').hide();
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_actpromo").show();
                                               $(".maksksmaksks").hide();
                                               $(".btn-get-actpromo").hide()
											  $('#succes_actpromo').html("Промокод активирован!");
											  
											  updateBalance(obj.balance, obj.new_balance);
											  updateBalanceMobile(obj.balance, obj.new_balance);
											 
																						 return false;
                                            }else{
												
												$('#error_actpromo').show();
												$("#succes_actpromo").hide();
												return $('#error_actpromo').html(obj.error);
											}
                                        }
                                    });
                                    
                                }
</script>

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


     height: 255px;
    border-radius: 20px;
   }
   
       .game_shape12 { 
            display: flex;


    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
     height: 220px;
    border-radius: 20px;
    margin: 5px;
   }
   
       .game_shape13 { 
            display: flex;


    box-shadow: 0 15px 85px rgb(215 211 236 / 45%);
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
margin-top:-5px;
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
  </style> 
  
  <? 
  $onlinedice = rand(35,67);
    $onlinemines = rand(55,98);
  
  ?>

                <div class="col7 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                                                          
</center>
                        </div>
</div>
                       
<style>
    .header-wrappers{
 
     
    background: linear-gradient(45.87deg, #7274ff 6.6%, #7867fb 102.94%);
    color: #fff;
    font-size: 16px;
    border-radius: 10px;
    padding: 10px;
    margin-bottom: 1rem;
    
     
    }
     
   
 @media screen and (max-width: 432px){
     
  #item1block{
      display: inline-grid;
      
  }   
     
     
  #item2block{
      display: inline-grid;
      
  }   
  
    #item3block{
      display: inline-grid;
      
  }  
  
  #image1{
        max-height: 200px;
  }
  
  
  #image2{
        max-height: 200px;
  }  
 }
   
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
    background: linear-gradient(90deg,#aa36d6 .06%,#a726cb 98.49%);
    border-radius: 4px;
    color: #fff;
    display: flex;
    position: absolute;
    right: 0;
    font-weight: 600;
    height: 40px;
    justify-content: center;
    line-height: 17px;
    margin-right: 5px;
    text-align: center;
    margin-top: -24px;
    width: 36px;
    cursor: pointer;
}
.fiatbtn:hover {
background: linear-gradient(90deg,#5f54da .06%,#6559e7 98.49%);
}
.bonuses-title-content {
    display: flex;
    justify-content: center;
    position: relative;
margin: 25px 0;
    overflow: hidden;
}
.bonuses-title-container:first-child {
    padding-left: 20px;
}

<style>
.bonuses-title-container:last-child {
    padding-left: 10px;
    padding-right: 20px;
}
<style>
.bonuses-title-container {
    display: flex;
    background: #13151D;
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


<div class="header-wrappers">
    <img src="/extra/panel/icoBonusZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    Бонусы
</div>
<div data-v-7e2626f1="" class="bonuses-title-content"><div data-v-7e2626f1="" class="bonuses-title-container"><div data-v-7e2626f1="" class="bonuses-title">
          Бонусы от Beeze
        </div></div></div>
  <div class="wrapper svelte-8q9kr8" style="height: 18rem; margin-bottom:1rem">
        <div class="wrapper__body box outlined svelte-6hwl18" style="    background: linear-gradient(45.87deg, #b46fff 6.6%, #d429ff 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                 <div tooltip="Отыгровка 10X" flow="up" class="fiatbtn visual">?</div>
                <img src="/extra/bonus/ny.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Новогодний бонус</h2>
                
                </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">В честь нового 2024 года, комманда Beeze дарит вам большой промокод на 1 000 монет!</span>        
              
                    
                    </p></section> 
                   
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                            <img src="/extra/bonus/загруженное11.png"style="width: 73px;margin-top: -78px;float: right;" alt="d">
                                    
                                    <span class="countdown__days">Конец акции 14.01.2024</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo" style="background: linear-gradient(45.87deg, #a866da 6.6%, #b128d3 102.94%);"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl" style="">
                                                    <img src="/extra/coupon.png"style="width:24px;" alt="d">BEEZE_2024</div></div> 
                                           
                                           
                                           
                                           
                                                    <button href="#modalVoucher" data-toggle="modal"  class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Получить</button>

                                                    </div></div></div></div>
<div id="item1block"class="cards__row svelte-xf9bn3">
    
 
 
    
 <? if ($bonusVK == 0){?>   
    
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
                <img src="/extra/bonus/bonus.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Ежедневный бонус</h2>
                
                </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Каждый день вы можете получить до 100 монет на свой баланс</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Каждые 24 часа</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl" style="">
                                                    <img src="/extra/profit.png"style="width:24px;" alt="d">до 100</div></div> 
                                                    <button onClick="getVK()"  class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Получить</button></div></div></div></div>
  
  
  
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
                
                <img src="/extra/bonus/promocode.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
   
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Промокод</h2> </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Если у вас есть промокод, вы можете его активировать тут</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Введите промокод ниже</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl2" style="">
                                                    <img src="/extra/coupon.png" style="width:24px;" alt="d">
                                                    
                                                    <input class="form-controls"  id="prNum123"  type="text" placeholder="Введите промокод" >
                                                    
                                                    </div></div> 
                                                    <button onClick="getVK2();" class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Активировать</button></div></div></div></div>



<?}else if($bonusVK == 1){?>

    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
<img src="/extra/bonus/bonus.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Ежедневный бонус</h2> </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Каждый день вы можете получить до 100 монет на свой баланс</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Каждые 24 часа</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl" style="">
                                                    <img src="/extra/profit.png"style="width:24px;" alt="d">до 100</div></div> 
                                                    <button onClick="getPromo()"  class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Получить</button></div></div></div></div>
  
  
  
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
<img src="/extra/bonus/promocode.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Промокод</h2> </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Если у вас есть промокод, вы можете его активировать тут</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Введите промокод ниже</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl2" style="">
                                                    <img src="/extra/coupon.png" style="width:24px;" alt="d">
                                                    
                                                    <input class="form-controls"  id="prNum123"  type="text" placeholder="Введите промокод" >
                                                    
                                                    </div></div> 
                                                    <button onClick="actPromokod();" class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Активировать</button></div></div></div></div>

   <?}?>
      
  </div>





<div id="item2block" class="cards__row svelte-xf9bn3">
    
    
    
    
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: #fff;border: 2px solid transparent;box-shadow: 0px 0px 10px -5px #aeaeae;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
                <img src="/extra/bonus/VK2.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
   
                
                <h2 class="svelte-5yv3lf" style="color: rgb(182 176 215);">Бонус за репост</h2> </div> 
                <p class="svelte-5yv3lf bottomeed" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold"style="    color: #b6b0d7;">Сделай репост и получи бонус на баланс</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                           
                                
                                <div style="display: contents;">
                                  
                                         <div class="progress svelte-1u851mo" style="background: linear-gradient(45.87deg, #e8e5f8 6.6%, #f4f2ff 102.94%);"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl222" style="">
                                                    <img src="/extra/vks.png"style="width:24px;" alt="d">50 монет</div></div> 
                                                    <button onclick="location.href = 'https://vk.com/wall-213209074_163';" class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Сделать репост</button></div></div></div></div>
  
  
  
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: #fff;border: 2px solid transparent;box-shadow: 0px 0px 10px -5px #aeaeae;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
                <img src="/extra/bonus/TG2.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
   
                
                <h2 class="svelte-5yv3lf" style="color: rgb(182 176 215);">Промокоды в телеграме</h2> </div> 
                <p class="svelte-5yv3lf bottomeed" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold"style="    color: #b6b0d7;">Почти ежедневно мы даем промокоды в нашем телеграме</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                           
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo" style="background: linear-gradient(45.87deg, #e8e5f8 6.6%, #f4f2ff 102.94%);"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                              </div> 
                                                    <button onclick="location.href = 'https://t.me/beezecasino';" class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Подписаться</button></div></div></div></div>
 
 
  
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: #fff;border: 2px solid transparent;box-shadow: 0px 0px 10px -5px #aeaeae;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
                <img src="/extra/bonus/VK2.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
   
                
                <h2 class="svelte-5yv3lf" style="color: rgb(182 176 215);">Рассылка</h2> </div> 
                <p class="svelte-5yv3lf bottomeed" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold"style="    color: #b6b0d7;">Включи уведомления нашей группы ВК и не пропускай новости!</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                           
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo" style="background: linear-gradient(45.87deg, #e8e5f8 6.6%, #f4f2ff 102.94%);"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                              </div> 
                                                    <button onclick="location.href = 'https://vk.com/beeze_casino';" class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Включить</button></div></div></div></div>
   
 
  
  </div>

<div id="item1block"class="cards__row svelte-xf9bn3" style="">
    
 

    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
<img src="/extra/bonus/bonus.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Кешбек</h2> </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Возвращайте 1% от потраченных средств.</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Неограниченное использование</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl" style="">
                                                    <img src="/extra/profit.png"style="width:24px;" alt="d">0 монет</div></div> 
                                                    <button onClick="nysoon()"  class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Скоро</button></div></div></div></div>
  
  
  
 
    <div class="wrapper svelte-8q9kr8">
        <div class="wrapper__body box outlined svelte-6hwl18" style="background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);border: 2px solid transparent;">  
        <div class="bg svelte-8q9kr8"></div> <section>
            <div class="row svelte-5yv3lf">
                
<img src="/extra/bonus/bonus.png"style="width:24px;margin-top: -10px;margin-right: -10px;" alt="d">
                
                
                <h2 class="svelte-5yv3lf" style="color: rgb(255, 255, 255);">Рейкбэк</h2> </div> 
                <p class="svelte-5yv3lf" style="color: rgba(255, 255, 255, 0.8);">
                    
             <span class="text-bold">Возвращайте 10% от преимущества казино с каждой сделанной ставки.</span>        
                    
                    
                    </p></section> 
                    <div class="row svelte-8q9kr8">
                        <div class="time svelte-35srnq">
                            <div class="time__header svelte-35srnq" style="">
                                <div class="countdown">
                                    
                                    
                                    <span class="countdown__days">Неограниченное использование</span> </div></div> 
                                
                                <div style="display: contents;">
                                  
                                        <div class="progress svelte-1u851mo"></div></div></div> 
                                        <div class="coins svelte-8q9kr8">
                                            <div style="display: contents; width: 200px;">
                                                <div class="coins__wrapper svelte-tguzjl" style="">
                                                    <img src="/extra/profit.png"style="width:24px;" alt="d">0 монет</div></div> 
                                                    <button onClick="nysoon()"  class="dark_btn has-gradient-border dark-btn_outlined  svelte-ozl4u3" style="font-color: black;font-size: 1.1rem; min-height: 50px;min-width: 140px; flex: 1; ">Скоро</button></div></div></div></div>
  
      
  </div>

 
   <script>
   

  
  
function nysucces()
{
new Noty({
type: 'success',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Бонус успешно получен!',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}  
  
 
function nysoon()
{
new Noty({
type: 'error',
layout: 'bottomLeft',
theme: 'mint',
timeout: 1000,
text: 'Бонус не активен',
animation: {
open: 'animated bounceInLeft', // Animate.css class names
close: 'animated bounceOutLeft' // Animate.css class names
}
}).show();

}  

</script>
 

<!--
<div id="item3block" class="cards__row svelte-xf9bn3">



     <img id="image1" src="/extra/bonus/cashback.png"style="     box-shadow: 0px 0px 20px -5px #aeaeae; cursor:pointer;  height: 300px;border-radius: 0.7rem;" alt="d" onclick="location.href = 'https://vk.com/dizmaaa';">
<img id="image2" src="/extra/bonus/feedback.png"style="     box-shadow: 0px 0px 20px -5px #aeaeae; cursor:pointer;  height: 300px;border-radius:  0.7rem;" alt="d" onclick="location.href = 'https://vk.com/dizmaaa';">
</div>-->



<style>
button.svelte-ozl4u3:disabled {
    pointer-events: none;
}
.progress{
        background: linear-gradient(45.87deg, #6666da 6.6%, #6f28d3 102.94%);
}

div.svelte-tguzjl222 {
    width: 50%;
    display: grid;
    grid-template-columns: auto auto;
    align-items: center;
    justify-content: start;
    grid-column-gap: 10px;
    padding: 14px 13px;
    color: #b6b0d7;
    font-weight: 500;
    font-size: 16px;
    line-height: 100%;
    border: 2px solid rgb(247 245 254);
    border-radius: 10px;
}



button:disabled {
    opacity: 0.7;
}
.has-gradient-border {
    position: relative;
}


.dark_btn {
    font-size: 14px;
    font-weight: 500;
    position: relative;
    color: black;
background:linear-gradient(45.87deg, #FFDB6F 6.6%, #FFBB29 102.94%);
border-color: #FFDB6F;
    border-radius: 8px;
    cursor: pointer;
    border: none;
    outline: none;
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    -webkit-transition: .2s linear;
    -o-transition: .2s linear;
    transition: .2s linear;
    touch-action: manipulation;
}




.dark-btn_outlined:after {
    border-radius: 8px;
    background: linear-gradient(231.26deg, #FFE3A6 9.72%, rgba(255, 203, 91, 0) 67.39%); border-box;
}
.has-gradient-border:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: inline-block;
    border: 2px solid transparent;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    pointer-events: none;
}


 p.svelte-5yv3lf {
    margin-top: 20px;
    margin-bottom: 20px;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 155%;
}

.bottomeed {
margin-bottom: -15px;

}

.wrapper.svelte-1u851mo {
    position: relative;
    height: 25px;
    border-radius: 8px;
    background: #fff;
}   
div.svelte-tguzjl {
width: 50%;
    display: grid;
    grid-template-columns: auto auto;
    align-items: center;
    justify-content: start;
    grid-column-gap: 10px;
    padding: 14px 13px;
    color: #fff;
    font-weight: 500;
    font-size: 16px;
    line-height: 100%;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
.form-controls {
display: block;
    width: 100%;
    height: 10px;
    padding: 0.46875rem 0.625rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #fff;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #823bff00;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-controls::-webkit-input-placeholder {color:#eae6ff;}

div.svelte-tguzjl2 {
width: 50%;
    display: grid;
    grid-template-columns: auto auto;
    align-items: center;
    justify-content: start;
    grid-column-gap: 10px;
    padding: 14px 13px;
    color: #fff;
    font-weight: 500;
    font-size: 16px;
    line-height: 100%;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}
.coins.svelte-8q9kr8 {
    display: flex;
    gap: 10px;
}

.coins {
    display: flex;
    align-items: center;
}
.mt-5 {
    margin-top: 5px;
}
.text-bold {
    font-weight: 800;
    color: #fff;
}
.row.svelte-8q9kr8 {
    display: flex;
    flex-direction: column;
}
.time.svelte-35srnq {
    text-align: center;
    font-weight: 600;
    font-size: 12px;
    line-height: 155%;
    color: #fff;
    margin-bottom: 15px;
}

.time__header.svelte-35srnq {
    margin-bottom: 12px;
    font-weight: 600;
    font-size: 12px;
    line-height: 155%;
    color: #fff;
}
.time.svelte-35srnq {
    text-align: center;
    font-weight: 600;
    font-size: 12px;
    line-height: 155%;
    color: #fff;
    margin-bottom: 15px;
}

    .cards__row.svelte-xf9bn3 {
    display: flex;
    margin-bottom: 15px;
    gap: 10px;
}
.wrapper.svelte-8q9kr8 {
    position: relative;
    flex: 5;
}

main.svelte-3b7x7q {
    width: 100%;
    display: flex;
    flex-direction: column;
    max-width: 1200px;
    margin: auto;
    justify-content: center;
    row-gap: 14px;
    color: var(--color-gray);
    padding-bottom: 25px;
    overflow-x: hidden;
}
.wrapper.svelte-8q9kr8>.wrapper__body {
    position: relative;
    display: grid;
    align-content: space-between;
    padding: 25px 22px 32px 30px;
}
.box.svelte-6hwl18 {
    position: relative;
    z-index: 0;
    width: 100%;
    height: 100%;
background: linear-gradient(45.87deg, #6F7DFF 6.6%, #8729FF 102.94%);
    border-radius: 12px;
}
    
    .bg.svelte-8q9kr8 {
    position: absolute;
    z-index: -1;
    display: block;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: .7;
    background: url(/extra/partnership.png) no-repeat;
    background-position: right bottom;
    pointer-events: none;
}

.row.svelte-5yv3lf {
    display: flex;
    align-items: center;
    gap: 20px;
}
h2.svelte-5yv3lf {
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 21px;
}
div.svelte-1lxeg5l {
    display: flex;
    gap: 5px;
    padding: 2px 10px;
    background: var(--bg-color);
    border-radius: 6px;
    font-style: normal;
    font-weight: 700;
    font-size: 14px;
    line-height: 19px;
    color: #fff;
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