<?php
session_start();

if (!isset($_SESSION['name_user'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<TITLE>BOEL</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<p>Inloggad</p>
	</body>
</html>