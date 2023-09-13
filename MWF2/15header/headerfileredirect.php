<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_REQUEST['btn'])) {
    $sum = $_REQUEST['val1'] +$_REQUEST['val2'];
     if ($sum > 50) {
         header("location:https:www.google.com");
     } else {
        echo "try again";
     }
     
}

?>

<form  method="post">
    <input type="text" name="val1" id="">
    <input type="text" name="val2" id="">
    <input type="submit" name="btn" id="">
</form>

    
</body>
</html>