<?php
include("Model/Model.php");

class Controller extends Model{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/";
    // public $assets_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/Assests";
    public $assets_url = "";
    public function __construct() {
        parent::__construct();
        // $assets_url = $this->base_url."Assests/";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/home";
        // echo "<br><br>";
        // echo $_SERVER['REQUEST_URI'];
        $RequestUriArray = explode("/",$_SERVER['REQUEST_URI']); 
        // print_r($RequestUriArray);
        
        $this->assets_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$RequestUriArray[1]."/".$RequestUriArray[2]."/".$RequestUriArray[3]."/".$RequestUriArray[4]."/Assests/";
        
        
        
        // echo "<br><br>";
        // echo "<br><br>";
        // echo "</pre>";
        // exit;
        // $assets_url = $this->base_url."Assests/";
        // echo "Inside Constr";
        if (isset($_SERVER['PATH_INFO'])) {
            
            switch ($_SERVER['PATH_INFO']) {
            case '/home':
                include_once("Views/header.php");
                include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    echo "<h2>About us</h2>";
                    include_once("Views/footer.php");
                    break;
                case '/registration':
                    include_once("Views/header.php");
                    include_once("Views/signup.php");
                    include_once("Views/footer.php");
                    if (isset($_POST['btn-regist'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        array_pop($_POST);
                        $this->insert("users",$_POST);
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
    // public function __construct($dbname) {
    //     echo "Inside Constr";
    // }
}
$ObjectController = new Controller;
// $ObjectController = new Controller('masterdatabase');
