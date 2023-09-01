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

    $file_name = "file.zip";
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $file_name . '"');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    // flush();
    readfile($file_name); //Absolute URL
    exit();
}

?>

<form  method="post">
    <input type="text" name="val1" id="">
    <input type="text" name="val2" id="">
    <input type="submit" name="btn" id="">
</form>

    
</body>
</html>