
		
		<?php
			include("../connection.php");
			$que="select *from productdetail ";
			$res=mysql_query($que,$con);
			$i=1;
			while($row=mysql_fetch_array($res))
			{
				$j=0;
				echo "<td>";
				echo "<table align='left'>";
				
				echo "<tr >";
				
				if($i==1)
				{
					echo "<tr ><td align='center'><img src='upload/".$row['p_image']."' height='200px' width='180px'></td></tr>";
					
							$i=0;
				}
				else
				{
						echo "<tr><td align='center'><img src='upload/".$row['p_image']."' height='200px' width='180px'> </td></tr>";
					$i=1;
				}
				echo "</td>";
				$j++;
				if($j==4)
				{
					echo "</tr>";
					$j=0;
				}
				echo "</table>";
			}
		?>
		