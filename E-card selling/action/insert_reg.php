
<?php
	/*session_start();
	include("../connection.php");
	$fnm=$_REQUEST['r_fnm'];
	$lnm=$_REQUEST['r_lnm'];
	$unm=$_REQUEST['r_unm'];
	$pass=$_REQUEST['r_password'];
	$add=$_REQUEST['r_add'];
	$city=$_REQUEST['r_city'];
	$email=$_REQUEST['r_email'];
	$cont=$_REQUEST['r_cont'];
	$que=$_REQUEST['registration_question'];
	$ans=$_REQUEST['registration_answer'];
	$utype=$_REQUEST['r_utype'];
	
	$runm=$_REQUEST['r_unm'];
	echo $que1="select * from registration where r_unm='".$_REQUEST['r_unm']."'";
	echo $que1="select * from registration where r_email='".$_REQUEST['r_email']."'";
	echo $res1=mysql_query($que1,$con);
	echo $row=mysql_fetch_array($res1);
	echo $aunm=$row['r_email'];
	
	if($aunm==$email)
		{
		header("location:../index.php?page=registration&msg=1&unm=".$unm);
			echo "record not insertd";
			
		}
		else
		{
		echo $que="insert into registration(r_fnm, r_lnm, r_unm, r_password, r_add, r_city ,r_email ,r_cont, r_que, r_ans) 
	values('$fnm','$lnm','$unm','$pass','$add','$city','$email','$cont','$que','$ans')";
			$res=mysql_query($que,$con);
			header("location:../index.php?page=login");
			echo "record insertd";
		}*/
	
?>

<?php
	session_start();
	
	include("../connection.php");
	$fnm=$_REQUEST['r_fnm'];
	$lnm=$_REQUEST['r_lnm'];
	$unm=$_REQUEST['r_unm'];
	$pass=$_REQUEST['r_password'];
	$add=$_REQUEST['r_add'];
	$city=$_REQUEST['r_city'];
	$email=$_REQUEST['r_email'];
	$cont=$_REQUEST['r_cont'];
	$que=$_REQUEST['registration_question'];
	$ans=$_REQUEST['registration_answer'];
	$utype=$_REQUEST['r_utype'];
	$runm=$_REQUEST['r_unm'];
	
	$que="insert into registration(r_fnm, r_lnm, r_unm, r_password, r_add, r_city ,r_email ,r_cont, r_que, r_ans) 
	values('$fnm','$lnm','$unm','$pass','$add','$city','$email','$cont','$que','$ans')";
	echo $que;
	$res=mysql_query($que,$con);
	if($res)
	{
		header("location:../index.php?page=login");
	}
	else
	{
		echo mysql_error();
	}
?>