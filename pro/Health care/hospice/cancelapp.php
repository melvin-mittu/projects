<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="update appointment set status='cancelled' where apid='$id'";
$db->updateQuery($q);
echo"<script>alert('Your Appointment cancelled.Amount refunded within 7 days');
window.location='appointmentviewp.php';
</script>";
?>