<?php
	include("../connection.php");
  $total=$_REQUEST['total'];
	echo $que1="insert into bill1(b1_r_id,b1_total,b1_date,b1_nm,b1_adr,b1_cont,b1_eml,b1_city,b1_status)
		values('".$_SESSION['r_id']."',
		'".$_REQUEST['total']."',
		'".date("y-m-d")."',
		'".$_REQUEST['p_nm']."',
		'".$_REQUEST['p_add']."',
		'".$_REQUEST['p_cont']."',
		'".$_REQUEST['p_email']."',
		'".$_REQUEST['p_city']."',
		'".(0)."')";
		 $res1=mysql_query($que1,$con);
		if($res1)
		{
			echo "<br> inserted";
		}
		else
		{
			echo "<br> Not inserted";
		}
		$query="select * from bill1 order by b1_id ";
		$result=mysql_query($query,$con);
		while($row1=mysql_fetch_array($result))
		{
			 $b1_id=$row1['b1_id'];
		}
		 $b1_id;
		echo $que3="select * from addtocard where a_r_id=".$_SESSION['r_id'];
		$res3=mysql_query($que3,$con);
		if($res3)
		{
			echo "<br> Yes";
		}
		echo"<br>".$p_qty=$row1['p_qty'] - $row['a_p_qty'];
		while($row=mysql_fetch_array($res3))
		{
			echo $que4="select * from product where p_id= ".$row['a_p_id'];
			 $res4=mysql_query($que4,$con);
			if($res4)
			{
				echo "select<br>";
				while($row1=mysql_fetch_array($res4))
				{
				
					 echo"<br>".$p_qty=$row1['p_qty'] - $row['a_p_qty'];
					$que="update product set p_qty=".$p_qty." where p_id=".$row['a_p_id'];
					$res=mysql_query($que,$con);
					if($res)
					{
						echo "<br> updated";
					}
					else
					{
						echo "<br> Not updated";
					}
					echo $query2="insert into bill2(b2_b1_id,b2_p_id,b2_p_qty)values('".$b1_id."','".$row['a_p_id']."','".$row['a_p_qty']."')";
					if($res=mysql_query($query2,$con))
					{
						echo "<br> inserted";
						echo $qry1="delete from addtocard where a_r_id=".$_SESSION['r_id'];
						echo $res=mysql_query($qry1,$con);
						if($res)
						{
							echo "<br><br><br> deleted";
							header("location:../index.php?page=success");
						}
						else
						{
							echo "<br><br><br> not deleted";
						}
					}
					else
					{
							echo "<br> Not inserted in Bill2 record";
					}
				}
			}
			else
			{
				echo "<br> Not selected";
			}
		}
		
		
	?>