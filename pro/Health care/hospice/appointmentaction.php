<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$id=$_SESSION['uid'];
$name=$_GET['t1'];
$age=$_GET['t2'];
$gen=$_GET['t3'];
$dname=$_GET['t4'];
$time=$_GET['t5'];
$phno=$_GET['t6'];
$date=$_GET['t7'];
$fee=$_GET['t8'];
$docid=$_GET['t9'];
$da=$_GET['t10'];
$q="insert into appointment(vid,pname,age,gender,doctorname,time,phno,date,fee,docid,status,da) values($id,'$name',$age,'$gen','$dname','$time','$phno','$date','$fee',$docid,'pending','$da')";
$db->insertQuery($q);
//header ('location:docuserview.php');
//$q1="select max(id) as apid from appointment";
//$rs1=$db->selectData($q1);
//$row=mysql_fetch_array($rs1);
//$id=$row['apid'];
echo "<script>alert('Go to Payment');
window.location='payment.php';
</script>"; 
?>