<?php
/*
DELETE.PHP
*/
// connect to the database
include('connect-db.php');
// check if the 'id' variable is set in URL, and check that it is valid
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get id value
$id = $_GET['id'];
// delete the entry
$result = mysql_query("DELETE FROM username WHERE UserNameID=$id")
or die(mysql_error());
echo mysql_error();

// redirect back to the start page

header("Location: useradmin.php");
}
else
// if id isn't set, or isn't valid, redirect back to view page

{if(! $result) { die('Could not delete data: ' . mysql_error()); }
 echo "Deleted data successfully\n";

header("Location: useradmin.php");
}

?>
