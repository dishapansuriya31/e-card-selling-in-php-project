<?php
	//require_once("../connection.php");
	include("../connection.php");
	
	
	$npwd=$_REQUEST['pwd'];
	$cpwd=$_REQUEST['cpwd'];
	session_start();
	 echo $que="select * from registration where r_id=".$_SESSION['f_r_id'];
	echo $res=mysql_query($que,$con);
	$row=mysql_fetch_array($res);
	if($npwd==$cpwd)
	{
		
			echo $que="update registration set r_password='".$npwd."' where r_id=".$_SESSION['f_r_id'];
			if(mysql_query($que,$con))
			{
				header("location:../index.php?page=login");
			}
			else
			{
				header("location:../index.php?page=forgetpassword&r_id=".$_SESSION['f_r_id']."&msg==0.");
			}
	}
	else
	{
		header("location:../index.php?page=forgetpassword&r_id=".$_SESSION['f_r_id']."&msg==0.");
	}
	//session_destroy();
?>