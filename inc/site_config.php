<?php
session_start();
require("bd.php");

$sid = $_SESSION['hash'];
$admin_check = "SELECT * FROM kot_user WHERE hash = '$sid'";
$result_admin = mysql_query($admin_check);
$row = mysql_fetch_array($result_admin);
if($row)
{	
$is_admin = $row['admin'];
}
$sql_select1 = "SELECT * FROM kot_config";
$result1 = mysql_query($sql_select1);
$row = mysql_fetch_array($result1);
if($row)
{
    
 $client_id = 8087379;
$client_secret = "GdAr1Xy50m2UyZ2CS5zG";
$linksite = "http://".$_SERVER['SERVER_NAME'].""; // ссылка на сайт
$sitename = $row['sitename']; ; // название сайта
$sitedomen = $row['sitedomen'];
$online = 4; // онлайн
$group = $row['sitegroup']; // группа сайта
$site_support = $row['sitesupport'];

$sitekey = $row['sitekey']; // ключ сайта для каптчи
$mail = $row['sitemail']; // почта сайта
$min_bonus_s = "2"; // минимальная сумма бонуса в раздаче (в руб)
$max_bonus_s = "40";// максимальная сумма бонуса в раздаче (в руб)
$min_withdraw_sum = "300"; // минимальная сумма вывода
$bonus_reg = $row['bonus_reg'];
$fk_id = $row['fk_id'];
$fk_secret_1 = $row['fk_secret_1'];
$fk_secret_2 = $row['fk_secret_2'];
$dep_withdraw = "500";
$min_bet = "1";
$max_bet = "1000000";
$min_per = "1";
$max_per = "95";

$newyearbonus = $row['nysize'];

$fake_online = $row['fake_online'];
$fake_interval = $row['fake_interval'];
$min_sum_dep = $row['min_sum_dep'];
$idvk = $row['id_vk'];
$tokenvk = $row['token_vk'];

}


$sid = $_SESSION['hash'];

$selecter1 = "SELECT * FROM kot_user WHERE hash = '$sid'";
         $result4 = mysql_query($selecter1);
         $row = mysql_fetch_array($result4);
		 if($row)
		{
$img = $row['img'];	
$user_id = $row['id'];
          $login = $row['login'];
          $ava = $row['ava'];	
          $bonusVK = $row['vk_bon'];
          
          $newyear = $row['nybonus'];
          $usersRef = $get['refs'];
          $pass = $row['pass'];
          $balance = $row['balance'];
          $id = $row['id'];
          $social_link = $row['social'];
          $is_admin = $row['admin'];
          $is_ban = $row['ban'];
          $bonus = $row['bonus'];

$ranked = $row['rank'];
          $credit = $row['credit'];
          
          $ipadress = $row['ip'];
          $datereg = $row['date_reg'];
          
            $refid = $row['ref_id'];
            
                      $youtube = $row['youtube'];
        }
        

?>