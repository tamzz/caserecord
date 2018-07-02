<?php session_start();?><!DOCTYPE HTML">
<html>
<head>
<title>電郵提醒   </title>
  <style>
  <!--Print only the table of the page-->
   @media print
{
body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
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
        <h4 align="left">&nbsp;&nbsp;電郵提醒</h4><hr>
		
		<?php //echo $_SESSION["getvaccine"];?>
<?php// echo $_SESSION["gethkid"];?>


          <!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Reminder</button></a>-->
          
	<a href="emailapi.php"><button name="send" type="submit" class="btn btn-secondary" style="color: black">發電子郵件 </button></a>
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

<table class="table table-hover" >
<tr> 
<!--<th>ID</th>-->
 <th> &nbsp; &nbsp;&nbsp; &nbsp;客戶</th> 
 <!--<th>Vaccine ID</th>-->
 <th> 案件</th>
<th>總數  </th> <th>次數</th>
<!--<th>Previous Injection Date</th>--> <th> 下次見面日期</th> 
<!--<th>Injection Skip<br>of Days </th>-->
<!--<th> &nbsp; &nbsp;Subject</th>--><th>電郵</th><th>信息</th>
</tr>

<?php
session_start();

/*VIEW.PHP Displays all data from 'players' table*/
// connect to the database
include('connect-db.php');
// get results from database简体
//$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE DATEDIFF(NOW(), nextdate) = -1 AND language ='繁體'")
$result = mysql_query("SELECT *FROM patientvaccinedetail

  WHERE  (smsorcall ='Email' OR smsorcall ='SMSEmail' OR smsorcall ='SMSEmailCall' OR smsorcall ='EmailCall')  AND nextdate !=' '"); ?>
	  
	  
  <!--If no relevant record can be found in db, redirect user-->
	  <?php if (!mysql_num_rows($result)) {
    //header('Location: smsnodb.php');
	
	echo "Sorry. No relevant record could be found in the database";
	echo "<br/>";
	echo "<a href='messagetime.php'>" .  "Please try again" . "</a>";
	
    exit;
}
	else{  ?>
	   
<?php
// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {?>

<tr>
 <!--<td><input class="form-control" type="text" size="1" style="border: none" name="id[]"  value="<?php echo $row['id'] ?>"></td>-->
 <td width="13%">&nbsp; &nbsp;&nbsp; &nbsp;<?php  
 if($row['language'] == '繁體') 

 {echo $row['chinesename'];}
 
  else if($row['language'] == 'ENG')
              {echo $row['engname'];}
		  
		  else if($row['language'] == '简体')
              {echo $row['chinesename'];}
 
 ?></td>
 <!--<td><input class="form-control" type="text" size="8" style="border: none" name="vaccineid[]" value="<?php echo $row['vaccineid'] ?>"></td>-->
 <!--<td><input class="form-control" type="text" size="1" name="treatmentname1[]"  value="<?php echo $row['vaccinename1'] ?>"></td>-->
 
 <td width="13%"><?php 
			   
			   if($row['language'] == '繁體') 
			  {echo $row['vaccinename1'];}
		   
		  
              else if($row['language'] == 'ENG')
              {echo $row['vaccinename3'];}
		  
		       else if($row['language'] == '简体')
              {echo $row['vaccinename2'];}?></td>		   
			   
 <td width="10%"><?php echo $row['totalnoofinjection'] ?></td>
 <td width="10%"><?php echo ++$row['nthinjection'] ?></td>
  <!--<td><input class="form-control" type="text" size="1" name="date[]" style="border: none" value="<?php //echo $row['date'] ?>"></td>-->
 <td width="13%"><?php echo $row['nextdate'] ?></td>
 <!--<td><input class="form-control" type="text" size="1" name="skip[]" style="border: none" value="<?php echo $row['skip'] ?>"></td>-->

 <!--//echo '<td width="200px">' . $row['traditionalmessage']. '</td>';}-->

<!--echo <td> "Vaccine Injection Reminder (Tomorrow)" . '</td>';-->

 <td style="display:none;"> <?php 
			   
			   if($row['language'] == '繁體') 
			   {echo "下次見面提醒";}
		   
               else if($row['language'] == '简体')
              {echo "疫苗注射提醒";}
		  
		       else if($row['language'] == 'ENG')
              {echo "Vaccine Injection Reminder";}

               ?></td>		   

   <?php 

echo '<td width="13%">' . $row['email'] . '</td>';?>

<td width="200px">
 <?php if($row['language'] == '繁體')
     {
     echo  $row['traditionalmessage'];}
 
     else if($row['language'] == 'ENG')
     {
     echo $row['engmessage'];}
	 
	  else if($row['language'] == '简体')
     {
     echo  $row['simplifiedmessage'];} ?>
	 </td>

	 <!--**********Turn the array retrieved from mysql to an array with our desired name*******************-->
     <?php  if($row['language'] == '繁體')
     {
      $specific[] = ["email" => $row["email"],
                     "subject" => "下次見面提醒",
					 "message" =>$row["traditionalmessage"]
	 ];}

	  else if($row['language'] == '简体')
     {
      $specific[] = ["email" => $row["email"],
                     "subject" => "疫苗注射提醒",
					 "message" =>$row["simplifiedmessage"]
				 
	 ];}
 
	 else if($row['language'] == 'ENG')
     {
      $specific[] = ["email" => $row["email"],
                     "subject" => "Vaccine Injection Reminder",
					 "message" =>$row["engmessage"]			 
	 ];}
}
//End of while loop
//**********Convert the array into json*******************
$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
//To remove the square bracket of the JSON 
$result1 = trim($result,'[]');

//echo $result1;
$_SESSION['email'] = "$result1";
//echo $result1;
echo "</tr>";
echo "</table>";echo "</form>";
?>

 <!-- /close the if/else statement -->
				<?php ;} ?>

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