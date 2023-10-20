<?php
class Controller{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/Assets/";
    public function __construct() {
        // echo "called";
        // echo "inside const";
        // include_once("main.php");
        // include_once("../Views/main.php");
        // include_once("Views/main.php");
        // include_once("header.php");
        // include_once("footer.php");
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        if ( isset($_SERVER['PATH_INFO']) ) {
            switch ($_SERVER['PATH_INFO']) {
                // case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    # code...
                    break;
                case '/about':
                    echo "<h3>About us </h3>";
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
         }else{
            header("location:home");
         }
    }
}

$ControllerObject = new Controller;
?>