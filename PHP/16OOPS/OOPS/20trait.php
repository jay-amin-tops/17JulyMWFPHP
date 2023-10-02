<?php

trait mytrait{
    function FunctionNamefromT() {
        echo "Called FunctionNamefromT";
    }
}
trait mytrait1{
    function FunctionNamefromT1() {
        echo "Called FunctionNamefromT1";
    }
}
trait mytrait2{
    function FunctionNamefromT2() {
        echo "Called FunctionNamefromT2";
    }
}

class otherclass {     
    // use mytrait,mytrait1,mytrait2;
    use mytrait;
    use mytrait1;
    use mytrait2;
    public function somemethod(){ 
        echo "<br>";  
        $this->FunctionNamefromT1();
        echo "<br>";  
        $this->FunctionNamefromT();
        echo "<br>";  
        $this->FunctionNamefromT2();
    }
}

$myClass = new otherclass;
// echo $myClass->somemethodfromchild();
echo $myClass->somemethod();

// foreach ($myClass as $key => $value) {
//     echo "<br> $key<br>";
// }
?>