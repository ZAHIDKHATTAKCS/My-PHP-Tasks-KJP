<?php
	include("DBConnection/DBConnection2.php");
	if (isset($_POST['submit']))
	{
		$Name=$_POST['name'];
		$class=$_POST['class'];
		$Roll_Number=$_POST['Roll_Number'];
		$Age=$_POST['Age'];
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];

		$sql="INSERT INTO `tour_form` (`Id`,`Name`,`Class`,`Roll_Number`,`Age`,`Email`,`Password`) VALUES ('','$Name','$class','$Roll_Number','$Age','$Email','$Password')";
		$result=mysqli_query($conn,$sql);
		if (!$conn) {
			die("there is a problem ");
		}
		else
			echo "successfully connected";
	}

  ?>
  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trip form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="DBConnection/style.css">
</head>
<body>
<marquee behavior="slide" scrollamount="25">
<div class="container" id="container"><br>

	<form id="form" method="POST" style="background-color: whitesmoke;">
		<h2 align="center" style="color: red;">Fill the given form</h2><br>
	<label><b>Prdouct_Name: </b></label>
	<input type="text" name="p_name" placeholder="Enter the product Name" class="form-control"><br>


	<label><b>Category: </b></label>
	<input type="text" name="Category" placeholder="Enter Category" class="form-control"><br>


	<label><b>Sub_Price: </b></label>
	<input type="text" name="Sub_Price" class="form-control"><br>


	<label><b>Discount: </b></label>
	<input type="text" name="Discount" class="form-control"><br>


	<label><b>Remian_Price: </b></label>
	<input type="text" name="Remian_Price" class="form-control"><br>


	<button class="btn-primary" id="btn" name="submit">Submit</button>
	<br><br>
	</form>
	<br>
</div>
</marquee>
</body>
</html>