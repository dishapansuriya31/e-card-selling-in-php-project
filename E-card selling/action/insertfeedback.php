<?php
	include("../connection.php");
	session_start();
	echo $que="select * from registration r_id=".$_SESSION['r_id'];
	 $res=mysql_query($que,$con);
	$row=mysql_fetch_array($res);
	echo $id=$_SESSION['r_id'];
	
	echo $que1="insert into feedback(f_r_id,f_nm,f_review)values('".$_SESSION['r_id']."','".$_REQUEST['f_nm']."',
	
	'".$_REQUEST['f_review']."')";
	if(mysql_query($que1,$con))
	{
		header("location:../index.php?page=home");
		//echo "selected";
	}
	else
	{
		header("location:../index.php?page=feedback");
	}
	
?>
