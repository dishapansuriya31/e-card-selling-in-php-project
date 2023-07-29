
<html>
<body>
	<form name="frm_reg"  action="action/insert_reg.php" method="POST" >
	<?php
		if($_REQUEST['msg']==1)
		{
			echo "<center><h1>".$_REQUEST['r_unm']."already
			exists...</h1></center>";
		}
	?>
	<table border="2" align="center" class="table">
	<tr>
		<th colspan="2" class="title"> Registration Form</th>
	</tr>
	<tr>
		<td class="td">first name:</td>
		<td class="td"><input type="text" name="r_fnm" placeholder="enter only charecter" class="textbox" title="enter only charecter" pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	<tr>
		<td class="td">last name:</td>
		<td class="td"><input type="text" name="r_lnm" placeholder="enter only charecter" class="textbox" title="enter only charecter" pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	
	<tr>
		<td class="td">user name:</td>
		<td class="td"><input type="text" name="r_unm" placeholder="enter username" class="textbox"  title="enter only charecter" pattern="[A-z]{1,}"  required>
		</td>
	</tr>
	<tr>
		<td class="td">password:</td>
		<td class="td"><input type="password" name="r_password" placeholder="enter password" class="textbox" required >
		</td>
	</tr>
	<tr>
		<td class="td">address:</td>
		<td class="td"><input type="text" name="r_add" placeholder="enter address" class="textbox" required >
		</td>
	</tr>
	<tr>
		<td class="td">city:</td>
		<td class="td"><input type="text" name="r_city" placeholder="enter city" class="textbox" required >
		</td>
	</tr>
	<tr>
		<td class="td">email:</td>
		<td class="td"><input type="text" name="r_email" placeholder="enter email" class="textbox" required >
		</td>
	</tr>
	
	
	<tr>
		<td class="td">contact no.:</td>
		<td class="td"><input type="text" name="r_cont" placholder="enter contact no" class="textbox" title="enter only 10 digit" pattern="[0-9]{10}" required>
	</tr>
	
	
	<tr>
		<td class="td">question:</td>
		<td class="td"><select name="registration_question"   required >
		<option> what is your name?</option>
		<option> what  is your favourite song?</option>
		<option> what  is your favourite actor?</option>
		<option> what  is your favourite actoress?</option>
		<option> what  is your favourite food?</option>
		<option> what  is your favourite movie?</option>
		<option> what  is your favourite game?</option>
		</select>
		</td>
	</tr>
	<tr>
		<td class="td">answer:</td>
		<td class="td"><input type="password" name="registration_answer" placeholder="enter answer" class="textbox" required>
		</td>
	</tr>
	<tr>
		<td align="center" colspan=2 class="td">
			<input type="Submit" value="Submit" name="button" class="button">
			<input type="Reset" value="Clear" name="button" class="button">
		</td>
	</tr>

	</table>
</form>	
</body>
</html>