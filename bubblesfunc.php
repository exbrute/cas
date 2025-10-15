<?php
session_start();
require("inc/site_config.php");
require("inc/config.php");
require("inc/bd.php");
$type = $_POST['type'];
$defType = $_POST['deft'];
$sid = $_SESSION['hash'];
if ($type == "bubble") {
	$sum = $_POST['sum'];
	$per = $_POST['per'];
	$sql_select2 = "SELECT * FROM kot_user WHERE hash='$sid'";
	$result2 = mysql_query($sql_select2);
	$row = mysql_fetch_array($result2);
	if ($row) {
		$balance = $row['balance'];
		$ban = $row['ban'];
		$sliv = $row['sliv'];
		$fart = $row['win'];
		$login = $row['login'];
		$user_id = $row['id'];
	}
	if (!$sid) {
		$error = 1;
		$coef = "Авторизуйтесь";
		$fa = "error";
	} else {
		if ($per < 1.05 || $per > 10000 || !is_numeric($per)) {
			$error = 1;
			$coef = "Коэффицент от 1.05 до 10000";
			$fa = "error";
		}
		if ($sum > $balance) {
			$error = 1;
			$coef = "Недостаточно средств";
			$fa = "error";
		}
		if ($sum < 1 || $sum > 100000 || !is_numeric($sum)) {
			$error = 1;
			$coef = "Сумма от 1 до 100000";
			$fa = "error";
		}
		if ($error == 0) {
		    
		    $antiminus = rand(1,500); // Сверхтупой антиминус
		    if ($antiminus == "1") { 
				$summ = round($sum, 2);
				$winsumm = round($winsum, 2) + $sum;
				$coef = "Выпало x". mt_rand(100, $per * 100) / 100; // Сливаем по "антиминусу"
				/* $insert_sql1 = "INSERT INTO `dice` (`user_id`, `bet`, `chance`, `btn`, `win`, `rand`,`create_at`, `type`) VALUES ('$user_id', '$sum', '$per', '', '$resultwin', '','', 'bubbles')";
                mysql_query($insert_sql1); */
				$newbalance = $balance - $sum;
				$update_sql4 = "Update kot_user set balance='$newbalance' WHERE hash='$sid'";
				mysql_query($update_sql4);
				$error = 1;
				$fa = "error";
		    }
		    else {
			$mt_rand = mt_rand(0, 999999);
			$nwin_g = 100 / $per;
			$nwin = 1000000 - ($nwin_g * 10000);
			if ($mt_rand >= $nwin) {
				$summ = round($sum, 2);
				$winsumm = round($winsum, 2) + $sum;
				$coef = "Выиграли x". mt_rand($per * 100, $per * 300.5) / 100;  
				$newbalance = round($balance + $sum * $per - $sum, 2);
				$resultwin = round($sum * $per - $sum, 2);
				/* $insert_sql1 = "INSERT INTO `dice` (`user_id`, `bet`, `chance`, `btn`, `win`, `rand`,`create_at`, `type`) VALUES ('$user_id', '$sum', '$per', '', '$resultwin', '','', 'bubbles')";
                mysql_query($insert_sql1); */
				$update_sql4 = "Update kot_user set balance='$newbalance' WHERE hash='$sid'";
				mysql_query($update_sql4);
				$fa = "success";
			}
			if ($mt_rand < $nwin) {
				$summ = round($sum, 2);
				$winsumm = round($winsum, 2) + $sum;
				$coef = "Выпало x". mt_rand(100, $per * 100) / 100;
				/* $insert_sql1 = "INSERT INTO `dice` (`user_id`, `bet`, `chance`, `btn`, `win`, `rand`,`create_at`, `type`) VALUES ('$user_id', '$sum', '$per', '', '$resultwin', '','', 'bubbles')";
                mysql_query($insert_sql1); */
				$newbalance = $balance - $sum;
				$update_sql4 = "Update kot_user set balance='$newbalance' WHERE hash='$sid'";
				mysql_query($update_sql4);
				$error = 1;
				$fa = "error";
			}
		    }
			$hash = hash('sha512', $coef);
		} else {
			$newbalance = $balance;
		}
	}
	$result = array(
		'success' => "$fa",
		'number' => "$coef", // Мне лень писать нормальные уведомления
		'new_balance' => "$newbalance",
		'resultwin' => $resultwin,
		'hash' => $hash

	);
}

echo json_encode($result);
?>