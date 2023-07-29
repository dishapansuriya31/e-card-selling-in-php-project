<div>
<html>
	<head>
		<title>Forget User</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css" >
	</head>
	<?php
		if(isset($_REQUEST['msg']))
		{
			if($_REQUEST['msg']==0)
			{
				echo "<center><h2 class='td'><font color='red'>Invalid Username</font></h2></center>";
			}
		}
	?>
	
	<form action="action/forget_user.php" method="POST" onsubmit="return check_validation();">
		<table border="2" align="center" class="table">
			<tr>
				<th colspan="2" align="center" class="title"> Forget User</th>
			</tr><br/>
			<tr></tr>
			<tr>
				<td class="td">user name:</td>
				<td class="td"><input type="text" name="unm" placeholder="enter user name" class="textbox">
				</td>
			</tr>
			<tr>
				<td align="center" class="td" colspan=2>
					<input type="submit" value="login" name="button" class="button">
					<input type="reset" value="clear" name="button" class="button">
			
				</td>
			</tr>
		</table>
	</form>
</html>
</div>