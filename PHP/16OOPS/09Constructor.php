<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Construct</h2>
<p>Costructor is a method which is invoked by default when objects are created</p>
<?php 
class ClassConstruct{
    function __construct() {
        echo "called __construct";
    }
    function checking() {
        echo "called";
    }
}

$object = new ClassConstruct;
// $object->checking();



?>
</body>
</html>