<?php


$db_host = '127.0.0.1'; 
$db_pass = '';
$db_user = 'root';
$db_name = 'card';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
$mysqli->set_charset("utf8mb4"); 
?>