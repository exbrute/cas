<?php
include('site_config.php');

$shop_id = '4291'; // ID кассы в fropay
$secret_key = 'mw4f7yljoi596nz'; // Секретный ключ в настройках кассы
$pay = $_POST['pay']; // Номер платежа в системе FROPAY
$label = $_POST['label']; // ID платежа в вашей системе
$amount = $_POST['amount']; // Сумма платежа в формате 100.00
$hashsign = $_POST['hash']; // Зашифрованная строка shop_id.amount.secretKey.label.pay методом sha256

$sign = hash('sha256', $shop_id.$amount.$secret_key.$label.$pay);

if ($sign != $hashsign) {
die('Неверный hash'); // проверка hash, при желании можно не использовать
 alert('hash error');
}

$idmoney = $label;
$data = date('d-m-Y H:i:s');
$yandex = '';
$suma = $amount;
include('bd.php');
		if (is_numeric($idmoney))
		{
		$sql_select = "SELECT * FROM kot_user WHERE id='$idmoney'";
$result = mysql_query($sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balance = $row['balance'];
$ref = $row['ref_id'];
}
	$sumaref = ($suma / 100) * 10;
if($ref >= 1)
{	
			$sql_select = "SELECT * FROM kot_user WHERE id='$ref'";
$result = mysql_query($sql_select);
$row = mysqli_fetch_array($result);
if($row)
{	
$balanceref = $row['balance'];
$balancerefs = $balanceref + $sumaref;
$update_sql1 = "Update kot_user set balance='$balancerefs' WHERE id='$ref'";
    mysql_query($update_sql1);
}
} 

$balancenew = $row['balance'] + $suma;
$update_sql15 = "Update kot_user set balance='$balancenew' WHERE id='$idmoney'";
    mysql_query($update_sql15);
			$insert_sql156 = "
			INSERT INTO `kot_payments` (`user_id`, `suma`, `data`, `qiwi`, `transaction`) 
			VALUES ('{$idmoney}', '{$suma}', '{$data}', '{$yandex}', '{$pay}')
			";
mysql_query($insert_sql156);
} 






    die('YES');
    alert('success');

?>