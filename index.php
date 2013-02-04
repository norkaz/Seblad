<?php
session_start();

require_once "data_settings.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<TITLE>Facegram</TITLE>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel='stylesheet' type='text/css' href='main.css' />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		<script type='text/javascript' src='jquery.lazyload.min.js'></script>
		<script type='text/javascript' src='javascript.js'></script>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
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
	</head>

	<?php if(isset($_GET['page'])) {
	$page = $_GET['page'];
			?>
			<body onload="clicked('<?=$page?>.php')">
	<?php
		} else {
		?>
		<body onload="clicked('nyheter.php')">

       	<div class="wrapper clearfix">
		<center><h1> </h1></center>
	
	<div class="header">
		<ul class="meny menulink">
			
			<li class="menu"><a onclick="clicked('nyheter.php')">Nyheter</a></li>
			<li class="menu"><a onclick="clicked('galleri.php')">Galleri</a></li>
			<li class="menu"><a onclick="clicked('video.php')">Video</a></li>
			<li class="menu"><a onclick="clicked('musik.php')">Musik</a></li>
			<li class="menu"><a onclick="clicked('contact.php')">Contact</a></li>
				
			</ul>
	</div>	
		
				<div id="content"></div>	
				<div class="adds">

					<?php
		}
		if (isset($_GET['msg'])) {
			$echomsg = str_replace("_", " ", $_GET['msg']);
			echo "<script>alert('$echomsg')</script>";
		}
		if(!isset($_SESSION['name_user'])) {?>
		
       	<?php 
       	}
       	if(isset($_SESSION['name_user'])) {?>
       	<font color="#FFF"
       		<b><p>Inloggad som <?=$_SESSION['name_user']?></p></b></font>
       		<a class="adminlink" href="admin_page.php" title="Ladda upp en bild i Galleri">Ny bild</a><br>
       		<a class="adminlink" href="new_post.php" title="Skriv nytt inlägg i Nyheter">Nytt inlägg</a><br>
       		
       		<?php
       	}?>

       	<?php
       	if(isset($_SESSION['name_user'])) {?>
       	<a class="adminlink" href="logout.php" title="Logga ut mig">Logga ut</a><br>
       	<?php }?>
       	

    
			<a class="adminlink" href="serveradmin.php" title="Logga in">Logga in</a><br>
	
					
			<p>Joel Seblad, Admin</p>
			<a href="http://www.facebook.com/jseblad" target="_blank" title="På facebook"> <img src="http://facegram.uphero.com/uploads/1216778401510dbc10711ee.jpg" width="100%"></a>
			
			<a class="adminlink" href="http://st.kgwebb.com/" target="_blank" title="Vi har målet att försöka skapa en ny community för dig som vill hitta lite nytt folk att mingla med.">Sweden Treasure</a>
			<br><a class="adminlink" href="http://sebast.se/" target="_blank" title="Sebastian Marcusson">SEBAST</a>
			<br><a class="adminlink" href="http://seblad.blogg.se" target="_blank" title="seblad.blogg.se">Joel Blogg</a>
			<br><a class="adminlink" href="http://aboutvendela.blogg.se" target="_blank" title="aboutvendela.blogg.se">Vendela Blogg</a>
				
			

				</div>

<div class="clearfix"></div>
					<div class="footer clearfix">
						
					</div>
			
</div>
<br>

	
</html>