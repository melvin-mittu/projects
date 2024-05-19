<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from doctor where id='$id'";
$db->insertQuery($q);
header('location:doctorview.php');
?>