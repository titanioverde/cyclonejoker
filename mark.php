<?php
	$mark_query = $con->prepare("INSERT INTO marks ('task', 'user', 'timestamp', 'comment') VALUES (?, ?, UNIX_TIMESTAMP(), ?);");
	$mark_query->bind_param("iis", $_GET["task"], $_SESSION["user"], $_GET["comment"])
?>