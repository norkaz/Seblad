<?php
session_start();
require_once 'data_settings.php';

$username = strtolower($_POST['username']);
$password = $_POST['password'];

$check = mysql_query("SELECT COUNT(username) AS counter FROM users WHERE username = '$username' AND password = '$password'") or die(mysql_error());
$fetch = mysql_fetch_array($check);
$result = $fetch['counter'];
if ($result == 0) {
    header("Location: index.php?msg=Fel_användarnamn_eller_lösenord");
} else {
    $_SESSION['name_user'] = ucfirst($username);
    header("Location: index.php");
}
?>