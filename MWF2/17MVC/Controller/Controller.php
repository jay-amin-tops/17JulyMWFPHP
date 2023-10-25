<?php

session_start();
include("Model/Model.php");

class Controller extends Model
{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/";
    // public $assets_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/Assests";
    public $assets_url = "";
    public function __construct()
    {
        ob_start();
        parent::__construct();
        // $assets_url = $this->base_url."Assests/";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "http://localhost/laravel/17JulyPHPMWF9/PHP/17MVC/home";
        // echo "<br><br>";
        // echo $_SERVER['REQUEST_URI'];
        $RequestUriArray = explode("/", $_SERVER['REQUEST_URI']);
        // print_r($RequestUriArray);

        $this->assets_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $RequestUriArray[1] . "/" . $RequestUriArray[2] . "/" . $RequestUriArray[3] . "/" . $RequestUriArray[4] . "/Assests/";



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
                    if (isset($_POST['btn-login'])) {
                        // echo "<pre>";
                        // print_r($_POST);
                        // echo "</pre>";
                        $LoginRes = $this->login($_POST['username'], $_POST['password']);
                        // echo "<pre>";
                        // print_r($LoginRes);
                        // echo "</pre>";
                        if ($LoginRes['Code'] == 1) {
                            $_SESSION['UserData'] = $LoginRes['Data'];
                            // echo "<pre>";
                            // print_r($LoginRes['Data']->role_id);
                            // echo "</pre>";
                            // exit;
                            if ($LoginRes['Data']->role_id == 1) {
                                header("location:admindashboard");
                            } else {
                                header("location:home");
                            }
                        } else {
                            echo "<script>alert('invalid user')</script>";
                        }
                    }
                    break;
                case '/about':
                    include_once("Views/header.php");
                    echo "<h2>About us</h2>";
                    include_once("Views/footer.php");
                    break;
                case '/admindashboard':
                    // echo "<h2>admindashboard</h2>";
                    include_once("Views/Admin/AdminHeader.php");
                    include_once("Views/Admin/AdminMainPage.php");
                    include_once("Views/Admin/AdminFooter.php");
                    break;
                case '/allusers':
                    $AllUsersData = $this->select('users');
                    include_once("Views/Admin/AdminHeader.php");
                    include_once("Views/Admin/listallusers.php");
                    include_once("Views/Admin/AdminFooter.php");
                    break;
                case '/deleteuser':
                    $Res = $this->delete("users", array("id" => $_REQUEST['userid']));
                    if ($Res['Code'] == 1) {
                        header("location:allusers");
                    }
                    break;
                case '/edituser':
                    $UserDataByIdRes = $this->selectWhere("users", array("id" => $_REQUEST['userid'], "role_id" => "2"));
                    include_once("Views/Admin/AdminHeader.php");
                    include_once("Views/Admin/editusers.php");
                    include_once("Views/Admin/AdminFooter.php");
                    if (isset($_POST['btn-update'])) {
                        $LoginRes = $this->update("users", array("username" => $_REQUEST['username']), array("id" => $_REQUEST['userid']));
                        if ($LoginRes['Code'] == 1) {
                            header("location:allusers");
                        } else {
                            echo "<script>alert('error while updating')</script>";
                        }
                    }
                    break;
                case '/logout':
                    session_destroy();
                    header("location:home");
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
                        $this->insert("users", $_POST);
                    }

                    break;

                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
    // public function __construct($dbname) {
    //     echo "Inside Constr";
    // }
}
$ObjectController = new Controller;
// $ObjectController = new Controller('masterdatabase');
