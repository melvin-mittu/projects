<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from test where id='$id'";
$db->insertQuery($q);
header('location:testview.php');
?>