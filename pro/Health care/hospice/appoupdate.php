<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="upapoint.php">
<h1 align="center">appoupdate</h1>
<table align="center" border="2">
<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from appointment where id='$id'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
       <input type="hidden" name="t0" value="<?php echo $row['id'];?>">
    <tr><td>Name</td>
    <td><input type="text" name="t1" value="<?php echo $row['name'];?>"></td></tr>
    <tr><td>Age</td>
    <td><input type="text" name="t2" value="<?php echo $row['age'];?>"></td></tr>
     <tr><td>Gender</td>
      <td><input type="text" name="t3" value="<?php echo $row['gender'];?>"></td></tr>
      <tr><td>Doctor name</td>
      <td><input type="text" name="t4" value="<?php echo $row['doctorname'];?>"></td></tr>
      <tr><td>Time</td>
     <td><input type="text" name="t5" value="<?php echo $row['time'];?>"></td></tr>
     <tr><td>Phno</td>
      <td><input type="text" name="t6" value="<?php echo $row['phno'];?>"></td></tr>
         <tr><td>Date</td>
      <td><input type="text" name="t7" value="<?php echo $row['date'];?>"></td></tr>
      <?php
}
?>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="update"></td></tr>
</table>
</form>
</body>
</html>