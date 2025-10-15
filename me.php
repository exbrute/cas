<?
require ("components/header.php");
require ("components/gamebar.php");
require ("components/livewins.php");

$res41 = mysql_query("SELECT COUNT(*) FROM kot_games WHERE user_id='$id'");
$getx = mysql_fetch_row($res41);
$total = $getx[0]; // всего записей




$result2 = mysql_query("SELECT max(win_summa) as win_summa FROM kot_games WHERE user_id='$id' "); 
$res2 = mysql_fetch_assoc($result2); 
$getx23 = $res2['win_summa'];



$result222 = mysql_query("SELECT sum(win_summa) as win_summa FROM kot_games WHERE user_id='$id'"); 
$res222 = mysql_fetch_assoc($result222); 
$getx2323 = $res222['win_summa'];

$result22233 = mysql_query("SELECT sum(sum) as sum FROM kot_games WHERE user_id='$id'"); 
$res22233 = mysql_fetch_assoc($result22233); 
$getfdsdf = $res22233['sum'];


?>
  

<script>
function promo3()
{
new Noty({
  type: 'error',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'Промокод не найден ',
  animation: {
    open: 'animated bounceInLeft', // Animate.css class names
    close: 'animated bounceOutLeft' // Animate.css class names
  }
}).show();

}
function tgError()
{
new Noty({
  type: 'error',
  layout: 'bottomLeft',
  theme: 'mint',
  timeout: 1000, 
  text: 'Недоступно',
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



</script>
   
            <div class="row ">
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



                    <!--<div class="spinner-border" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>-->
                                    <!--              <div class="games_block">
<div onclick="location.href='/index'" style="cursor: pointer" class="" id=""><img src="/logo.png" height="80" width="80" alt="logo"></div>
<br>

<div onclick="location.href='/dice'" style="margin-left: 14%; cursor: pointer; " class="game active preview"> <i class="ga fas fa-dice-d6" style="color: #ddd"></i> </div>
<div onclick="location.href='/mines'" style="margin-left: 14%; cursor: pointer;" class="game active preview"> <i class="ga fas fa-bomb" style="color: #ddd"></i> </div>



<div onclick="location.href='https://vk.com/bazarcash'" style="margin-left: 24%; margin-bottom: 7%;" class="" id="message"><img src="/vk.png" height="35" width="35" alt="vk"></div>

</div>
-->
<style>
.col7 {
    flex: 0 0 100%;
    max-width: 100%;
}

.cardh2 {
    position: relative;    
    margin-bottom: 100px;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff0;
    background-clip: border-box;
    border: 0px solid rgba(72,94,144,.16);
    border-radius: 1.25rem;
}
.om_n5 {
    margin-left: 15px;
    background-color: #2a2c39;
    border-radius: 1rem;
    width: 50%;
    padding: 10px;
    height: 20%;
    /* color: #fff; */
}
</style>

                <div class="col7 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                    
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


                        
<div class="cardh2 mg-b-500">
<div class="card-header bd-b-0">

          
                                
                                
<?$realbalance = number_format($balance, strlen(explode('.',$balance)[1]),',',' ');?>                               
 
<?$maxgames = number_format($total, strlen(explode('.',$total)[1]),',',' ');?>   
<?$maxsum = number_format($getx2323, strlen(explode('.',$getx2323)[1]),',',' ');

$var = intval(preg_replace('/[^\d.]/', '', $getx2323));
?>   



<?$maxwin = intval(preg_replace('/[^\d.]/', '', $getx23));  ?>
 <?$allsum = intval(preg_replace('/[^\d.]/', '', $getfdsdf));?>   
   
                                
  <div  class="grid-profile__item"><div class="user-box">
      <div  class="user-box__main"><div>
          <div  class="user-box__ava">
              <div  class="user-ava">
                  <img  style="width: 100%; border-radius: 50px" src="/images/PhotoProfileDefault.svg" alt="Avatar">
                  </div></div></div> 
                  <div  class="user-box__info">
                      <div class="user-box__header">
                          <span  class="user-box__name" style="font-size: 20px;font-weight: bold;"><?=$login?></span> 
                          <span  class="user-box__id text-caption color-grey text-center" style="font-size: 20px;font-weight: bold;color: #eae4ff;">#<?=$id?></span>
                          </div>
                          
       
                    </span> <div class="user-box__actions" style="    margin-top: 1rem;">




                                                 <div type="submit" class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="font-size: 13px;max-width:150px;cursor:pointer" data-v-2836fdb5-s="" href="#modalExit" data-toggle="modal"type="button" data-dismiss="modal">Выход</div>    

 <style>
.social {
    margin-bottom: 40px;
}
.items {
    display: flex;
}
.item {
    margin-right: 20px;
    width: 85px;
    height: 85px;
    position: relative;
    background: #e7e1ff;
    box-shadow: 0 4px 15px rgba(248,246,255,.25);
border-radius: 39px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.add {
    background: linear-gradient(90deg,#7449e6 .06%,#69a4ff 98.49%);
    box-shadow: 0 4px 35px rgba(114,88,234,.35);
    cursor: pointer;
}
.add {
    width: 30px;
    height: 30px;
    display: flex;
    border-radius: 20%;
    position: absolute;
    justify-content: center;
    align-items: center;
    bottom: -15px;
    left: 0;
    right: 0;
    margin: 0 auto;
}
      .success {
    width: 30px;
    height: 30px;
    display: flex;
    border-radius: 20%;
    position: absolute;
    justify-content: center;
    align-items: center;
    bottom: -15px;
    left: 0;
    right: 0;
    margin: 0 auto;
}
.success {
    background: #9dd664;
    box-shadow: 0 4px 35px #9dd664;
}
 </style>                       
                    </div>


<div class="navbar-right d-none d-sm-flex" style="  width: 220px!important;right: 30;position: absolute;    margin-top: -1rem;">
            
	            <a href="/withdraw" class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="font-size: 13px;max-width:150px;cursor:pointer">Вывод</a>
                       
            <a href="/deposit" class="btn btnwithdraw btn-uppercase flex-fill mg-r-10" style="font-size: 13px;max-width:150px;cursor:pointer">Пополнить</a>
            
  
        </div>









          
                    </div>
               
                    <div class="data" style="margin-top: 10px; margin-left: 3rem;  ">


</div>  




                    </div> 
                            <div  class="user-box__footer"><div  class="text-caption color-grey text-center">
              На сайте с <?=$datereg?>
            </div>
            
            
            </div>
            
            
            </div>
            
            
            
            </div>                              
       
                                
                           
                                
                                


<div  class="grid-profile__item" style="">
    <div  class="card-box" style="margin-top: 1rem; ">
        <div  class="card-box__head" style=""> 
            <div class="card-box__left">
                <div  class="card-box__title">
                    <i  class="i i-stat card-box__title-icon"></i>
                <span  class="card-box__title-text" style="color: #b0a6eb">Статистика</span>
                </div></div></div> 
                <div class="card-box__body card-box__body_py">
                    <div class="grid grid_md grid-justify-around grid-nowrap grid-ungap grid-wrap--dsm">
                        <div class="cell-inline cell-1-2--dsm">
                            <div class="vat-block">
                                <div class="vat-block__icon">
                                    <img src="/extra/profile/rocket.svg" style=""alt="">
                                    </div> 
                                    
                                    <span  class="vat-block__title"style="color: #312c48;">Всего игр</span>
                                    <span class="vat-block__nums vat-block__nums_blue">
                                        <span style=""><?=$maxgames?></span>
                                        </span></div></div> 
                                        <div class="cell-inline cell-1-2--dsm">
                                            <div  class="vat-block">
                                                <div  class="vat-block__icon">
                                                                                                        <img  src="/extra/profile/1829677.png" style="width: 2rem" alt="">
                                                    </div>
                                                    
                                                    
                                    <span  class="vat-block__title"style="color: #312c48;">Сумма всех ставок</span>
                                    <span class="vat-block__nums vat-block__nums_blue">
                                        <span style=""><?=$allsum?></span>
                                        </span></div></div> 
                                        <div class="cell-inline cell-1-2--dsm">
                                            <div  class="vat-block">
                                                <div  class="vat-block__icon">
                                                    <img  src="/extra/profile/cup.svg" style=""alt="">

                                                    </div>
                                                    
                                                    <span  class="vat-block__title"style="color: #312c48;">Сумма выигрышей</span> 
                                                    <span  class="vat-block__nums vat-block__nums_gold">
                                                        <span style=""><?=$var;?></span>
                                                        </span></div></div> 
                                                        <div class="cell-inline cell-1-2--dsm">
                                                            <div  class="vat-block">
                                                                <div class="vat-block__icon">
                                                                    <img  src="/extra/profile/bux.svg" style=""alt="">
                                                                    </div> 
                                                                    <span  class="vat-block__title"style="color: #312c48;">Макс. Выигрыш</span>
                                                                    
                                                                <span  class="vat-block__nums vat-block__nums_green">
                                                                    <span style=""><?=$maxwin;?></span>
                                                                    </span></div></div> 
                                                                
                                                                              </div></div></div></div>
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
<div  class="grid-profile__item" style="">
    <div  class="card-box" style="margin-top: 1rem;margin-bottom: -2rem;">
        <div  class="card-box__head">
            <div class="card-box__left">
                <div  class="card-box__title">
                    <i  class="i i-stat card-box__title-icon"></i>
                <span  class="card-box__title-text" style="color: #b0a6eb">Привязка социальных сетей</span>
                </div></div></div> 
               
               <div class="card-box__body card-box__body_py">
                    <div class="grid grid_md grid-justify-around grid-nowrap grid-ungap grid-wrap--dsm">
      <div class="cell-inline cell-1-2--dsm">
                       
                       
                       
                       
                            <div class="vat-block">
<div class="social">
<div class="items">
	<? if ($bonusVK == 0){?>
	<div class="item">
	<img src="/extra/VK2.png"  style="width: 48px;" class="vk" alt="Вконтакте">
	<a class="add" href="/auth/vk/redirects">
	<img src="/images/plus.svg" alt="Подключить">
	</a>
	</div>
    <?}else if($bonusVK == 1){?>
    <div class="item">
	<img src="/extra/VK2.png" style="width: 48px;" class="vk" alt="Вконтакте" />
	<span class="success">
	<img src="/images/checkWhite.svg" alt="Подключено" />
	</span>
	</div>
    <?}?>

</div>

</div>


<div class="social" style="    margin-left: 8rem;   margin-top: -7.8rem;"> 
<div class="items">
	<div class="item">
	<img src="/extra/TG.png"  style="width: 48px;" class="vk" alt="Телега">
	<a class="add" onClick="tgError();">
	<img src="/images/plus.svg" alt="Подключить">
	</a>
	</div>
	</div>
   



</div>
                             </div>                                      
                                                           
                                                                    
                                                                </div>
                                                                
                                                                              </div></div></div></div>
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              </div></div>


 




</div>

                            </div>

                        </div>


                <style>
.vat-block__title {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    display: block;
    margin-bottom: 2px;
    line-height: 1.2;
}
.vat-block__nums_green {
    color: #69d344;
}
.vat-block__nums_gold {
    color: #ffdc56;
}
.vat-block__nums_blue {
    color: #fab42d;
}
.vat-block__nums {
    font-size: 18px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
}
.vat-block {
    text-align: center;
}
.vat-block__icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    margin-bottom: 15px;
    margin-left: auto;
    margin-right: auto;
}            
                
.card-box__body_py {
    padding: 10px 16px;
}
.grid_md.grid-ungap {
    margin-bottom: -18px;
}
.grid_md {
    width: calc(100% + 18px);
    margin-left: -9px;
    margin-right: -9px;
}
.grid-justify-around {
    -o-box-pack: distribute;
    justify-content: space-around;
}
.grid-nowrap {
    -webkit-box-lines: single;
    -moz-box-lines: single;
    -o-box-lines: single;
    flex-wrap: nowrap;
}
.grid-ungap {
    margin-bottom: -32px;
}
.grid {
    margin-left: -16px;
    margin-right: -16px;
    width: calc(100% + 32px);
    display: flex;
    flex-wrap: wrap;
}
            
            .grid_md>[class^=cell] {
    padding-left: 9px;
    padding-right: 9px;
    margin-bottom: 18px;
}    
                
.card-box {
    background: #ffffff;
    box-shadow: 0px 10px 30px #cfcfcf0f;
    border-radius: 8px;
    padding: 16px 16px 24px;
    height: 100%;
}
.card-box__head {
    display: flex;
    justify-content: space-between;
    margin-bottom: 16px;
}
.card-box__title {
    display: flex;
    align-items: center;
    font-size: 14px;
    font-weight: 700;
}
.card-box__title-icon {
    font-size: 12px;
    color: #62687d;
    margin-right: 12px;
    display: block;
}
.card-box__title-text {
    display: block;
    margin-right: 4px;
}
.field-group {
    position: relative;
    display: block;
    width: 100%;
}
.field-group__wrap {
    position: relative;
}
.field-group_btn .field {
    padding-right: 155px;
}
.field {
    width: 100%;
    height: 56px;
    background: transparent;
    border: 1px solid #2b2a41;
    border-radius: 6px;
    color: #fff;
    transition: all .25s ease;
    font-size: 14px;
    font-family: "Roboto","Arial","Helvetica",sans-serif;
    font-family: var(--font-r);
    padding-left: 18px;
    padding-right: 18px;
}
.field-group__label {
    color: #6c718d;
    font-size: 14px;
    font-family: "Roboto","Arial","Helvetica",sans-serif;
    font-family: var(--font-r);
    width: calc(100% - 100px);
    white-space: nowrap;
    display: flex;
    align-items: center;
    overflow: hidden;
    text-overflow: ellipsis;
    pointer-events: none;
    position: absolute;
    left: 18px;
    top: 15px;
    text-align: left;
    transition: all .25s ease;
}
.field-group__btn {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
}
.btn2 {
    min-height: 40px;
    display: inline-flex;
    align-items: center;
    border: 1px solid transparent;
    background: linear-gradient(180deg,#f88a25,#fab42d 50.52%,#f8b025);
    border-radius: 6px;
    padding: 0 18px;
    justify-content: center;
    color: #13151d;
    font-size: 16px;
    text-align: center;
    transition: background-color 1s linear;
    font-weight: 500;
}
                    
                    
                    .grid-profile__item {
    display: grid;
    grid-template-rows: 1fr auto;
    margin: 0 0 24px;
    page-break-inside: avoid;
    -moz-column-break-inside: avoid;
    break-inside: avoid;
}
.user-box {
background-color: #f2f0f9;
    box-shadow: 0px 10px 30px #cfcfcf0f;
    border-radius: 8px;
    height: 100%;
    display: flex;
    flex-direction: column;
    background-image: url(/extra/profile/bg2.jpg);


background-repeat: no-repeat;

/*background-size: 100% 100%;*/

    text-align: center;
    max-height: 208px;
}
.user-box__main {
    padding: 24px;
    margin-top: auto;
    margin-bottom: auto;
    width: 100%;
    display: flex;
}
.user-box__info {
    margin-left: 25px;
    text-align: left;
    height: -webkit-min-content;
    height: -moz-min-content;
    height: min-content;
color: #fff;
}
.user-box__ava {
    display: flex;
    justify-content: center;
}
.user-ava {
border: 2px solid #ddd4fd;
    padding: 6px;
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
.user-box__footer {
    background: linear-gradient(45.87deg, #8b72ff 6.6%, #8167fb 102.94%);
    padding: 16px;
    width: 100%;
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
    color: #fff;
}
.text-caption {
    font-size: 14px;
    font-family: "Roboto","Arial","Helvetica",sans-serif;
    font-family: var(--font-r);
}
                </style>   
                        
                  <script>
                            
                            const scroll1 = new PerfectScrollbar('#scrollChat', {
            suppressScrollX: true
        });
        $("#scrollChat").scrollTop($("#scrollChat").prop("scrollHeight"));
        $("#scrollChat").perfectScrollbar('update');
                        </script>
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


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div><div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=gtcp3mkji2ij" name="c-oqkqsy4wyox8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div><div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=tfy2q1dj2fek" name="c-hevi4dkc6e5u" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>