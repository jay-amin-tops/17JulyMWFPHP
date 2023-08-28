<?php

// echo "select * from users where text ='Jay\'s no'";
$s = "Welcome to 't TOPS' Tech'no";
echo $s = "this is Jay\'s no";
echo "<br>";
echo $s =  addslashes("this is Jay's no");
echo "<br>";
echo $s =  addslashes('this is Jay"s no');

if (isset($_REQUEST['btn'])) {
    echo "<pre> Example :";
    
    // echo $data =  "This data provided by $_REQUEST[val]";
    $inp = $_REQUEST["val"];
    // echo $data =  'This data provided by'.$inp.'something';
    echo $data =  'SELECT * FROM users WHERE username = "'.addslashes($inp).'"';
    // SELECT * FROM users WHERE username = "something \" data \'s"
}

?>
<form  method="get"><input type="text" name="val" id=""><input type="submit" name="btn" id=""></form>