<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>Encapsulation is a process that we can wrapping the data into a single unit its done through class</p>
    <h2>Class</h2>
    <p>Class is a Collection of datamember and member functions only</p>
    <p>its provides basic level of securty to our code</p>
    <p>With the help of class we can isolate our code</p>
    <p>code reusablity</p>
    <p>fast execution</p>
    <p>create class with <strong>Class</strong> keyword</p>
    <p>without instance of class we are not alble to access the properties of that class at out side of class</p>
    <p>instance = object</p>
    <p>for creating an object of any class we can use new keyword</p>
</body>

</html>
<?php
class BasicMathOp
{
    function Addition($a, $f)
    {
        return $a + $f;
    }
}


// echo Addition(20, 60); //Uncaught Error: Call to undefined function Addition() in
$kaipan = new BasicMathOp;
echo "<br>";
echo $kaipan->Addition(20, 60); //Uncaught Error: Call to undefined function Addition() in
echo "<br>";
// echo Addition(20,80);
// echo "<br>";
// echo Addition(20,90);
// echo "<br>";



class car
{
    function wheel()
    {
    }
    function strng()
    {
    }
    function toproof()
    {
    }
}



?>