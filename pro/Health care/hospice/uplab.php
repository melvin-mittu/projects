<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$phno=$_GET['t5'];
$email=$_GET['t6'];
$q="update lab set phno='$phno',email='$email' where lid='$id'";
$db->updateQuery($q);
header('location:labupdate.php');
?>