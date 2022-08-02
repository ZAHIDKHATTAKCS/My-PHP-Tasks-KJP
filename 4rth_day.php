<!DOCTYPE html>
<html>
<head>
	<title>4th day</title>
</head>
<body>
<?php

$date1=strtotime(date('2020-05-03 10:15:00'));
$date2=strtotime(date('Y-N-d H:i:s'));
$diff=abs($date1-$date2);

//echo difference
echo "<br>";

$years=floor($diff/(365*60*60*24));
echo "$years";
echo "<br>";
$months=floor(($diff-$years*365*60*60*24)/(30*60*60*24));
echo "months";
echo "<br>";
$days=floor(($diff-years*365*60*60*24-$months*30*60*60*24)/(60*60*24));
echo "$days";

function myname()
{
  print("Zahid Khattak"."<br>");
}
myname();
myname();
myname();
myname();
myname();
myname();
?>
</body>
</html>