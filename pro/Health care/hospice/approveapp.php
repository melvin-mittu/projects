<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update appointment set status='Approve' where apid='$id'";
$db->updateQuery($q);
header('location:appodocview.php');
?>