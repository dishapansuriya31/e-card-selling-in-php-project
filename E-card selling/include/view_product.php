<html>
<body>
	<center>
	<br>
		<a href="index.php?page=add_product"><img src="image/add.jpg" height="50px" width="50px"/></a>
	<br><br>
	</center>
<form method="get">
	<input type="hidden" name="page" value="view_product"/>
	<input type="hidden" name="c_id" value="$_REQUEST['c_id']" />
	<input type="hidden" name="p_id" value="$_REQUEST['p_id']" />
<center class='td'> category:	
<select name="c_id" class='textbox'onchange="this.form.submit()">

<option value="c_id">All</option>

<?php
	include("../connection.php");
	 $que="select * from category ";
	 $res=mysql_query($que,$con);
	while($row=mysql_fetch_array($res))
	{
		if(isset($_REQUEST['c_id']))
		{
			if($row['c_id']==$_REQUEST['c_id'])
			{
				echo"<option selected value=".$row['c_id'].">".$row['c_name']."</option>";
			}
			else
			{
				echo"<option value=".$row['c_id'].">".$row['c_name']."</option>";
			}
		}
		else
		{
			echo"<option value=".$row['c_id'].">".$row['c_name']."</option>";
		}
		//echo"</select>";
		
	}	
		?>
</select><br><br>
</form>
	<?php
		
		if(isset($_REQUEST['c_id']))
		{
			$que="select * from product where c_id=".$_REQUEST['c_id'];
		}
		else
		{
			$que="select * from product where c_id=c_id";
		}
		echo"<table border='2' align='center' class='table1'>";
		echo"<tr >";
		echo"<th><h2>Name</h2></th>
		     <th><h2>Image</h2></th>
			<th><h2>Price</h2></th>
			<th><h2>Quantity</h2></th>
			<th><h2>Action</h2></th>";
		echo"</tr>";
		
		include("../connection.php");
		$res=mysql_query($que,$con);
		$i=1;
		while($row=mysql_fetch_array($res))
		{
			if($i==0)
			{
				echo"<tr><td>".$row['p_nm']."</td>
					<td><img src='upload/".$row['p_image']."' height='50px' width='50px'></td>
					<td>".$row['p_price']."</td>
					<td>".$row['p_qty']."</td>
					
					<td><a href='index.php?page=add_product&p_id=".$row['p_id']."'><img src='image/adit.jpg' height='30px' width='30px' onclick='return f2()'></a>
						<a href='action/product_del.php?p_id=".$row['p_id']."'><img src='image/de.jpg' height='30px' width='30px' onclick='return f1()'></a></td>
					</tr>";
					$i=1;
			}
			else
			{
				echo"<tr><td>".$row['p_nm']."</td>
					<td><img src='upload/".$row['p_image']."' height='50px' width='50px'></td>
					<td>".$row['p_price']."</td>
					<td>".$row['p_qty']."</td>
					
					<td><a href='index.php?page=add_product&p_id=".$row['p_id']."'><img src='image/adit.jpg' height='30px' width='30px' onclick='return f2()'></a>
						<a href='action/product_del.php?p_id=".$row['p_id']."'><img src='image/de.jpg' height='30px' width='30px' onclick='return f1()'></a></td>
					</tr>";
					$i=0;
			}
		}
		echo"</table>";
	?>
</body>
</html>