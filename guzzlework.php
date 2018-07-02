<?php session_start();

//open session to receive the sms message passed from the thirty.php
//$sms = $_SESSION['hi'];?>
<?php require 'vendor/autoload.php';

$json =  $_COOKIE["Token"] ;
echo $json;

$obj2 = json_decode($json, true );

 // $token contain the value of token  
  $token = $obj2["token"];
  echo $token;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

$client = new Client([
    'headers' => [ 'Content-Type' => 'application/json',
     'Token' => $token]
]);

$response = $client->get('http://localhost:91/Religious',
    ['body' => $_SESSION['hi']]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';

