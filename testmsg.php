<?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
require('twilio/Services/Twilio.php');

$sid = "AC014a6f40ca0f1a5eb40cdf0a15a47c8c"; // Your Account SID from www.twilio.com/user/account
$token = "0a35cb4d14d3ddad5ab9d408d7ba9baa"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$message = $client->account->messages->sendMessage(
  '8629022180', // From a valid Twilio number
  '6089603054', // Text this number
  "This was easy!"
);

print $message->sid;



?>