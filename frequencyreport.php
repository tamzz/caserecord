<?php session_start();
ob_start();?><!DOCTYPE HTML">
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<title>個人頻率報告</title>
  <style>
  /*--Print only the table of the page--*/
   @media print
{
body * { visibility: hidden; }
.print * { visibility: visible; }
.print { position: absolute; top: 0px; left: 0px; }
}
 
</style>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" />
 <!-- Bootstrap core CSS -->
<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<script src="https://use.fontawesome.com/ead802b541.js"></script>
</head>
<body>

<!-- start of navigation bar -->
<?php include ('header.php');?>

<!-- end of navigations bar -->
 <section class="text-center">
<br><br>
<h5 align="left">&nbsp;&nbsp;個人頻率報告</h5><hr>
				
<?php //echo $_SESSION["getvaccine"];?>
<?php// echo $_SESSION["gethkid"];?>
<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Reminder</button></a>
<a href="guzzle.php"><button name="send" type="submit" class="btn btn-outline-secondary" style="color: black">Se</button></a>-->
</p></div></section>
<?php
//******************************Format the date in PHP side************************************
// get the from date in the previous page(searchdate.php)
//then use strtotime() to convert to a timestamp
//use date ()to get it in your own format

// convert the String (UNIX timestamp) into a custom date format
$from= date("Y-n-j", strtotime($_POST['fromdate']) )."<br>"; // eg output :2017-7-1 
//echo $from;
$to = date("Y-n-j", strtotime($_POST['todate']) );// eg output:2017-7-21
//echo $to;


//retrieve the status000 and convert to integer
$status000 =  $_POST['status000'];
$int = intval($status000);
$namequery =  $_POST['namequery'];
?>

<div class="print">
<div class="container">       
<div class="row marketing">
<div class="col-sm-12 col-xs-6">
</div></div>
<table class="table table-hover" align="center" >
<tr> 
 <th>&nbsp;&nbsp;客戶</th> <th>案件 </th><th>見面日期 </th> <th>電話</th> <th></th>
</tr>
<?php
session_start();
include('connect-db.php');

//searchdate.php data (from date and to date submited which will be proceedd by this page

//*****Format the date in MYSQL side********
$result = mysql_query ("SELECT * FROM patientvaccinedetail
  WHERE str_to_date(date, '%Y-%m-%d') 
  BETWEEN str_to_date('$from','%Y-%m-%d' ) AND  str_to_date('$to','%Y-%m-%d') 
  AND (chinesename = '" . $_POST['namequery']."')
  Group by unique2")?>
 
<?php 
//no of row
$number=mysql_num_rows($result);?>
	
<!--If no relevant record can be found in db, redirect user-->	
<?php
 if (!mysql_num_rows($result)) {
   // ****must use ob_start(); beforehead****
   header('Location: noreport.php');
   exit;
	//echo "Sorry. No relevant record could be found in the database";
	//echo "<br/>";
	//echo "<a href='report.php'>" .  "Please try again" . "</a>";
}

else{   ?>
<?php
// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {
?>
<tr>
<!--<td width="18%">&nbsp;&nbsp;<a href="searchclient3.php?vaccineid=<?php echo "$row[vaccineid]";?>&clientid=<?php echo "$row[patientid]"; ?>"><?php echo $row['chinesename']; ?></a></td>	-->		   

<!--show total no of record-->
<?php $_SESSION ['totalnoofrecord'] = $number;?>
<td width="20%">&nbsp;&nbsp;<a href="searchclient3.php?vaccineid=<?php echo "$row[vaccineid]";?>&clientid=<?php echo "$row[patientid]"; ?>"><?php echo $row['chinesename']; ?></a></td>			   
			   
<td width="20%"><?php echo $row['vaccinename1'] ?></td>

 <td width="20%"><?php echo $row['date'] ?></td>
 <td width="20%"><?php echo $row['callno'] ?></td>
 
 
<!--****************Get the senderid (aka userid) from the COOKIE ['Token']
	 and use session to get the patientid from cms generate token*************-->
<?php $json =  $_COOKIE["Token"];
	 
//for testing 
//echo $json;?>
<!--User ID:-->

<?php $obj2 = json_decode($json, true );
 $userid = $obj2["accessRight"]["userid"];
?>
<!--Clinic ID-->
<?php $obj2 = json_decode($json, true );

$clinicid= $obj2["clinicID"];
//echo $clinicid;
?> 
<!--<br>Receiver ID-->
<?php  //echo $_SESSION["receiverid"];?>
	 
<!--=========================================================-->	
 <?php 

//**********Turn the array retrieved from mysql to an array with our desired name*******************
       if($row['language'] == '繁體')
		   
     {
      $specific[] = ["receiverID" => $row["id0000"],
                     "countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
					 "message" =>$row["traditionalmessage"],
					 "senderID" =>$userid,
					 "clinicID" =>$clinicid
				 
	 ];}
	 	 
	 else if($row['language'] == '简体')
     {
      $specific[] = ["receiverID" => $row["id0000"],
	                 "countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
					 "message" =>$row["simplifiedmessage"],
					 "senderID" =>$userid,
					 "clinicID" =>$clinicid
					 
	 ];}
	 
	 else if($row['language'] == 'ENG')
     {
      $specific[] = ["receiverID" => $row["id0000"],
	                 "countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
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
$_SESSION['hi2'] = "$result1";
//echo $result1;
echo "</tr>";
echo "</table>";
echo "<hr>";
echo "案件總數 :" .$_SESSION ['totalnoofrecord'];
echo "</form>";?>

  <!-- /close the if/else statement -->
				<?php ;} ?>				
</div></div>

<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>-->
<!--<a href="search.php"><button  class="btn btn-outline-primary">Back to Search Page</button></a>
<a href="index.php"><button  class="btn btn-outline-primary">Back to Home</button></a>-->
   <!-- <input type="button" class="btn btn-outline-primary" name="print" value="Print the record" id="print">-->
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
</body>
</html>