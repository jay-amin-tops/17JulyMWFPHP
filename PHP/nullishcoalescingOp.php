<?php


$marks4 = 50;

if (isset($marks)) {
    # code...
    if($marks > 50){
        echo $marks;
    }else{
        echo "invalid";
    }
}
echo "<br>";
if (isset($marks)) {
echo ($marks > 50)?$marks :"invalid";
}
echo "<br>";

echo $marks ??"invalid";



?>