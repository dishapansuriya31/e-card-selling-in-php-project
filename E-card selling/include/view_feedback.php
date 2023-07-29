<br>
<html>
	<head>
		<title>Feedback List</title>
	</head>
	<?php
		include("../connection.php");
		
		$que="select * from feedback where f_id=f_id";
		$result=mysql_query($que,$con);
	
	?>
	<center>
	<tr> <br>
		<table border="3" class="table" >
			<th colspan="7"  class="td">
				<h1>Feedback List</h1>
			</th>
		
	</tr>
		<th><h2>Name</h2></th>
		
		<th><h2>Review</h2></th>
		<th><h2>Action</h2></th>
	
	<?php
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>
				<td align='center'>".$row[f_nm]."</td>
				
				<td align='center'>".$row[f_review]."</td>
				
				<td>
						<a href=action/del_feedback.php?f_id=".$row['f_id'].">
							<img src='image/de.jpg' height='40' width='40' onclick='return f1()' />
						</a>
				</td> 
				</tr>";
				
		}
		
		mysql_close($con);
	?>
</table>
	</center>
</html>
<br>