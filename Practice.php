
<?php
include('DBConnection/DBConnection.php');
if (isset($_POST['submit'])) 
//use id and meke it primary key and auto increament
{
	$email=$_POST['User_Email'];
	$Password=$_POST['Password'];
	$sql="INSERT INTO `login`(`User_Email`, `User_Password`) VALUES ('$email','$Password')";
	//echo "$sql";
	$result=$conn->query($sql) or die("query error");
	echo "Insertion successfull";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
</head>
<body>
<form method="POST">

	<h2>Email :</h2><input type="Email" name="User_Email"><br>
	<h2>Password:</h2><input type="Password" name="Password"><br><br>
	<button type="Submit" name="submit"><h3>Submit</h3></button>
	
</form>
</body>
</html>