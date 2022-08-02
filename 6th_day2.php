<?php
	include('DBConnection/DBConnection.php');
	if (isset($_POST['submit']))
	 {
		$cat=$_POST['Category'];
		$sql="INSERT INTO `sub_category`(`category`) VALUES ('$cat')";
		echo $sql;
		$result=$conn->query($sql) or die("querry error");
		echo "insertion successfull";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>day 6th 2</title>
</head>
<body>
	<form method="POST">
		<label>Category</label>
		<input type="text" name="Category">
		<button type="submit" name="submit"><b>Add Catagory</b></button>
	</form>

	<form method="POST">
		<label>Select One</label>
		<select>
			<option value="<?php echo $row['categories'] ?>">
				<?php echo $row['categories']?>
			</option>
		</select>
	</form>
</body>
</html>