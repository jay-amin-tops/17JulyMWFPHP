<?php
session_start();
require_once("Model/Model.php");
class Controller extends Model{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/Assets/";
    public function __construct(){
        // echo "Called";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        // exit;
        ob_start();
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/home_main.php");
                    include_once("Views/footer.php");
                    break;
                case '/admindahboard':
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/main-page.php");
                    include_once("Views/admin/footer.php");
                    break;
                case '/allusers':
                    $allUsers = $this->selectwhere("users",array("status"=>1,"role_id"=>2));
                    // echo "<pre>";
                    // print_r($allUsers);
                    // echo "</pre>";
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/allusers.php");
                    include_once("Views/admin/footer.php");
                    break;
                case '/signin':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    // echo "<h2>Login page data</h2>";
                    include_once("Views/footer.php");
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    $LoginRes = $this->login("admin","123");
                    // echo "<pre>";
                    // print_r($LoginRes);
                    // echo "</pre>";
                    if ($LoginRes['Code'] == 1) {
                        $_SESSION['UserData']= $LoginRes['Data'];
                        echo "<pre>";
                        print_r($LoginRes['Data']->role_id);
                        echo "</pre>";
                        if ($LoginRes['Data']->role_id == 1) {
                            header("location:admindahboard");
                        } else {
                            header("location:home");
                        }
                        
                    } else {
                        
                    }
                    
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
                        $response = $this->insert("users",$data);
                        echo "<pre>";
                        print_r($response);
                        echo "</pre>";
                    }
                    break;

                default:
                    # code...
                    break;
            }
        }else{
            header("location:home");
        }
        ob_flush();
    }
}
$ControllerObject = new Controller;
