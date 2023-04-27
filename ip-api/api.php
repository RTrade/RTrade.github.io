<?php

// Get the IP address of the client
$ip = $_SERVER['REMOTE_ADDR'];

// Get the AS number of the client
$as = gethostbyaddr($ip);

// Create a JSON array of the IP and AS
$data = array(
  'ip' => $ip,
  'as' => $as,
  'watermark' => 'hosted by https://github.com/rtrade'
);

// Encode the JSON array to a string
$json = json_encode($data);

// Send the JSON string to the client
header('Content-Type: application/json');
echo $json;

?>
