<?php
require("../inc/site_config.php");
require("../inc/bd.php");
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
// остальное - вывод юзеров и прочее
$sql_select1 = "SELECT COUNT(*) FROM kot_user";
$result1 = mysql_query($sql_select1);
$row = mysql_fetch_array($result1);
if($row)
{	
$users = $row['COUNT(*)'];
}
$sql_select22 = "SELECT COUNT(*) FROM kot_games";
$result22 = mysql_query($sql_select22);
$row = mysql_fetch_array($result22);
if($row)
{	
$games = $row['COUNT(*)'];
}
$sql_select33 = "SELECT SUM(suma) FROM kot_payments";
$result33 = mysql_query($sql_select33);
$row = mysql_fetch_array($result33);
if($row)
{	
$deps = $row['SUM(suma)'];
}
$sql_select44 = "SELECT SUM(sum) FROM kot_withdraws";
$result44 = mysql_query($sql_select44);
$row = mysql_fetch_array($result44);
if($row)
{	
$withdraws = $row['SUM(sum)'];
}
if($deps == '') {
  $deps = 0;
}
if($withdraws == '') {
  $withdraws = 0;
}
$sql_select5 = "SELECT * FROM kot_withdraws ORDER BY id + 0 DESC";
$result5 = mysql_query($sql_select5);
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
<link rel="stylesheet" href="../css/fa.css">
<link rel="stylesheet" href="../css/ti.css">
<link rel="stylesheet" href="../css/vendor.bundle.css">
<link rel="stylesheet" href="../css/loader-0.css">
<link rel="stylesheet" href="../css/style.css?v=1575178639" id="layoutstyle">
<link rel="stylesheet" href="../css/datatables.min.css">
<script src="functions.js"></script>
<script src="../script/jquery-latest.min.js"></script>
<script src="../script/odometr.js"></script>
<script src="../script/js.cookie.js"></script>
</head>

<body class="page-user no-touch">
 
    <div class="topbar-wrap" style="padding-top: 0px;">
        <div class="topbar is-sticky">
            <div class="container">
                <div>
                    <style>
  @media (max-width:640px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
}
  @media (min-width: 1675px) {
                        .ava-p {
                         width:124px;
                         height:124px;
                        }
   						.mob-b {
                          width:170px;
                          height:74px;
                          font-size:34px;
                          text-align:center;
                        }
                        h6.mob-b-t {
                        font-weight:bold;
                        }
                        hr.tab-users-mob-adm {
                          display:none;
                        }
                          
}
  @media (min-width: 1090px) {
                        .ava-p {
                         width:72px;
                         height:72px;
                        }
}
  @media (max-width: 1089px) {
                        .ava-p {
                         width:48px;
                         height:48px;
                        }
}
  @media (min-width: 1349px) {
                        .ava-p {
                         width:64px;
                         height:64px;
                        }
   						.mob-b {
                          width:110px;
                          height:44px;
                          font-size:14px;
                          text-align:center;
                        }
                        h6.mob-b-t {
                        font-weight:bold;
                        }
                        hr.tab-users-mob-adm {
                          display:none;
                        }
                          
}
  @media (max-width: 359px) {
                        .mob-b {
                          width:56px;
                          height:24px;
                          font-size:8px;
                          text-align:center;
                        }
   						.mob-t {
                          font-size:14px;
                        }
  						.mob-b-t {
                        padding-bottom:9px;
                        font-weight:bold;
                        }
                        .mob-info {
                          font-size:10px;
                        }
}
@media (min-width: 360px) {
                        h6.mob-b-t {
                        font-weight:bold;
                        }
                        hr.tab-users-mob-adm {
                          display:none;
                        }
                          
}
  @media (max-width: 991px) {
    .input-bordered {
      width:250px
      }
    .btn-cc {
      width:35%;
    }
                        .admin-users-block {
                       max-width:120%;
}
}
 @media (min-width: 991px) {

   .input-bordered {
     width:310px;
     margin-top:3px;
     margin-bottom:3px;
     display:block;
   }
                        .admin-users-block {
                       max-width:450px;
}
}
                        .mmmob {
                            display: none;
                        }
                        @media (max-width: 991px) {
                         
                            .des {
                                display: none;
                            }
                            .mmmob {
                                display: block;
                            }
                            .desktop-nav {
                                margin-top: -55px;
                            }
                        }
  .mob-tb {
                           max-width:100%;
                         }
                          .sorting_1 {
                            text-align:center;
                            width:auto;
                          }
  .tbl-name {
    text-align:center;
  }
  .icon-edit {
    color:gray;
  }
                    </style>
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative" id="close-nav"><a class="toggle-nav" href="">
                            <div class="toggle-icon"><span class="toggle-line"></span><span class="toggle-line"></span><span class="toggle-line"></span><span class="toggle-line"></span></div>
                        </a></li>
                    </ul>
                    <center class="desktop-nav" style="font-weight: 600;padding: 5px;color: #fff;font-size: 25px;"><?=$sitename?></center>
                </div>
            </div><!-- .container -->
        </div><!-- .topbar -->
        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                   <ul class="navbar-menu des">
                        <li ><a href="/admin">Настройки сайта</a></li>
                        <li ><a href="/admin/chat">Чат</a></li>
                        <li ><a href="/admin/users">Пользователи</a></li>
                        <li ><a href="/admin/promo">Промокоды</a></li>
                        <li ><a href="/admin/deps">Пополнения</a></li>
                        <li ><a href="/admin/withdraws">Выплаты</a></li>
                        <li ><a href="/admin/bot">Настройка ботов</a></li>
                        <li class="active"><a href="/admin/stat">Статистика сайта</a></li>
                       <li ><a href="/admin/percent">Шансы</a></li>
                      
                    </ul>
                    <ul class="navbar-menu mmmob">
                        <li ><a href="/admin">Настройки сайта</a></li>
                        <li ><a href="/admin/chat">Чат</a></li>
                        <li ><a href="/admin/users">Пользователи</a></li>
                        <li ><a href="/admin/promo">Промокоды</a></li>
                        <li ><a href="/admin/deps">Пополнения</a></li>
                        <li ><a href="/admin/withdraws">Выплаты</a></li>
                        <li ><a href="/admin/bot">Настройка ботов</a></li>
                        <li class="active"><a href="/admin/stat">Статистика сайта</a></li> 
                      <li ><a href="/admin/percent">Шансы</a></li>
                      
                    </ul>
                      
                    <ul class="navbar-btns">
                        <li><a href="<?=$group?>" target="_blank" class="btn btn-sm btn-outline btn-light"><em style="color: #3b5998;" class="fab fa-vk"></em><span>Вконтакте</span></a></li>
                    </ul>
                </div><!-- .navbar-innr -->
            </div><!-- .container -->
        </div><!-- .navbar -->
    </div><!-- .topbar-wrap -->
    
    <div class="page-content">
      <div class="container">
       <div class="card content-area">
	<div class="card-innr">
		<div class="card-head">
                      
			<h4 class="card-title card-title-lg mob-t" style='float:left; padding-top:8px;'>Чат</h4>
                     <br><br>
            <hr>          
		</div>
                     <div class="card-text"> 
                     
                      	<div class="chat1" id ="mess">Чат</div>
<div class="p" >
  
<input type="text" class="input-bordered col-12" style="width:100%;" id="message" value="" placeholder="Сообщение">
    <button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 0px;margin-bottom:8px;" onclick="sendmessage()">Отправить сообщение</button>
<button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 0px;margin-bottom:8px;" onclick="system()">Системное сообщение</button>

</div>
<br>
<hr>
    <div class="chat2">
   <p>Очистка чата
        
    <button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 10px;margin-bottom:8px;" onclick="clean()">Очистить</button>

<hr>
        <p>Бан/Разбан в чате
        <input type="text" class="input-bordered col-12" style="width:100%;" id="ban" value="" placeholder="Логин игрока">
    <button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 10px;margin-bottom:8px;" onclick="banon()">Забанить</button>
<button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 10px;margin-bottom:8px;" onclick="banoff()">Разбанить</button>
<hr>
<p>Выдача промо в чат
        <input type="text" class="input-bordered col-12" style="width:100%;" id="promo" value="" placeholder="Промокод">
    <button  class="btn btn-primary" style="width:100%; box-shadow: 0 5px 23px 0 rgba(0, 125, 255, 0.3); color:#fff;margin-top: 10px;margin-bottom:8px;" onclick="promo()">Выдать</button>
<hr>
</p> <div class="col-lg-8 offset-lg-2">
                                <a id="error_click" style="display:none;pointer-events: none; box-shadow: rgba(255, 105, 114, 0.14) 0px 5px 23px 0px;" class="btn  btn-block bg-danger"></a>
								<a id="succes_click" style="display:none;pointer-events: none; box-shadow: rgba(255, 105, 114, 0.14) 0px 5px 23px 0px;" class="btn  btn-block bg-success"></a>
								</div>
    </div>
   
                      <!-- НАЧАЛО -->
                      <center>

                      </center>
              
                       <!-- КОНЕЦ -->
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
        #side-checkbox {
    display: none;
}
.side-panel {
    position: fixed;
    z-index: 999999;
    top: 0;
    left: -360px;
    background: #1E90FF;
    transition: all 0.5s;   
    width: 320px;
    height: 100vh;
    box-shadow: 10px 0 20px rgba(0,0,0,0.4);
    color: #FFF;
    padding: 40px 20px;
}
.chat1{
    background: #FFF;
    transition: all 0.5s;   
    width: 100%;
    height: 300px;
    box-shadow: 10px 0 20px rgba(0,0,0,0.4);
    color: #000;
overflow:auto;
    padding: 40px 20px;
}
.chat2{
    background: #FFF;
    transition: all 0.5s;   
    width: 100%;

    box-shadow: 10px 0 20px rgba(0,0,0,0.4);
    color: #000;
overflow:auto;
    padding: 40px 20px;
}
.p{
    background: #FFF;
    transition: all 0.5s;   
   width: 100%;
    height: 150px;
    box-shadow: 10px 0 20px rgba(0,0,0,0.4);
    color: #000;
    padding: 0px 20px;
}
.side-title {
text-align:center;
    font-size: 20px;
    padding-bottom: 10px;
    margin-bottom: 20px;
    border-bottom: 2px solid #BFE2FF;
}
/* Оформление кнопки на странице */
.side-button-1-wr {
    text-align: center; /* Контейнер для кнопки, чтобы было удобнее ее разместить */
}
.side-button-1 .side-b {
    margin: 10px;
    text-decoration: none;
    position: relative;
    font-size: 20px;
    line-height: 20px;
    padding: 12px 30px;
    color: #FFF;
    font-weight: bold;
    text-transform: uppercase; 
    font-family: 'Roboto Condensed', Тahoma, sans-serif;
    background: #1E90FF;
    cursor: pointer; 
    border: 2px solid #BFE2FF;
}
.side-button-1 .side-b:hover,
.side-button-1 .side-b:active,
.side-button-1 .side-b:focus {
    color: #FFF;
}
.side-button-1 .side-b:after,
.side-button-1 .side-b:before {
    position: absolute;
    height: 4px;
    left: 50%;
    bottom: -6px;
    content: "";
    transition: all 280ms ease-in-out;
    width: 0;
}
.side-button-1 .side-open:after,
.side-button-1 .side-open:before {
    background: green;
}
.side-button-1 .side-close:after,
.side-button-1 .side-close:before {
    background: red;
}
.side-button-1 .side-b:before {
    top: -6px;
}
.side-button-1 .side-b:hover:after,
.side-button-1 .side-b:hover:before {
    width: 100%;
    left: 0;
}
/* Переключатели кнопки 1 */
.side-button-1 .side-close {
    display: none;
}
#side-checkbox:checked + .side-panel + .side-button-1-wr .side-button-1 .side-open {
    display: none;
}
#side-checkbox:checked + .side-panel + .side-button-1-wr .side-button-1 .side-close {
    display: block;
}
#side-checkbox:checked + .side-panel {
    left: 0;
}
/* Оформление кнопки на панеле */
.side-button-2 {
    font-size: 30px;
    border-radius: 20px;
    position: absolute;
    z-index: 1;
    top: 8px;
    right: 8px;
    cursor: pointer;
    transform: rotate(45deg);
    color: #BFE2FF;    
    transition: all 280ms ease-in-out;    
}
.side-button-2:hover {
    transform: rotate(45deg) scale(1.1);    
    color: #FFF;
}
  </style>
</div><!-- .col -->
<div class="col-md-12 mt-12 mt-sm-12">
 <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
   <ul class="footer-links">
    <li><a href="#" data-toggle="modal" data-target="#modalRules">Лицензионное соглашение</a></li>
    <li><a href="https://vk.com/id321223555" target="_blank">Создание сайтов KotDev</a></li>
</ul>
</div>					
</div><!-- .col -->
</div><!-- .row -->
</div><!-- .container -->
</div><!-- .footer-bar -->
</div>
</div>
<!-- MODAL -->
   
      <!-- END MODAL -->
<script>
function banon(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "banon",
                          ban: $('#ban').val(),                                                      
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

					document.getElementById("ban").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
                                function banoff(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "banoff",
                          ban: $('#ban').val(),                                                      
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

					document.getElementById("ban").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
function promo(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "promo",
                          promo: $('#promo').val(),                                                      
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

				document.getElementById("promo").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
function clean(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "clean",
                                                                                 
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

				document.getElementById("message").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
 function system(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "system",
                                                                                   message: $('#message').val(),
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

				document.getElementById("message").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
    function sendmessage(){
                                                                   																	    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											$('#error_click').hide();
$('#succes_click').hide();
										
										},	
 
                                                                           data: {
                                                                                    type: "mess",
                                                                                   message: $('#message').val(),
                                                                                   
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_click").show();

				document.getElementById("message").value = "";					   $("#succes_click").html("Сообщение отправлено");
										   $('#userBalance').attr('myBalance', obj.new_balance);
                                               updateBalance(obj.balance, obj.new_balance);
																					 return false;
                                            
                                            }else{
												$('#error_click').show();
												return $('#error_click').html(obj.error);
											}
                                        }
                                    });
                               
                                }
function mess()
    {
        $.ajax({
            
            url: "../mess.php",
            cache: false,
            success: function(html){
                $("#mess").html(html);
            }
        });
    }

    $(document).ready(function(){
        mess();
        setInterval('mess()',1000);
    });

</script>
<script src="../script/jquery.bundle.js"></script>
<script src="../script/datatables.min.js"></script>
<script src="../script/script.js?v=2"></script>
<script src="../script/jquery-3.2.1.min.js"></script>
</body>
</html>

<?php
} else { header('Location: ../error404'); } 
?>
