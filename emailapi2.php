<?php /*

<?php
/*
To get the data (message and phone no) in the thirty.php 
and send them to the API, which help to send the sms to patient
*
<?php session_start();

//open session to receive the sms message passed from the thirty.php
//$sms = $_SESSION['hi'];?>
<?php require 'vendor/autoload.php';
//The return cookie result contain a few pair of key value pair, 
//to extract exactly what we want which is the the value of the
//token, hence convert it to array and use named key to get the value
//arrayname["named key"] 
$json = $_COOKIE["Token"] ;
//echo $json;
$obj2 = json_decode($json, true );

 // $token contain the value of token  
  $token = $obj2["token"];
  echo $token;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

$client = new Client([
    'headers' => ['Content-Type' => 'application/json',
     'Token' => $token]
]);

$response = $client->post('http://localhost:91/Religious',
    ['body' => $_SESSION['hi']]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';
//header("location: smsredirect.php");


*/?>
<em>Retrieve JSON </em><br>
<?php session_start();

echo $_SESSION['email2'];

//open session to receive the sms message passed from the thirty.php
//$sms = $_SESSION['hi'];?><hr>
<br><br><br><br><br><br>
To get the value of token using $_COOKIE <br>
<?php require 'vendor/autoload.php';


$json =  $_COOKIE["Token"] ;
echo $json;

$obj2 = json_decode($json, true );


 // $token contain the value of token  
  $token = $obj2["token"];
  echo $token;
  echo "<hr>";
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

$client = new Client([
    'headers' => ['Content-Type' => 'application/json',
     'Token' => $token]
]);

$response = $client->post('http://localhost:91/Email',
   ['body' => $_SESSION['email2']]
);


echo  var_export($response->getStatusCode(), true);
echo  var_export($response->getBody()->getContents(), true);
header("location: emailredirect.php");
