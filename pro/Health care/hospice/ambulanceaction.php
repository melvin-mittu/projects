<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$ambu=$_GET['t1'];
$dvname=$_GET['t2'];
$fac=$_GET['t3'];
$phno=$_GET['t4'];
$q="insert into ambulance(noofambulance,dvname,facility,phno) values('$ambu','$dvname','$fac','$phno')";
$db->insertQuery($q);
header('location:ambulanceview.php');
?>