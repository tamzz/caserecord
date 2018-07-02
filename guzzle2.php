<?php
 
require 'vendor/autoload.php';
 
use GuzzleHttpClient;
 
$client = new Client();
$response = $client->get('http://localhost:81/Help/Api/POST-Sex');
 
echo '<pre>';
print_r($response);
 
?>