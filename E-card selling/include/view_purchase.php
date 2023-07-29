<br>
<body>
	<form>
	<input type="hidden" name="p_id" value="<?php echo $_REQUEST['p_id'];?>" />
	<table border=2 align="center" class="table">
	<tr>
		<th colspan="8"  class="td"><h1>Purchase List</h1></th>
	</tr>
	<tr>
		<th><h2>Name</h2></th>
		<th><h2>Date</h2></th>
		<th><h2>City</h2></th>
		<th><h2>Address</h2></th>
		<th><h2>Contact No.</h2></th>
		<th><h2>Email</h2></th>
		<th colspan="2"><h2>Action</h2></th>
	</tr>
	<?php
		include("../connection.php");
		$que="select * from bill1 where b1_status=0";
		$res=mysql_query($que);
		while($row=mysql_fetch_array($res))
		{
			echo"<tr>";
			echo"<td>".$row['b1_nm']."</td>";
			echo"<td>".$row['b1_date']."</td>";
			echo"<td>".$row['b1_city']."</td>";
			echo"<td>".$row['b1_adr']."</td>";
			echo"<td>".$row['b1_cont']."</td>";
			echo"<td>".$row['b1_eml']."</td>";
			echo"<td><a href='index.php?page=view_purchase_product&b1_id=".$row['b1_id']."'>View</a></td>";
			echo"<td><a href='index.php?page=shipping&b1_id=".$row['b1_id']."'>Shipping</a></td>";
			echo"</tr>";
		}
	?>
</table>
</form>
</body>