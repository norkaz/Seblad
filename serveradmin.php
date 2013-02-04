<?php
session_start();

require_once "data_settings.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<TITLE>Facegram</TITLE>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel='stylesheet' type='text/css' href='main.css' />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script type='text/javascript' src='jquery.lazyload.min.js'></script>
		<script type='text/javascript' src='javascript.js'></script>
		<script type='text/javascript'>
			function check(form){
                var errors = [];
                
                if (form.username.value == "") {
                    errors[errors.length] = "Skriv in användarnamn.";
                }
                if (form.password.value == "") {
                    errors[errors.length] = "Skriv in lösenord.";
                }
     
                if (errors.length > 0) {
                    reportErrors(errors);
                    return false;
                }
     
                return true;
            }
 
            function reportErrors(errors){
                var msg = "";
                for (var count = 0; count<errors.length; count++) {
                    msg += errors[count] + "\n";
                }
                alert(msg);
            }
		</script>
	</head><center>
  <br>
  <br>
  <br>

	
<?php
		
		if (isset($_GET['msg'])) {
			$echomsg = str_replace("_", " ", $_GET['msg']);
			echo "<script>alert('$echomsg')</script>";
		}
		if(!isset($_SESSION['name_user'])) {?>
		<form action="login.php" method="post" onsubmit="return check(this);" class="login_form">
            <input type="text" style="width:106px;" name="username" placeholder="Användarnamn"></div><br>
            <input type="password" style="width:106px;" name="password" placeholder="Lösenord"></div><br>
            <input type="submit" style="width:110px;" value="Logga in">
       	</form>
       	<?php 
       	}
       	if(isset($_SESSION['name_user'])) {?>
       	<font color="#FFF"
       		<b><p>Inloggad som <?=$_SESSION['name_user']?></p></b></font>
       		<a class="adminlink" href="admin_page.php" title="Ladda upp en bild i Galleri">Ladda upp bild</a><br>
       		<a class="adminlink" href="new_post.php" title="Skriv nytt inlägg i Nyheter">Nytt inlägg</a><br>
       		
       		<?php
       	}?>

       	<?php
       	if(isset($_SESSION['name_user'])) {?>
       	<a class="adminlink" href="logout.php" title="Logga ut mig">Logga ut</a><br>
       	<?php }?>
	</center></body>
</html>