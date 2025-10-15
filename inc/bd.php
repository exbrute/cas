<?php
$bd_server = "localhost";

$bd_login = 'beezeuser';//логин базы данных

$bd_pass = 'beezepass123';//пароль базы данных

$bd_name = 'beezename';//имя базы данных
 
mysql_connect($bd_server, $bd_login, $bd_pass)//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>not connect base!</p>");
mysql_select_db($bd_name)//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>error load base</p>");
mysql_query("SET NAMES utf8");
?>