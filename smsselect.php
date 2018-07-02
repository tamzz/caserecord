<?php session_start();?><!DOCTYPE HTML>
<html>
<head>
<title>Display all SMS active record   </title>
  <style>
  /*--Print only the table of the page--*/
   @media print
{
body * { visibility: hidden; }
.print * { visibility: visible; }
.print { position: absolute; top: 0px; left: 0px; }
}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
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
     <!-- <li class="nav-item">
        <a class="nav-link" href="index2.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
     
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
	  
	  
	  
	  <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> 	  	  
    </ul> 
  </div>
</nav>



 <section class="text-center">
    <br><br>
        <h4 align="left">&nbsp;&nbsp;Patient Injection Reminder -SMS </h4><hr>
		
		
		<?php //echo $_SESSION["getvaccine"];?>
<?php// echo $_SESSION["gethkid"];?>

		 
          <!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Reminder</button></a>-->
         <!-- <a href="guzzle.php"><button name="send" type="submit" class="btn btn-outline-secondary " style="color: black">Send SMS Reminder</button></a>-->

        </p>
      </div>
    </section>

<!-- Nav Bar -->
		

<?php
//******************************Format the date in PHP side************************************

// get the from date in the previous page(searcadte.php)
//then use strtotime() to convert to a timestamp
//use date ()to get it in your own format

// convert the String (UNIX timestamp) into a custom date format
$from= date("Y-n-j", strtotime($_POST['fromdate']) )."<br>"; // eg output :2017-7-1 
//echo $from;
$to = date("Y-n-j", strtotime($_POST['todate']) ); // eg output :2017-7-21
//echo $to;
?>
<div class="print">

<form action="" method="post" id="msgForm">
<table class="table table-hover" >
<tr> 
<th><input type="checkbox" id="checkAll"/></th>
 <th>Patient ID</th> 
<!--<th>Vaccine ID</th>--><th> Vaccine Name</th>
<th> Total</th> 
<th> Nth</th>
<!--<th>Previous Injection Date</th>-->
 <th>Coming Appt Date</th> 
 <!--<<th>Injection Skip<br>of Days </th>-->
<th>Message</th><th> Tel</th><th> Country Code</th>
</tr><?php
session_start();
include('connect-db.php');
//searchdate.php data (from date and to date submited which will be proceedd by this page

//******************************************Format the date in MYSQL side******************************

$result = mysql_query("SELECT patientvaccinedetail.id,patientvaccinedetail.patientid, patientvaccinedetail.vaccineid,
 patientvaccinedetail.vaccinename1,patientvaccinedetail.vaccinename2,patientvaccinedetail.vaccinename3,patientvaccinedetail.totalnoofinjection,
patientvaccinedetail.nthinjection,patientvaccinedetail.date,patientvaccinedetail.nextdate,patientvaccinedetail.skip,patientvaccinedetail.language, patientvaccinedetail.traditionalmessage, 
 patientvaccinedetail.engmessage,patientvaccinedetail.simplifiedmessage,patientvaccinedetail.language, patients.telMobile, patients.telMobileCountryCode, patients.id
FROM patientvaccinedetail

 JOIN patients ON patientvaccinedetail.patientid=patients.patientNo
 
  WHERE  (smsorcall ='SMS' OR smsorcall ='SMSEmail' OR smsorcall ='SMSEmailCall') AND status ='open' AND nextdate !=' '"); ?>
	  
	  <!--If no relevant record can be found in db, redirect user-->
	  <?php if (!mysql_num_rows($result)) {
    header('Location: smsnodb.php');
    exit;
}
		else{  ?>
	  
	  
<?php
// loop through results of database query, displaying them in the table
$specific = []; 
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {?>

<tr>

<td>
                   <input type="checkbox" class="checkbox" />
                </td>
						
 <td><?php echo $row['patientid'] ?></td>
 <!--<td><input class="form-control" type="text"  name="vaccineid[]" style="border: none" value="<?php echo $row['vaccineid'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="treatmentname1[]" style="border: none" value="<?php echo $row['vaccinename1'] ?>"></td>-->
 
 <td><?php 
			   
			   if($row['language'] == '繁體') 
			   {echo $row['vaccinename1'];}
		   
               else if($row['language'] == 'ENG')
              {echo $row['vaccinename3'];}
		  
		       else if($row['language'] == '简体')
              {echo $row['vaccinename2'];}

               ?></td>
			   
 <td><?php echo $row['totalnoofinjection'] ?></td>
 
 <td><?php echo $row['nthinjection'] ?></td>
 
<!-- <td><input class="form-control" type="text" name="date[]" style="border: none" value="<?php echo $row['date'] ?>"></td>-->
 <td><?php echo $row['nextdate'] ?></td>
<!--<td><input class="form-control" type="text"  name="skip[]" style="border: none" value="<?php echo $row['skip'] ?>"></td>-->
 <td width="200px" class="msg">
 <?php if($row['language'] == '繁體')
     {
     echo  $row['traditionalmessage'];}
 
     else if($row['language'] == 'ENG')
     {
     echo $row['engmessage'];}
	 
	  else if($row['language'] == '简体')
     {
     echo  $row['simplifiedmessage'];} ?></td>
	 
	 	  
	 <!--****************Get the senderid (aka userid) from the COOKIE ['Token']
	 and use session to get the patientid*************-->
	 
	 
	 
	 <?php $json =  $_COOKIE["Token"];
// 
//for testing purposecho
//echo $json;?>

<!--User ID:-->
<?php $obj2 = json_decode($json, true );

 $userid = $obj2["accessRight"]["userid"];
 //echo $userid;?>
  
  
  <!--Clinic ID-->
  <?php $obj2 = json_decode($json, true );

 $clinicid= $obj2["clinicID"];
  //echo $clinicid;
  
  ?>
  
  
<!--<br>Receiver ID-->
	<?php  //echo $_SESSION["receiverid"];?>
	 
<!--=========================================================-->	

 <td class='receiverID' style="display:none;"><?php echo $row['id'] ?></td>

 <td class='phone'><?php echo $row['telMobile'] ?></td>
 
 
 <td class='countryCode'><?php echo $row['telMobileCountryCode'] ?></td>
 
  <td class='clinicid' style="display:none;"><?php echo $clinicid ?></td>

<!--**********Turn the array retrieved from mysql to an array with our desired name*******************-->

<?php


    if($row['language'] == '繁體')
		   
     {
      $specific[] = ["receiverID" => $_SESSION["receiverid"],
                     "countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["traditionalmessage"],
					 "senderID" =>$userid,
					 "clinicID" =>$clinicid
		
		
	 ];}
	 	  
	  else if($row['language'] == '简体')
     {
      $specific[] = ["receiverID" => $_SESSION["receiverid"],
	                 "countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["simplifiedmessage"],
					 "senderID" =>$userid,
					 "clinicID" =>$clinicid
					 
	 ];}
	 
	 else if($row['language'] == 'ENG')
     {
      $specific[] = ["receiverID" => $_SESSION["receiverid"],
	                 "countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" =>$row["engmessage"],
					 "senderID" =>$userid,
					 "clinicID" =>$clinicid
					 				 
	 ];}
}

//End of while loop

//**********Convert the array into json*******************
$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
//To remove the square bracket of the JSON 
$result1 = trim($result,'[]');


//echo $result1;
//$_SESSION['hi'] = "$result1";
//echo $result1;
echo "</tr>";
echo "</table>";?>

  <input type="hidden" id="jsonMsgs" name="jsonMsgs" />
  <input id="btn" type="button"  value="ok">
	
  <a href="guzzle.php"><input type="button"  value="send"></a>
	
<?php echo "</form>";?>

  <!-- /close the if/else statement -->
				<?php ;} ?>
	
	
	
	<?php     
$json = $_POST["jsonMsgs"];

//==============*************************the JSON object that selected by user*****************=================
//$json is the JSON with a big array and multiple object
//echo $json;





$_SESSION['hi'] = "$json";

$json2 = trim($json,'[]');

echo $json2;

$_SESSION['hi2'] = "$json2";

//testing
echo $_SESSION['hi2'];



//var_dump(json_decode($json));

$testing =(json_decode($json));

$data = json_decode($json, true);

//foreach($data as $ind) {
//    echo $ind['phone'] . "<br/>";
 //   echo $ind['message'] . "<br/>";
//}


?>

</div></div>

<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>-->
<!--<a href="search.php"><button  class="btn btn-outline-primary">Back to Search Page</button></a>
<a href="index.php"><button  class="btn btn-outline-primary">Back to Home</button></a>-->
  <!--  <input type="button" class="btn btn-outline-primary" name="print" value="Print the record" id="print">-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
$('#print').click(function() {
        window.print();
      });

</script>

<script>
 $(document).ready(function () {
        var jsonObj = [];

        $("#btn").on("click", function () {
            var result = $("tr:has(:checked)");

            if (result.length < 1) {
                alert("Please Select");
            } 
			
			else {
                console.log(result);
            }

            $.each( result, function(key, value) {
				 var field1 = $(this).find('td.receiverID').text();
				 var field2 = $(this).find('td.countryCode').text();
				 
                var field3 = $(this).find('td.phone').text();
                var field4 = $(this).find('td.msg').text();
                var field5 = $(this).find('td.clinicid').text();
              
			  
                var item = {};
				item["receiverID"] = field1;
				item["countryCode"] = field2;
                item["phone"] = field3;
                item["message"] = field4;
                item["clinicid"] = field5;

                jsonObj.push(item);
            });
			
            console.log(jsonObj);
			
            //alert(JSON.stringify(jsonObj));

            $("#jsonMsgs").val(JSON.stringify(jsonObj));
            $("#msgForm").submit();
        });
    });   

</script>	


<!--checked /unchecked all checkbox-->
<script>
  
  $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
  
  
  </script>


</div>
</div>
</body>
</html>