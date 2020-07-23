<?php
require('phpMQTT.php');
$server = 'localhost';     // change if necessary
$port = 1883;                     // change if necessary
$username = 'superman';                   // set your username
$password = 'boss';                   // set your password
$client_id = 'phpMQTT-publisher'; // make sure this is unique for connecting to sever - you could use uniqid()
$mqtt = new phpMQTT($server, $port, $client_id);
if ($mqtt->connect(true, NULL, $username, $password)) {
$mqtt->publish('topic', 'Hello World! at ' . date('r'), 0, false);
echo "Published message: nv nis ";
$mqtt->close();
} else {
echo "Time out!\n";
}


// <!-- <?php
// require("phpMQTT.php");
// // require("config.php");
// $server = 'localhost';     // change if necessary
// $port = 61616 . "/admin";                     // change if necessary
// $username = 'admin';                   // set your username
// $password = 'admin';                   // set your password
// $client_id = 'phpMQTT-subscriber'; 
// $message = "Hello CloudAMQP MQTT!";
// //MQTT client id to use for the device. "" will generate a client id automatically
// $mqtt = new phpMQTT($server,1883, $client_id);
// if ($mqtt->connect(true,NULL,$username,$password)) {
//   $mqtt->publish("topic",$message, 0);
//   echo "Published message: " . $message;
//   $mqtt->close();
// }else{
//   echo "Fail or time out
// ";
// } 