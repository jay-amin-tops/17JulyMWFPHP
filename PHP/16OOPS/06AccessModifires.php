
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Access Modifires</h2>
    <ol>
        <li>Public</li>
        <li>Private</li>
        <li>Protected</li>
    </ol>
</body>
</html>
<?php
class Books{
    public $PublicDM = "Public DataMember";
    private $PrivateDM = "Private DataMember";
    protected $ProtectedDM = "Protected DataMember";
    function PublicFunctionName() { //default public
        echo "access public function";
    }
    private function PrivateFunctionName() { //default public
        echo "access Private function";
    }
    protected function ProtectedFunctionName() { //default public
        echo "access protected function";
    }
    function AccessModi() {
        echo $this->PublicDM;
        echo "<br>";
        echo $this->PrivateDM;
        echo "<br>";
        echo $this->ProtectedDM;
        echo "<br>";
        echo $this->PublicFunctionName();
        echo "<br>";
        echo $this->PrivateFunctionName();
        echo "<br>";
        echo $this->ProtectedFunctionName();
        
    }
}
class other extends Books{
    function test() {
        echo "<br>";
        echo $this->PublicDM;
        echo "<br>";
        // echo $this->PrivateDM; //Warning: Undefined property: other::$PrivateDM in
        echo "<br>";
        echo $this->ProtectedDM;
        echo $this->ProtectedFunctionName();
        // echo $this->PrivateFunctionName(); //Uncaught Error: Call to private method Books::PrivateFunctionName() 
    }
}


$Books = new other;
// echo $Books->PublicDM;
echo $Books->AccessModi();
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