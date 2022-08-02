<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>day 9th</title>
</head>
<body>
<?php 
	include("includes/DBConnection/DBConnection.php");
	$sql="select * from category ";
	$result=mysqli_query($conn,$sql);
	foreach ($result as $row) 
	{
		
	}
 ?>
</body>
</html>