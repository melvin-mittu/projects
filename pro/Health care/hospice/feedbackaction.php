<?php
include "DatabaseCon.php";
$db=new DatabaseCon;
session_start();
$id=$_SESSION['uid'];
$name=$_GET['t8'];
$fed=$_GET['t9'];
$q="insert into feedback(vid,name,fed) values($id,'$name','$fed')";
$db->insertQuery($q);
echo "<script>alert('Feedback added');
window.location='feedback.php';
</script>"; 
?>