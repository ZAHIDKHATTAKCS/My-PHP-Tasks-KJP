<!DOCTYPE html>
<html>
<head>
	<title>Day 2 php</title>
</head>
<body bgcolor="yellow">

	<?php 

	//Printing today date using php
	$today=date("H:i:s: A Y M D");
	print($today);
	//if else statements for the today class

	$a=4;
	$b=23;
	$c=$a+$b;
	print('<h1 style="color:red; border:1px solid blue; text-align:center;">'.'The first value is =&nbsp'.$a.'<br>'.'</h1>');
	print('<h1 style="color:red; border:1px solid blue; text-align:center;">'.'The Second value is =&nbsp'.$b.'<br>'.'</h1>');
	if ($c>20)
	 {
		print('<marquee behavior="slide" scrollamount="30">'.'<h1 style="color:red; border:1px solid red; text-align:center;">'.'The Answer is =&nbsp'.$c.'&nbsp which is greater then 20'.'</h1>'.'</marquee>');
	}
	else
	{
	print('The addition of numbers is less then :'.$c);
	}

	// Program for if else condition on age....
	$amnaage=20;
	$amiraage=50;
	if ($amnaage>$amiraage)
	{
		print("<h1 style='color:green; border:1px solid red;'>"."Amna is Older then Amira"."</h1>");
	}
	else
	{
		print("<h1 style='color:green; border:1px solid red;'>"."Amna is elder then Amira"."</h1>");
	}

	// The Program for the percentage in PHP

	$English=45;
	$Urdu=50;
	$Math=99;
	$obtainedmarks=$English+$Urdu+$Math;
	$totalmarks=300;
	$percentage=$obtainedmarks/$totalmarks*100;
	print('<h1 style="color:red; border:1px solid black;">'.'The percentage of the Papers is =&nbsp'.$percentage.'</h1>');
	// if else statements
	if ($percentage<=50)
	 {
		print("<h1>"."You are not eligibal for addmission your grade is C Marks is 50"."</h1>");
	} 

	elseif($percentage=60) 
	{
		print("<h1>"."You are eligibal for addmission your grade is B Marks is 60"."</h1>");
	}
	elseif($percentage=80)
	{
		print("<h1>"."You are eligibal for addmission your grade is A Marks is 80"."</h1>");
	}
	else 
	{
		print("<h1>"."You are eligibal for addmission your grade is A+ Marks is 90 or greater then 90"."</h1>");
	}

	//print only day from today date only

	if ($today=date("D")) 
	{
		print("<h1 style='color:red;'>".$today."</h1>");
	}

	 ?>
</body>
</html>