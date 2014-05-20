<link rel="stylesheet" href="default.css">
<?php
	require("lib/common.php");
	$con = connect_sql();
	
	$statement = $con->prepare("SELECT text, color, firsthour FROM tasks WHERE task_id = ?");
	$id = 1;
	$statement->bind_param("i", $id);
	$statement->execute();
	$statement->bind_result($text, $color, $firsthour);
	$statement->fetch();
	$button = "<div class='task_button' style='background: #$color' data-task='$id'>
		<p class='task_button'>$text</p>
	</div>";
	echo $button;
?>