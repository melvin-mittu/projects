<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from lab where id='$id'";
$db->insertQuery($q);
header('location:labview.php');
?>