<?php
require  'vendor/autoload.php';
// require_once "Twilio/autoload.php";

use Twilio\Rest\Client;
//if you don't have a twilio account, sign up using my referral link:
// https://www.twilio.com/referral/pnDYsm
//keep these keys private
$sid = "AC02f2d1286d3d4f422a895bd243f3ba71";
$token = "efba4d3b9bd11f4e6882a49269a7dc42";
$twilioPhone = "+15072953750";


if (!function_exists("sendSMS")) {
  //if you don't specify a from number, it will use the default twilio number
  function sendSMS($message, $to, $from = "")
  {
    global $sid, $token, $twilioPhone;
    $response = [];

    if ($from == "") {
      $from = $twilioPhone;
    }


    $client = new Client($sid, $token);

    try {
      $client->messages->create(
        $to,
        array(
          'from' => $from,
          'body' => $message,
        )
      );
      $response['success'] = true;
      $status = "Success";
      $response['message'] = $status;
    } catch (\Exception $e) {
      $status = "Failed:" . $e->getMessage();
      $response['success'] = false;
      $response['message'] = $status;
    }
    return $response;
  }
}

//preformatted var_dump function
if (!function_exists('dump')) {
  function dump($var, $adminOnly = false, $localhostOnly = false)
  {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
  }
}

//preformatted dump and die function
if (!function_exists('dnd')) {
  function dnd($var)
  {
    dump($var);
    die();
  }
}