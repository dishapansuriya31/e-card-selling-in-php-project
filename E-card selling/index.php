<center>
<script type="text/javascript" language="javascript">
	function f1()
	{
			return confirm("are you sure want to delet...");
			
	}
	function f2()
	{
			return confirm("are you sure want to edit...");
			
	}
	function f3()
	{
			return confirm("zsgdszg");
			
	}
</script>
</center>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet" type="text/css" >
	</head>
<body>

	
 <div id="wrapper">
	 <div id="header">
		  <div id="logo" class="float_left">
			<img src="image/logo3.jpg" height="120px" width="124px">
			
		  </div>
		 <div id="title"><center> E-Card Selling</center>
		 </div>
		 <div id="login" class="float_right">
			<?php
				session_start();
				include("connection.php");
				if(isset($_SESSION['r_id']))
				{
					if($_SESSION['r_utype']==1)
					{
						echo "welcome...".$_SESSION['unm'];
						echo "<br><a href='index.php?page=logout'><u><img src='image/logout.jpg' height='35px' width='80px' /></u></a>";
						
					}
					else
					{
					
						echo $_SESSION['r_unm'];
						echo "welcome...".$_SESSION['unm'];
						echo"<br><a href='index.php?page=changepassword' class='a'>change password</a>";
						echo"<br><a href='index.php?page=logout' class='a'><u><img src='image/logout.jpg' height='35px' width='100px' align='right'/></u></a><br>";
						$que="select a_p_qty from addtocard where a_r_id=".$_SESSION['r_id'];
						$res=mysql_query($que,$con);
						echo$row=mysql_num_rows($res);
						echo "<a href='index.php?page=addtocard' class='a'><u><img src='image/addto.jpg' height='30px' width='30px' align='right' /></u></a>";
					}
				}
					?>
		</div>
		
	</div>
	<div id="menu"  align="left" class="td">
	 
			<nav id="colorNav">
			
			<ul><br/><br/>
			<a href="index.php?page=main" class="a"></a><br><br>
			<?php
				if($_SESSION['r_id'])
					{
						session_start();
						if(isset($_SESSION['r_id']))
						{
							if($_SESSION['r_utype']==1)
							{
							?>
						<li>
										<img src="aa/users.png" height="50px" width="50px" align="center" />
										<ul>
					<?php
						echo "<li><a href='index.php?page=home' class='a'>Home</a></li>";
						echo "<li><a href='index.php?page=view_category' class='a'>Category</a></li>";
						echo "<li><a href='index.php?page=view_product' class='a'>Product</a></li>";
						echo "<li><a href='index.php?page=view_purchase' class='a'>Parchase</a></li>";
						echo "<li><a href='index.php?page=view_registration' class='a'>Registration</a></li>";
						echo "<li><a href='index.php?page=view_feedback' class='a'>Feedback</a></li>";
					?>
					</ul>
					</li><br/><br/>
					<?php
							}
						else
							{
								
								?>	
									<li>
										<img src="aa/grid.png" height="50px" width="50px" align="center" />
										<ul>
										<?php
					
											echo "<li><a href='index.php?page=home' class='a1' >Home</a></li>";
											echo "<li><a href='index.php?page=aboutus' class='a1'>About us</a></li>";				
											echo "<li><a href='index.php?page=contaus' class='a1'>Contact us</a></li>";
											echo "<li><a href='index.php?page=feedback' class='a1'>Feedback</a></li>";
											echo "<li><a href='index.php?page=oder' class='a1'>View Order</a></li>";
											
										?>
										</ul>
									</li><br/><br/>
									
									
									
									<li>
										<img src="image/mail.png" height="50px" width="50px" />
										<ul>
										<?php
										
											echo "<li><a href='index.php?page=card' class='a1'>Card</a></li>";	
										?>
										</ul>
									</li><br/><br/>
								<?php	
							}
							
						}
						else
							{
								?>	
									<li>
										<img src="image/grid.jpg" height="50px" width="50px" align="center" />
										<ul>
										<?php
					
											echo "<li><a href='index.php?page=home' class='a1'>Home</a></li>";
											echo "<li><a href='index.php?page=aboutus' class='a1'>About us</a></li>";				
											echo "<li><a href='index.php?page=contaus' class='a1'>Contact us</a></li>";
											echo "<li><a href='index.php?page=feedback' class='a1'>Feedback</a></li>";
										?>
										</ul>
									</li><br/><br/>
									<li>
										<img src="image/image.png" height="50px" width="50px" />
										<ul>
										<?php
										
											echo "<li><a href='index.php?page=gellery' class='a1'>Gellery</a></li>";	
										?>
										</ul>
									</li><br/><br/>
									<li>
										<img src="image/mail.png" height="50px" width="50px" />
										<ul>
										<?php
										
											echo "<li><a href='index.php?page=card' class='a1'>Card</a></li>";	
										?>
										</ul>
									</li><br/><br/>
								<?php	
							}
						}
						else
						{
						?>
							<a href="index.php?page=login"><img src="aa/male_user.png" height="50px" width="50px" align="center"	/></a>
						<?php
						}
					?>
				
			</ul>
			
			</nav>
	 </div><center>
		<div id="content" align="right"> 
		
				<?php
					if(isset($_REQUEST['page']))
					{
						include "include/".$_REQUEST['page'].".php";
					}
					else
					{
						include "include/main.php";
						
					}
				?>
		</div></center>
	 
	 
	 
  
        </ul>
        
    </footer>
	<div id="footer"<h1 align="left" style="font-size:40px;"><img src="image/one.png" align="left" height="100" width="150">Developed by:<br> Mansi Undhad & Disha Pansuriya</h1></div>
   </div>
   
  </body>
</html>
			
		
	 
 </div>
 
</body>
</html>