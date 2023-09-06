
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Scope Resolution Operator :: </h2>
</body>
</html>
<?php

$food = "bhajiya";
$food = "gathiya";
$food = "Ghughra";
// echo $food;
// use Books as GlobalBooks;

class Books{
    function __construct() {
        echo "called __construct parent <br>";
    }
    static public $PublicDM = "Public DataMember";
    function accessStaticDM() {
        echo self::__construct();
    }
}
class OtherClass extends Books{
    function __construct() {
        parent::__construct();
        echo  parent::$PublicDM;
        echo "called __construct child <br>";
    }

}

$obj = new OtherClass;
// echo Books::$PublicDM;
// $Books = new Books;
// echo $Books->PublicDM;
// echo $Books->PublicDM();
// echo $Books->test();
// echo "<br>";
// echo $Books->PublicFunctionName();
// echo "<br>";
// // echo $Books->ProtectedFunctionName(); //Uncaught Error: Call to protected method Books::ProtectedFunctionName()
// echo "<br>";
// // echo $Books->PrivateFunctionName(); //Uncaught Error: Call to private method Books::PrivateFunctionName()
// echo "<br>";
// echo $Books->ProtectedDM; //Uncaught Error: Cannot access protected property Books::$ProtectedDM
// echo $Books->PrivateDM; //Uncaught Error: Cannot access private property Books::$PrivateDM

?>