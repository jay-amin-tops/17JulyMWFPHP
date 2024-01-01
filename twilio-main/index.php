<?php
//custom functions and configurations for twilio


// require __DIR__ . '/vendor/autoload.php';
// use Twilio\Rest\Client;
// // Your Account SID and Auth Token from twilio.com/console
// // To set up environmental variables, see http://twil.io/secure
// $account_sid = "AC02f2d1286d3d4f422a895bd243f3ba71";
// $auth_token = "efba4d3b9bd11f4e6882a49269a7dc42";
// // In production, these should be environment variables. E.g.:
// // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// // A Twilio number you own with SMS capabilities
// $twilio_number = "+15072953750";

// $client = new Client($account_sid, $auth_token);
// $client->messages->create(
//     // Where to send a text message (your cell phone?)
//     '+919662216697',
//     array(
//         'from' => $twilio_number,
//         'body' => 'I sent this message in under 10 minutes!'
//     )
// );












require_once "functions.php";

if(!empty($_POST['phone']) && !empty($_POST['message'])){

  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $attempt = sendSMS($message, $phone);
  dump($attempt);
}
?>
<h2>Send a sample SMS</h2>
<form action="" method="post">
  <label for="">Phone number</label><br>
  <input type="text" name="phone" required>

  <br><br>
  <label for="">Message</label><br>
  <textarea name="message" id="" cols="80" rows="2" required></textarea>

  <br><br>
  <input type="submit" value="Send">
</form>

<h5>Be sure to set your sid and token in the functions.php file</h5>
<a href="https://www.twilio.com/referral/pnDYsm">Sign up for Twilio using my link</a>