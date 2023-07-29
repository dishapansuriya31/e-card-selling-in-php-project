<?php
	include("../connection.php");
	$runm=$_REQUEST['unm'];
	echo $que="select * from registration where r_unm='".$runm."'";
	$res=mysql_Query($que,$con);
	$row=mysql_fetch_array($res);
	$r_id=$row['r_id'];
	echo $utype=$row['r_utype'];
	if(isset($r_id)&&$utype==(0))
	{
		$_SESSION['f_r_id']=$r_id;
		header("location:../index.php?page=forgetans&r_id='".$r_id."'");
	}
	else
	{
		 header("location:../index.php?page=forgetuser&msg==0");
	}
	
?>