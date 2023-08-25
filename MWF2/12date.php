<?php 

// echo date(); //Fatal error: Uncaught ArgumentCountError: date() expects at least 1 argument, 0 given in
// echo date("d");
// echo date("m");
// echo date("M");
// echo date("d M Y ");



$databaseDate = "2023-09-28";
echo $databaseDate;
echo "<br>";
echo time();
echo "<br>";
echo strtotime($databaseDate);
echo "<br>";
echo  date("d-M-Y",strtotime($databaseDate));

$date1 = new DateTime("2007-03-24");
$date2 = new DateTime("2009-06-26");
$interval = $date1->diff($date2);
echo "<br>";
echo "<pre>";
print_r($interval);
echo "</pre>";

echo "<br>difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 

// shows the total amount of days (not divided into years, months and days like above)
echo "<br>difference " . $interval->days . " days ";

$dob = "17-05-2003";

echo "<br>Day of 17th " . date("D",strtotime($dob));

?>
<p>The time() function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT). </p>

<pre>
Start Date: 2007-03-24 
End Date: 2009-06-26
</pre>