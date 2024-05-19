<?php
include'DatabaseCon.php';
$db=new DatabaseCon;
$n=$_GET['t1'];
$ql=$_GET['t2'];
$a=$_GET['t3'];
$ph=$_GET['t4'];
$e=$_GET['t5'];
$g=$_GET['t6'];
$ex=$_GET['t7'];
$ps=$_GET['t8'];
$q="insert into lab(name,qlftn,address,phno,email,gen,exp)values('$n','$ql','$a','$ph','$e','$g','$ex')";
$db->insertQuery($q);
$q1="select max(lid) as lid from lab";
$rs=$db->selectData($q1);
$row=mysql_fetch_array($rs);
$id=$row['lid'];
$q2="insert into login(uid,uname,upass,utype)values('$id','$e','$ps','labassistant')";
$db->insertQuery($q2);
header('location:adminhomepage.php');
?>