<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['t0'];
$phno=$_GET['t6'];
$q="update appointment set  phno='$phno' where id='$id'";
$db->updateQuery($q);
header('location:appointment view.php');
?>