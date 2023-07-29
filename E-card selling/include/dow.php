<?php
	include("../connection.php");
	if(isset($_REQUEST['p_id']))
	{
		$que="select * from product where p_id=".$_REQUEST['p_id'];
		$res=mysql_query($que,$con);
		echo"<table align='center'><tr><br/><br/>";
		while($row=mysql_fetch_array($res))
		{
			echo"<td>";
			echo"<tr>";
			echo"<center>";
			echo"<img src='upload/".$row['p_image']."' border='3'height='200px' width='200px'><br/></br>";
			echo"<td><a href='upload/".$row['p_image']."'download><img src='image/dw.png' height='45px' width='60px'></a></td>";
			echo"</center>";
			echo"</tr>";
			echo"</table>";
			echo"<a href='index.php?page=card'><img src='image/back.jpg'align='left'height='60px' width='60px'/></a>";
		}
	}
?>