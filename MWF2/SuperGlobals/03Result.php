<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
    <input type="text" name="val1" id="">
    <input type="text" name="val2" id="">
    <input type="submit" name="btn" id="">
</form>

<?php
echo "<pre>";
print_r($_GET);
if (isset($_GET['btn'])) {
    // $value1 = $_POST[]
    $value1 = $_GET['val1'];
    $value2 = $_GET['val2'];
    echo $value1+$value2;

    
}

?>

</body>
</html>