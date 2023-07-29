<?php
	include("../connection.php");
		//echo "<br><br>".$_SESSION['p_id']."<br>";
		echo $_FILES["file"]["name"];
		if ((($_FILES["file"]["type"]=="image/jpg")
		||	($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/png")
		|| ($_FILES["file"]["type"] == "image/pjpeg"))
		 && ($_FILES["file"]["size"] < 20000))
		{
			if ($_FILES["file"]["error"] > 0)
			 {
				 echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			 }
			else
			{
				echo "Upload: " . $_FILES["file"]["name"] . "<br />";
				echo "Type: " . $_FILES["file"]["type"] . "<br />";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " <br />";
				echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

				if (file_exists("../../upload/" . $_FILES["file"]["name"]))
				{
					echo $_FILES["file"]["name"] . " already exists. ";
				 }
				 else
				{
					 move_uploaded_file($_FILES["file"]["tmp_name"],"../../upload/" . $_FILES["file"]["name"]);
					 echo "Stored in: " . "../../upload/" . $_FILES["file"]["name"];
				}
			}
		}
		else
		{
			echo "Invalid file";
		}
		 $id=$_REQUEST[p_id];
		if(isset($id))
		{
			if($_FILES["file"]["name"]=="")
			{
				$que="select *from product where p_id=".$_REQUEST['p_id'];
				$res=mysql_query($que,$con);
				$row=mysql_fetch_array($res);
				$_FILES["file"]["name"]=$row['p_image'];
			}
			//$cid=$_REQUEST['c_id'];
			echo $que="update product set c_id='".$_REQUEST['c_id']."',p_nm='".$_REQUEST['p_nm']."',p_image='".$_FILES["file"]["name"]."',p_price='".$_REQUEST['p_price']."',p_qty='".$_REQUEST['p_qty']."',p_desc='".$_REQUEST['p_desc']."' where p_id=".$_REQUEST['p_id'];
							
			if(mysql_query($que,$con))
			{
				header("location:../index.php?page=view_product");
				//echo "selected";
			}
			else
			{
				header("location:../index.php?page=add_product&p_id=".$_REQUEST['p_id']);
				//echo mysql_error();
			}
		}
		else
		{
			echo $que="select *from product where c_id=".$_REQUEST['c_id'];
			$res=mysql_query($que,$con);
			$row=mysql_fetch_array($res);
			
			$que1="insert into product(c_id,p_nm,p_image,p_price,p_qty,p_desc)values
			('".$_REQUEST['c_id']."','".$_REQUEST['p_nm']."','".$_FILES["file"]["name"]."','".$_REQUEST['p_price']."','".$_REQUEST['p_qty']."','".$_REQUEST['p_desc']."')";
			if(mysql_query($que1,$con))
			{
				header("location:../index.php?page=view_product");
				//echo "selected";
			}
			else
			{
				header("location:../index.php?page=add_product&p_id=".$_REQUEST['p_id']);
				//echo mysql_error();
			}
		}
		
	
		mysql_close($con);
?>