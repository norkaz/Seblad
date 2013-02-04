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
                
                if (form.namn.value == "") {
                    errors[errors.length] = "Skriv in bildnamn.";
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
	<form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
<table width="100%" align="center" border="0" cellpadding="2" cellspacing="0">
<tr>
<td align="left" width="100">
New Width:</td>
<td align="left"><input name="image_max_width" style="width: 120px" type="text" maxlength="4" /> px.</td>
</tr>
<tr><td colspan="2"><strong>OR</strong></td></tr>
<tr>
<td align="left">
New Height:</td>
<td align="left"><input type="text" name="image_max_height" style="width: 120px" maxlength="4" /> px.</td>
</tr>
<tr>
<td align="left">
Image:</td>
<td align="left"><input type="file" name="file" size="40" /></td></tr>
<tr>
<td align="left" colspan="2">
<ol style="margin:0;padding:3px 0px 3px 15px">
<li>Max file size: 175 KB.</li>
<li>Allowed extensions: jpg, jpeg, gif, png.</li>
<li>Max Dimension: <em>800</em>px.</li>
</ol>
</tr>
<tr>
<td align="left" colspan="2">
<input type="submit" name="submit" value="Submit!" style="font: 10pt verdana" />
</td>
</tr>
</table>
</form>



</center></body></html>






