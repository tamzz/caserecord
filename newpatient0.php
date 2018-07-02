<?php ob_start();
// connect to the database
include('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
// get form data, making sure it is valid and assign them to variables
//$id= mysql_real_escape_string(htmlspecialchars($_POST['id']));
//$id= mysql_real_escape_string(htmlspecialchars($_POST['id']));
$patientid = mysql_real_escape_string(htmlspecialchars($_POST['patientid']));
$patienthkid = mysql_real_escape_string(htmlspecialchars($_POST['patienthkid']));
$vaccineid = mysql_real_escape_string(htmlspecialchars($_POST['vaccineid']));
$patientvid = mysql_real_escape_string(htmlspecialchars($_POST['patientvid']));//================================================================
$language = mysql_real_escape_string(htmlspecialchars($_POST['language']));//================================================================
$smsorcall = mysql_real_escape_string(htmlspecialchars($_POST['smsorcall']));//================================================================

//Using $_SESSION to get below values from the newpatiententry1.php 
session_start();
$pp = $_POST['patientid'];
$_SESSION['varname7'] = $pp;

$hkid = $_POST['patienthkid'];
$_SESSION['hkid'] = $hkid;

$vv = $_POST['vaccineid'];
$_SESSION['varname50'] = $vv;

$ll = $_POST['language'];
$_SESSION['language'] = $ll;

$smsorcall = $_POST['smsorcall'];
$_SESSION['smsorcall'] = $smsorcall;
 
// check to make sure required fields are entered
if ($patientid == '' || $vaccineid == ''|| $patientvid== ''){
echo "<script>
alert('Please fill in all the required field before submission');
window.location.href='newpatient1.php';
</script>";
}
else{
// save the data to the database
mysql_query("INSERT patientvaccine SET patientid='$patientid', vaccineid='$vaccineid', patientvid='$patientvid', language='$language=',smsorcall='$smsorcall='")
or die(mysql_error());
echo "<script type='text/javascript'>alert('data saved');</script>";

// once saved, redirect back to the view page
header("Location: newpatiententry2.php");
}
}
else
// if the form hasn't been submitted, display the form
{echo "aa";
}
