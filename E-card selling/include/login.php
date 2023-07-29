
<html>
<head>
	<title> e-card selling</title>
</head>
<?php
	if(isset($_REQUEST['msg']))
	{
		if($_REQUEST['msg']==0)
		{
			echo "<center><h2 class='td'><font color='red'>Invalid Username & Password</font></h2></center>";
		}
	}
?>
<body>
	<form name="frmlogin" action="action/checklogin.php" method="POST" >
	<table border=2 align="center" class="table">
	<tr>
		<th colspan=2 class="title" > Login Form</th>
	</tr>
	<tr></tr>
	<tr></tr><br/>
	<tr>
		<td class="td">user name:</td>
		<td class="td"><input type="text" name="r_unm" placeholder="enter username" class="textbox"  pattern="[A-z]{1,}"  required title="Enter only charecter"></td>
	</tr><br/>
	<tr></tr>
	<tr>
		<td class="td">password:</td>
		<td class="td"><input type="password" name="r_password" placeholder="enter password" class="textbox"  required>
		</td>
	</tr>
	
	<tr>
		<td align="center" colspan=2 class="td">
			<input type="submit" value="login" name="button" class="button">
			<input type="reset" value="clear" class="button">
		</td>
	</tr>
	</table>
	
		<center>
			<a href="index.php?page=registration">Creat a new Account</a>
		<br/>
			<a href="index.php?page=forgetuser">Forget Password..?</a>
		</center>
		
	</form>
	<br/>
</body>
</html>