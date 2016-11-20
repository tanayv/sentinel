<?php
// Get the PHP helper library from twilio.com/docs/php/install


require('twilio/Services/Twilio.php');

$sid = "AC014a6f40ca0f1a5eb40cdf0a15a47c8c"; // Your Account SID from www.twilio.com/user/account
$token = "0a35cb4d14d3ddad5ab9d408d7ba9baa"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
foreach ($client->account->messages as $message) {
    echo "From: {$message->from}\nTo: {$message->to}\nBody: " . $message->body;
}

?>