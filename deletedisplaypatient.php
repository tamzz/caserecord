<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('connect-db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];


// delete the entry

$result = mysql_query("DELETE FROM patientvaccinedetail WHERE id=$id")

or die(mysql_error());
echo mysql_error();



// redirect back to the view page

header("Location: searchclient.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{if(! $result) { die('Could not delete data: ' . mysql_error()); }
 echo "Deleted data successfully\n";

header("Location: searchclient.php");

}



?>
