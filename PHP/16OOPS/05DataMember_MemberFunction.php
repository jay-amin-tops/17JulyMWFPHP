
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Class member variables are called properties. They may be referred to using other terms such as fields, but for the purposes of this reference properties will be used. They are defined by using at least one modifier (such as Visibility, Static Keyword, or, as of PHP 8.1.0, readonly), optionally (except for readonly properties), as of PHP 7.4, followed by a type declaration, followed by a normal variable declaration. This declaration may include an initialization, but this initialization must be a constant value.</p>
</body>
</html>
<?php
class Books
{
    public $DM = "DataMember";
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