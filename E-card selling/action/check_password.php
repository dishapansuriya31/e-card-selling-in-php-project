<?php
	//require_once("../connection.php");
	include("../connection.php");
	
	echo $opwd=$_REQUEST['c_opwd'];
	echo $npwd=$_REQUEST['c_npwd'];
	echo $cpwd=$_REQUEST['c_cpwd'];
	session_start();
	         echo   $que="select * from registration where r_id=".$_SESSION['r_id']." && r_utype=".(0);
	$res=mysql_query($que,$con);
	if($row=mysql_fetch_array($res))
	{
		$pwd=$row['r_password'];
		if($opwd==$pwd)
		{
			if($npwd==$cpwd)
			{
			echo $que="update registration set r_password='".$npwd."' where r_id=".$_SESSION['r_id'];
			if(mysql_query($que,$con))
			{
				header("location:../index.php?page=home");
				echo "password is chang";
			}
			else
			{
				echo "Not chang";
				header("location:../index.php?page=changepassword&msg=1");
				mysql_error();
			}
			}
			else
			{
				echo "No chang";
				header("location:../index.php?page=changepassword&msg=1");
				mysql_error();
			}
		}
		else
		{
		echo "No";
			header("location:../index.php?page=changepassword&msg=0");
		}
	}
	else
	{
		echo "No";
		header("location:../index.php?page=changepassword&msg=0");
	}
?>