<?php
	include "db.php";
	$run = $db->query("select * from chat order by id desc");
	$x = $run->fetchAll(PDO::FETCH_ASSOC);

	foreach ($x as $item) {
					echo '<div id="chat_data">';
					echo "<span style='font-family:monospace;'>".formatDate($item['date'])." </span>";
					echo "<span style='color:green;'>".$item['name'].": </span>";
					echo "<span style='color:blue;'>".$item['msg']."</span>";
					echo "</div>";

	}
?>