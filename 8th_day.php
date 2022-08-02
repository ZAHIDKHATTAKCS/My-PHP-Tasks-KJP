<!DOCTYPE html>
<html>
<head>
	<title>Day 8th</title>
</head>
<body>
<!--Creating drop down in php in dynamic way this code will retrive data from the database automatically-->
<form>
	<label>Sub_category</label>
	<input type="text" name="Sub_category">
	<select name="cate">
		<?php 
		include ('includes/DBConnection/DBConnection.php');
		$q="select * from category";
		$res1=mysql_query($conn,$q);
		foreach ($res as $row)
		 {			?>
			<option value="<?php echo $row['categories']?>"></option>
			<?php echo $row['categories']?>
		}
		 ?>
		
	</select>
</form>
</body>
</html>