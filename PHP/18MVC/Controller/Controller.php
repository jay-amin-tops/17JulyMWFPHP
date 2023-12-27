<?php
session_start();
require_once("Model/Model.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions

class Controller extends Model
{
    public $base_url = "http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/Assets/";
    public $mail = "";
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
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
                        $ImageName = $this->imageupload();
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
                    $allUsers = $this->select("users", array("role_id" => 2));
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
                case '/addnewuser':
                    include_once("Views/admin/header.php");
                    include_once("Views/admin/newuser.php");
                    include_once("Views/admin/footer.php");
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

                        // if ($response['Code'] == 1) {
                        //     header("location:allusers");
                        // } else {
                        //     echo "Error while insereting";
                        // }

                    }
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
                case '/testmail':
                    $OTP= rand ( 10000 , 99999 );
                    $msg= "your Password change OTP is :$OTP";
                    $msg.= "Changes Password link :<a href='http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/forgorpasswprd?mail='$mailTo>Click here</a>";
                    $mailTo= "jay.amin.tops@gmail.com";

                    $this->sendmail($msg,$mailTo);
                    break;
                case '/forgorpasswprd':
                    echo "inside forgot";
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
    function imageupload()
    {

        // echo "<pre>";
        // print_r($_REQUEST);
        // print_r($_FILES);
        // // print_r($Data);
        // echo "</pre>";
        // exit;
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
        return $ImageName;
    }
    function sendmail($body,$to)
    {

        try {
            //Server settings
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $this->mail->isSMTP();                                            //Send using SMTP
            $this->mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $this->mail->Username   = 'jay.tops.sg@gmail.com';                     //SMTP username
            $this->mail->Password   = 'dsqszmbycfgppley';                               //SMTP password
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $this->mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $this->mail->setFrom('jay.tops.sg@gmail.com', 'Mailer');
            // $this->mail->addAddress($_REQUEST['mail_to'], 'Jay Amin');     //Add a recipient
            $this->mail->addAddress($to, 'Jay Amin');     //Add a recipient
            $this->mail->addReplyTo('jay.tops.sg@gmail.com', 'Information');

            //Content
            $this->mail->isHTML(true);                                  //Set email format to HTML
            $this->mail->Subject = 'Here is the subject';
            $this->mail->Body    = $body;
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $this->mail->send();
            return 'Message has been sent';
        } catch (Exception $e) {
            return $this->mail->ErrorInfo;
        }
    }
}
$ControllerObject = new Controller;
