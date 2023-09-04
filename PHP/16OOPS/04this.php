
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>$this pseudo variable in php</h2>
    <p>The pseudo-variable $this is available when a method is called from within an object context. $this is the value of the calling object. Calling a non-static method statically throws an Error. Prior to PHP 8.0.</p>
</body>
</html>
<?php
class Books
{
    public $auth = " chetanbhai bhagu";
    function twoState(){
        return "story of twoState by $this->auth";
    }
    function threeIdiots(){
        // $auth = " chetanbhai bhagu";
        return "story of threeIdiots by $this->auth";
    }
}


// echo Addition(20, 60); //Uncaught Error: Call to undefined function Addition() in
$kaipan = new Books;
echo "<br>";
echo $kaipan->twoState(); 
echo "<br>";
echo $kaipan->threeIdiots();
echo "<br>";


?>