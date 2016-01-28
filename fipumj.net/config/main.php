<?php
$host = 'localhost';
$user = 'root';
$pass = 'root123';
$db = 'fipumj_system';
$_SESSION['pin'] = '111';
$connect = mysql_connect($host, $user, $pass) or die('Error Database Connection');
$db_selection = mysql_select_db($db, $connect) or die('Error Database Selection');
?>