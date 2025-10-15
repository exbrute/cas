<?php
require ("inc/site_config.php");

$json_str = file_get_contents('php://input');
$json_obj = json_decode($json_str, true);
$summa = $json_obj['bill']['amount']['value'];
$id = $json_obj['bill']['customer']['account'];

if($id > 0){
$selecter1 = "SELECT * FROM kot_user WHERE id = '$id'";
         $result4 = mysql_query($selecter1);
         $row = mysql_fetch_array($result4);
		 if($row)
		{ 
          $balance = $row['balance'];
           $user_id = $row['id'];
        }
        
           $datas = date("d.m.Y");
	$datass = date("H:i:s");
	$data = "$datas $datass";
        

mysql_query("insert into kot_payments set user_id='$user_id', suma='$summa', data='$data'");

mysql_query("update kot_user set balance=$summa+$balance where id='$user_id'");
}

?>