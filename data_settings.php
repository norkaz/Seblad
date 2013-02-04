<?php

$mysql_host = "";
$mysql_database = "";
$mysql_user = "";
$mysql_password = "";

$connect = mysql_connect($mysql_host, $mysql_user, $mysql_password = "");
mysql_query('set names utf8;', $connect);
mysql_select_db($mysql_database);
?>