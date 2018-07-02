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

$response = $client->get('http://localhost:91/MedicalItems',
    ['body' => json_encode(
        [
            "phone" => "admin",
			"message" => "123456"
        ]
    )]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';


 
?>

===========
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

$response = $client->post('http://localhost:91/Religious',
    ['body' => json_encode(
        [
            "religious" => "admin",
			"religiousLang2" => "123456",
			"religiousLang3" => "123456"
        ]
    )]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';


?>

=========
<?php session_start();
require 'vendor/autoload.php';
echo $_SESSION['hi'];

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
                   'Token'        => $token  ]
]);

$response = $client->get('http://localhost:91/MaritalStatus',
    ['body' => json_encode(
        [
            "maritalStatus"      => "admin",
			"maritalStatusLang2" => "123456",
			"maritalStatusLang3" => "12321"
			
        ]
    )]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';
----------
<?php session_start();
require 'vendor/autoload.php';
echo $_SESSION['hi'];

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
                   'Token'        => $token  ]
]);

$response = $client->post('http://localhost:91/SMS',
    ['body' => json_encode(
        [
            "phone"      => "admin",
			"message" => "123456",
		
			
        ]
    )]
);

echo '<pre>' . var_export($response->getStatusCode(), true).'</pre>';
echo '<pre>' . var_export($response->getBody()->getContents(), true) . '</pre>';






?>