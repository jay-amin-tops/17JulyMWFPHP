<?php

$DipikaMaths = 99;
$DipikaEng = 80;
$DipikaGuj = 95;
$DipikaComp = 100;

$ArrayOfDipikaMarks = [99,80,95,100];
echo "<pre>";
print_r($ArrayOfDipikaMarks);
$ArrayOfDipikaMarks = array(99,80,95,100);
print_r($ArrayOfDipikaMarks);

$ExampleOfArray = array(99,true,"Test",'a',50.50);
echo " <br>======== print_r() ============ <br>";
print_r($ExampleOfArray);
echo " <br>======== var_dump() ============ <br>";
var_dump($ExampleOfArray);
echo " <br>======== var_export() ============ <br>";
var_export($ExampleOfArray);


$AssocArrayOfDipikaMarks = array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100);
print_r($AssocArrayOfDipikaMarks);


$MultiDiArr = array("SchoolName"=>array("10th"=>array("Dipika"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100),
"Khusboo"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100),
"Usmita"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100)),"11th"=>array("Dipika"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100),
"Khusboo"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100),
"Usmita"=>array("Maths"=>99,"Eng"=>80,"Guj"=>95,"Comp"=>100)))) ;  
print_r($MultiDiArr);

echo $MultiDiArr['SchoolName']["10th"]['Usmita']['Maths'];

// $data = array("Usmita","outsider"=>"Khoooosboooo","Khusboo","outsider"=>"koi baharnu");
$data = array("Usmita","outsider"=>"Khoooosboooo","Khusboo","456"=>"koi baharnu","Dipika");
print_r($data);

echo "</pre>";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li> array()</li>
        <li> is_array()</li>
        <li> in_array()</li>
        <li> array_merge()</li>
        <li> array_keys()</li>
        <li> array_key_exists()</li>
        <li> array_shift()</li>
        <li> array_push()</li>
        <li> array_pop()</li>
        <li> array_values()</li>
        <li> array_map()</li>
        <li> array_unique()</li>
        <li> array_slice()</li>
        <li> array_diff()</li>
        <li> array_search()</li>
        <li> array_reverse()</li>
        <li> array_unshift()</li>
    </ul>
</body>

</html>