
<body>
	<form action="action/cat_insert.php" name="frmchackpwd" method="POST" enctype="multipart/form-data" >
		<?php
			if(isset($_REQUEST['c_id']))
			{
				include("../connection.php");
				$que="select * from category where c_id=".$_REQUEST['c_id'];
				$res=mysql_query($que,$con);
				$row=mysql_fetch_array($res);
			}
		?>
		
		<br><br><br>
		<table border="1" align="center" class="table">
			<tr>
				<th colspan="2" class="th"> <h1>Category</h1></th>
			</tr>
			<tr>
				<td class="td">Category Name:</td>
				<td  class="td">
					<input type="text" name="c_nm" value="<?php 
																if(isset($_REQUEST['c_id']))
																{
																	echo $row['c_name'];
																}
															?>"  placeholder="Enter Category" class="textbox" title="Enter Category"  pattern="[A-z]{1,}"  required>
				</td>
			</tr>
			<tr>
				<td  class="td">Category Image:</td>
				<td  class="td">
					<input type="file" name="file">
					<input type="hidden" name="file" value="<?php 
																if(isset($_REQUEST['c_id']))
																{
																	echo $row['c_image'];
																}
															?>">
					<?php
						if(isset($_REQUEST['c_id']))
						{
							echo "<img src='upload/".$row['c_image']."' height='80px' width='80px'>";
							
							echo "<input type='hidden' name='file' value='".$row['c_image']."'>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center"  class="td">
					<?php
						if(isset($_REQUEST['c_id']))
						{
					?>
					<input type="hidden" name="c_id" value="<?php 
																echo $_REQUEST['c_id'];
															?>">
					<input type="submit" value="update" class="button">	
						<?php
							}
							else
							{
						?>	
					<input type="submit" value="Add" class="button">
						<?php
							}
						?>
						<input type="reset" value="Clear" class="button">
				</td>
			</tr>
		</table>
		<a href='index.php?page=view_category'><img src='image/back.jpg' height='60px' width='60px' /></a>
	</form>
	</body>