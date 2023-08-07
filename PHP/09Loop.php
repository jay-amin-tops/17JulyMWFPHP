<?php
// for (init; ending/temination ; incre/dec) { 

// Entry Control looping Statements START
for ($i=0; $i <10 ; $i++) { 
    echo "<br>for loop : $i";
}

$a = 0;
// generally use for building an array
while ($a < 10) {
    echo "<br>while loop : $a";
    $a++;
}

// for accessing an array
$variable = array("test",true,0123,546.12); 
$variableASsocArray = array("UserName"=>"test","Password"=>"123","gender"=>"Male","rank"=>1); 
for ($i=0; $i < count($variable); $i++) { 
    echo "<br>$variable[$i]";
}
foreach ($variable as $key => $value) {
    echo "<br>Key is $key => value is $value";
}
foreach ($variableASsocArray as $key => $value) {
    echo "<br>Key is $key => value is $value";
}
// Entry Control looping Statements END

// Exit Control looping Statements END
$a_for_do_while = 0;
do {
    echo "<br>Do while vari data".$a_for_do_while;
    $a_for_do_while++;
} while ($a_for_do_while <= 10);
?>
