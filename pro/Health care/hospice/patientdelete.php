<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from patient where id='$id'";
$db->insertQuery($q);
header('location:patientdocview.php');
?>