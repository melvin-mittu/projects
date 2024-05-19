<?php
include("DatabaseCon.php");
$db=new DatabaseCon;
$p=$_GET["u1"];
//$p1=$_GET["p1"];
//$p2=$_GET["p2"];

$qryl="select * from login where uname='$p'";
$rst=$db->selectData($qryl);
$row=mysql_fetch_array($rst);
$uname=$row["uname"];
$pass=$row["upass"];

if($p==$uname)
{
	 
 echo"<script>alert('Your password is sent to $pass');
       window.location='login.php';
	   </script>";
 }
 else
 {
	 echo "<script>alert('Invalid Username');
       window.location='forgotpass.php';
	   </script>";
 }
 ?>