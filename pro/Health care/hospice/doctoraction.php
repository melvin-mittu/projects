<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
if(isset($_POST['submit']))
{
	$name=$_FILES['file']['name'];
	$tmpname=$_FILES['file']['tmp_name'];
	if(isset($name))
	{
	if(!empty($name))
	{
		$location='uploads/';
		echo"file is".$name;
		if(move_uploaded_file($tmpname,$location.$name))
		{
$n=$_POST['t1'];
$spe=$_POST['t2'];
$add=$_POST['t3'];
$phno=$_POST['t4'];
$email=$_POST['t5'];
$gen=$_POST['t6'];
$qual=$_POST['t7'];
$time=$_POST['t9'];
$pass=$_POST['t10'];
$da=$_POST['t12'];

$q="insert into doctor(name, specialisation,address,phno,email,gender,qualification,time,img,da) values('$n','$spe','$add','$phno','$email','$gen','$qual','$time','$name','$da')";
$db->insertQuery($q);
$q1="select max(id) as id from doctor";
$rs1=$db->selectData($q1);
$row=mysql_fetch_array($rs1);
$id=$row['id'];
$q2="insert into login(uid,uname,upass,utype)values($id,'$email','$pass','doctor')";
$db->insertQuery($q2);

echo"<script>alert('done');window.location='doctor registration.php';</script>";

		}
	}
}
}
?>