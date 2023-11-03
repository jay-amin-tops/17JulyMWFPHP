<?php

include_once("Model/Model.php");
class Controller extends Model{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/MWF2/18MVC_rev/";
    public $assets_url = "";
    public $dynamic_assets_url = "";
    public function __construct(){
        // echo "Data";
        parent::__construct();
        $UrlArray = explode("/",$_SERVER['REQUEST_URI']); 
        $this->assets_url = $this->base_url."/Assets/";
        // echo "<pre>";
        // print_r($_SERVER);
        // print_r($UrlArray);
        $this->dynamic_assets_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME']."/".$UrlArray[1]."/".$UrlArray[2]."/".$UrlArray[3]."/".$UrlArray[4]."/Assets/"; 
        if (isset($_SERVER['PATH_INFO'])) {
            
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/index':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/mainContent.php");
                    include_once("Views/footer.php");
                   
                    break;
                case '/about':
                    include_once("Views/header.php");
                    echo "<h2>About us page data</h2>";
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    echo "<h2>Contact page data</h2>";
                    include_once("Views/footer.php");
                    break;
                case '/gallery':
                    include_once("Views/header.php");
                    echo "<h2>gallery page data</h2>";
                    include_once("Views/footer.php");
                    break;
                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");
                    break;
                case '/registration':
                    include_once("Views/header.php");
                    include_once("Views/registration.php");
                    include_once("Views/footer.php");
                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre>";
                    $Hoobies = implode(",",$_POST['chk']);
                    $Data = array("username"=>$_POST['username'],
                    "password"=>$_POST['password'],
                    "fullname"=>$_POST['fname']." ".$_POST['lname'],
                    "dateofbirth"=>$_POST['dob'],
                    "mobile"=>$_POST['mobile'],
                    "email"=>$_POST['email'],
                    "gender"=>$_POST['gender'],
                    "hobbies"=>$Hoobies,
                    "address"=>$_POST['address'],
                );
                    $this->insert("users",$Data);

                    break;
                
                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
            // echo "invalid url";
        }
        

    }
}
$Controller = new Controller();

?>