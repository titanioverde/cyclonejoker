<?php
	require("lib/common.php");
	$con = connect_sql();
	
	$statement = $con->prepare("SELECT text, color, hourlimit FROM tasks WHERE task_id = ?");
	$id = 1;
	$statement->bind_param("i", $id);
	$statement->execute();
	$statement->bind_result($text, $color, $hourlimit);
	$statement->fetch();
	$button = "<div class='task_button' style='background: #$color'>
		<p>$text</p>
	</div>";
	echo $button;
?>