if($_POST['action'] && $_POST['action'] === 'doFunctionOnServer'){

    <?
    $nybonussz = "0.1";
    $balancea = $row['balance'];
$newbalancez = $balancea + $nybonussz;



  $update_sql2 = "UPDATE kot_user SET balance = '$newbalancez' WHERE hash = '$sid'";
    mysql_query($update_sql2);      	
?>
    nysucces();

}