<?php
require_once "data_settings.php";
header("Content-Type:text/html; charset=UTF-8");

$rubrik = $_POST["rubrik"];
$comment = $_POST["comment"];
$query = mysql_query("INSERT INTO posts (rubrik, comment, time) VALUES('$rubrik' , '$comment' , NOW())");

header("location: index.php");




?>