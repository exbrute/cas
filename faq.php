<?
require ("components/header.php");
require ("components/gamebar.php");
 require ("components/livewins.php");
?>

<style>
a{
        color: #a8a2ff;
}

 @media screen and (max-width: 432px){


#accordion {
      max-width: 92%;
}
}

.col7 {
flex: 0 0 100%;
max-width: 100%;
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
    z-index: 2;
}

.ui-accordion-header.ui-state-active {
background-color: #f7f5fe;
    border-bottom-width: 0;
    color: #312c48;
}

.ui-accordion-header {
    font-size: 14px;
    font-weight: 500;
    color: #312c4e;
    margin-bottom: 0;
    border: 1pxsolidrgba(72,94,144,.16);
    background-color: #f7f5fe;
    padding: 12px 15px 12px 35px;
    position: relative;
    outline: none;
    cursor: pointer;
    transition: all .2s ease-in-out;
}

.ui-accordion-header:hover {
    color: #a9bbc7;

}
.ui-accordion-content {

    border-top-width: 0;
    padding: 15px 15px 15px 35px;
    position: relative;
    color: #312c48;
    background: #ffffff;
}




.feedback_Feedback__10j2- {
    display: flex;
}

.feedback_Item__2ImlH {
    width: 50%;
    margin: 0 15px 0 0;
}
.feedback_Content__5wXAR {
    padding: 15px 20px;
    border-radius: 6px;
border: 2px solid #e2e0eb;
    font-size: 14px;
    position: relative;
    display: flex;
}
.feedback_Icon__dQxDm {
    font-size: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    border-right: 1px solid #333a48;
    padding-right: 18px;
}
.icon {
    display: inline-flex;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
}
.feedback_TextWrapper__3B2Tm {
    padding-right: 41px;
    color: #8a91a0;
}
.feedback_TextTitle__1Rs35 {
    color: #312c48;
    font-size: 15px;
    margin-bottom: 3px;
    font-weight: 500;
}
.feedback_TextWrapper__3B2Tm a, .feedback_TextWrapper__3B2Tm button {
    font-size: 15px;
    color: #3077f7;
    border-bottom: 1px solid transparent;
    margin-bottom: 3px;
    display: inline-block;
}
.feedback_ArrowBtn__nIxve {
    position: absolute;
    right: 20px;
    top: 50%;
    width: 36px;
    height: 36px;
    color: #fff;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    background: #333a48;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px;
    cursor: pointer;
    outline: none;
    border: 0;
}
.feedback_ArrowBtn__nIxve svg {
    -webkit-transform: rotate(-180deg);
    transform: rotate(-180deg);
    fill: #fff;
    height: 15px;
    width: 15px;
}

</style>
    
            <div class="row ">

                     

                <div class="col7 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                    
                    
<div class="col7 col-xl-10 mg-t-10" style="">

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
    <img src="/extra/panel/icoFaqZZ.png" style="width: 36px;margin-right:12px; " alt="ico">
    
    FAQ
</div>


    <div class="cardh">
   
                
          

     
   

       
        
               



  <ul id="accordion" class="accordion" style="width:97%">
    <li>
      <div class="link"><i class="fa fa-question"></i>О Beeze<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">Beeze — Лицензионные игры с выводом денег. На сайте представлены 8 авторских игр с увлекательной механикой и высокими выигрышными коэффициентами. Все наши игры имеют проверку на честность.</a></li>
      </ul>
    </li>
    <li>
        
<li>
      <div class="link"><i class="fa fa-user"></i>Партнерская программа<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">Мы предлагаем современную партнерскую систему. Вы всегда будете получать процент с каждого пользователя, которого вы привлечете. Зарабатывайте <b>50%</b> от преимущества казино с каждого депозита, сделанной вашим рефералом. До 75% для обладателей любого трафика (Обращатся в поддержку)</a></li>
      </ul>
    </li>
    <li>
        
<li>
      <div class="link"><i class="fa fa-gift"></i>Бонусы<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">Помимо бонусов программы лояльности, на нашем сайте представлены дополнительные бонусы, такие как: Ежедневный бонус, промо-коды и др.</a></li>
      </ul>
    </li>
    <li>        
        
 <li>
      <div class="link"><i class="fa fa-percent"></i>Сотрудничество<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">По вопросам сотрудничества пишите в телеграм: @Beeze_affiliate В сообщении сразу указывайте всю нужную информацию (ссылку на ваш источник трафика, условия сотрудничества и т. д.)</a></li>
      </ul>
    </li>
    <li>          
        
 <li>
      <div class="link"><i class="fa fa-list-ul"></i>Правила<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">На нашем проекте строго запрещено: использование мульти-аккаунтов, кликеров, и прочий софт для увеличения шансов на выигрыш.</a></li>
      </ul>
    </li>
    <li>          
        
 <li>
      <div class="link"><i class="fa fa-rub"></i>Повторный депозит*<i class="fa fa-chevron-down"></i></div>
      <ul class="submenu">
        <li><a style="color:#312c71">Администрация сайта вправе запросить повторный депозит для вывода средств без обьяснения причин.</a></li>
      </ul>
    </li>
    <li>         
        
        
        
        
  </ul>

<style>


ul {
  list-style-type: none;
}

a {
  color: #b63b4d;
  text-decoration: none;
}

h1 {
  color: #FFF;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
 }

h1 a {
  color: #c12c42;
  font-size: 16px;
 }

.accordion {
    width: 100%;
    margin: 15px;
    background: #f7f5fe;
    border-radius: 10px;
    padding: 10px 10px 10px 10px;
    border: 2px solid #e2e0eb;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 42px;
  color: #4D4D4D;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link {
  border-bottom: 0;
}

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}


.accordion li.open .link {
    color: #8075bd;
}
.accordion li.open i {
  color: #8075bd;
}
.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

.accordion li.default .submenu {display: block;}
/**
 * Submenu
 -----------------------------*/
 .submenu {
  display: none;
background: #e8e5f8;
  font-size: 14px;
 }



.submenu a {
    display: block;
    text-decoration: none;
    padding: 12px;
    /* padding-left: 42px; */
    -webkit-transition: all 0.25s ease;
    -o-transition: all 0.25s ease;
    transition: all 0.25s ease;
}

 .submenu a:hover {
  background: #dddaef;
 }
</style>




        
                    <script>
                    
                    $(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  } 

  var accordion = new Accordion($('#accordion'), false);
});
                    $('#accordion2').accordion({
              heightStyle: 'content',
              collapsible: true
            });
                    </script>
              

          



            <script>

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

                </div>

<?
require ("components/outsidebar.php");
require ("components/modal.php");
require ("components/footer.php");
?>
<script>history.pushState(null, null, window.location.pathname.split("?")[0]);</script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=rmgw8bz0lmw1" name="c-l7i0qgu4basw" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=vjx489218bko" name="c-i2w4p3f14utc" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>