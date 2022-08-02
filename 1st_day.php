<!DOCTYPE html>
<html>
<head>
	<title>Php starts</title>
	<style type="text/css">
		h1{
			color: blue;
		}
	</style>
</head>
<body>
	<!--To print something in php-->
	<!--to add a variable in php we should use first $ sign to declare a variable-->
<?php
	// $ sign is used for declare a variable in php
	$a='zahid'.'<br>'.'khattak';
	// . sign in start and . sign in last is used for concatination in php
	// var_dump is used to show the data type of the data and also show the data runtime
	var_dump($a);
	// echo is used for print something 
	echo 'zahid_khattak';
	$b='<h2>Zahid</h2>';

	// print is also used for print something the difference between print & echo is echo is faster then print

	print($b);

	// The program for the addition
	echo "<h1 style='color:red;'>The Program for the Addition</h1>";
	$c=4;
	$d=45;
	$e=$c+$d;
	print('The addition of the Numebrs Is: '.'<b>'.$e.'</b>'.'<br>');


	// The program for the Multiplication
	echo "<h1>The Program for the Multiplication</h1>";
	$one=2;
	$two=3;
	$three=$one*$two;
	print('The Multiplication of the Numbers is: '.'<b>'.$three.'</b>'.'<br>');

	// The Program for the Division
	echo('<h1 style="color:lightyellow; background-color:pink;">The Program for the Division</h1>');
	$four=34;
	$five=4;
	$six=$four/$five;
	print('The Division Of the Numbers is: '.'<b>'.$six.'</b>'.'<br>');

	// The Program for the subtraction
	echo '<h1 style="color:green;">The Program for the subtraction</h1>';
	$seven=54;
	$eight=4;
	$nine=$seven-$eight;
	print('The subtraction of the Numbers is: '.'<b>'.$nine);

	echo "<h1><marquee style='color:red;' behavior='alternate' scrollamount='20'>Zahid Khattak</marquee></h1>";
?>
</body>
</html>