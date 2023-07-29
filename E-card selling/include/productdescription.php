<?php
	include("../connection.php");
	session_start();
	if(isset($_REQUEST['p_id']))
	{
		$query="select * from product where p_id=".$_REQUEST['p_id'];
		$result=mysql_query($query,$con);
	
		while($row=mysql_fetch_array($result))
		{
			echo"<center>";
			echo"<table border='2' align='center' class='table'>";
			echo"<th  colspan='2'><h1>card details</h1></th><br/>";
					
			echo"<tr><td rowspan='9' class='td' >";
			echo"<img src='upload/".$row['p_image']."' height='200px' width='200px' class='td'></td></tr>";
			
			echo"<tr><td ><h4>Name: ". ucWords($row['p_nm'])."</h4></td></tr>";
			echo"<tr><td ><h4>Price: ".ucWords($row['p_price'])."</h4></td></tr>";
			echo"<tr><td row='3'><h4>description: ".ucWords($row['p_desc'])."<h4></td></tr>";
					
			echo"</center>";
			echo"</table>";
			echo"<h6><a href='index.php?page=card'><img src='image/back.jpg' height='60px' width='60px'></a></h6>";
	
		echo mysql_error();
		}
		echo"<input type='hidden' name=p_id value=".$_REQUEST['p_id'].">";
	}
?>
