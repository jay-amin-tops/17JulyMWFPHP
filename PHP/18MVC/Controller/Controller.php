<?php


class Controller
{

    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/Assets/";

    public function __construct()
    {
        // echo "Called";

        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        // exit;
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home_main.php");
                    include_once("Views/footer.php");
                    break;
                case '/signin':
                    include_once("Views/header.php");
                    echo "<h2>Login page data</h2>";
                    include_once("Views/footer.php");
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
