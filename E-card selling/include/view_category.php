<br>
<body>
<center>

	<a href="index.php?page=add_category">
	<img src='image/add.jpg' height='50' width='50' /></a>
	<br>
	<table border="1" align="center" class="table">
	
	<tr>
		<th><h2>Category</h2></th>
		<th><h2>Image</h2></th>
		
		<th colspan='2'><h2>Action</h2></th>
	</tr>
	
	<?php
		include("../connection.php");
		$que="select * from category ";
		$res=mysql_query($que,$con);
		while($row=mysql_fetch_array($res))
		{
			echo"<tr><td>".$row['c_name']."</td>
				&nbsp;&nbsp;&nbsp;
				<td><img src='upload/".$row['c_image']."' height='50px' width='50px'></td>
				<td> <a href='index.php?page=add_category&c_id=".$row['c_id']."'>
				<img src='image/adit.jpg' height='30' width='30' onclick='return f2()' /></a></td>
				<td><a href='action/cat_delete.php?c_id=".$row['c_id']."'>
				<img src='image/de.jpg' height='30' width='30' onclick='return f1()' /></a></td>
			</tr>";
		}
		mysql_close($con);
	?>
	
</table>
</center>
</body>
