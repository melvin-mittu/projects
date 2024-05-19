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

$id=$_POST['t1'];
$pname=$_POST['t2'];
$dname=$_POST['t3'];
$tname=$_POST['t4'];
$result=$_POST['t5'];
$q="insert into labrep (id,pname,dname,tname,result,resultfile) values($id,'$pname','$dname','$tname','$result','$name')";
$db->insertQuery($q);
header('location:labhomepage.php');
//echo"<script>alert('done');window.location='labreport.php';</script>";

		}
	}
}
}
?>