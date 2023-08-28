<?php

$str ="Something 123";
$str1 ='Something#$%35 ';

echo $str1;
echo "<br>";
echo $str1[0];
echo $str1[1];
echo $str1[2];


$name = "Test";
echo "<br>";
echo 'Name is $name in single qouate';
echo "<br>";
echo 'Name is '.$name.' in single qouate';
echo 'Name is '.$str1[2].' in single qouate';
echo "<br>";
echo "Name is $name in double qouate";
?>