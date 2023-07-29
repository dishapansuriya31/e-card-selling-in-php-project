<?php
	include("../connection.php");
		//echo "<br><br>".$_SESSION['c_id']."<br>";
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
		echo $id=$_REQUEST[c_id];
		if(isset($id))
		{
			if($_FILES["file"]["name"]=="")
			{
				$que="select *from category where c_id=".$_REQUEST['c_id'];
				$res=mysql_query($que,$con);
				$row=mysql_fetch_array($res);
				$_FILES["file"]["name"]=$row['c_image'];
			}
			echo $que="update category set c_name='".$_REQUEST['c_nm']."',c_image='".$_FILES["file"]["name"]."' where c_id=".$_REQUEST['c_id'];
				
			if(mysql_query($que,$con))
			{
				header("location:../index.php?page=view_category");
				echo "selected";
			}
			else
			{
				header("location:../index.php?page=add_category&c_id=".$_REQUEST['c_id']);
				//echo mysql_error();
			}
		}
		else
		{
			echo $que="insert into category(c_name,c_image)values('".$_REQUEST['c_nm']."','".$_FILES["file"]["name"]."')";
				
			if(mysql_query($que,$con))
			{
				header("location:../index.php?page=view_category");
				//echo "selected";
			}
			else
			{
				header("location:../index.php?page=add_category");
				
			}
		}
		
	
		mysql_close($con);
?>