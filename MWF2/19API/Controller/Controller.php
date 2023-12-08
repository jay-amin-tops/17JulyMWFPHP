<?php

include_once("Model/Model.php");
session_start();


// header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");
// header("Cache-Control: no-cache");
// header("Pragma: no-cache");
// header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
// header('Access-Control-Allow-Credentials: true');
// header('Access-Control-Max-Age: 86400');    // cache for 1 day
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
class Controller extends Model
{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/MWF2/18MVC_rev/";
    public $assets_url = "";
    public $dynamic_assets_url = "";
    public $dynamic_assets_url_admin = "http://localhost/laravel/17JulyPHPMWF9/MWF2/18MVC_rev/Assets/admin_assets/";
    public function __construct()
    {
        ob_start();
        // echo "Data";
        parent::__construct();
        $UrlArray = explode("/", $_SERVER['REQUEST_URI']);
        $this->assets_url = $this->base_url . "/Assets/";
        // echo "<pre>";
        // print_r($_SERVER);
        // print_r($UrlArray);
        $this->dynamic_assets_url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . "/" . $UrlArray[1] . "/" . $UrlArray[2] . "/" . $UrlArray[3] . "/" . $UrlArray[4] . "/Assets/";
        if (isset($_SERVER['PATH_INFO'])) {

            switch ($_SERVER['PATH_INFO']) {
                case '/login':
                    // print_r($_SERVER['REQUEST_METHOD']);
                    // file_get_contents('php://input') // get data from client using post method with json
                    // print_r(json_decode($result) );
                    $data = json_decode(file_get_contents('php://input'));
                    // print_r($data->username);
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $InsertRes = $this->login($data->username, $data->password);
                        echo json_encode($InsertRes);
                    } else {
                        echo "Invalid Request";
                    }
                    break;
                case '/addtodo':
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $data = json_decode(file_get_contents('php://input'));
                        // print_r($data);
                        $InsertRes = $this->insert("todo",array("title"=>$data->title,"status"=>"pending"));
                        echo json_encode($InsertRes);
                    } else {
                        echo "Invalid Request";
                    }
                    break;
                case '/getalltodo':
                    $InsertRes = $this->select("todo");
                    echo json_encode($InsertRes);
                    break;
                case '/gettodobyid':
                    $SelectRes = $this->select("todo",array("id"=>$_REQUEST['id']));
                    echo json_encode($SelectRes);
                    break;

                case '/registration':
                    // print_r($data->username);
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $reqData = json_decode(file_get_contents('php://input'));
                        // print_r($reqData);
                        // exit;
                        // $Hoobies = implode(",", $reqData->chk);
                        $Data = array(
                            "username" => $reqData->username,
                            "password" => $reqData->password,
                            "fullname" => $reqData->fname . " " . $reqData->lname,
                            "dateofbirth" => $reqData->dob,
                            "mobile" => $reqData->mobile,
                            "email" => $reqData->email,
                            "gender" => $reqData->gender,
                            "hobbies" => $reqData->chk,
                            "address" => $reqData->address,
                        );
                        // echo $response['message'];
                        $Response = $this->insert("users", $Data);
                        echo json_encode($Response);
                    } else {
                        echo "Invalid Request";
                    }
                    break;

                case '/allusers':
                    $Response = $this->select('users');
                    echo json_encode($Response);
                    break;
                case '/addnewuser':
                    $allCountries = $this->select('country');
                    $allStates = $this->select('state');
                    $allCities = $this->select('city');
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/addnewuser.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/deleteuser':
                    $DeleteRes = $this->delete('users', array("id" => $_REQUEST['userid']));
                    if ($DeleteRes['Code'] == 1) {
                        header("location:allusers");
                    } else {
                        echo "<script> alert('Error while updating') </script>";
                    }
                    break;
                case '/edituser':
                    // $allusers = $this->selectwhere('users',array("id"=>$_REQUEST['userid']));
                    $allCities = $this->select('city');
                    $usersDataById = $this->select('users', array("id" => $_REQUEST['userid']));
                    // echo "<pre>";
                    // print_r($allusers);
                    // echo "</pre>";
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/edituser.php");
                    include_once("Views/Admin/footer.php");

                    if (isset($_REQUEST['btn-update'])) {
                        $Hoobies = implode(",", $_POST['chk']);
                        // echo "<pre>";
                        // print_r($_FILES);
                        if ($_FILES["profile_pic"]['error'] == 0) {
                            $target = "Assets/uploads/" . basename($_FILES["profile_pic"]["name"]);
                            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                                $ImageName = $_FILES["profile_pic"]["name"];
                            } else {
                                $ImageName = "default.jpg";
                            }
                        } else {
                            $ImageName = $_POST['old_profile_pic'];
                        }
                        $Data = array(
                            "username" => $_POST['username'],
                            "password" => $_POST['password'],
                            "fullname" => $_POST['fname'] . " " . $_POST['lname'],
                            "dateofbirth" => $_POST['dob'],
                            "mobile" => $_POST['mobile'],
                            "email" => $_POST['email'],
                            "gender" => $_POST['gender'],
                            "hobbies" => $Hoobies,
                            "address" => $_POST['address'],
                            "profile_pic" => $ImageName
                        );
                        // echo $response['message'];
                        $UpdateRes = $this->update("users", $Data, array("id" => $_REQUEST['userid'], "user_role" => 2));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:allusers");
                        } else {
                            echo "<script> alert('Error while updating') </script>";
                        }
                    }
                    break;
                case '/getstatebycountryid':
                    $allStatesByCountry = $this->select('state', array("country_id" => $_REQUEST['countryid']));
                    // echo $allStatesByCountry;
                    echo json_encode($allStatesByCountry);
                    break;
                case '/getcitybystateid':
                    $allCitiesByStateId = $this->select('city', array("state_id" => $_REQUEST['stateid']));
                    echo json_encode($allCitiesByStateId);
                    break;
                default:
                    # code...
                    break;
            }
        } else {
            header("location:home");
            // echo "invalid url";
        }
        ob_flush();
    }
}
$Controller = new Controller();
