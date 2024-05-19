<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from ambulance where id='$id'";
$db->insertQuery($q);
header('location:ambulanceview.php');
?>