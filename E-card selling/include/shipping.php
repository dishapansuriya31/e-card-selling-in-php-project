<?php
	include("../connection.php");
	echo $_REQUEST['b1_id'];
	echo $que="update bill1 set b1_status=".(1)." where b1_id=".$_REQUEST['b1_id'];
	if(mysql_query($que))
	header("location:index.php?page=view_purchase");
?>