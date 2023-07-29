
	<div id="category">	
		<?php
			include("../connection.php");
			$que="select * from category";
			$res=mysql_query($que,$con);
			echo "<br>";
			while($row=mysql_fetch_array($res))
			{	
				echo "<table align='left'>";
				echo "<tr>";
					echo "<td align='center'><a href='index.php?page=subcard&c_id=".$row[0]."'>
					<img src='upload/".$row['c_image']."' height='200px' width='180px'></a></td>";
						echo "</tr>";
				echo "<tr>";
					echo "<td align='center' class='td'>".$row['c_name']."</td>";
						echo "</tr>";		
				echo "</table>";
				
			}
		?>
		
	</div>