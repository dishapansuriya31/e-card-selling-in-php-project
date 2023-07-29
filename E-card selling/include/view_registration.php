<html>
	<head>
		<title> View Record</title>
	</head>
<?php
	include("../connection.php");
	
	$que="select * from registration where r_id=r_id&&r_utype='".(1)."'";
	$result=mysql_query($que,$con);
	
?>
	<center>
	<tr> <br>
		<table border="3" class="table">
			<th colspan="11" class="td">
				<h1>Registration List</h1>
			</th>
		
	</tr>
		<th>first name</th>
		<th>last name</th>
		<th>user name</th>
		<th>password</th>
		<th>address</th>
		<th>city</th>
		<th>email</th>
		<th>conteact no</th>
		<th>question</th>
		<th>answer</th>
		<th>action</th>
		
	<?php
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>
					<td align='center'>".$row[r_fnm]."</td>
					<td align='center'>".$row[r_lnm]."</td>
					<td align='center'>".$row[r_unm]."</td>
					<td align='center'>".$row[r_password]."</td>
					<td align='center'>".$row[r_add]."</td>
					<td align='center'>".$row[r_city]."</td>
					<td align='center'>".$row[r_email]."</td>
					<td align='center'>".$row[r_cont]."</td>
					<td align='center'>".$row[r_que]."</td>
					<td align='center'>".$row[r_ans]."</td>
				  
					<td>
						<a href=action/reg_delete.php?r_id=".$row['r_id'].">
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
</br>