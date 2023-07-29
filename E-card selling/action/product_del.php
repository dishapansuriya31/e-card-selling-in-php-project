<?php
	include("../connection.php");
	
	echo $id=$_REQUEST['p_id'];
	
	$que="delete from product where p_id=".$_REQUEST['p_id'];
	if(mysql_query($que,$con))
	{
		header("location:../index.php?page=view_product");
		//echo "delete";
	}
	else
	{
		echo mysql_error();
	}
?>
	