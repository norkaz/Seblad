<div class="rightcol">
				<h2>Galleri</h2>
<?php
require_once "data_settings.php";
       		$query = mysql_query("SELECT * FROM images ORDER BY id_pic desc LIMIT 0,15") or die(mysql_error());
       		while($image = mysql_fetch_array($query)) {
       			$src = $image["src"];
       			$namn = $image["namn"];
       			echo "<p><img src='$src' TITLE='$namn' class='gal_pic'></p>";
       		}
?>
</div>