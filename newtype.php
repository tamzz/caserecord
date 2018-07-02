<?php
session_start();
// connect to the database
//*******nothing is being saved to vaccinetype,just transferred data to newvaccinedetail.php******
//then saved data to vaccinedetail table
include('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit']))
{
// get form data with $_POST, making sure it is valid
//$id= mysql_real_escape_string(htmlspecialchars($_POST['id']));
$vaccineid =    mysql_real_escape_string(htmlspecialchars($_POST['vaccineid']));
$vaccinename1 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename1']));
//$vaccinename2 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename2']));
//$vaccinename3 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename3']));
$vaccinedescription = mysql_real_escape_string(htmlspecialchars($_POST['vaccinedescription']));
$totalnoofinjection = mysql_real_escape_string(htmlspecialchars($_POST['totalnoofinjection']));
//================================================================
//After the data has been submitted, and getting the form data
//pass the form data across pages through $_SESSION.

     session_start();
     $tam = $_POST['totalnoofinjection'];
     $_SESSION['varname5'] = $tam;

     $tamtam = $_POST['vaccineid'];
     $_SESSION['varname50'] = $tamtam;

      $traditional = $_POST['vaccinename1'];
      $_SESSION['traditional'] = $traditional;
//Below is of no use
      $simplified = $_POST['vaccinename2'];
      $_SESSION['simplified'] = $simplified;

      $eng = $_POST['vaccinename3'];
      $_SESSION['eng'] = $eng;
	  
	  
	  $des = $_POST['vaccinedescription'];
      $_SESSION['des'] = $des;
//Above is of no use
      $casetype = $_POST['casetype'];
      $_SESSION['casetype'] = $casetype;

// check to make sure all fields are entered

if ($vaccineid == '' || $vaccinename1 == ''|| $totalnoofinjection == '')
{
// generate error message
echo "<script>
alert('Please fill in all the required field before submission');
window.location.href='typesearch.php';
</script>";
}
else
{
// save the data to the database (For only one row (record)
//mysql_query("INSERT vaccinetype SET vaccineid='$vaccineid', vaccinename1='$vaccinename1',vaccinename2='$vaccinename2',vaccinename3='$vaccinename3', vaccinedescription='$vaccinedescription', totalnoofinjection='$totalnoofinjection'")

//or die(mysql_error());

// once saved, redirect back to the view page

header("Location: newvaccinedetail1.php");
}
}
else
// if the form hasn't been submitted, display the form
{echo "aa";

}
