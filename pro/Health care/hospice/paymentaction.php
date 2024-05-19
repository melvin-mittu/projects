<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$val=$_SESSION['uid'];
$chn=$_GET['t1'];
$cvv=$_GET['t2'];
$cno=$_GET['t3'];
$amt=$_GET['t4'];
$date=$_GET['t5'];
$q="insert into payment(chn,cvv,cardno,amount,date,vid,pstatus) values('$chn',$cvv,$cno,$amt,'$date',$val,'paid')";
$db->insertQuery($q);
$q1="select max(apid) as apid from appointment";
$rs1=$db->selectData($q1);
$row=mysql_fetch_array($rs1);
$id=$row['apid'];
echo "<script>alert('Payment Successfull Your Appointment id is $id');
window.location='payment.php';
</script>"; ?>