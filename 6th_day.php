 <?php
  include('DBConnection/DBConnection.php');
  if (isset($_POST['submit'])){
    $name=$_POST['User_Name'];
    $Father_Name=$_POST['Father_Name'];
    $User_Email=$_POST['User_Email'];
    $User_CNIC=$_POST['User_CNIC'];
    $User_Address=$_POST['User_Address'];
    $User_Gender=$_POST['Gender'];
    $User_City=$_POST['User_City'];
    $User_Country=$_POST['User_City'];
    $sql="INSERT INTO `sign_up`(`User_Name`, `Father_Name`, `User_Email`, `User_CNIC`, `User_Address`, `User_Gender`, `User_City`, `User_Country`) VALUES ('$name','$Father_Name','$User_Email','$User_CNIC','$User_Address','$Gender','$User_City','$User_Country')";
    echo $sql;
    $result= $conn->query($sql) or die ("query error");
    echo "Insertion sucessfull";
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Day 6th</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
 
<form method="POST">
  <label>User_Name</label>
  <input type="text" name="User_Name"><br>
  <label>Father_Name</label>
  <input type="text" name="Father_Name"><br>
  <label>User_Email</label>
  <input type="email" name="User_Email"><br>
  <label>User_CNIC</label>
  <input type="text" name="User_CNIC"><br>
  <label>User_Address</label>
  <input type="text" name="User_Address"><br>
  <label>Password</label>
  <input type="Password" name="Password"><br>

  <button name="submit">Submit</button>
</form>
</body>
</html>