<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>
	<form name="frmproduct" action="action/in_prodect.php" method="POST" enctype="multipart/form-data" onsubmit="returncheck_vaild();">
	<br><br><br>
	<table align="center" border="2s" class="table">
	<th colspan="2" class="th" ><h1>Product</h1></th>
	<tr>
		<td class="td">Category:</td>
		<td  class="td">
			<select name="c_id" class="textbox">
			<?php
			include("../connection.php");
				$que="select * from category";
				$res=mysql_query($que,$con);
				while($row=mysql_fetch_array($res))
				{
					if(isset($_REQUEST['c_id']))
					{
						if($row['c_id']==$_REQUEST['c_id'])
						{
							echo "<option selected value=".$row['c_id'].">".$row['c_name']."</option>";
						}
						else
						{
							echo "<option value=".$row['c_id'].">".$row['c_name']."</option>";
						}
					}
					else
					{
						echo "<option value=".$row['c_id'].">".$row['c_name']."</option>";
					}
				}
				echo"</select>"
			?>
		</td>
	</tr>
	<?php
		if(isset($_REQUEST['p_id']))
		{
			$query="select * from product where p_id=".$_REQUEST['p_id'];
			$result=mysql_query($query,$con);
			$row=mysql_fetch_array($result);
		}
	?>
	<tr>
		<td class="td">Product Name:</td>
		<td class="td"><input type="text" name="p_nm" class="textbox" value="<?php 
														if(isset($_REQUEST['p_id']))
														{
															echo $row['p_nm'];
														}
												?>"placeholder="enter product name">
		</td>
	</tr>
	<tr>
	<td class="td">Product Image:</td>
		<td class="td" ><input type="file" name="file">
			<input type="hidden" name="file" value="<?php 
																	if(isset($_REQUEST['p_id']))
																	{
																		echo $row['p_image'];
																	}
																?>">
			<?php
				if(isset($_REQUEST['p_id']))
				{
					echo"<img src='upload/".$row['p_image']."'height='50px' width='50px' />";
					echo"<input type='hidden' name='file' value='".$row['p_image']."'>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td class="td">Price:</td>
		<td class="td"><input type="text" class="textbox" name="p_price" value="<?php 
														if(isset($_REQUEST['p_id']))
														{
															echo $row['p_price'];
														}
													?>" placeholder="enter price">
		</td>
	</tr>
	<tr>
		<td class="td">Quantity:</td>
		<td class="td">
			<input type="text" name="p_qty"  class="textbox" value="<?php
														if(isset($_REQUEST['p_id']))
														{
															echo $row['p_qty'];
														}
													?>" placeholder="enter your Quantity">
		</td>
	</tr>
	<tr>
		<td class="td">description:</td>
		<td class="td">
			<input type="text" name="p_desc"  class="textbox" value="<?php
														if(isset($_REQUEST['p_id']))
														{
															echo $row['p_desc'];
														}
													?>" placeholder="enter description">
		</td>
	</tr>
		
	<tr>
	<td colspan="2" align="center" class="td">
	<?php
		if(isset($_REQUEST['p_id']))
		{
			{
				echo"<input type='hidden' name='p_id' value=".$_REQUEST['p_id'].">";
				echo"<input type='submit' name='Edit' value='Edit'>";
			}
			
		}
		else
		{
			echo"<input type='submit' name='Add' value='Add'>";
		}
	?>
	<input type="reset" name="cancle" value="cancle">
	</td>
	</tr>
</form>
</table>
</body>	
</html>