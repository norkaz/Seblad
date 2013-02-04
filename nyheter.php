	<?php
require_once "data_settings.php";		
?>

			<div class="rightcol">
				<h2>Nyheter</h2>
					<div class="content">
					<?php
					$query = mysql_query("SELECT * FROM posts ORDER BY id_post desc LIMIT 0,20");
					while($posts = mysql_fetch_array($query)) {
						echo "<div class='post'>";
						echo "<h3>".$posts["rubrik"]."</h3><p>";
						echo $posts["comment"];
				        echo "</p><br><br>";
						
						echo "<div class='date'>";
						echo $posts["time"];
						echo "</div></div>";
					}
					?>
				</div>	
			</div>	
