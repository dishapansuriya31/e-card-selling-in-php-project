<br>
<div>
<html>
<head>
	<title> E-card selling</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
</head>
<?php
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg']==0)
		{
			echo "<center><h2 class='td'><font color='red'> New Password & Conform Password Must Be Same </font></h2></center>";
		}
	}
?>
<body>
<form action="action/forget_pass.php" method="POST" onsubmit="return check_validation();">
	<input type="hidden" name="r_id" value="<?php echo $_REQUEST['r_id'];?>">
	<table border="1" align="center" class="table">
	<tr>
		<th colspan="2" align="center" class="title"> Forget password</th>
	</tr>
	<tr>
		<td class="td">New password:</td>
		<td class="td"><input type="password" name="pwd" placeholder="Enter New Password" title="Enter New Password" class="textbox">
		</td>
	</tr>
	<tr>
		<td class="td">ConForm password:</td>
		<td class="td"><input type="password" name="cpwd" placeholder="Enter Confom Password" title="Enter Confom Password" class="textbox">
		</td>
	</tr>
	<tr>
		<th align="center" colspan="2" class="td">
			<input type="submit" value="submit" name="button" class="button">
			<input type="reset" value="Clear" name="button" class="button">
	
		</th>
	</tr>
	</table>
	</form>
</body>
</html>
</div>
<br>