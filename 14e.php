<?php session_start();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<h1><title>Patient Vaccine Call Reminder (14 Days) </title></h1>
<style> 
@media print
{
body * { visibility: hidden; }
.div2 * { visibility: visible; }
.div2 { position: absolute; top: 0px; left: 0px; }
}
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
  
 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->


    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/ead802b541.js"></script>
</style>
		<script src="https://use.fontawesome.com/ead802b541.js"></script>

</head>
<body>
<!-- Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;"> 
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h3>Vaccine Management</h3></a>
 

 <?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item">
        <a class="nav-link" href="index.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
     
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
	  <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p> | <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> 	  
	  
    </ul> 
  </div>
</nav>
		<!-- Nav Bar -->
		
		
		<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                        
						
                                <div class="content"> 
			  

        <section class="text-center">
        <br><br>
        <h4 align="left">Patient Injection Reminder (14 Days)</h4><hr><br>
		<p>Please call the following patients to remind them of their coming vaccine appointment </p>
		<input type="button" name="print" class="btn btn-outline-secondary" style="color: black"  value="Print" id="print">
        <br></p></div>
        </section>

<form action="" method="POST">

<div class="div2">
<table class=" table table-hover" align="center"  cellpadding='20'>

<tr> 
<th>ID</th> <th>Patient ID</th>  
<!--<th>Total Vaccine No</th> <th>Nth Vaccine</th>-->
 <th>Patient Name</th><th>Vaccine Name</th> <th>Next Injection Date</th> 
<!--<th>Message</th>--><th>Contact No</th><th>Country Code</th>
</tr>
<?php
session_start();
/*VIEW.PHP Displays all data from 'players' table*/
// connect to the database
include('connect-db.php');
// get results from database

//==*****************The order of the table.column name doesn't matter***************==================
//==*****************Make sure if you want to show data from certain db column, include them here in the select statement**************==================

$result = mysql_query("SELECT patientvaccinedetail.id,patientvaccinedetail.patientid,patients.surName,patients.givenName,
patients.chineseSurName,patients.chineseGivenName, patientvaccinedetail.vaccinename3,patientvaccinedetail.vaccinename2,patientvaccinedetail.vaccinename1,
patientvaccinedetail.totalnoofinjection,patientvaccinedetail.nthinjection,patientvaccinedetail.nextdate,patientvaccinedetail.language, patientvaccinedetail.traditionalmessage, 
 patientvaccinedetail.engmessage,patientvaccinedetail.simplifiedmessage, patients.telMobile, patients.telMobileCountryCode
FROM patientvaccinedetail
 JOIN patients ON patientvaccinedetail.patientid=patients.patientNo
WHERE DATEDIFF(NOW(), nextdate) = -14 AND (language ='繁體' OR language ='ENG' OR language ='简体') AND smsorcall = 'Call'");?>
<?php
// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {?>

<tr>

 <td><input class="form-control" type="text" size="1" name="id[]" style="border: none" value="<?php echo $row['id'] ?>"></td>
 <td><input class="form-control" type="text" size="1" name="patientid[]" style="border: none" value="<?php echo $row['patientid'] ?>"></td>
 <!--<td><input class="form-control" type="text" size="1" name="treatmentid[]" style="border: none" value="<?php echo $row['vaccineid'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="totalnooftreatment[]" style="border: none" value="<?php echo $row['totalnooftreatment'] ?>"></td>
 <td><input class="form-control" type="text" size="1" name="nthtreatment[]" style="border: none" value="<?php echo $row['nthinjection'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="date[]" style="border: none" value="<?php echo $row['date'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="skip[]" style="border: none" value="<?php echo $row['skip'] ?>"></td>-->
 
 
 
 <!-- *********Language of the Name of the patient will be shown according to their preferred language************* -->
 
              <td><input class="form-control" type="text" size="15" name="patientname[]"  style="border: none" 
              value="<?php 
			  if($row['language'] == '繁體') 
			  {echo $row['chineseSurName']." ". $row['chineseGivenName'];}
  
              else if($row['language'] == 'ENG')
              {
              echo  $row['surName']." ". $row['givenName'];}

              else if($row['language'] == '简体')
              {
              echo  $row['chineseSurName']." ".$row['chineseGivenName'];}


			  ?>"></td>
 
 <!-- *********Language of the Name of the Vaccine will be shown according to patient preferred language************* -->


               <td><input class="form-control" type="text" size="15" name="vaccinename[]" style="border: none" 
               value="<?php 
			   
			   if($row['language'] == '繁體') 
			   {echo $row['vaccinename1'];}

               else if($row['language'] == 'ENG')
              {echo $row['vaccinename3'];}
		  
		       else if($row['language'] == '简体')
              {echo $row['vaccinename2'];}

               ?>"></td>

 
 <td><input class="form-control" type="text" size="1" name="nextdate[]" style="border: none" value="<?php echo $row['nextdate'] ?>"></td>

 <!-- *********Language of the Message will be shown according to patient preferred language************* -->
 <!--<td width="200px">
 <textarea name="msg"><?php if($row['language'] == '繁體')
     {
     echo  $row['traditionalmessage'];}
 
     else if($row['language'] == 'ENG')
     {
     echo $row['engmessage'];}
	 
	  else if($row['language'] == '简体')
     {
     echo  $row['simplifiedmessage'];} ?> </textarea>
	 </td>-->

    <?php 

 //echo '<td width="200px">' . $row['traditionalmessage']. '</td>';}

echo '<td>' . $row['telMobile'] . '</td>';
echo '<td>' . $row['telMobileCountryCode'] . '</td>';

//**********Turn the array retrieved from mysql to an array with our desired name*******************
       if($row['language'] == '繁體')
     {
      $specific[] = ["countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["traditionalmessage"]
				 
	 ];}
	  
	  else if($row['language'] == '简体')
     {
      $specific[] = ["countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["simplifiedmessage"]
					 
	 ];}
	 
	 else if($row['language'] == 'ENG')
     {
      $specific[] = ["countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["engmessage"]
					 
	 ];}
}
//End of while loop
//**********Convert the array into json*******************
$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
//To remove the square bracket of the JSON 
$result1 = trim($result,'[]');

//echo $result1;
$_SESSION['hii'] = "$result1";
//echo $result1;
echo "</tr>";
echo "</table>";echo "</form>";

?>
<br><br>
<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
$('#print').click(function() {
        window.print();
      });
</script>
</div>
</div>

  <!-- Close the wrapper-->
	  
	 </div>
                            </div>
                        </main>   
                   </div> 	
              </div>
        </div>  
		
</body>
</html>