<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="upambulance.php">
<h1 align="center">ambuupdate</h1>
<table align="center" border="2">
<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$id=$_GET['id'];
$q="select * from ambulance where id='$id'";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
       <input type="hidden" name="t0" value="<?php echo $row['id'];?>">
    <tr><td>Noofambulance</td>
    <td><input type="text" name="t1" value="<?php echo $row['noofambulance'];?>"></td></tr>
    <tr><td>Dvname</td>
    <td><input type="text" name="t2" value="<?php echo $row['dvname'];?>"></td></tr>
     <tr><td>Facility</td>
      <td><input type="text" name="t3" value="<?php echo $row['facility'];?>"></td></tr>
      <tr><td>phno</td>
      <td><input type="text" name="t4" value="<?php echo $row['phno'];?>"></td></tr>
      <?php
}
?>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="update"></td></tr>
</table>
</form>

</body>
</html>