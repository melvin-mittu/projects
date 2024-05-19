<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$pname=$_GET['t1'];
$pid=$_GET['t2'];
$des=$_GET['t3'];
$amt=$_GET['t4'];
$date=$_GET['t5'];
$q="insert into pay(pname,pid,description,amount,date) values('$pname','$pid','$des','$amt','$date')";
$db->insertQuery($q);
header('location:payview.php');
?>