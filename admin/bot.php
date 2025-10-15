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

$sql_select5 = "SELECT * FROM kot_bots ORDER BY id + 0 DESC";
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
<a href="/" class="df-logo tx-26 "><?=$sitename;?></a>
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
<li  class="nav-item"><a href="/admin" class="nav-link">Настройки сайта</a></li>
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
                      
			<h4 class="card-title card-title-lg mob-t" style='float:left; padding-top:8px;'>Боты</h4>
                      <button class="btn-ccc btn btn-sm btn-outline btn-light input-bordered col-12" style="float:right; width:120px" data-toggle="modal" data-target="#addbot" >Добавить <i class="fas fa-plus icon-edit"></i></button><br><br>
            <hr>          
		</div>
                     <div class="card-text"> 
                      
                      <!-- НАЧАЛО -->
                      <center>

<table id="bot-tbl" class="table-responsive-sm table table-striped- table-bordered table-hover table-checkable" style="width:100%">
                    
				<thead>
					<tr>
						<th class="tbl-name">ID</th>
                        <th class="tbl-name">Логин бота</th>
                        <th class="tbl-name">Мин. ставка</th>
						<th class="tbl-name">Макс. ставка</th>
						<th class="tbl-name">Статус</th>
                        <th class="tbl-name">Действие</th>
						
						
					</tr>
				</thead>
                      <tbody>
                      <?php 
while($row = mysql_fetch_array($result5)) {
$bot_id = $row['id'];
$bot_login = $row['bot_login'];
$bot_min_bet = $row['bot_min_bet'];
$bot_max_bet = $row['bot_max_bet'];
$active = $row['status'];
  if($active == 1) {
$status = "<td class='sorting_1' tabindex='0' style='color:green'><span class='badge badge-success' style='width:100px'>Активен</span></td>";
  }
  if($active == 0) {
 $status = "<td class='sorting_1' tabindex='0' style='color:green'><span class='badge badge-danger' style='width:100px'>Неактивен</span></td>";   
  }
$edit = "<td class='sorting_1' tabindex='0' style='color:green' onclick="."$('#editbotid').html('$bot_id');"."  data-toggle='modal' data-target='#editstatusbot'><span class='badge badge-warning'  style='width:100px'>Изменить</span></td>";

echo "<tr role='row' class='odd'>
<td class='sorting_1' tabindex='0'>$bot_id</td>
<td class='sorting_1' tabindex='0'>$bot_login</td>
<td class='sorting_1' tabindex='0'>$bot_min_bet</td>
<td class='sorting_1' tabindex='0'>$bot_max_bet</td>
$status
$edit
</tr>";
}
  ?>

                      </tbody>
			</table>
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
  </style>
</div><!-- .col -->

</div><!-- .row -->
</div><!-- .container -->
</div><!-- .footer-bar -->
</div>
</div>
<!-- MODAL -->
    <div class="modal fade show infotbl" id="addbot" tabindex="-1" style="display: none;">
    <div class="modal-dialog modal-dialog-md modal-dialog-centered">
        <div class="modal-content"><a class="modal-close" id="close-modal" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="popup-body">
    <center><p>Добавление бота</p>
    <hr>
    <p>Логин
<input type='text' class='input-bordered col-12' id='botname' value='' placeholder='Логин бота'></p><br>
    <p>Мин. ставка
<input type='text' class='input-bordered col-12' id='botmin' value='' placeholder='Минимальная ставка'></p><br>
    <p>Макс. ставка
<input type='text' class='input-bordered col-12' id='botmax' value='' placeholder='Максимальная ставка'></p><br>
    <!-- ОПОВЕЩЕНИЯ -->
    <span id="succes_insert" style="color:gray;"></span>
    <span id="error_insert" style="color:gray;"></span>
    <!-- КОНЕЦ -->
    <button class="btn btn-sm btn-outline btn-light input-bordered col-12" style='width:260px' onclick="insert()">Добавить бота</button>  
</center>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
      <!-- END MODAL -->
    <!-- MODAL -->
    <div class="modal fade show infotbl" id="editstatusbot" tabindex="-1" style="display: none;">
    <div class="modal-dialog modal-dialog-md modal-dialog-centered">
        <div class="modal-content"><a id="close-mod" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
            <div class="popup-body">
    <center><p>Изменение статуса бота <span id='editbotid' style='display:none'></span></p>
    <hr>
    
    <button class="btn btn-sm btn-outline btn-light input-bordered col-12" style='width:140px; display:inline-block' onclick="bot_adm('succes')">Активен <i class='fa fa-check' style='color:green'></i></button>  
    
    <button class="btn btn-sm btn-outline btn-light input-bordered col-12" style='width:140px; display:inline-block' onclick="bot_adm('error')">Неактивен <i class='fa fa-times' style='color:red'></i></button>
</center>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
      <!-- END MODAL -->
<script src="../script/jquery.bundle.js"></script>
<script src="../script/datatables.min.js"></script>
<script src="../script/script.js?v=2"></script>
<script src="../script/jquery-3.2.1.min.js"></script>
</body>
    <script>
   function insert() {
   $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
			 
										},	
                                                                                data: {
                                                                        type: "insert_bot",
           																login: $("#botname").val(),
          																minbet: $("#botmin").val(),  
                                                                        maxbet: $("#botmax").val()         
                                                                                  
                                                                                  },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                $("#close-modal").click();
                $("#bot-tbl").load("bot.php #bot-tbl");
                                            
                                                              
                                            }else{
               $("#bot-tbl").load("bot.php #bot-tbl");
               $('#error_insert').show();
               $('#error_insert').html(obj.error);                               
                                            }
                                        }   
   });
  }
  function bot_adm(status) {
   $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
			 
										},	
                                                                                data: {
                                                                                    type: "editstatusbot",
           id_edit: $("#editbotid").html(),
           status: status                                                                     },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                $("#close-mod").click();
                $("#bot-tbl").load("bot.php #bot-tbl");
                                            
                                                              
                                            }else{
               $("#bot-tbl").load("bot.php #bot-tbl");
                                            }
                                        }   
   });
  }
  </script>
</html>
<?php } else { header('Location: ../error404'); } ?>