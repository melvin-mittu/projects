<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$n=$_GET['t1'];
$dn=$_GET['t2'];
$f=$_GET['t3'];
$q="insert into ambulance(namb,dname,facility)values('$n','$dn','$f')";
$db->insertQuery($q);
header('location:adminhomepage.php');
?>