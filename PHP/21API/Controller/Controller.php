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
                case '/getallcountries':
                    $Data = $this->select("country");
                    echo json_encode($Data['Data']);
                    break;
                case '/getstatesbycountryid':
                    $Data = $this->select("state", array("countryid" => $_REQUEST['countryid']));
                    echo json_encode($Data['Data']);
                    break;
                case '/getallstates':
                    $Data = $this->select("state");
                    echo json_encode($Data['Data']);
                    break;
                case '/getallcities':
                    $Data = $this->select("cities_data");
                    echo json_encode($Data['Data']);
                    break;
                case '/getproducts':
                    $Data = $this->select("product");
                    echo json_encode($Data['Data']);
                    break;
                case '/testmail':
                    $OTP = rand(10000, 99999);
                    $msg = "your Password change OTP is :$OTP";
                    $msg .= "Changes Password link :<a href='http://localhost/laravel/17JulyPHPMWF9/PHP/18MVC/forgorpasswprd?mail='$mailTo>Click here</a>";
                    $mailTo = "jay.amin.tops@gmail.com";
                    $this->sendmail($msg, $mailTo);
                    break;
                case '/registration':
                    $data = file_get_contents('php://input');
                    $result = $this->insert("user",$data);
                    echo json_encode($result);
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
    function sendmail($body, $to)
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
