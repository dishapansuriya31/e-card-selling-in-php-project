<html>
<body>
<form>
	<input type="hidden" name="p_id" value="<?php echo $_REQUEST['p_id'] ?>">
	<input type="hidden" name="a_id" value="<?php echo $_REQUEST['a_id'] ?>">
	<?php
		include("../connection.php");
		$query1="select * from addtocard where a_r_id=".$_SESSION['r_id'];
		$result1=mysql_query($query1);
		/* $que="select * from product where p_id= ".$_REQUEST['p_id'];
		 $res=mysql_query($que,$con);*/
	
	?>
	<table border="3" align="center" class="table">
		<tr>
			<td colspan="6"  align="center"><h1>Add to Card</h1></td>
		</tr>
		<tr>
			<th><h2 class="td">Image</h2></th>
			<th><h2 class="td">Name</h2></th>
			<th><h2 class="td">Price</h2></th>
			<th><h2 class="td">Quantity</h2></th>
			<th><h2 class="td">Total</h2></th>
			<th><h2 class="td">Action</h2></th>
		</tr>
		<?php
			
			while($row=mysql_fetch_array($result1))
			{
				echo"<tr>";
				 $query="select * from product where p_id=".$row['a_p_id'];
				$result=mysql_query($query);
				if($row1=mysql_fetch_array($result))
				{
					//$_SESSION['p_id']=$row[p_id];
					echo"<td><img src='upload/".$row1['p_image']."'height='100px' width='85px'></td>";
					echo"<td>".$row1['p_nm']."</td>";
					echo"<td>".$row1['p_price']."</td>";
					echo"<td>".$row['a_p_qty']."</td>";
					echo"<td>".$tot=$row['a_p_qty']*$row1['p_price']."</td>";
					echo"<td align='center'><a href='index.php?page=productdetail&p_id=".$row['a_p_id']."'>
											<img src='image/adit.jpg' height='30' width='30'></a>
											<a href='action/del_card.php?p_id=".$row['a_p_id']."'>
											<img src='image/de.jpg' height='30' width='30'></a>
						</td>";
						$bill_tot+=$tot;
				}
				echo"</tr>";
			}
		?>
		
		<tr class="td">
			<td colspan="4" align="right">Total  </td>
			<td colspan="2" ><?php echo $bill_tot;?></td>
		</tr>
		<tr class="td">
			<td colspan="3"><a href="index.php?page=card"><b>Continue Shopping</b></a></td>
			<td colspan="3" align="right"><a href="index.php?page=purchase&total=<?php echo $bill_tot;?>"><b>Purchase>></b></td>
		</tr>
	</table>
	</form>
</body>
</html>