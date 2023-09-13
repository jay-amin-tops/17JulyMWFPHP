

<p>Abstracted function dnt contain body part while its declaration</p>
<p>Class Books contains 1 abstract method and must therefore be declared abstract or implement the remaining methods</p>
<?php

// use Books as GlobalBooks;

use Books as GlobalBooks;

abstract class Books{
    //  function AbstractFunction(); //Fatal error: Non-abstract method Books::AbstractFunction() must contain body in
    abstract function AbstractFunction();
    function SimpleMethod() {
        echo "SimpleMethod without abstract";
    }
}


// $obj = new GlobalBooks; //Uncaught Error: Cannot instantiate abstract class Books in


class OtherClass extends Books{
    function AbstractFunction(){
        echo "Called";
    }
    function callSimleMethodFromAbClass(){
        echo $this->SimpleMethod();
    }
}

abstract class RBI {
    // function Interest()  {
    //     echo  "5%";
    // }
    abstract function Interest();
}
 class OurBank extends RBI {
    function Interest()  {
        echo  "5%";
    }
}
 class OtherBank extends RBI {
    function Interest()  {
        echo  "3%";
    }
}

?>