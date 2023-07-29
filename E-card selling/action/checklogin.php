<?php
	//require_once("../connection.php");
	include("../connection.php");
	$unm=$_REQUEST['r_unm'];
	$password=$_REQUEST['r_password'];
	
	echo $que="select * from registration where r_unm='".$unm."' && r_password='".$password."'";
	$result=mysql_query($que,$con);
	
	if($row=mysql_fetch_array($result))
	{
		session_start();
		echo $_SESSION['unm']=$row['r_unm'];
		echo $_SESSION['r_utype']=$row['r_utype'];
		echo $_SESSION['r_id']=$row['r_id'];
		header("location:../index.php?page=home");
		
	}
	else
	{
		header("location:../index.php?page=login&msg==0");
	}
?>