<?php
	require_once("../connection.php");
	$que="delete from feedback where f_id=".$_REQUEST[f_id];
	mysql_query($que,$con);
	header("location:../index.php?page=view_feedback");
?>