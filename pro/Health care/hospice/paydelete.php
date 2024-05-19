<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from payment where id='$id'";
$db->insertQuery($q);
header('location:paymentview.php');
?>