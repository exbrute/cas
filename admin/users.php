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
// остальное - вывод юзеров и прочее
$sql_select1 = "SELECT COUNT(*) FROM kot_user";
$result1 = mysql_query($sql_select1);
$row = mysql_fetch_array($result1);
if($row)
{	
$users_count = $row['COUNT(*)'];
}
$sql_select2 = "SELECT * FROM kot_user";
$result2 = mysql_query($sql_select2);
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
<a href="/"><img style="cursor: pointer;" src="/images/nlogoD2.png" width="110" height="35" alt="logo"></a>
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
<li class="nav-item active"><a href="/admin/users" class="nav-link">Пользователи</a></li>
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
                      
			<h4 class="mob-t card-title card-title-lg mob-t" style='float:left; padding-top:8px;'>Пользователи (Всего: <?=$users_count?>)</h4>
                      <br><br>
                      <hr>
		</div>
                     <div class="card-text"> 
                      
                      <!-- НАЧАЛО -->
                      <center>
<div id="withdraws-tbl" >
<table class="table-responsive-sm table  table-bordered table-hover table-checkable">
                    
				<thead>
					<tr>
						<th class="tbl-name">ID</th>
                        <th class="tbl-name">Логин</th>
						<th class="tbl-name">Баланс</th>
						<th class="tbl-name">Профиль VK</th>
						<th class="tbl-name">Дата регистрации</th>
                        <th class="tbl-name">IP адрес</th>
                        
                        <th class="tbl-name">YouTube</th>
                        
						<th class="tbl-name">Действия</th>
					</tr>
				</thead>
                      <tbody id="users-block">
                      <?php 
while($row = mysql_fetch_array($result2)) {
$id = $row['id'];
$login = $row['login'];
$social = $row['social'];
$balance = round($row['balance'], 2);
$ban = $row['ban'];
$admin = $row['admin'];

$date_reg = $row['date_reg'];

$ip = $row['ip'];
if($admin == 1) {
 $prava = "Администратор";
}
if($admin == 0) {
 $prava = "Пользователь"; 
}
if($login == '') {
  $name = '<font color="red">Не зареган</font>';
}
if($login != '') {
  $name = $login; 
}
if($social == '') {
  $stat_social = '<font color="red">Не привязан</font>';
}
if($social != '') {
 $stat_social = 'Перейти'; 
}
if($ban == 1) {
 $button_ban = "<button class='mob-b btn btn-sm btn-outline btn-light' style='display:inline-block;width:49%;float:left;' onclick="."unban_adm('$id')"."><i class='fa fa-unlock'></i></button>";
 $status = "Да";
 $ban_icon = "<i class='fa fa-times-circle-o' aria-hidden='true' style='color:red; margin-top:5px' id='icon-$id'></i>";
}
if($ban == 0) {
 $button_ban = "<button class='mob-b btn btn-sm btn-outline btn-light' style='display:inline-block;width:49%;float:left;' onclick="."ban_adm('$id');"."><i class='fa fa-lock'></i></button>";
 $status = "Нет";
 $ban_icon = "";
}



if($youtubes == 1) {

 $statuse = "Да";

}
if($youtubes == 0) {

 $statuse = "Нет";

}

echo "<tr role='row' class='odd'>
<td class='sorting_1' tabindex='0'>$id</td>
<td class='sorting_1' tabindex='0'><span id='$id'>$name $ban_icon</span></td>
<td class='sorting_1' tabindex='0'>$balance</td>
<td class='sorting_1' tabindex='0'><a href='$social' target='_blank'>$stat_social</a></td>
<td class='sorting_1' tabindex='0'>$date_reg</td>
<td class='sorting_1' tabindex='0'>$ip</td>

<td class='sorting_1' tabindex='0'>null</td>

<td class='sorting_1' tabindex='0'><center><div id='banbutt$id'>$button_ban
<button class='mob-b btn btn-sm btn-outline btn-light' style='display:inline-block;width:49%;float:right' data-toggle='modal' data-target='#userinfo' onclick="."select('$id')"."><i class='fa fa-edit'></i></button></center></div></td>
</tr>";
}
  ?>

                      </tbody>
			</table></div>
                      </center>
              
                       <!-- КОНЕЦ -->
</div>	             
</div><!-- .card -->
   </div><!-- .container -->
</div><!-- .page-content -->
          <script>
          function select(id) {
  $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
					
										},	
                                                                                data: {
                                                                                    type: "getInfo",
           id: id                                                                      
                                                                       },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                        
                     $("#userid").html(obj.id);      
					 $("#username").val(obj.log);
                     $("#userpass").val(obj.pass);
                     $("#userbal").val(obj.bal);   
                   
                                                                return 
                                            }else{
                                               
				 location.reload(true);
                                            }
                                        }   
   });
}
          	function ban_adm(hashed) {
  $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
					
										},	
                                                                                data: {
                                                                                    type: "ban",
           hashuser: hashed                                                                      
                                                                       },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                        
                    // alert('Пользователь забанен');
                       $("#"+hashed).load("users.php #"+hashed);                       
					   $("#stat"+hashed).load("users.php #stat"+hashed);
                                              
                       $("#banbutt"+hashed).load("users.php #banbutt"+hashed);
                                            }else{
                                               
				alert(obj.error);
                                            }
                                        }   
   });

  
}

function unban_adm(hashed) {
  $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
					
										},	
                                                                                data: {
                                                                                    type: "unban",
           hashuser: hashed                                                                      
                                                                       },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
            $("#"+hashed).load("users.php #"+hashed);                       
			$("#stat"+hashed).load("users.php #stat"+hashed);
                                              
            $("#banbutt"+hashed).load("users.php #banbutt"+hashed);                   
                         //$("#"+hashed).load("users.php #"+hashed);  
                      //alert('Пользователь разбанен'); 
                      //location.reload(true);                        
					                                     return
                                                                 
                                            }else{
                                               
				alert(obj.error);
                                            }
                                        }   
   });

  
}

          </script>            
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
    <div class="modal fade" id="userinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Настройки данных пользователя #<span id='userid' style='color:gray;'>1</span></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color:black">×</span>
				</button>
			</div>
            <div class="modal-body">
    <center>

    <p>Логин
<input type='text' class='form-control col-12' id='username' placeholder='Пользователь не найден'></p><br>
   
    <p>Баланс
<input type='text' class='form-control col-12' id='userbal' placeholder='Пользователь не найден'></p>

    <p>Пароль
<input type='text' class='form-control col-12' id='userpass' placeholder='Пользователь не найден'></p>


    <span style='color:gray;' id='status'></span><br>
    <button class="btn btn-sm btn-outline btn-light input-bordered col-12" style='width:200px' onclick="save_user_edit()">Сохранить</button>  
</center>

            </div>
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div>
<script>
	function save_user_edit() {
  
 $.ajax({
                                                                                type: 'POST',
                                                                                url: '/admin/admin_func.php',
beforeSend: function() {
				$("#status").hide();	
										},	
                                                                                data: {
                                                                                    type: "saveInfo",
           id: $("#userid").html(),
           username: $("#username").val(),                                          userpass: $("#userpass").val(),
           userbal: $("#userbal").val(),
           userlose: $("#loser").val(),
           userwin: $("#winner").val()                                                                       
                                                                                                                            },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                     $("#status").show();                         
					 $("#status").html("Данные успешно изменены");
                                            
                                                                return 
                                            }else{
                $("#status").show();                               
				$("#status").html(obj.error);
                                            }
                                        }   
   });
}
</script>
      <!-- END MODAL -->
<script src="../script/jquery.bundle.js"></script>
<script src="../script/datatables.min.js"></script>
<script src="../script/script.js?v=2"></script>
<script src="../script/jquery-3.2.1.min.js"></script>
</body>
</html>
<?php } else { header('Location: ../error404'); } ?>