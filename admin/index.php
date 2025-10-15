<?php


require("../inc/bd.php"); 
require("../inc/site_config.php"); 
session_start();
$sid = $_SESSION['hash'];

// проверка на админа
$admin_check = "SELECT * FROM kot_user WHERE hash = '$sid'";
$result_admin = mysql_query($admin_check);
$row = mysql_fetch_array($result_admin);
if($row)
{	
$last_check = $row['admin'];
}
if($last_check == 1) {
  ?>
<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    

    <title><?=$sitename?> - админ-панель</title>
    <script src="https://kit.fontawesome.com/6cce539f85.js"></script>
    <meta name="description" content="<?=$sitename?> - Настоящий сайт Нвути. Все комиссии берем на себя, бонус при регистрации. Произведем выплаты за 24 часа на любую платежную систему.">
    <meta name="keywords" content="нвути, <?=$sitename?>">

    <meta name="author" content="<?=$linksite?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../css/day.css" rel="stylesheet">
<link href="../files/all.css" rel="stylesheet">
<link href="../files/ionicons.css" rel="stylesheet">
<link href="../files/jqvmap.css" rel="stylesheet">

<link rel="stylesheet" href="../files/dfg_002.css">
<link rel="stylesheet" href="../files/dfg.css">
<link id="dfMode" rel="stylesheet" href="../files/skin.css">

<script src="../script.js"></script>
<script src="../files/jquery.js"></script>
<script src="../files/cbrd.js"></script>
<script src="../files/cookie.js"></script>
<script src="../files/bootstrap.js"></script>
<script src="../files/feather.js"></script>
<script src="../files/typehead.js"></script>
<script src="../files/perfect-scrollbar.js"></script>
<script src="../files/jquery_005.js"></script>
<script src="../files/jquery_006.js"></script>
<script src="../files/jquery_003.js"></script>
<script src="../files/Chart.js"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<script src="../files/dataTables.responsive.min.js"></script>
<script src="../files/responsive.dataTables.min.js"></script>
<script src="../files/dataTables.js"></script>
<script src="../files/jquery_002.js"></script>
<script src="../files/jquery_004.js"></script>
<script src="../files/moment.js"></script>
<script src="../files/daterangepicker.js"></script>
<script src="../files/odometer.js"></script>
<script src="../files/dfg_003.js"></script>
<script src="../files/dfg.js"></script>
<script src="../files/jquery-ui.min.js"></script>
<script src="../files/ion.js"></script>
</head>

<body class="page-profile df-roboto" style="font-family: -apple-system, BlinkMacSystemFont, sans-serif!important;">
<div class="navbar navbar-header navbar-header-fixed mob-head" style="position: fixed;top: 0;left: 0;right: 0;z-index: 999;">
 <a href="" id="mainMenuOpen" class="burger-menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
<line x1="3" y1="12" x2="21" y2="12"></line>
<line x1="3" y1="6" x2="21" y2="6"></line>
<line x1="3" y1="18" x2="21" y2="18"></line>
</svg></a>
<div class="navbar-brand d-md-none" style="width:100px!important">
<a href="/"><img style="cursor: pointer;" src="/images/nlogoD2.png" width="125" height="35" alt="logo"></a>
</div>
<div class="navbar-right">

</div>
</div>
<style>

.gameinc.present span, .gameinc:hover span {
    background: #0168fa!important;
    background: linear-gradient(45deg, #1c65c9 0%, #2c80ff 100%)!important;
}


        @media (max-width: 992px) {
        .mg-header {
            margin-top: 55px;
            z-index: 998!important;
        }
        .mg-content {
            margin-top: 90px;
            z-index: 998!important;
        }
     }
    
    </style>
   <header class="navbar navbar-header navbar-header-fixed mg-header" style="max-width: 1180px;margin-right: auto;margin-left: auto;position: fixed;top: 0;left: 0;right: 0;z-index: 999;">
<div class="navbar-brand d-none d-sm-flex" style="width:100px!important">
<a href="/"><img style="cursor: pointer;" src="/images/nlogoD2.png" width="110" height="35" alt="logo"></a>
</div>
<div id="navbarMenu" class="navbar-menu-wrapper">
<div class="navbar-menu-header">
<a href="/" class="df-logo">'.$sitename.'</a>
<a id="mainMenuClose" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
<line x1="18" y1="6" x2="6" y2="18"></line>
<line x1="6" y1="6" x2="18" y2="18"></line>
</svg></a>
</div>
<ul class="nav navbar-menu">
<li  class="nav-item active"><a href="/admin" class="nav-link">Настройки сайта</a></li>
<li  class="nav-item "><a href="/admin/bot" class="nav-link">Боты</a></li>
<li class="nav-item"><a href="/admin/users" class="nav-link">Пользователи</a></li>
<li class="nav-item"><a href="/admin/promo" class="nav-link">Промокоды</a></li>
<li class="nav-item"><a href="/admin/deps" class="nav-link">Пополнения</a></li>
<li class="nav-item"><a href="/admin/withdraws" class="nav-link">Выплаты</a></li>
<li class="nav-item"><a href="/admin/stat" class="nav-link">Статистика сайта</a></li>
<li class="nav-item"><a href="/admin/percent" class="nav-link">Шансы</a></li>

</ul>
</div>
<style>
            .new-mes {
                fill: rgba(250, 1, 1, 0.06)!important;
                color: #fa7001eb!important;
            }
            
            .ind-top
            {
            fill: rgba(0, 23, 55, 0.04);
            }
            .ind-top:hover
            {
                fill: rgba(1, 104, 250, 0.2);
                color: #0168fa;
            }
            
            
        
            
        </style>

</header>
    
   <div class="content content-fixed mg-content">
<div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
       <div class="card content-area">
	<div class="card-innr p-4">
		<div class="card-head">
                      
			<h4 class="card-title card-title-lg" style='float:left; padding-top:8px;'>Настройки</h4>
                      <button id='saved' class="btn-ccc btn btn-sm btn-outline btn-light input-bordered" style="float:right; width:130px;" onclick="saves()">Сохранить</button><br><br>
                      <hr>
		</div>
                      <!-- НАЧАЛО -->
                      <center>
   <div class="row" id="setting-tbl" style="margin-right:2%;margin-left:2%;width:100%;">
                                                        <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Название сайта</label>
                                                            <input type="text" class="form-control" id="sitename" placeholder="Название сайта" value="<?=$sitename?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Домен сайта</label>
                                                            <input type="text" class="form-control" id="sitedomen" placeholder="Домен сайта" value="<?=$sitedomen?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Ссылка на группу VK</label>
                                                            <input type="text" class="form-control" id="sitegroup" placeholder="Ссылка на группу VK" value="<?=$group?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Ссылка на сообщения VK</label>
                                                            <input type="text" class="form-control" id="sitesupport" placeholder="Ссылка на сообщения VK" value="<?=$site_support?>"/>
                                                          </div>
                                                        </div>
                    
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Мин. бонус в раздаче</label>
                                                            <input type="text" class="form-control" id="minbonus" placeholder="Мин бонус" value="<?=$min_bonus_s?>"/>
                                                          </div>
                                                        </div>
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Макс. бонус в раздаче</label>
                                                            <input type="text" class="form-control" id="maxbonus" placeholder="Макс бонус" value="<?=$max_bonus_s?>"/>
                                                          </div>
                                                        </div>
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Мин. сумма вывода</label>
                                                            <input type="text" class="form-control" id="minwithdraw" placeholder="Мин вывод" value="<?=$min_withdraw_sum?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Депозит для вывода</label>
                                                            <input type="text" class="form-control" id="depwithdraw" placeholder="Депозит для вывода" value="<?=$dep_withdraw?>"/>
                                                          </div>
                                                        </div>
                      
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Мин. сумма ставки</label>
                                                            <input type="text" class="form-control" id="minbet" placeholder="Мин ставка" value="<?=$min_bet?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Макс. сумма ставки</label>
                                                            <input type="text" class="form-control" id="maxbet" placeholder="Макс ставка" value="<?=$max_bet?>"/>
                                                          </div>
                                                        </div>
                                                    <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Мин. шанс выигрыша</label>
                                                            <input type="text" class="form-control" id="minper" placeholder="Мин шанс" value="<?=$min_per?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Макс. шанс выигрыша</label>
                                                            <input type="text" class="form-control" id="maxper" placeholder="Макс шанс" value="<?=$max_per?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Бонус за регистрацию</label>
                                                            <input type="text" class="form-control" id="bonusreg" placeholder="Бонус за регистрацию" value="<?=$bonus_reg?>"/>
                                                          </div>
                                                        </div>
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Прибавить к онлайну</label>
                                                            <input type="text" class="form-control" id="fakeonline" placeholder="Фейк онлайн" value="<?=$fake_online?>"/>
                                                          </div>
                                                        </div>
                      
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>ID группы VK</label>
                                                            <input type="text" class="form-control" id="idgroup" placeholder="12345" value="<?=$idvk?>"/>
                                                          </div>
                                                        </div>   
                      <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Токен группы VK</label>
                                                            <input type="text" class="form-control" id="token" placeholder="gvuegvue76784bkdd" value="<?=$tokenvk?>"/>
                                                          </div>
                                                        </div>                                   
                      <div class="form-group">
                      <div class="col-lg-12" style="">
                                                            <label>Мин. сумма пополнения</label>
                                                            <input type="text" class="form-control" id="mindep" placeholder="1" value="<?=$min_sum_dep?>"/>
                                                          </div>
                                                        </div>
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>ID FK</label>
                                                            <input type="text" class="form-control" id="fkid" placeholder="ID мерчанта FK" value="<?=$fk_id?>"/>
                                                          </div>
                                                        </div>
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Секрет 1 FK</label>
                                                            <input type="text" class="form-control" id="fksecret1" placeholder="Секрет 1 FK" value="<?=$fk_secret_1?>"/>
                                                          </div>
                                                        </div>
                       <div class="form-group">
                                                          <div class="col-lg-12" style="">
                                                            <label>Секрет 2 FK</label>
                                                            <input type="text" class="form-control" id="fksecret2" placeholder="Секрет 2 FK" value="<?=$fk_secret_2?>"/>
                                                          </div>
                                                        </div>
                     
                      
                      </div>
                     
                      </center>
                       <!-- КОНЕЦ -->
		</div>
	</div>
</div><!-- .card -->
   </div><!-- .container -->
</div><!-- .page-content -->
                      
<div class="footer-bar">
  <div class="container">
   <div class="row align-items-center justify-content-center">
    <div class="col-md-8">
        <style>
         ul.footer-links li {
          display: inline;
      }
  </style>
</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->
</div><!-- .footer-bar -->

</div>
<!-- SCRIPT -->
    <script>
    function saves() {
 $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
			   $('#saved').html('Сохранение..');
										},	
                                                                                data: {
         type: "save_edit",
         sitename: $("#sitename").val(),
         sitedomen: $("#sitedomen").val(),
         sitegroup: $("#sitegroup").val(),
         sitesupport: $("#sitesupport").val(),                                    
         sitesecret: $("#sitesecret").val(),
         minbonus: $("#minbonus").val(),
         maxbonus: $("#maxbonus").val(),                                                            
         minwithdraw: $("#minwithdraw").val(),                                         
         bonusreg: $("#bonusreg").val(),  
         fkid: $("#fkid").val(),                                                                                                                        fksecret1: $("#fksecret1").val(),
         fksecret2: $("#fksecret2").val(),
         //new
         depwithdraw: $("#depwithdraw").val(),   
                                                                                  
         minbet: $("#minbet").val(),     
                                                                                  
         maxbet: $("#maxbet").val(), 
                                                                                  
         minper: $("#minper").val(), 
                                                                                  maxper: $("#maxper").val(),
                                                                                  
         fakeonline: $("#fakeonline").val(),
                                                                                  
         fakeinterval: $("#fakeinterval").val(),
                                                                                  
         mindep: $("#mindep").val(),
         token: $("#token").val(),
         idgroup: $("#idgroup").val()  
                                                                                                                            },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {

                //$("#succes_edit").show();                               
				$("#saved").html("Сохранить");
                     //$("#setting-tbl").load("index.php #setting-tbl");
                                            
                                                              
                                            }else{
                //$("#error_edit").show();                               
				//$("#error_edit").html(obj.error);
                                            }
                                        }   
   });
}
    </script>
    <!-- END -->
<script src="../script/jquery.bundle.js"></script>
<script src="../script/datatables.min.js"></script>
<script src="../script/script.js?v=2"></script>
<script src="../script/jquery-3.2.1.min.js"></script>
</body>
</html>
<?php } else { header('Location: ../404'); } ?>