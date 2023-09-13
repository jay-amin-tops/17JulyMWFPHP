
<?php

// class CustomClass{
//     function __destruct(){
//         echo "__destruct called";
//     }
//     function __construct(){
//         echo "__constructor called";
//     }
//     function Something(){
//         echo "Something called";
//     }
// }

// $objects= new CustomClass;
// $objects->Something();


// class myClass {
//     // public $Name = "something";
//     function __get($variable) {
//         echo "<br>inside get method $variable";
//     }
// }

// $newObj = new myClass;
// echo $newObj->Name;
// echo $newObj->data;
// echo $newObj->something;
// echo $newObj->testing;
// class myClass {
//     // public $Name = "something";
//     function __set($var,$val) {
//         echo "<br>inside set method variable is $var and its value is $val";
//     }
// }

// $newObj = new myClass;
// // echo $newObj->Name;
// echo $newObj->Name="data";
// echo $newObj->Sname="Test";
// echo $newObj->Email="mail@mail.com";
// echo $newObj->Gender="Male";

class myClass {
    // public $Name = "something";
    function __call($funcName,$Args) {
        echo "<br>inside set method variable is $funcName";
        echo "<pre>";
        print_r($Args);
        echo "</pre>";
    }
}

$newObj = new myClass;
// echo $newObj->Name;
echo $newObj->insert("username","password","email");
echo $newObj->update("username","email");
echo $newObj->delete("id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="main"><h2 id="list-of-magic-methods-in-php" level="2">List of Magic Methods in PHP</h2><p>Here is a list of commonly used magic methods in PHP:</p><ul>
<li>
<p><span class="highlight--red">__construct():</span></p>
<p>This magic method is the constructor of a class and is automatically called when an object is created. It is used to initialize object properties and perform any necessary setup.</p>
</li>
<li>
<p><span class="highlight--red">__destruct():</span></p>
<p>The <span class="highlight--red">__destruct()</span> magic method is called automatically when an object is no longer referenced or when the script finishes execution. It is used to perform cleanup tasks or release resources held by the object.</p>
</li>
<li>
<p><span class="highlight--red">__get():</span></p>
<p>This magic method is invoked when accessing inaccessible or non-existent properties of an object. It allows you to define custom logic for retrieving the value of a property.</p>
</li>
<li>
<p><span class="highlight--red"> __set():</span></p>
<p>The <span class="highlight--red">__set()</span> magic method is triggered when assigning a value to an inaccessible or non-existent property of an object. It allows you to define custom logic for setting the value of a property.</p>
</li>
<li>
<p><span class="highlight--red"> __isset()</span>:</p>
<p>This magic method is called when using the <span class="highlight--red">isset()</span> function to check if an inaccessible or non-existent property of an object is set. It allows you to define custom logic for checking the existence of a property.</p>
</li>
<li>
<p><span class="highlight--red">__unset():</span></p>
<p>The <span class="highlight--red">__unset()</span> magic method is invoked when using the <span class="highlight--red">unset()</span> function to unset an inaccessible or non-existent property of an object. It allows you to define custom logic for removing a property.</p>
</li>
<li>
<p><span class="highlight--red"> __call()</span>:</p>
<p>This magic method is triggered when invoking inaccessible or non-existent methods of an object. It allows you to define custom logic for handling method calls.</p>
</li>
<li>
<p><span class="highlight--red">__toString()</span>:</p>
<p>The <span class="highlight--red">__toString()</span> magic method is called when an object is treated as a string, such as when using the echo or print functions. It allows you to define a string representation of the object.</p>
</li>
</ul></section>
</body>
</html>