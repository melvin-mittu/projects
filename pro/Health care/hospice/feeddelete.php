<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="delete from feedback where fid='$id'";
$db->insertQuery($q);
header('location:feedbackview.php');
?>