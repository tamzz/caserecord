<?php
// connect to the database
include('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
// get form data with $_POST, making sure it is valid
//$id= mysql_real_escape_string(htmlspecialchars($_POST['id']));
$patientid =    mysql_real_escape_string(htmlspecialchars($_POST['patientid']));
$patienthkid =    mysql_real_escape_string(htmlspecialchars($_POST['patienthkid']));

//$totalnoofinjection = mysql_real_escape_string(htmlspecialchars($_POST['totalnoofinjection']));
//================================================================
//After the data has been submitted, and getting the form data
//pass the form data across pages through $_SESSION.

     session_start();
     $all = $_POST['patientid'];
     $_SESSION['all'] = $all;
	 
	      
     $hkid2 = $_POST['hkid2'];
     $_SESSION['hkid2'] =  $hkid2;


// check to make sure all fields are entered
if ($patientid == '' && $patienthkid == '' )
{
// generate error message
echo "<script>
alert('Please fill in all the required field before submission');
window.location.href='searchpatient.php';
</script>";
}
else
{
// save the data to the database (For only one row (record)

header("Location: displaypatientall.php");
}
}
else
// if the form hasn't been submitted, display the form
{echo "aa";

}
