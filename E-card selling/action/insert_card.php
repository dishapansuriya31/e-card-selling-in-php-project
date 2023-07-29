<?php
include("../connection.php");
session_start();

	echo $que="select * from product where p_id=".$_REQUEST['p_id'];
	$res=mysql_query($que,$con);
	$row=mysql_fetch_array($res);
	
	  if($_REQUEST['p_quantity']<=$row['p_qty'])
	  { 
		echo$que1="select * from addtocard where a_r_id=".$_SESSION['r_id']."&&a_p_id=".$row['p_id'];
		 $res1=mysql_query($que1,$con);
		$row1=mysql_fetch_array($res1);
		 $aid=$row1['a_id'];
		$quantity=$row1['a_p_qty'];
		$que=$_REQUEST['p_quantity'];
		$q=$quantity+$que;
		if($aid)
		{
			echo $query="update addtocard set a_p_qty='".$_REQUEST['p_qty']."' where a_p_id='".$_REQUEST['p_id']."'";
				$res=mysql_query($query,$con);
			
			if($res)
			{
				
				header("location:../index.php?page=addtocard&a_id=".$_REQUEST['a_id']."&p_id=".$row['p_id']."&a_p_qty=".$_REQUEST['p_qty']);
				echo "select";
			}
			else
			{
				header("location:../index.php?page=productdetail&p_id=".$_REQUEST['p_id']);
				echo mysql_error();
			}
		}
		else
		{
			echo "<br/>".$_REQUEST['p_quantity']."<=".$row['p_qty'];
			
				session_start();
				
				echo $query="insert into addtocard(a_p_id,a_r_id,a_p_qty)values('".$_REQUEST['p_id']."','".$_SESSION['r_id']."','".$_REQUEST['p_qty']."')";
					$result=mysql_query($query,$con);
				
				if($result)
				{
					
					header("location:../index.php?page=addtocard&a_id=".$_REQUEST['a_id']."&p_id=".$row['p_id']."&a_p_qty=".$_REQUEST['p_qty']);
					echo "select";
				}
				else
				{
					header("location:../index.php?page=productdetail&p_id=".$_REQUEST['p_id']);
					
				}
			
		}	
	 }
	 else
	 {
		header("location:../index.php?page=productdetail&msg=1&p_id=".$row['p_id']);
		echo mysql_error();
	 }
	
	?>