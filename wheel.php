<?php
  session_start();
$sid = $_SESSION['hash'];
require("inc/site_config.php");
require("inc/config.php");
require("inc/bd.php");
$komissia = 0.1;
// данные игрока
 $sql_select = "SELECT * FROM kot_user WHERE hash='$sid'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if($row)
{
$login = $row['login'];
$money = $row['balance'];
$id = $row['id'];
}
//игровой массив
if(isset($_POST['wheel'])){
  $colorWheel = $_POST['wheel'];
  $bet = $_POST['bet'];



   $arrayWheel = [5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,50];
  if($bet <= $money){
   if($bet >= "1"){

    $query = ("SELECT * FROM `kot_admin`");
    $row_admin = mysql_query($query);
    $admin = mysql_fetch_array($row_admin);

    $bank = $admin['bank'];


   $randWheel =  mt_rand(0,53); //цвет который выпадет
   $valuesWheel = $arrayWheel[$randWheel];


   if ($arrayWheel[$randWheel] == 2) {
    $key2Wheel = [
       1,  3,  5,  7,  9, 11, 13, 15,
      17, 19, 21, 23, 25, 27, 29, 31,
      33, 35, 37, 39, 41, 43, 45, 47,
      49, 51
    ];
    $random = mt_rand(0,25);
    $key = $key2Wheel[$random];
  }
  if ($arrayWheel[$randWheel] == 3) {
    $key3Wheel = [
      2,4,6,
      12,14,16,
      22,24,26,
      28,30,36,
      38,40,46,
      48,50
    ];
    $random = mt_rand(0,16);
    $key = $key3Wheel[$random];
  }
  if ($arrayWheel[$randWheel] == 5) {
    $key5Wheel = [
      0,8,10,18,20,32,34,42,44,52
    ];
    $random = mt_rand(0,9);
    $key = $key5Wheel[$random];
  }
  if ($valuesWheel == 50) {
    $key5Wheel = [
      53
    ];
    $key = 53;
  }

  $vozm_win = ($bet * $colorWheel) - $bet;
  if($bank >= $vozm_win){
  if($colorWheel == $valuesWheel){ // вы выиграли
    $win = $bet * $colorWheel - $bet;
    $query = mysql_query("UPDATE `kot_user` SET `balance` = '$money'+'$win' WHERE `id` = '$id'");
    $win = $bet * $colorWheel;
    $money = $money + $win - $bet;



   // для работы с антиминусом
   $query = ("SELECT * FROM `kot_admin`");
   $row_admin = mysql_query($query);
   $admin = mysql_fetch_array($row_admin);

   $bank = $admin['bank'];
   $profit = $admin['zarabotok'];
   $bank1 = $bet;
   $query = mysql_query("UPDATE `kot_admin` SET `bank`= '$bank'-'$bank1'");



    $dfghjk = "<span class='number result-win result'><span class='myBetsBox'>".$win."</span> <i class='fas fa-coins'></i></span>";
    $obj = array("good"=>"good","mess"=>"Вы выиграли $win <i class='fas fa-coins'></i>","valuesWheel"=>"$valuesWheel","key"=>"$key","money"=>"$money","resultHistoryContentWheel"=>"$dfghjk");
    $query = mysql_query("INSERT INTO `wheel-games` (`id_users`, `login`, `bet`, `colorWheel`, `result`) VALUES ('$id', '$login', '$bet', '$colorWheel', '$valuesWheel');");
  }else{ //вы проиграли

        // для работы с антиминусом
   $query = ("SELECT * FROM `kot_admin`");
   $row_admin = mysql_query($query);
   $admin = mysql_fetch_array($row_admin);

   $bank = $admin['bank'];
   $profit = $admin['zarabotok'];
   $profit1 = $bet * $komissia;
   $bank1 = $bet * (1-$komissia);
   $query = mysql_query("UPDATE `kot_admin` SET `bank`= '$bank'+'$bank1',`zarabotok`='$profit'+'$profit1'");

    $query = mysql_query("UPDATE `kot_user` SET `balance` = '$money'-'$bet' WHERE `id` = '$id'");
    $money = $money - $bet;
    $dfghjk = "<span class='number result-lose result'><span class='myBetsBox'>".$bet."</span> <i class='fas fa-coins'></i></span>";
    $obj = array("bad"=>"bad","mess"=>"Вы проиграли $bet <i class='fas fa-coins'></i>","valuesWheel"=>"$valuesWheel","key"=>"$key","money"=>"$money","resultHistoryContentWheel"=>"$dfghjk");
    $query = mysql_query("INSERT INTO `wheel-games` (`id_users`, `login`, `bet`, `colorWheel`, `result`) VALUES ('$id', '$login', '$bet', '$colorWheel', '$valuesWheel');");
  }
 }else{
  $query = mysql_query("UPDATE `kot_user` SET `balance` = '$money'-'$bet' WHERE `id` = '$id'");

          // для работы с антиминусом
          $query = ("SELECT * FROM `kot_admin`");
          $row_admin = mysql_query($query);
          $admin = mysql_fetch_array($row_admin);

          $bank = $admin['bank'];
          $profit = $admin['zarabotok'];
          $profit1 = $bet * $komissia;
          $bank1 = $bet * (1-$komissia);
          $query = mysql_query("UPDATE `kot_admin` SET `bank`= '$bank'+'$bank1',`zarabotok`='$profit'+'$profit1'");


   $x = false;
   $colors = [5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,50];
   $rand = mt_rand(0,53);
   while($colorWheel == $colors[$rand]){
     if($colorWheel == $colors[$rand]){
      $colors = [5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,50];
      $rand = mt_rand(0,53);
     }else{
      $colors = [5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,2,5,2,3,2,3,2,3,2,5,50];
      $rand = mt_rand(0,53);
      $colors[$rand];
     }
   }


   $colorWheel = $colors[$rand];

  if ($colorWheel == 2) {
    $key2Wheel = [
       1,  3,  5,  7,  9, 11, 13, 15,
      17, 19, 21, 23, 25, 27, 29, 31,
      33, 35, 37, 39, 41, 43, 45, 47,
      49, 51
    ];
    $random = mt_rand(0,25);
    $key = $key2Wheel[$random];
  }
  if ($colorWheel == 3) {
    $key3Wheel = [
      2,4,6,
      12,14,16,
      22,24,26,
      28,30,36,
      38,40,46,
      48,50
    ];
    $random = mt_rand(0,16);
    $key = $key3Wheel[$random];
  }
  if ($colorWheel == 5) {
    $key5Wheel = [
      0,8,10,18,20,32,34,42,44,52
    ];
    $random = mt_rand(0,9);
    $key = $key5Wheel[$random];
  }
  if ($colorWheel == 50) {
    $key5Wheel = [
      53
    ];
    $key = 53;
  }


  $money = $money - $bet;
  $dfghjk = "<span class='number result-lose result'><span class='myBetsBox'>".$bet."</span> <i class='fas fa-coins'></i></span>";
  $obj = array("bad"=>"bad","mess"=>"Вы проиграли $bet <i class='fas fa-coins'></i>","valuesWheel"=>"$colorWheel","key"=>"$key","money"=>"$money","resultHistoryContentWheel"=>"$dfghjk");
 }
  }else{
    $obj = array("danger"=>"danger","mess"=>"Минимальная ставка 1 <i class='fas fa-coins'></i>");
  }
  }else{
    $obj = array("danger"=>"danger","mess"=>"Не хватает монет для игры");
  }
  }

echo json_encode($obj);
?>