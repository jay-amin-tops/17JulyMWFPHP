<?php
session_start();
require_once("Model/Model.php");
class Controller extends Model
{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/Assets/";
    public function __construct()
    {
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
                case '/signin':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    // echo "<h2>Login page data</h2>";
                    include_once("Views/footer.php");
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    if (isset($_REQUEST['btn-login'])) {
                        $LoginRes = $this->login("admin", "123");
                        if ($LoginRes['Code'] == 1) {
                            $_SESSION['UserData'] = $LoginRes['Data'];
                            if ($LoginRes['Data']->role_id == 1) {
                                header("location:admindahboard");
                            } else {
                                header("location:home");
                            }
                        } else {
                            echo "Invalid User";
                        }
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

                        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
                        if ($_FILES['profile_pic']['error'] == 0) {
                            $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                            $fileinfo = @getimagesize($_FILES["profile_pic"]["tmp_name"]);
                            if (!file_exists($_FILES["profile_pic"]["tmp_name"])) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Choose image file to upload."
                                );
                            } else if (!in_array($file_extension, $allowed_image_extension)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Upload valid images. Only PNG and JPEG are allowed."
                                );
                            } else if (($_FILES["profile_pic"]["size"] > 2000000)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Image size exceeds 2MB"
                                );
                            } else {
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
                            }
                        } else {
                            $ImageName = "defailt.jpg";
                        }


                        $data = array(
                            "username" => $_REQUEST['username'],
                            "fullname" => $_REQUEST['fname'] . " " . $_REQUEST['lname'],
                            "email" => $_REQUEST['email'],
                            "password" => $_REQUEST['password'],
                            "mobile" => $_REQUEST['mobile'],
                            "hobby" => "Cricket",
                            "prof_pic" => $ImageName,
                            "city" => $_REQUEST['city'],
                            "address" => $_REQUEST['address'],
                            "status" => 0,
                        );
                        $response = $this->insert("users", $data);
                        echo "<pre>";
                        print_r($response);
                        echo "</pre>";
                    }
                    break;


                case '/admindahboard':
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/main-page.php");
                    include_once("Views/admin/footer.php");
                    break;
                case '/allusers':
                    $allUsers = $this->select("users", array("status" => 1, "role_id" => 2));
                    // echo "<pre>";
                    // print_r($allUsers);
                    // echo "</pre>";
                    // $allUsers = $this->select("users");
                    // echo "<pre>";
                    // print_r($allUsers);
                    // echo "</pre>";
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/allusers.php");
                    include_once("Views/admin/footer.php");
                    break;
                case '/deleteuser':
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    // echo "</pre>";
                    // exit;
                    $deleteUsersRes = $this->delete("users", array("id" => $_REQUEST['userid']));
                    // $allUsers = $this->select("users");
                    // echo "<pre>";
                    // print_r($deleteUsersRes);
                    // echo "</pre>";
                    // include_once("Views/admin/header.php");
                    // include_once("Views/admin/allusers.php");
                    // include_once("Views/admin/footer.php");
                    if ($deleteUsersRes['Code'] == 1) {
                        header("location:allusers");
                    } else {
                        echo '<script>alert("Error while deleting data try after some time")</script>';
                        # code...
                    }

                    break;
                case '/edituser':
                    $Response = $this->select("users", array("id" => $_REQUEST['userid']));
                    $AllCities = $this->select("cities_data");
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/updateusers.php");
                    include_once("Views/admin/footer.php");
                    if (isset($_POST['btn-update'])) {
                        // echo "<pre>";
                        // print_r($_FILES);
                        // echo "</pre>";
                        $allowed_image_extension = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "webp");
                        if ($_FILES['profile_pic']['error'] == 0) {
                            $file_extension = pathinfo($_FILES["profile_pic"]["name"], PATHINFO_EXTENSION);
                            $fileinfo = @getimagesize($_FILES["profile_pic"]["tmp_name"]);
                            if (!file_exists($_FILES["profile_pic"]["tmp_name"])) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Choose image file to upload."
                                );
                            } else if (!in_array($file_extension, $allowed_image_extension)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Upload valid images. Only PNG and JPEG are allowed."
                                );
                            } else if (($_FILES["profile_pic"]["size"] > 2000000)) {
                                $response = array(
                                    "type" => "error",
                                    "message" => "Image size exceeds 2MB"
                                );
                            } else {
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
                            }
                        } else {
                            $ImageName = "defailt.jpg";
                        }
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
}
$ControllerObject = new Controller;
