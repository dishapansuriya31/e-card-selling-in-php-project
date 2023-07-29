<?php

	$con=mysql_connect("localhost","root","root");
	$res=mysql_select_db("e_card",$con)or die ("database not found");
	if($res)
	{
		echo "login";
	}
else
	{
		echo mysql_error();
	}
	session_start();
	
	
?>