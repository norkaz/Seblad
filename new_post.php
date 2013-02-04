<?php
session_start();
header("Content-Type:text/html; charset=UTF-8");
if (!isset($_SESSION['name_user'])) {
	header("Location: index.php");
}
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <center>
<script type='text/javascript'>
			function check(form){
                var errors = [];
                
                if (form.rubrik.value == "") {
                    errors[errors.length] = "Skriv en rubrik!";
                }

                if (form.comment.value == "") {
                    errors[errors.length] = "Skriv ett inlägg!";
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
	<form action="add_post.php" method="post"
        enctype="multipart/form-data" onsubmit="return check(this);">
        <label for="file">Rubrik<br></label>
        <input type="text" name="rubrik"><br>
        <textarea rows="20" cols="45" name="comment"></textarea><br>
        
        <input type="submit" value='Publicera'>
    </form>

    </center></body></html>