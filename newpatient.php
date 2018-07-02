<?php ob_start();
session_start();
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
//$patientvid = mysql_real_escape_string(htmlspecialchars($_POST['patientvid']));//================================================================
$language = mysql_real_escape_string(htmlspecialchars($_POST['language']));//================================================================



 $_SESSION['smsorcall'] = $_POST['smsorcall'];
	
 
 
//$smsorcall = mysql_real_escape_string(htmlspecialchars($_POST['smsorcall']));//================================================================



//Using $_SESSION to get below values from the newpatiententry1.php 
//clientid<
$pp = $_POST['patientid'];
$_SESSION['pid0000'] = $pp;
//hkid
$hkid = $_POST['patienthkid'];
$_SESSION['phkid0000'] = $hkid;

$vv = $_POST['vaccineid'];
$_SESSION['varname50'] = $vv;

$ll = $_POST['language'];
$_SESSION['language'] = $ll;


$_SESSION['smsorcall'] = $_POST['smsorcall'];

$_SESSION['caseid'] = $_POST['caseid'];
$_SESSION['source'] = $_POST['source'];
$_SESSION['nature'] = $_POST['nature'];
$_SESSION['casetypeid'] = $_POST['casetypeid'];




 
// check to make sure required fields are entered

/*   hide for now
if ($patientid == '' || $vaccineid == ''){
echo "<script>
alert('Please fill in all the required field before submission');
window.location.href='newpatient2.php';
</script>";
}
else{*/
// save the data to the database
mysql_query("INSERT patientvaccine SET patientid='$patientid', vaccineid='$vaccineid',language='$language',smsorcall='$selectedOption'")
or die(mysql_error());
echo "<script type='text/javascript'>alert('data saved');</script>";

// once saved, redirect back to the view page
header("Location: newpatiententry1.php");
/*}  */
}
else
// if the form hasn't been submitted, display the form
{echo "aa";
}
