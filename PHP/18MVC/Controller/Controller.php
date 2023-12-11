<?php

require_once("Model/Model.php");
class Controller extends Model{

    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/Assets/";

    public function __construct()
    {
        // echo "Called";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        // exit;
        parent::__construct();
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
                    include_once("Views/login.php");
                    // echo "<h2>Login page data</h2>";
                    include_once("Views/footer.php");
                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre>";
                    break;
                case '/signup':
                    include_once("Views/header.php");
                    include_once("Views/registration.php");
                    // echo "<h2>Login page data</h2>";
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-regist'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        $data = array("username"=>$_REQUEST['username'],
                        "fullname"=>$_REQUEST['fname']." ".$_REQUEST['lname'],
                        "email"=>$_REQUEST['email'],
                        "password"=>$_REQUEST['password'],
                        "mobile"=>$_REQUEST['mobile'],
                        "hobby"=>"Cricket",
                        "prof_pic"=>"default.jpg",
                        "city"=>$_REQUEST['city'],
                        "address"=>$_REQUEST['address'],
                        "status"=>0,
                    );
                        $this->insert("users",$data);
                    }
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
