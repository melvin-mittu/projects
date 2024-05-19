<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from appointment where id='$id'";
$db->insertQuery($q);
header('location:appodocview.php');
?>