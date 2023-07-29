<?php

	include("../connection.php");
	
	echo $ans=$_REQUEST['r_ans'];
	echo $rid=$_SESSION['f_r_id'];
	echo  $que="select * from registration where r_id=".$rid;
	$res=mysql_Query($que,$con);
	$row=mysql_fetch_array($res);
	 $rans=$row['r_ans'];
	if($_REQUEST['ans']==$row['r_ans'])
	{
		header("location:../index.php?page=forgetpassword&r_id=".$rid);
		echo "selected";
	}
	else
	{
		header("location:../index.php?page=forgetans&r_id=".$rid."&msg==0.");
		echo " not selected";
	}
?>