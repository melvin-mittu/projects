<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from labrep where id='$id'";
$db->insertQuery($q);
header('location:labrepview.php');
?>