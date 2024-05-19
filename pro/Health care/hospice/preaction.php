<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$docid=$_SESSION['uid'];
$pname=$_GET['t2'];
$pres=$_GET['t3'];
$id=$_GET['t1'];
$date=$_GET['t5'];
$pid=$_GET['t10'];
$lb=$_GET['t4'];
$q="insert into prescription (apid,pname,prescription,docid,pid,date,ltest) values($id,'$pname','$pres',$docid,$pid,'$date','$lb')";
$db->insertQuery($q);
header('location:predocview.php');
?>