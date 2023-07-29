<nav id="product">

		<?php
		 $que="select *from product ";
		
			if(isset($_REQUEST['c_id']))
			{
				 $que="select *from product where c_id=".$_REQUEST['c_id'];
			}
			else
			{
			$que="select *from product where c_id=c_id";
			
			}
			$tb=0;
			$i=0;
				$res=mysql_query($que);
				
				echo "<table align='center'>";
				echo "<tr>";
				while($row=mysql_fetch_array($res))
				{
					echo "<td>";
					echo "<table>";
					echo"<tr>
						<td><ul><li>
						<img src='upload/".$row['p_image']."' height='270px' width='200px'>
						
						<ul><table border='5' bordercolor='#1A181C'>
							<tr><td class='td' colspan='2' align='center'><img src='upload/".$row['p_image']."' height='200px' width='200px'></td></tr>
							<tr><td class='td' colspan='2' align='center'>Name:".$row['p_nm']."</td></tr>
							<tr><td class='td' colspan='2' align='center'>price:".$row['p_price']."</td></tr>
							<tr><td class='td' colspan='2' align='center'><a href='index.php?page=productdescription&p_id=".$row['p_id']."'>description</a></td></tr>
							<tr><td class='td'>";
							session_start();
							if(isset($_SESSION['r_id']))
							{
								echo "<form action='index.php?page=productdetail&p_id=".$row['p_id']."' method='POST'>
									<input type='Submit' value='Add' name='button' class='button'></form></td>";
								echo "<td class='td'><form action='index.php?page=download&p_id=".$row['p_id']."' method='POST'>
									<input type='Submit' value='Download' name='button' class='button'></form></td>";
							}
						echo "</tr>
					</table>
						</ul></li></ul>	</td>
						</tr>";	
						echo "<tr>";
					echo "<td align='center' class='td'>".$row['p_nm']."</td>";
						echo "</tr>";	
					echo"</table>";
					echo "</td>";
				}
				echo"</table>";
				echo "</td>";
		?>
		
		</nav>