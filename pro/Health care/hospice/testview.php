<html>
<head>
 <style type="text/css">
	body
	{
		background-image:url(images/test.jpg);
		background-repeat:no-repeat;
		background-size:cover;
	}
	table
	{
		color:#000;
	}
	</style>
</head>
<body>
<h1 align="center">TEST VIEW</h1>
<table border="2" align="center">
<tr><th>id:</th>
<th>pname:</th>
<th>dname:</th>
<th>tname:</th>
<th>result:</th>
<th>resultfile:</th>

<?php
include"DatabaseCon.php";
$db=new DatabaseCon;
$q="select * from labrep";
$rs=$db->selectData($q);
while($row=mysql_fetch_array($rs))
{
	?>
   <tr><td><?php echo $row['id'];?></td>
    <td><?php echo $row['pname'];?></td>
    <td><?php echo $row['dname'];?></td>
    <td><?php echo $row['tname'];?></td>
    <td><?php echo $row['result'];?></td>
   <td><?php echo "<img src='uploads/".$row['resultfile']."'width='150px' height='100px'";?></td>
   <!-- <td><a href="ambuupdate.php?id=<?php echo $row['id'];?>">Update</a></td>-->
    <td><a href="testdelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>