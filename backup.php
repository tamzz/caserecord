<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title>Patient Vaccine Detail date entry</title>
<style>
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #DFDFDF;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */
</style>
</head>
<body>

<form action="" method="post">

<h1>New patient Vaccine detail Entry form (input the injection date)<br>
or to customize the messgae</h1>

<table border='1' cellpadding='10' id="myTable">

<th>Patient ID</th><th>Vaccine ID</th><th> 疫苗名稱 (繁體): </th><th> 疫苗名称 (简体) </th><th>Vaccine Name(Eng)</th><th>Total no of injection</th> <th>Nth Injection</th>
<th>Date Injected</th><th>Next Date Injected</th><th>Next Injection Skip</th><th>Language</th>><th>信息(繁體)</th><th>信息(简体)</th><th>Message(Eng)</th>

<!--====Pass the patient id in the previous page to this page patient id field -->
<?php 
session_start();
$pp = $_SESSION['varname7'];
echo $pp;
//get the session variable of vaccineid
$vv = $_SESSION['varname50'];
echo $vv;
//get the session variable of language
$ll = $_SESSION['language'];
echo $ll;
?>
<?php
/*VIEW.PHP  Displays all data from 'vaccinedetail' table*/
// connect to the database
ob_start();
include('connect-db.php');

// *****get results from database, only show the vaccination record that match the vaccine type user has selected in the previous page******
$sql = "SELECT * FROM vaccinedetail WHERE vaccinedetail.vaccineid = '$vv'";
$result = mysql_query($sql)or die(mysql_error());
?>
<!-- display data in editabel table with both data from the previous pages using $_SESSION
AND data from Mysql table-->

<!-- loop through results of database query, displaying them in the table-->

<?php while($row = mysql_fetch_array( $result )){?>

<!--echo out the contents of EACH row into a table-->
<tr>

<td><input type="text" size="15" name="patientid[]" value="<?php echo $pp;?>" \> </td>
<td><input type="text" size="15" name="vaccineid[]" value="<?php echo $vv;?>" \> </td>
<td><input type="text" name="vaccinename1[]" value="<?php echo $row['vaccinename1'];?>" \> </td>
<td><input type="text" name="vaccinename2[]" value="<?php echo $row['vaccinename2'];?>" \> </td>
<td><input type="text" name="vaccinename3[]" value="<?php echo $row['vaccinename3'];?>" \> </td>

<td><input type="text" size="3" name="totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'];?>" \> </td>
<td><input type="text" size="3" name="nthinjection[]" value="<?php echo $row['nthinjection'];?>" \> </td>
<td><input type="date" size="15" name="date[]" class="start_date" value="<?php echo $row['date'];?>" \> 
<input type="button" size="10" value="confirm date" class="addSkip"></td>
<td><input type="text" id ="name" size="15" name="nextdate[]" class="end_date" value="<?php echo $row['nextdate'];?>" \> </td>
<td><input type="text" size="3" name="skip[]" class="days" value="<?php echo $row['skip'];?>" \> </td>
<td><input type="text"  size="3" name="language[]" class="language" value="<?php echo $ll;?>" \> </td>
<td><textarea rows="3" cols="20" readonly class ="url" name="traditionalmessage[]" ><?php echo $row['traditionalmessage'];?></textarea> </td>
<td><textarea rows="3" cols="20" readonly class ="url" name="simplifiedmessage[]" ><?php echo $row['simplifiedmessage'];?></textarea> </td>
<td><textarea rows="3" cols="20" readonly class ="url" name="engmessage[]" ><?php echo $row['engmessage'];?></textarea> </td>

<!--<td><input type="text" name="simplifiedmessage[]" class="simplifiedmessage" value="<?php echo $row['simplifiedmessage'];?>" \> </td>
<td><input type="text" name="engmessage[]" class="engmessage" value="<?php echo $row['engmessage'];?>" \> </td>-->

</tr>

<?php }?>
</table><br>
<input type="submit" name="submit" value="Submit" />
</form>
<p><a href="newtype.php">Add a new vaccine</a></p>
<p><a href="newvdetail2.php">Add new number of injection on current existing vaccine</a></p>
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
if(typeof set =="undefined"){
var set = $(".url").val();
}
$(".addSkip").on('click',function(){

$(".url").val(set+$("#name").val());


});
</script>
</body>
</html>
<!-- Save multiple record of data to mysql database at one submit button using for each loop-->
<?php 
// connect to the database
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST["submit"])){
    foreach ($_POST['patientid'] as $index => $patientid) {
        $data1 = mysql_real_escape_string($patientid);
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

	    $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		$data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
		$data14 = mysql_real_escape_string($_POST['engmessage'][$index]);

        mysql_query("INSERT INTO patientvaccinedetail (patientid,vaccineid,vaccinename1,vaccinename2,vaccinename3, totalnoofinjection,nthinjection,date,nextdate,skip,language,traditionalmessage,simplifiedmessage,engmessage)
		VALUES ('$data1', '$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$data11','$data12','$data13','$data14')") or die(mysql_error());
    	header("Location: start.php");
		}
        }
	// if the form hasn't been submitted, display the form
{echo "aa";
}	
		
      