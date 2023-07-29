<br>
<body>
<form>
<input type="hidden" name="page" value="view_product"/>
<input type="hidden" name="p_id" value="$_REQUEST['p_id']">
	<table border="2" align="center" class="table">
	<tr>
		<th colspan="6" class="b"><h1>Product</h1></th>
		
	</tr>
	<tr>
		<th><h2>Image</th></h2>
		<th><h2>Name</th></h2>
		<th><h2>Price</th></h2>
		<th><h2>Quantity</th></h2>
		<th><h2>Total</th></h2>
	</tr>
	<?php
		include("../connection.php");
		//session_start();
		$que="select * from bill1 where b1_id='".$_REQUEST['b1_id']."'&&b1_status='".(0)."'order by b1_id";
		$res=mysql_query($que,$con);
		while($row=mysql_fetch_array($res))
		{
			  $que1="select * from bill2 where b2_b1_id='".$row['b1_id']."'";
			  $res1=mysql_query($que1,$con);
			 $row1=mysql_fetch_array($res1);
			if($row1)
				{
					$que2="select * from product where p_id=".$row1['b2_p_id'];
					$res2=mysql_query($que2,$con);
					$row2=mysql_fetch_array($res2);
					if($row2)
					{
						echo"<tr>";
						echo"<td><img src='upload/".$row2['p_image']."' height='100px' width='80px'></td>";
						echo"<td>".$row2['p_nm']."</td>";
						echo"<td>".$row2['p_price']."</td>";
						echo"<td>".$row1['b2_p_qty']."</td>";
						echo"<td>".$tot=$row1['b2_p_qty']*$row2['p_price']."</td>";
						$bill1=$tot;
						echo"</tr>";
					}
				}
		}
	?>
	<tr>
		<th colspan="4" align="right"><h2>Total</h2></th>
		<th colspan="2"><h2><?php echo $bill1;?></h2></th>
	</tr>
	
</table>
<a href='index.php?page=view_purchase'><img src='image/back.jpg' height='60px' width='60px'/></a>
</form>
</body>