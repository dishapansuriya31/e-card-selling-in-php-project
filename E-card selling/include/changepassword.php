<br>
<div>
<html>
<head>
	<title>login</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css" >
</head>
<?php
		if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg']==1)
		{
			echo "<center><h2 class='td'><font color='red'> New Password & Conform Password Must Be Same </font></h2></center>";
		}
		if($_REQUEST['msg']==0)
		{
			echo "<center><h2 class='td'><font color='red'> Old Password Is Rong </font></h2></center>";
		}
	}
?>
<body>
	<br>
	<form action="action/check_password.php" name="frmchackpwd" method="POST" onsubmit="return check_validation();">
	<table border="2" align="center" class="table" >
	<tr>
		<th colspan=2 class="title"> change password</th>
	</tr>
	<tr></tr>
	<tr>
		<td class="td">old password:</td>
		<td class="td"><input type="password" name="c_opwd" placeholder="enter old password" class="textbox"  pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	<tr>
		<td class="td">New password:</td>
		<td class="td"><input type="password" name="c_npwd" placeholder="enter new password" class="textbox"  pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	<tr>
		<td class="td">confom password:</td>
		<td class="td"><input type="password" name="c_cpwd" placeholder="enter  confom password" class="textbox"  pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	<tr>
		<td align="center" colspan=2 class="td">
			<input type="submit" value="ok" name="button" class="button">
			<input type="reset" value="clear" name="button" class="button">
	
		</td>
	</tr>
	</table>
	</form>
</body>
</html>