<?php
	require_once("../connection.php");
	
	echo	$que="delete from category where c_id=".$_REQUEST['c_id'];
	if(mysql_query($que,$con))
	{	
		echo  $que="delete from product where c_id=".$_REQUEST['c_id'];
		if(mysql_query($que,$con))
		{
			header("location:../index.php?page=view_product");
			echo "delete";
		}
		else
		{
			echo mysql_error();
		}
		header("location:../index.php?page=view_category");
	}
	else
	{
		echo mysql_error();
	}
?>
	