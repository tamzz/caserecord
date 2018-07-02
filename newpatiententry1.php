<?php ob_start(); ?><?php session_start();?><!Doctype html>

<html>
<!-- ************ Retrieve data from casedetail table and save it back to the patientcasedetail table**********-->
<head><title>新案件</title>
<style> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
  
 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/ead802b541.js"></script>
</head>
<body>


<!--******generate unique random no that dont repeat with cross checking db value *************--> 
<!--****** so each case per person will have a unique no *************** for frequency report-->
<?php
include('connect-db.php');


//**********The order of the table.column name doesn't matter***************===
//************Make sure if you want to show data from certain db column, include them here in the select statement**
$result = mysql_query("SELECT random_num
FROM (
  SELECT FLOOR(RAND() * 9999999) AS random_num
) AS numbers_mst_plus_1
WHERE random_num NOT IN (SELECT unique2 FROM patientvaccinedetail WHERE unique2 IS NOT NULL)
LIMIT 1");?>

<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<tr>
<td><?php  $row['random_num'] ?></td>

<td> <?php $_SESSION['uniqueno000'] = $row['random_num'];?></td>

<?php } ?>
</tr>

<!--******generate unique random no that dont repeat with cross checking db value *************--> 
<!--****** so each case per person will have a unique no *************** for frequency report-->
<!-- Nav Bar -->
<?php include ('header.php');?>
		<!-- Nav Bar -->		
<!-- The Wrapper box that wrap the whole main content-->
<div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
<main id="page-content-wrapper" role="main" >
                            						
<div class="content"> <br>
  
<h4 align="left" >新案件</h4><hr>
<!--(input the injection date)<br>
or to customize the messgae-->

<a href="javascript:history.go(-1)"><img src="images/backback.png" alt="back button" width="32px"></a><br><br>	
<!--====Pass the values in the previous page(newpatient1.php to this page using $_SESSION-->
<?php 
//patientid
//$pp = $_SESSION['clientno'];
//echo $pp;
//get the session variable of vaccineid
$vv = $_SESSION['varname50'];
//echo $vv;
//get the session variable of language
$ll = $_SESSION['language'];
//echo $ll;
//hkid
//$hk = $_SESSION['clientid'];
//echo $hk;
$smsorcall = $_SESSION['smsorcall'];
//echo $smsorcall;


//********************display multiple values from the select dropdown using php $_SESSION *****************

//$smsorcall is the array containing all the data

$smsorcall = $_SESSION['smsorcall'];

//as it's an array,to get all the data need to loop them out
 foreach($smsorcall AS $index => $option ) {
  // echo $option;
		 		 
}
	
?>
		
<!--On top of the table, display the chosen vaccine name from previous page-->	 
<table>  
<?php
include('connect-db.php');
$result = mysql_query("SELECT *FROM casedetail WHERE vaccineid = '$vv' GROUP BY vaccinename3 ");?>
<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<tr>
<td><?php //echo $row['vaccinename3'] ?></td>
<?php //echo $row['vaccinename3'];
 $_SESSION['vaccinename3'] = $row['vaccinename3'];
//echo $_SESSION['vaccinename3'];
 ?>
 <?php } ?>
 </tr>
 </table>   
<!--Display the patient name with reference to the patientno from previous page--> 
<table class="table-sm" align="left" border='0' cellpadding='10' >

<?php
//include('connect-db.php');
//$result = mysql_query("SELECT *FROM patients
//WHERE patientNo = '$pp' GROUP BY patientNo ");?>
<?php
//while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<tr>
<?php 
  
 
/*   Hide for now*/
/*********Below is mainly for getting client personal info from the patients table
ALready did so in the indexoriginal.php so no longer need to do this here again ********/

 //$_SESSION['surName'] = $row['surName'];
// $_SESSION['givenName'] = $row['givenName'];
 //$_SESSION['chineseSurName'] = $row['chineseSurName'];
 //$_SESSION['chineseGivenName'] = $row['chineseGivenName'];
 
 //Display the patient info above the table
  //echo $_SESSION['getvaccine']. "&nbsp;&nbsp;";

 
  // echo $_SESSION["ename0"]. "&nbsp;&nbsp;";
   // echo $_SESSION["cname"]. "&nbsp;&nbsp; &nbsp;&nbsp;";
	 //echo $_SESSION["hkid0"];
	 
 //echo $_SESSION['vaccinename3'];
 ?>
 
 <?php //} ?>
 
 </tr>
 </table>
	
	
<form action="" method="post">
<table class="table" align="center"  cellpadding='10' id="myTable">
<!--
<th>&nbsp;&nbsp;Patient ID</th>
<th>&nbsp;&nbsp;HKID/Other ID</th><th>&nbsp;&nbsp;Vaccine ID</th>
<!--<th> 疫苗名稱 (繁體): </th><th> 疫苗名称 (简体) </th>
<th>&nbsp;&nbsp;Vaccine Name</th>-->
<th>&nbsp;&nbsp;總數</th> <th>&nbsp;&nbsp;Nth </th> <th>&nbsp;&nbsp;規劃<br></th>
<th>日期 </th><th>下次見面日期</th><th>&nbsp;&nbsp;間隔<br>&nbsp;&nbsp;</th>

<!--<th>信息(繁體)</th><th>信息(简体)</th><th>Message(Eng)</th>-->
<?php
// connect to the database
ob_start();
include('connect-db.php');

// *****get results from database (from the table 'casedetail'), only show the vaccination record that match the vaccine type user has selected in the previous page******

$sql = "SELECT * FROM casedetail WHERE vaccineid  = '". $_SESSION['caseid']."'";
$result = mysql_query($sql)or die(mysql_error());
?>
<!-- **************************display data in editabel table with both data from the previous pages using $_SESSION
AND data from Mysql table*****************************************************-->
<!-- loop through results of database query, displaying them in the table-->
<?php ob_start();?><?php while($row = mysql_fetch_array( $result )){?>

<!--echo out the contents of EACH row into a table-->
<tr>
<td><input type="text" class="form-control" style="border: none" size="15" name = "totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>
<td><input type="text" class="form-control" style="border: none" size="15" name = "nthinjection[]" value="<?php echo $row['nthinjection'] ?>"></td>
<td><input type="text" class="form-control" style="border: none" size="25" name = "price[]" value="<?php echo $row['price'] ?>"></td>

<td><input type="date" width="50px" class="start_date" name="date[]" value="g"> </td>
			  			  		  
<td><input type="text"  size="8" name="nextdate[]" class="end_date" ></td>
 <td><input type="text" style="border: none" size="4" name="skip[]" class="form-control days" value="<?php echo $row['skip'] ?>"></td>
              
<!--Appointment logo-->
			  
<!--<td><a href="http://mmm.clinictech.com.hk:90/#/Appointment"><i class="fa fa-calendar" aria-hidden="true"></i></a></td>-->
			  
<!--Hidden record that will be saved to db, just not shown on the page-->
<!--<td><input type="text" class="form-control" size="8" style="border: none" name = "patientid[]" value="<?php echo $_SESSION["clientno"]; ?>"></td>-->

<td><input type="text"  size="8"  name = "uniqueno[]" value="<?php echo $_SESSION["uniqueno000"]; ?>"></td>

<td><input type="hidden"  size="8"  name = "source[]" value="<?php echo $_SESSION["source"]; ?>"></td>
<td><input type="hidden"  size="8"  name = "nature[]" value="<?php echo $_SESSION["nature"]; ?>"></td>
<td><input type="hidden"  size="8"  name = "casetypeid[]" value="<?php echo $_SESSION["casetypeid"]; ?>"></td>

<td><input type="hidden"  size="7"  name = "caseid[]"  value="<?php echo $_SESSION["caseid"];?>"></td>

<td><input type="hidden"  size="8"  name = "patientid[]" value="<?php echo $_SESSION["patientNo333"]; ?>"></td>
<td><input type="hidden"  size="12"   name = "patienthkid[]" value="<?php echo $_SESSION["clienthkid333"]; ?>"></td>
<td><input type="hidden"  size="12"   name = "chinesename[]" value="<?php echo $_SESSION["clientnamec333"]; ?>"></td>
<td><input type="hidden"  size="12"   name = "engname[]" value="<?php echo $_SESSION["clientnamee333"]; ?>"></td>
<td><input type="hidden"  style="border: none" name = "vaccinename3[]" value="<?php echo $row['vaccinename3'] ?>"></td>

<td><input type="hidden"  style="border: none" name = "vaccinename1[]" value="<?php echo $row['vaccinename1'] ?>"></td>
<td><input type="hidden"  style="border: none" name = "vaccinename2[]" value="<?php echo $row['vaccinename2'] ?>"></td>
<td><input type="hidden"  size="3" style="border: none"  name = "language[]" value="<?php echo $ll; ?>"></td>
<td><input type="hidden"  size="3" style="border: none"  name = "smsorcall[]" 
value="<?php $smsorcall = $_SESSION['smsorcall'];
  foreach($smsorcall AS $index => $option ) {
    echo $option;
    }
	
 ?>"></td>
 
<td><textarea rows="3" class="url" cols="20" style="display:none;"   name="traditionalmessage[]" data-value="<?php echo $row['vaccinename1']."\n下一次見面為:";?>"><?php echo $row['vaccinename1']."\n下一次見面為";?></textarea> </td>
<td><textarea rows="3" class="url" cols="20"  style="display:none;" name="simplifiedmessage[]" data-value="<?php echo $row['vaccinename2']."\n下一次见面为:";?>" ><?php echo $row['vaccinename2']."\n下一次见面为";?></textarea> </td>
<td><textarea rows="3" class="url" cols="20" style="display:none;"   name="engmessage[]" data-value="<?php echo $row['vaccinename3']."\nNext meeting will be:";?>"><?php echo $row['vaccinename3']."\nNext meeting will be:";?></textarea> </td>

<td><input type="hidden" size="3"   name = "status[]" value="open"></td>
<td><input type="hidden" name="callno[]"   value="<?php echo $_SESSION["clientcontactno333"] ;?>"></td>
		<td><input type="hidden"  name="countrycode[]"   value="852"></td>
		<td><input type="hidden"  name="email[]"   value="<?php echo $_SESSION["clientemail333"] ;?>"></td>
		 
		<!--by default, the completed field in db will be ongoing-->
		<td><input type="hidden"  name="ongoing[]" value="ongoing"></td>
		
		<!--by default, the done  field in db will be nil-->
		<td><input type="hidden"  name="done[]" value="nil"></td>
		
		<!--For CMS SMS log to record SMS sent by specfic user, Hide for now-->
		<!--<td><input type="text" class="form-control" name="id0000[]"   value="<?php //echo $_SESSION["id0000"] ;?>"></td>-->			
</tr>
<?php }?>
</table><br>
 
<input type="submit" name="submit" value="submit"class="btn btn-secondary btn-lg btn-block">
<a href="searchclient2.php?clientid=<?php echo "$row[patientNo]";?>"><?php echo $row['patientNo'];?></a>

<!-- GEt the patient id and the patient hkid in here and passed to the index2.php-->

<!-- Close the wrapper-->
</div>

          </div>
           </main>   
           </div> 	
         </div>
        </div>  
	
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
		
    $('input.start_date, input.days').on('change', function () {
 var $row = $(this).closest('tr');
 var start = $row.find('.start_date').val();
 
 if (!isNaN($row.find(".days").val()) && start) {

	 
	   //  date = new Date($start.val()+" 0:00:00"),
   var set = new Date(start+" 0:00:00");
   set.setDate(set.getDate() + Number($row.find(".days").val()));
   $row.find(".end_date").val([set.getFullYear(), set.getMonth() + 1,set.getDate()].join('-'));
   var dt = set.getFullYear() + "-" + ("0" + (set.getMonth() + 1)).slice(-2) + "-" + ("0" + set.getDate()).slice(-2);
     
   $row.next('tr').find('.start_date').attr('value', dt).trigger('change');
 }  
});

 </script>	
 
 <script>
$('input.start_date, input.days').on('change',function() {
        var set = $(this).closest('tr').find('.end_date').val();
       
          $(this).closest('tr').find('.url').each(function() {
            $(this).val($(this).attr("data-value") + set);
          })
        		      });
    </script>
</body>
</html>

<!-- Save multiple record of data to mysql database (to 'patientcasedetail' table) at one submit button using for each loop-->
<?php 
// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST["submit"])){
    foreach ($_POST['patientid'] as $index => $patientid) {
        $data1 = mysql_real_escape_string($patientid);
		$data17 = mysql_real_escape_string($_POST['patienthkid'][$index]);
		$data19 = mysql_real_escape_string($_POST['chinesename'][$index]);
		$data20 = mysql_real_escape_string($_POST['engname'][$index]);
		
		$data2 = mysql_real_escape_string($_POST['caseid'][$index]);
		$data3 = mysql_real_escape_string($_POST['vaccinename1'][$index]);
		//$data4 = mysql_real_escape_string($_POST['vaccinename2'][$index]);
		//$data5 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
        $data6 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
		$data7 = mysql_real_escape_string($_POST['nthinjection'][$index]);
		$data18 = mysql_real_escape_string($_POST['price'][$index]);
	    $data8 = mysql_real_escape_string($_POST['date'][$index]);
	    $data9 = mysql_real_escape_string($_POST['nextdate'][$index]);
	    $data10 = mysql_real_escape_string($_POST['skip'][$index]);
	    $data11 = mysql_real_escape_string($_POST['language'][$index]);
	    $data16 = mysql_real_escape_string($_POST['smsorcall'][$index]);
	    $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		//$data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
		//$data14 = mysql_real_escape_string($_POST['engmessage'][$index]);
		$data15 = mysql_real_escape_string($_POST['status'][$index]);
		
		$data21 = mysql_real_escape_string($_POST['callno'][$index]);
		$data22 = mysql_real_escape_string($_POST['countrycode'][$index]);
		$data23 = mysql_real_escape_string($_POST['email'][$index]);
		//$data24 = mysql_real_escape_string($_POST['id0000'][$index]);
		$data25 = mysql_real_escape_string($_POST['ongoing'][$index]);
		
		$data26 = mysql_real_escape_string($_POST['source'][$index]);
		$data27 = mysql_real_escape_string($_POST['casetypeid'][$index]);
		$data28 = mysql_real_escape_string($_POST['nature'][$index]);
		$data29 = mysql_real_escape_string($_POST['done'][$index]);
		$data30 = mysql_real_escape_string($_POST['uniqueno'][$index]);
		
        mysql_query("INSERT INTO patientvaccinedetail (patientid,patienthkid,chinesename,engname, source,casetypeid,nature,vaccineid,
		vaccinename1, totalnoofinjection,nthinjection,price,date,nextdate,skip,language,
		smsorcall,traditionalmessage,status,callno,countrycode,email,completed,done,unique2)
		VALUES ('$data1','$data17','$data19','$data20','$data26','$data27','$data28',  '$data2','$data3','$data6','$data7','$data18','$data8','$data9','$data10','$data11','$data16','$data12','$data15','$data21','$data22','$data23','$data25','$data29','$data30')") or die(mysql_error());
    	header("Location: searchclient.php");
		}
        }
	// if the form hasn't been submitted, display the form
{//echo"aa" ;
}	
	  