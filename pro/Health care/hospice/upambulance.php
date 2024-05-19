<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$phno=$_GET['t3'];
$email=$_GET['t4'];
$q="update ambulance set phno='$phno' where id='$id'";
$db->updateQuery($q);
header('location:ambulanceview.php');
?>