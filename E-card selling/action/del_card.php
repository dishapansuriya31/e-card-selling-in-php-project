<?php
	include("../connection.php");
	
	//session_start();
	$que="delete from addtocard where a_p_id='".$_REQUEST['p_id']."' and a_r_id='".$_SESSION['r_id']."'";
	if(mysql_query($que,$con))
	{
		//echo "deleted";
		header("location:../index.php?page=addtocard");
	}
	else
	{
		echo mysql_error();
	}
	
?>