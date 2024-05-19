<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$name=$_GET['t1'];
$addr=$_GET['t2'];
$phno=$_GET['t3'];
$email=$_GET['t4'];
$gen=$_GET['t5'];
$place=$_GET['t6'];
$pass=$_GET['t7'];
$q="insert into patient(name,address,phno,email,gender,place) values('$name','$addr',$phno,'$email','$gen','$place')";
$db->insertQuery($q);
$q1="select max(id) as id from patient";
$rs1=$db->selectData($q1);
$row=mysql_fetch_array($rs1);
$id=$row['id'];
$q2="insert into login(uid,uname,upass,utype)values($id,'$email','$pass','patient')";
$db->insertQuery($q2);
//header('location:patientview.php');
echo"<script>alert('done');window.location='patient regform.php';</script>";

?>