<?php

$url = 'http://localhost:81/Help/Api/POST-Login';
$data = array('message' => 'hi', 'mobile' => '12345678');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);

?>