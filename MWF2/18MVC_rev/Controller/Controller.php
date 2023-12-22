<?php

include_once("Model/Model.php");
session_start();
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
                    if (isset($_POST['btn-login'])) {
                        $InsertRes = $this->login($_POST['username'], $_POST['password']);
                        if ($InsertRes['Code'] == 1) {
                            $_SESSION['UserData'] = $InsertRes['Data'];
                            if ($InsertRes['Data']->user_role == 1) {
                                // echo "inside admin";
                                header("location:admindashboard");
                            } else {
                                header("location:home");
                                // echo "inside user";
                                # code...
                            }


                            // echo "<script>alert('Login success')</script>";
                        } else {
                            echo "<script>alert('Invalid User')</script>";
                        }
                    }
                    break;

                case '/registration':
                    include_once("Views/header.php");
                    include_once("Views/registration.php");
                    include_once("Views/footer.php");


                    if (isset($_POST['btn-regist'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // print_r($_FILES);
                        // echo "</pre>";

                        // exit;
                        $allowed_image_extension = array(
                            "png",
                            "PNG",
                            "jpg",
                            "JPG",
                            "jpeg",
                            "JPEG",
                            "webp"
                        );
                        $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                        $fileinfo = @getimagesize($_FILES["profile_pic"]["tmp_name"]);
                        // move_uploaded_file($_FILES["profile_pic"]["tmp_name"],"Assets/uploads/" . basename($_FILES["profile_pic"]["name"]))
                        $width = $fileinfo[0];
                        $height = $fileinfo[1];
                        if (!file_exists($_FILES["profile_pic"]["tmp_name"])) {
                            $response = array(
                                "type" => "error",
                                "message" => "Choose image file to upload."
                            );
                        }    // Validate file input to check if is with valid extension
                        else if (!in_array($file_extension, $allowed_image_extension)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Upload valid images. Only PNG and JPEG are allowed."
                            );
                        }    // Validate image file size
                        else if (($_FILES["profile_pic"]["size"] > 2000000)) {
                            $response = array(
                                "type" => "error",
                                "message" => "Image size exceeds 2MB"
                            );
                            // }    // Validate image file dimension
                            // else if ($width > "300" || $height > "200") {
                            //     $response = array(
                            //         "type" => "error",
                            //         "message" => "Image dimension should be within 300X200"
                            //     );
                        } else {
                            echo "inside else";
                            $target = "Assets/uploads/" . basename($_FILES["profile_pic"]["name"]);
                            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target)) {
                                $response = array(
                                    "type" => "success",
                                    "message" => "Image uploaded successfully.",
                                    "name" => $_FILES["profile_pic"]["name"]
                                );
                                $ImageName = $_FILES["profile_pic"]["name"];
                            } else {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Problem in uploading image files."
                                );
                                $ImageName = "default.jpg";
                            }

                            $Hoobies = implode(",", $_POST['chk']);
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
                                "profile_pic" => $ImageName,
                            );
                            // echo $response['message'];
                            $InsertRes = $this->insert("users", $Data);
                            if ($InsertRes['Code'] == 1) {
                                echo "<script>
                                alert('Registration complete successfully')
                                window.location.href = 'login'
                                </script>";
                            } else {
                                echo "<script>alert('Error while insering data please try again after sometime ')</script>";
                            }
                        }
                        // echo $response['message'];
                        echo '<script>
                            alert("' . $response['message'] . '")
                        </script>';

                    }
                    break;

                case '/admindashboard':
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/mainpage.php");
                    include_once("Views/Admin/footer.php");
                    break;
                case '/allusers':
                    $allusers = $this->select('users');
                    include_once("Views/Admin/header.php");
                    include_once("Views/Admin/allusers.php");
                    include_once("Views/Admin/footer.php");
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
                        if ($DeleteRes['Code']==1) {
                            header("location:allusers");
                        }else{
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
                        }else{
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
                        if ($UpdateRes['Code']==1) {
                            header("location:allusers");
                        }else{
                            echo "<script> alert('Error while updating') </script>";
                        }
                    }
                    break;
                    case '/getstatebycountryid':
                        $allStatesByCountry = $this->select('state',array("country_id"=>$_REQUEST['countryid']));
                        // echo $allStatesByCountry;
                        echo json_encode($allStatesByCountry);
                        break;
                    case '/getcitybystateid':
                        $allCitiesByStateId = $this->select('city',array("state_id"=>$_REQUEST['stateid']));
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
