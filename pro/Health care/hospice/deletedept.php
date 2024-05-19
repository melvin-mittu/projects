<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from dept where deptid='$id'";
$db->insertQuery($q);
header('location:dept.php');
?>