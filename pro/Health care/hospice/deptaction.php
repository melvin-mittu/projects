<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$dept=$_POST['t2'];
$q="insert into dept(deptn)values('$dept')";
$db->insertQuery($q);
header('location:dept.php');
?>