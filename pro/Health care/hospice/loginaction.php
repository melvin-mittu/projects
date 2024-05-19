<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$uname=$_POST['t1'];
$upass=$_POST['t2'];
$q="select * from login where uname='$uname' and upass='$upass'";
echo"<script>alert('Invalid Username & Password');
window.location='login.php';
</script>";
$rst=$db->selectData($q);
$ret=$db->selectQuery($q);
$row=mysql_fetch_array($rst);
if($ret==1)
{
	session_start();
	if($row['utype']=="admin")
	{
		$_SESSION['uid']=$row['uid'];
		$_SESSION['uname']=$row['uname'];
		header('location:adminhomepage.php');
	}
	else if($row['utype']=="doctor")
	{
		$_SESSION['uid']=$row['uid'];
		header('location:doctorhomepage.php');
	}
	else if ($row['utype']=="patient")
	{
		$_SESSION['uid']=$row['uid'];
		header('location:patienthomepage.php');
	}
	else if ($row['utype']=="labassistant")
	{
		$_SESSION['uid']=$row['uid'];
		header('location:labhomepage.php');
	}
	else
	{
		header('location:index.php');
	}
}
	?>
	