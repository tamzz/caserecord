<?php
	$hostname='localhost';
	$user = 'root';
	$password = 'funfun8888funfun ';
	$mysql_database = 'testing';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("testing", $db);
?>