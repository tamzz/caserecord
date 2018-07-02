<?php session_start();
ob_start();?><!DOCTYPE HTML">
<html>
<head>
<title>來電提醒 </title>
  <style>
  /*--Print only the table of the page*/
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
<?php include ('header.php');?>

<!-- Nav Bar -->

 <section class="text-center">
    <br><br>
        <h4 align="left">&nbsp;&nbsp;&nbsp;&nbsp;來電提醒</h4><hr>
		
		
		<?php //echo $_SESSION["getvaccine"];?>
<?php// echo $_SESSION["gethkid"];?>

		 
          <!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Reminder</button></a>-->
		<input type="button" name="print" class="btn btn-outline-secondary" style="color: black" value="打印" id="print"><br>

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

<div class="container">
<table class="table table-hover" >
<tr> 

<!--<th>ID</th> <th>ID</th> --> 
<!--<th>Vaccine ID</th><th>Patient ID</th>-->
<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客戶</th> <th>案件 </th>
<!--<th>Previous Injection Date</th>-->
 <th>下次見面日期</th> <th>聯繫電話</th>

</tr><?php
session_start();
include('connect-db.php');
//searchdate.php data (from date and to date submited which will be proceedd by this page

//******************************************Format the date in MYSQL side******************************

$result = mysql_query("SELECT *
FROM patientvaccinedetail
 
WHERE str_to_date(nextdate, '%Y-%m-%d') 
BETWEEN str_to_date('$from','%Y-%m-%d' ) AND  str_to_date('$to','%Y-%m-%d') AND (smsorcall ='SMS' OR smsorcall ='SMSEmail' OR smsorcall ='SMSEmailCall') "); ?>
	  
	
<!--Unlike callall.php, in call2.php , in the where statement,
no need to add the status = open and nextdate != '' as it only select nextdate column tha fit the chosen date-->

	  <!--If no relevant record can be found in db, redirect user-->
	  <?php if (!mysql_num_rows($result)) {
    header('Location: smsnodb.php');
	
	//echo "Sorry. No relevant record could be found in the database";
	//echo "<br/>";
	//echo "<a href='messagetime.php'>" .  "Please Try Again. " . "</a>";

exit;
}
else{  ?>
	   
<?php
// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {?>

<tr>

 <!--<td><?php //echo $row['id'] ?></td>
 <td><?php //echo $row['patientid'] ?></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="treatmentid[]" style="border: none" value="<?php echo $row['vaccineid'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="totalnooftreatment[]" style="border: none" value="<?php echo $row['totalnooftreatment'] ?>"></td>
 <td><input class="form-control" type="text" size="1" name="nthtreatment[]" style="border: none" value="<?php echo $row['nthinjection'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="date[]" style="border: none" value="<?php echo $row['date'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="skip[]" style="border: none" value="<?php echo $row['skip'] ?>"></td>-->
 
 <!-- *********Language of the Name of the patient will be shown according to their preferred language************* -->
 
 <td width="25%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  
 if($row['language'] == '繁體') 

 {echo $row['chinesename'];}
 
  else if($row['language'] == 'ENG')
              {echo $row['engname'];}
		 
		  else if($row['language'] == '简体')
              {echo $row['chinesename'];}
 
 ?></td>
 
 <!--*********Language of the Name of the Vaccine will be shown according to patient preferred language************* -->

  <td width="20%"><?php 
			   
if($row['language'] == '繁體') 
{echo $row['vaccinename1'];}

else if($row['language'] == 'ENG')
{echo $row['vaccinename3'];}
		  
else if($row['language'] == '简体')
{echo $row['vaccinename2'];}

?></td> 
 <td width="20%"><?php echo $row['nextdate'] ?></td>

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

echo '<td width="20%">' . $row['callno'] . '</td>';

//**********Turn the array retrieved from mysql to an array with our desired name*******************
       if($row['language'] == '繁體')
     {
      $specific[] = ["countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
					 "message" =>$row["traditionalmessage"]
				 
	 ];}
	  
	  else if($row['language'] == '简体')
     {
      $specific[] = ["countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
					 "message" =>$row["simplifiedmessage"]
					 
	 ];}
	 
	 else if($row['language'] == 'ENG')
     {
      $specific[] = ["countryCode" => $row["countrycode"],
                     "phone" => $row["callno"],
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
  <!-- /close the if/else statement -->
				<?php ;} ?>

</div>
</div></div>

<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>-->
<!--<a href="search.php"><button  class="btn btn-outline-primary">Back to Search Page</button></a>
<a href="index.php"><button  class="btn btn-outline-primary">Back to Home</button></a>-->
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