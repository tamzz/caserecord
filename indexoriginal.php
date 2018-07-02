<?php session_start();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     
    <title>Vaccine Start page </title>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/ead802b541.js"></script>

   </head>
    <body>
	
<div class="navbar-wrapper" role="group">
  <nav class=" navbar-default navbar-fixed-top" role="navigation" id="top-nav" >
         <a href="#" onclick="menuActive(this);" class="logo navbar-brand"><b>Case- <blue>Management</blue></b></a> 
    <div class="collapse navbar-collapse" id="top_menu">
    <ul class="nav navbar-nav" id="main_menu">  
    
    </div>
    </ul>
  </nav>
   
    <?php 
      //*****Retrieve the client's hkid/phone no from user.php,store it in session/*****
	  ///*****so it can be access throughtout the vaccine program/*****
         
	  
         $patientido = $_POST["user"];
		 $_SESSION["clientid"] = $patientido;
		 
		 echo  $_SESSION["clientid"] ;

?>
<!--USe client's hkid/phone no to search for client's personal info(ie. gender,phone no ,email etc) in the clients-->
<!--store the reuslt in session respectively so can be access across the page later-->

<table class="table-sm" align="left" border='0' cellpadding='10'

<?php

include('connect-db.php');


$result = mysql_query("SELECT *FROM patients
WHERE patienthkid = '" . $_SESSION['clientid'] . "'");?>

<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) { ?>
<tr>
<td><?php echo $row['patientNo'] ?></td>
<td><?php echo $row['patienthkid'] ?></td>
<td><?php echo $row['patientnamee'] ?></td>
<td><?php echo $row['patientnamec'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['contactno'] ?></td>
<td><?php echo $row['email'] ?></td>
 
<?php //assign a session variable for client hkid, chinese name, eng name,as well as the other identification

$_SESSION["clientno"] = $row['patientNo'];
$_SESSION["clientchinesename"] = $row['patientnamec'];
$_SESSION["clientengname"] = $row['patientnamee'];
$_SESSION["clientcontactno"] = $row['contactno'];
$_SESSION["clientemail"] = $row['email'];

?>
 <?php } ?>
</tr> 

</table> 

<?php //testing purpose
echo $_SESSION["clientno"] ;
echo $_SESSION["clientchinesename"] ;
echo $_SESSION["clientengname"] ;
echo $_SESSION["clientcontactno"] ;

?>

<?php 
      //Retrieve the patientid from cms
      //put it in the session, so it can be access throughtout the vaccine program
             
		//assign session variable to the patientid and patient hkid
         
       // $_SESSION["getvaccine"] = $patientid;
		
		
       // $_SESSION["gethkid"] = $patienthkid;
       
	   
?>


<!--*****************Get patient data via API (CMS Version)***************-->

<div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                            <div class="container">
						
										
            <div class="content"> 

           <div class="container text-center"><br><br><br>
           <h3 class="display-4">  Case Management </h3><hr>
              </div>
			  <br><br> <br><br><br>

              <div class="container" style="max-width:1080px;">
                <div class="col-lg-12">
        	      <div class="row">
                 
                  <!--Patient Injection Record-->
                    <div class="col-md-4 col-sm-4 mb">
                      <a href="displaypatientall.php">
                      <div class="modules_div pn">
                         
                          <div class="card-box">
                           <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5 style="color: black"> Case Record<br>&nbsp; </h5>
                          </div>
                        </div>
                      </a>
                    </div>

                                
                  <!--Vaccine TYpe list -->
                    <div class="col-md-4 col-sm-4 mb">
                      <a href="typesearch.php">
                        <div class="modules_div pn">
                          <div class="card-box">
                           <i class="fa fa-list fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5 style="color: black">Case Type List <br>&nbsp;</h5>
                          </div>
                        </div>
                      </a>
                    </div>
						
                    <div class="col-md-4 col-sm-4 mb">
                      <a href="messagetime.php">
                        <div class="modules_div pn">
                          <div class="card-box">
                           <i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5 style="color: black">Case Reminder<br>&nbsp;</h5>
                          </div>
                        </div>
                      </a>
                    </div>

                  </div><!--End col-12-->
                </div><!--End Row-->
        	

        		  </div> <!--End Container-->
          </div> <!--End Content-->
        </div>
      </main>
    </div>
	<!--this is a comment-->
<!--*************** Get patient hkid , name via api and stored in session **************************-->
<?php 

?><hr>

<br><br><br><br><br><br>


<?php require 'vendor/autoload.php';

$json =  $_COOKIE["Token"];
//echo $json;

$obj2 = json_decode($json, true );
 // $token contain the value of token  
  $token = $obj2["token"];
  //echo $token;
  echo "<hr>";
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

$client = new Client([
    'headers' => ['Content-Type' => 'application/json',
     'Token' => $token]
]);

$response = $client->get('http://mmm.clinictech.com.hk:91/Patient/' . $_SESSION["receiverid"]
    //['body' => $_SESSION['hi2']]
);



//echo  var_export($response->getStatusCode(), true);

$json00 =  $response->getBody()->getContents();



$srray = json_decode($json00,true);

//var_dump($srray);





//*********************GET Patient HKID  in the patient table via API *********************************************************
$hkid =  $srray["Data"]["officialIDNO"];
//echo $hkid;
$_SESSION["hkid0"] = $hkid;
//echo $_SESSION["hkid0"];

//**********************GET Patient englishname  via API***********************************************

$ename =  $srray["Data"]["surName"]." ".$srray["Data"]["givenName"];
//echo $ename;
$_SESSION["ename0"] = $ename;
//echo $_SESSION["ename0"];

//**********************GET Patient chinname  via API***************************************************
$cname = $srray["Data"]["chineseSurName"]." ".$srray["Data"]["chineseGivenName"];
//echo $cname;
$_SESSION["cname"] = $cname;
//echo $_SESSION["cname"];


//**********************GET Patient email  via API***************************************************
$email=  $srray["Data"]["email"];
//echo $email;
$_SESSION["email0"] = $email;
//echo $_SESSION["email0"];

//**********************GET Patient telMobile   via API***************************************************
$telMobile=  $srray["Data"]["telMobile"];
//echo $telMobile;
$_SESSION["telMobile0"] = $telMobile;
//echo $_SESSION["telMobile0"];


//**********************GET Patient telMobileCountryCode   via API***************************************************
$telMobileCountryCode=  $srray["Data"]["telMobileCountryCode"];
//echo $telMobileCountryCode;
$_SESSION["telMobileCountryCode0"] = $telMobileCountryCode;
//echo $_SESSION["telMobileCountryCode0"];



//**********************GET Patient id   via API***************************************************
$id=  $srray["Data"]["id"];
//echo $id;
$_SESSION["id0000"] = $id;
//echo $_SESSION["id0000"];





//$json000 = json_decode($json00, true );
//echo $json000;

//echo  var_export($response->getBody()->getContents(), true);
//header("location: smsredirect.php");?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
