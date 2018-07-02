<!-- Retrieve data from vaccinedetail table and save it back to the patientvaccinedetail table-->
<?php session_start();?><!Doctype html>
<html>
<head><title>Patient Vaccine Detail date entry</title>
<style><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></style>
		<script src="https://use.fontawesome.com/ead802b541.js"></script>
</head>
<body>
<!-- Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;"> 
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h3>Vaccine Management</h3></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item">
        <a class="nav-link" href="index.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientcurrentt.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> 	  
	  
    </ul> 
  </div>
</nav><!-- Nav Bar -->
		
<div class="jumbotron">
<h3 align="center" class="display-4">Patient Injection Detail Entry  </h3>
<!--(input the injection date)<br>
or to customize the messgae-->
</div>
<br><br>
<form action="" method="post">
<table class="table-bordered" align="center" border='1' cellpadding='10' id="myTable">
<th>Patient ID</th><th>Patient HKID</th><th>Vaccine ID</th>
<!--<th> 疫苗名稱 (繁體): </th><th> 疫苗名称 (简体) </th>-->
<th>Vaccine Name(Eng)</th><th>Total no of injection</th> <th>Nth Injection</th>
<th>Date Injected</th><th>Next Date Injected</th><th>Next Injection Skip</th><th>Language</th><th>Reminder Means</th>
<!--<th>信息(繁體)</th><th>信息(简体)</th><th>Message(Eng)</th>-->
<th>status</th>
<!--====Pass the values in the previous page(newpatient1.php to this page using $_SESSION-->
<?php 
session_start();
$pp = $_SESSION['varname7'];
//echo $pp;
//get the session variable of vaccineid
$vv = $_SESSION['varname50'];
//echo $vv;
//get the session variable of language
$ll = $_SESSION['language'];
//echo $ll;
//hkid
$hk = $_SESSION['hkid'];
//echo $hk;
$smsorcall = $_SESSION['smsorcall'];
//echo $smsorcall;
?>
<?php
// connect to the database
ob_start();
include('connect-db.php');
// *****get results from database (from the table 'vaccinedetail'), only show the vaccination record that match the vaccine type user has selected in the previous page******

$sql = "SELECT * FROM vaccinedetail WHERE vaccineid = '$vv'";
$result = mysql_query($sql)or die(mysql_error());
?>
<!-- **************************display data in editabel table with both data from the previous pages using $_SESSION
AND data from Mysql table*****************************************************-->
<!-- loop through results of database query, displaying them in the table-->
<?php ob_start();?><?php while($row = mysql_fetch_array( $result )){?>

<!--echo out the contents of EACH row into a table-->
<tr>
<td><input type="text" class="form-control" size="4" name = "patientid[]" readonly value="<?php echo $pp; ?>"</td>
<td><input type="text" class="form-control" size="4" name = "patienthkid[]" readonly value="<?php echo $hk; ?>"</td>
<td><input type="text" class="form-control" size="4" name = "vaccineid[]" readonly value="<?php echo $vv; ?>"</td>
<td><input type="text" class="form-control" name = "vaccinename3[]" value="<?php echo $row['vaccinename3'] ?>"</td>
<td><input type="text" class="form-control" size="8" name = "totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"</td>
<td><input type="text" class="form-control" size="8" name = "nthinjection[]" value="<?php echo $row['nthinjection'] ?>"</td>
<td><input type="date" class="form-control start_date" size="3" name = "date[]" value="<?php echo $row['date'] ?>"> <input type="button" class="addSkip" value="Confirm"></td>
<td><input type="text" class="form-control end_date" size="8"name = "nextdate[]" value="<?php echo $row['nextdate'] ?>"</td>
<td><input type="text" class="form-control days" size="3"name = "skip[]" readonly value="<?php echo $row['skip'] ?>"</td>
<td><input type="text" class="form-control" size="3" name = "language[]" value="<?php echo $ll; ?>"</td>
<td><input type="text" class="form-control" size="3" name = "smsorcall[]" value="<?php echo $smsorcall; ?>"</td>
<td><input type="text" class="form-control " size="3" name = "status[]" value="open" ></td>

<!--Hidden field of the tanle-->

<td><input type="hidden" class="form-control"  name = "vaccinename1[]" value="<?php echo $row['vaccinename1'] ?>"</td>
<td><input type="hidden" class="form-control" name = "vaccinename2[]" value="<?php echo $row['vaccinename2'] ?>"</td>

<td><textarea rows="3" class="form-control url" cols="20" style="display:none;"  name="traditionalmessage[]" data-value="<?php echo $row['vaccinename1']."\n下一個注射期為";?>"><?php echo $row['vaccinename1']."\n下一個注射期為";?></textarea> </td>

<td><textarea rows="3" class="form-control url" style="display:none;" cols="20" readonly name="simplifiedmessage[]" data-value="<?php echo $row['vaccinename2']."\n下一个注射期为";?>" ><?php echo $row['vaccinename2']."\n下一个注射期为";?></textarea> </td>
<td><textarea rows="3" class="form-control url"  style="display:none;"cols="20" readonly name="engmessage[]" data-value="<?php echo $row['vaccinename3']."\nNext injection period is";?>"><?php echo $row['vaccinename3']."\nNext injection period is";?></textarea> </td>

</tr>
<?php }?>
</table><br>
<input type="submit" name="submit" value="submit"class="btn btn-secondary btn-lg btn-block">

<!-- GEt the patient id and the patient hkid in here and passed to the index2.phh-->

<?php  $pp; ?>
<?php  $hk; ?>

<?php $_SESSION['one'] = $pp;
$_SESSION['two'] = $hk; 
?>

<!-- GEt the patient id and the patient hkid in here and passed to the index2.phh-->

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script>


(function($, window, document, undefined){
	 
   $(".addSkip").click(function() {
  // row instance to use `find()` for the other input classes
  var $row = $(this).closest('tr');

  var date = new Date($row.find(".start_date").val()+" 0:00:00"),
    days = parseInt($row.find(".days").val(), 10);

  if (!isNaN(date.getTime())) {
    date.setDate(date.getDate() + days);

    $row.find(".end_date").val(date.toInputFormat());
  } else {
    alert("Invalid Date");
  }
});
       //From: http://stackoverflow.com/questions/3066586/get-string-in-yyyymmdd-format-from-js-date-object
    Date.prototype.toInputFormat = function() {
       var yyyy = this.getFullYear().toString();
       var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
       var dd  = this.getDate().toString();
       return yyyy + "-" + (mm[0]?mm:"0"+mm[0]) + "-" + (dd[0]?dd:"0"+dd[0]); // padding
    };
 })
(jQuery, this, document);
</script>

<script>
$(".addSkip").on('click', function() {
  var set = $(this).closest('tr').find('.end_date').val();
  if (set) {
    $(this).closest('tr').find('.url').each(function() {
      $(this).val($(this).attr("data-value") + set);
    })
  }
});
</script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
<!-- Save multiple record of data to mysql database (to 'patientvaccinedetail' table) at one submit button using for each loop-->
<?php 
// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST["submit"])){
    foreach ($_POST['patientid'] as $index => $patientid) {
        $data1 = mysql_real_escape_string($patientid);
		$data17= mysql_real_escape_string($_POST['patienthkid'][$index]);
		
		$data2 = mysql_real_escape_string($_POST['vaccineid'][$index]);
		$data3 = mysql_real_escape_string($_POST['vaccinename1'][$index]);
		$data4 = mysql_real_escape_string($_POST['vaccinename2'][$index]);
		$data5 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
        $data6 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
		$data7 = mysql_real_escape_string($_POST['nthinjection'][$index]);
	    $data8 = mysql_real_escape_string($_POST['date'][$index]);
	    $data9 = mysql_real_escape_string($_POST['nextdate'][$index]);
	    $data10 = mysql_real_escape_string($_POST['skip'][$index]);
	    $data11 = mysql_real_escape_string($_POST['language'][$index]);
	    $data16 = mysql_real_escape_string($_POST['smsorcall'][$index]);
	    $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		$data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
		$data14 = mysql_real_escape_string($_POST['engmessage'][$index]);
		$data15 = mysql_real_escape_string($_POST['status'][$index]);

        mysql_query("INSERT INTO patientvaccinedetail (patientid,patienthkid,vaccineid,vaccinename1,vaccinename2,vaccinename3, totalnoofinjection,nthinjection,date,nextdate,skip,language,smsorcall,traditionalmessage,simplifiedmessage,engmessage,status)
		VALUES ('$data1','$data17', '$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$data11','$data16','$data12','$data13','$data14','$data15')") or die(mysql_error());
    	header("Location: displaypatientalladd.php");
		}
        }
	// if the form hasn't been submitted, display the form
{//echo"aa" ;
}	
	  