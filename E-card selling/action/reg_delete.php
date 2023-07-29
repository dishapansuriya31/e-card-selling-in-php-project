<?php
	require_once("../connection.php");
	$que="delete from registration where r_id=".$_REQUEST[r_id];
	mysql_query($que,$con);
	header("location:../index.php?page=view_registration");
?>