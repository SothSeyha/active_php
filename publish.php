<?php
require 'phpMQTT.php';
$server = 'localhost';      // change if necessary
$port = 1883;              // change if necessary
$username = 'superman';   // set your username
$password = 'boss';      // set your password
$client_id = 'phpMQTT-publisher'; // make sure this is unique for connecting to sever - you could use uniqid()
$topic = 'topic';
$message = 'Hello World !';

$mqtt = new phpMQTT( $server, $port, $client_id );
if ($mqtt->connect(true, null, $username, $password)) {
    $mqtt->publish($topic, $message,0);
    echo 'Published message: ' . $message ."\n";
    $mqtt->close();
} else {
    echo "Fail or time out !\n";
}
