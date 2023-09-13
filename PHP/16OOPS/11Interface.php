<p>Interfaces are 100% abstact</p>
<?php

interface Books{
    function Method();
    // function SimpleMethod(){}
}

class OtherClass implements Books{
    function Method(){
        echo "Called";
    }
}
$Ob = new OtherClass;
$Ob->Method();
?>