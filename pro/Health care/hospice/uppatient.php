<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$phno=$_GET['t3'];
$email=$_GET['t5'];
$q="update patient set phno='$phno',email='$email' where id='$id'";
$db->updateQuery($q);
header('location:patientupdate.php');
?>