<html>
<head>
	<title>product detail</title>
	<link href="../style/style.css" rel="stylesheet" type="text/css">
</head>
<body>

	<form action="action/insert_card.php" name="productdetail" method="POST" >
	
	<input type="hidden" name="p_id" value="<?php echo $_REQUEST['p_id'] ?>">
	<?php
		include("../connection.php");
		
		if(isset($_REQUEST['p_id']))
			{
				$que="select *from product where p_id=".$_REQUEST['p_id'];
			}
			else
			{
				$que="select *from product";
			}
		
		$res=mysql_query($que,$con);
		$row=mysql_fetch_array($res);
		
	?>
	<table align="center" border="0"  height='300' width='400' >
	<tr>
		<th colspan="2" class="title"> product detail </th>
	</tr>
	
	
	
		<td align="center" colspan="2" class="td"><img src="upload/<?php echo $row['p_image']; ?>" height='220' width='200'>
		</td>
	</tr>
	<tr>
		<td class="td">Name:</td><td class="td"pattern="[A-z]{1,}"  required><?php echo $row['p_nm'];?></td>
	</tr>
	<tr>
		<td class="td">Price:</td><td class="td"pattern="[0-9]{1,}"  required><?php echo $row['p_price'];?></td>
	</tr>
	
	<tr>
		<td class="td">Quantity:</td><td class="td"><input type="text" name="p_qty" class="textbox" title="enter only digit" pattern="[0-9]{1,}"  required></td>
	</tr>
	
	<?php
	if($_REQUEST['msg']==1)
		{
			echo"<center><h1>Out Of Stock...</h1></center>";
		}
	?>
	<tr>
		<td align="center" class="button" class="td" colspan="2" ><input type="submit" value="Addtocard" name="button" class="button"></td>
	</tr>
</table>
</form>
</body>
</html>