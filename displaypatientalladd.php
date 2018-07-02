<?php ob_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Display all patient</title>
  
  <style>
  <!--Print only the table of the page-->
   @media print
{
body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item">
        <a class="nav-link" href="index2.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
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
</nav>

<!-- Nav Bar -->
  <?php session_start();?>
  <div class="btn-group" role="group" aria-label="Basic example">
  </div>

  <div class="jumbotron">
  
  <form action="newpatient2.php" method="post">
  <input type="hidden" name="pidpid" value="<?php echo $_SESSION['getvaccine'];?>">
  
  
  <!-- Add new vaccine type injection -->
  
  <!--View inactive injection record-->
  
  <h4>Patient Injection Record</h4><hr>
  
  <input type="image" src="images/addadd.png" border="0" width="40px" title="Add New Vaccine Injection" alt="Submit" />
  
  </form>
  
  <form action="oldrecord.php" method="post">
  <input type="hidden" name="pidpid" value="<?php echo $_SESSION['getvaccine'];?>">
 
  <input type="image" src="images/old.png" border="0" width="35px" title="View old injection record" alt="Submit" />
  
  </form>
 
  <h1 class="display-4" align="center"><!--Heading yet to be filled--></h1>
  

  
<table class="table-sm" align="left" border='0' cellpadding='10' >
<!--
<tr> 
<th>Patient ID</th> <th>Patient Name</th>  <th>Gender</th><!--<th>Total Vaccine No</th> <th>Nth Vaccine</th>
 <th>Contact No</th> <th>Email</th>
</tr>-->

		
	<?php

include('connect-db.php');

//==*****************The order of the table.column name doesn't matter***************==================
//==*****************Make sure if you want to show data from certain db column, include them here in the select statement**************==================
//$_SESSION['all'] is the value of patient id

//$result = mysql_query("SELECT *FROM patients
//WHERE patientNo = '" . $_SESSION['getvaccine']."'");
$result = mysql_query("SELECT *FROM patients
WHERE patientNo = '" . $_SESSION['getvaccine'] . "'");?>



<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>
 <td><?php echo $row['patientNo'] ?></td>
 <td><?php echo $row['surName'].' '.$row['givenName'] ?></td>
 <td><?php 
			  if($row['sexid'] == '1') 
			  {echo "M";}
  
              else if($row['sexid'] == '2')
              {
              echo  "F";}
			  ?></td>
  <td><?php echo $row['telMobile'] ?></td>
  <td><?php echo $row['email'] ?></td>

	   <?php } ?>
 </tr>
 </table> 


 

	<!--   End Show respective patient personal info when the button is clicked -->		



	      <!-- ***********  The Select dropdown menu that allow user to pick each Patient Specific injection type ************* -->
  <!-- The patient ID is passed from the serach.php  -->
<br>
	<hr width="380px" align="center">
	
       
	
        <!-- ***********  The Select dropdown menu that allow user to pick each Patient Specific injection type ************* -->
			
			<!-- ***********  Show the patient personal info from the patient table ************* -->
			    
				<!-- ***********  Use the WHERE clause to narrow down to a specific patient ************* -->
			
	       <!-- ***********  Show the patient personal info from the patient table ************* -->
	
    <form action="" method="POST">
	
    <div class="col-xs-6">
	
	<!--  Print only the below table-->
	<div class="div4">
      <table class="table table-bordered"" border='1' cellpadding='10' id="table">
        <tr>
          <th>Patient ID</th><th>Patient HKID<br>/Other ID</th>
          <th>VaccineID</th>
          <th>Vaccine <br>Name</th>
          <th>Total <br>Injection</th>
          <th>Next Nth<br>Injection</th>
          <th> Next Injection<br>Date</th>
          <th>Next Next<br>Injection<br>Date</th>
          <!--<th>Skip (In Days)</th>
          <th>Language</th>
          <th>信息</th>
          <th>信息</th>
          <th>Message</th>-->
          <th>Vaccination status</th>
          <th>Vaccination<br> personnel</th>
          <!--<th>Remove<br> record</th>
 -->         
		  <?php 
include_once('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST['submit'])){
    foreach ($_POST['patientid'] as $index => $patientid) {
		$id = mysql_real_escape_string($_POST['id'][$index]);
        $data1 = mysql_real_escape_string($patientid);
		$data17 = mysql_real_escape_string($_POST['patienthkid'][$index]);

		$data2 = mysql_real_escape_string($_POST['vaccineid'][$index]);
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
		$data15 = mysql_real_escape_string($_POST['status'][$index]);
		$data16 = mysql_real_escape_string($_POST['nurse'][$index]);

 mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
		nthinjection='$data7',date='$data8',nextdate='$data9',skip='$data10',language='$data11',
		traditionalmessage='$data12',simplifiedmessage='$data13',engmessage='$data14',status='$data15',nurse='$data16'
		WHERE id=$id")	 or die(mysql_error());
		
	    	header("Location: index.php");
		}
        }
      		?>
          <?php
// connect to the database
include('connect-db.php');

///select from the db the vaccineid (WITHOUT REPEAT) for each patient
//So it'll show the vaccine type the patient has injected 

$result = mysql_query("SELECT*
FROM patientvaccinedetail WHERE patientid = '" . $_SESSION['one'] . "' AND status= 'open' Group by vaccineid")	or die(mysql_error());?>            <!-- display data in an editable table-->
            
			
			<?php if (!mysql_num_rows($result)) {
    header('Location: newpatient1.php');
    exit;
}
				else{  ?><!--// loop through results of database query, displaying them in the table-->

            <?php while($row = mysql_fetch_array( $result )) {?>
            <tr>
              <input type="hidden" size="3" name="id[]" readonly value="<?php echo $row['id'] ?>">
              <td><?php echo $row['patientid'] ?></td>
              <td><?php echo $row['patienthkid'] ?></td>
        
			  <td><?php echo $row['vaccineid'] ?></td>
             
			 <!-- ********When click on the patient's vaccine name will show detail of each vaccine injection *******-->
			 
			 
			 <!--<td><a href="index.php?vaccineid =<?php //echo "$row['vaccineid']";?>&patientid=<?php //echo "p001"; ?>"><?php //echo $row['vaccinename3'];?></a></td>-->
			
			<!--============================-->
		       <td> <a href="displaypatientall2.php?vaccineid=<?php echo "$row[vaccineid]";?>&patientid=<?php echo "$_SESSION[getvaccine]"; ?>"><?php echo $row['vaccinename3'];?></a></td>
              
			  <!--============================-->
			  
			  <td><?php echo $row['totalnoofinjection'] ?></td>
              <td><?php echo $row['nthinjection'] ?></td>
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['nextdate'] ?></td>
              <!--<td><input type="text" size="1" name="skip[]" class="form-control days" value="<?php echo $row['skip'] ?>"></td>-->
              <!--
			  <td>
			  
                <select name="language[]">
<option value="繁體" <?php if($row['language'] == '繁體') echo 'selected="selected"';?> >繁體</option>
<option value="简体" <?php if($row['language'] == '简体') echo 'selected="selected"';?> >简体</option>
<option value="ENG" <?php if($row['language'] == 'ENG') echo 'selected="selected"'; ?> >ENG</option>
    </select></td>

              <td><textarea rows="3" cols="13" class="form-control url" name="traditionalmessage[]" data-value="<?php echo $row['treatmentname1'].'下一個注射期為';?>"><?php echo $row['traditionalmessage'];?></textarea> </td>
              <td><textarea rows="3" cols="13" readonly class="form-control url" name="simplifiedmessage[]" data-value="<?php echo $row['treatmentname2'].'下一个注射期为';?>"><?php echo $row['simplifiedmessage'];?></textarea> </td>
              <td> <textarea rows="3" cols="13" readonly class="form-control url" name="engmessage[]" data-value="<?php echo $row['treatmentname3'].'Next injection period will be';?>"><?php echo $row['engmessage'];?></textarea> </td>-->
              <td><select class="form-control msg" name="status[]">

<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
   </select></td>
              <td><input type="text" size="3" name="nurse[]" class="form-control" value="<?php echo $row['nurse'] ?>"></td>

              <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <!--<td>
                <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
				onclick="return confirm('Are you sure to delete this record?');"></a>
              </td>-->
            </tr>
            <?php } ?>
      </table>
	  
	  <!-- /close the if/else statement -->
				<?php ;} ?>
	  <!--End of the printing area-->
	  </div>
      <input type="submit" class="btn btn-outline-primary" name="submit" value="Save change">
    </form>
    <input type="button" class="btn btn-outline-primary" name="print" value="Print the record" id="print">
   
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
      (function($, window, document, undefined) {

        $(".addSkip").click(function() {
          // row instance to use `find()` for the other input classes
          var $row = $(this).closest('tr');

          var date = new Date($row.find(".start_date").val() + " 0:00:00"),
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
          var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
          var dd = this.getDate().toString();
          return yyyy + "-" + (mm[0] ? mm : "0" + mm[0]) + "-" + (dd[0] ? dd : "0" + dd[0]); // padding
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
    <script>
      $('#print').click(function() {
        window.print();
      });
    </script>
    <script>
      $('.msg').change(function() {
        if ($(this).val() === 'open') {
          $(this).parent().css({
            'background-color': 'green'
          });
        } else {
          $(this).parent().css({
            'background-color': 'red'
          });
        }
      }).trigger('change');
    </script>
	
	<script>
	$("#table").hide();
	
		if $("#table").on("click",function(){
			
			$("#table").toggle();
		})
	

	
	</script>
	
  </div> </div>
  </div>
</body>

</html>