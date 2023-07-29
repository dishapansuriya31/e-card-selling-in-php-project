<br>
<div>
<html>
<head>
	<title>  E-card selling</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?php
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg']==0)
		{
			echo "<center><h2 class='td'><font color='red'>Please Enter right answer</font></h2></center>";
		}
	}
?>
<form action="action/forget_ans.php" method="POST">
	<?php
		include("./connection.php");
		
		$que="select * from registration where r_id=".$_REQUEST['r_id'];
		$res=mysql_Query($que,$con);
		$row=mysql_fetch_array($res);
		$r_id=$row['r_id'];
		
		
	?>
<input type="hidden" name="r_id" value="<?php echo $row['r_id'];?>">
	<table  align="center" class="table">
	<tr>
		<th colspan="2" align="center" class="title"> Forget answer</th>
	</tr>
	<tr>
		<td class="td">Security Question:</td>
		<td class="textbox">
			<?php
				echo $row['r_que'];
				
			?>
		</td>
	</tr>
	<tr>
		<td class="td">answer:</td>
		<td class="td"><input type="text" name="ans" placeholder="Enter Answer" class="textbox"></td>
	</tr>
	<tr>
		<th align="center" colspan="2">
			<input type="submit" value="Submit" name="submit" class="button">
			<input type="reset" value="Clear" name="reset" class="button">
	
		</th>
	</tr>
</table>	
</form>
</body>
</html>
</div>
<br>