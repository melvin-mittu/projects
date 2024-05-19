<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from labrep where tid='$id'";
$db->insertQuery($q);
header('location:labassrepiew.php');
?>