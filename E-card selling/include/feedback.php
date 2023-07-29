
<br>
<div>
<center>


<form name="feedback" action="action/insertfeedback.php" method="POST">
	<table border="2" align="center" class="table">
	<tr>
		<th colspan="2" class="title"> feedback </th>
	</tr>
	<tr>
		<td class="td">name</td>
		<td class="td"><input type="text" name="f_nm"   placeholder="enter name" class="textbox" title="enter only charecter" pattern="[A-z]{1,}"  required >
		
		</td>
	</tr>
	
	<tr>
		<td class="td">Review</td>
		<td class="td"><input type="text" name="f_review" placeholder="enter review" class="textbox" pattern="[A-z]{1,}"  required>
	</tr>
	<tr>
		<td align="center" colspan=2 class="td">
			<input type="submit" value="submit" name="button" class="button" class="td">
			<input type="reset" value="clear" name="button" class="button">
	
		</td>
	</tr>
	</table>
</center>
</div>
<br>
