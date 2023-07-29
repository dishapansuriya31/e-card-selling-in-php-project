
	<br>
	<form name="frmpurchase"  action="action/insert_bill.php" method="POST">
	<input type="hidden" name="total" value="<?php echo $_REQUEST['total'];?>">
	<input type="hidden" name="b1_id" value="<?php echo $_REQUEST['b1_id'];?>">
	<?php
		include("../connection.php");
		$que="select * from registration where r_id=".$_SESSION['r_id'];
		 $res=mysql_query($que,$con);
		$row=mysql_fetch_array($res);
	?>
		<table border="0" align="center" >
		
		<tr>
			<th colspan="2" class="title">Purchase Card</th>
		</tr>
		
		<tr>
			<td class="td">Name:</td>
			<td class="td"><input type="text" name="p_nm" placeholder="enter name" class="textbox" value="<?php echo $row['r_unm']?>"
			title="enter only charecter" pattern="[A-z]{1,}"  required>
		</tr>
		<tr>
			<td class="td">City:</td>
			<td class="td"><input type="text" name="p_city" placeholder="enter city" class="textbox"  value="<?php echo $row['r_city']?>" 
			title="enter only charecter" pattern="[A-z]{1,}"  required>
		</tr>
		<tr>
			<td class="td">Contact No:</td>
			<td class="td"><input type="text" name="p_cont" placeholder="enter contact no" class="textbox" value="<?php echo $row['r_cont']?>"  title="enter only 10 digit" pattern="[0-9]{1,}"  required>
		</tr>
		<tr>
			<td class="td">Address:</td>
			<td class="td"><input type="text" name="p_add" placeholder="enter address" value="<?php echo $row['r_add']?>"  class="textbox" required>
		</tr>
		<tr>
			<td class="td">E-mail:</td>
			<td class="td"><input type="email" name="p_email" placeholder="enter E-mail id" value="<?php echo $row['r_email']?>"  class="textbox" required>
		</tr>
		<tr>
		<td align="center" colspan="2" class="td">
			<input type="submit" value="Purchase" name="button" class="button">
		</td>
	</tr>
		</table>
	</br>
</form>
</body>
