<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from prescription where id='$id'";
$db->insertQuery($q);
header('location:predocview.php');
?>