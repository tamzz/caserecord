<?php session_start();
// connect to the database
include('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
// get form data with $_POST, making sure it is valid
//$id= mysql_real_escape_string(htmlspecialchars($_POST['id']));
//$treatmentid =    mysql_real_escape_string(htmlspecialchars($_POST['treatmentid']));
$Username = mysql_real_escape_string(htmlspecialchars($_POST['Username']));
$Password = mysql_real_escape_string(htmlspecialchars($_POST['Password']));
//$treatmentname3 = mysql_real_escape_string(htmlspecialchars($_POST['treatmentname3']));
//$price = mysql_real_escape_string(htmlspecialchars($_POST['price']));

//$treatmentdescription = mysql_real_escape_string(htmlspecialchars($_POST['treatmentdescription']));
//================================================================

// check to make sure all fields are entered

/*
if ($Username == '' || $Password == '')
{
// generate error message
echo "<script>
alert('Please fill in all the required field before submission');
window.location.href='addtype1.php';
</script>";
}
else
{
	*/
// save the data to the database (For only one row (record)
mysql_query("INSERT INTO username (userName,pass) values('$Username', aes_encrypt('$Password','k'))")


or die(mysql_error());

// once saved, redirect back to the view page

header("Location: useradmin.php");

}
else
// if the form hasn't been submitted, display the form
{echo "aa";

}
