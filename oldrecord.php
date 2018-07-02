<?php ob_start(); 
session_start();?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Inactive injection record</title>
  
  <style>
  /*Print only the table of the pag*/
   @media print
{
body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
}

.table{
	
	font-weight:normal;
}

.table-sm{
	
	font-weight:normal;
}

/* Bootstrap 4 modal center, to correctly center the modal, cite "modal id" then .modal-dialog, like in CSS below */

#MyModal .modal-dialog {
    transform: translate(0, -55%);
    top: 30%;
    margin: 0 auto;
    width:350px;

}

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
  <a class="navbar-brand" href="#"><h3>Vaccine Management </h3></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--<li class="nav-item">
        <a class="nav-link" href="index4.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
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

<!-- Nav Bar -->



<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                          
						
                                <div class="content"> 
			 			
  <br>
   <!-- Button trigger modal -->
<div class="container-fluid">

    <div class="modal fade" id="MyModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                               <form action="newpatient.php" method="post">
<!--===============================================================================================================-->
  <!--Generate random no-->
  
<?php $second = rand(10000,20000);?>

<!--Get both of the session variable-->

<!-- Certain row of input field turn into hidden field-->
 
<!--<p>Patient ID: *</p>--><input type="hidden" style="width: 250px" style="border: none"  class="form-control" name="patientid" value="<?php echo $_SESSION['getvaccine'];?>"/><br/>
<!--<p>Patient HKID / Other ID: </p>--><input type="hidden" style="width: 550px"  class="form-control" name="patienthkid" value="<?php echo $_SESSION['gethkid'];?>"/><br/>

<p>Vaccine Type: *</p>
  <?php
include('connect-db.php');

$sql = "SELECT DISTINCT(vaccinename3),vaccineid AS vaccineid,vaccinename3 FROM vaccinedetail";
$result = mysql_query($sql);
echo "<select name='vaccineid' class='form-control' style='width: 250px'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename3'] . "</option>";
}
echo "</select>";?><br>

<p>Language Preference: *</p>
  
    <select name="language"  style="width: 250px" class="form-control">
    <option value="繁體">繁體</option>
    <option value="简体">简体</option>
    <option value="ENG">ENG</option>
    </select>
	<br>
		
		  <p>Reminder Preference: *</p> 
		  <select name="smsorcall" style="width: 250px" class="form-control">
          <option value="SMS">SMS</option>
          <option value="Call">Call</option>
          <option value="Email">Email</option>
          
          </select>

<br><p><strong>* Required</p></p>

 <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
<!--<button class="btn btn-outline-primary" class="close_popup" >Reset</button>-->
</div>
</form>


                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


                <a  href="#MyModal" data-toggle="modal"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
  
									    &nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a><br><br>

    
  <br><h5>Inactive Injection record</h5><hr><br>
 
  <h1 class="display-4" align="center"><!--Heading yet to be filled--></h1>
  
  
  <!--To test whether there's session variables-->
  
<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>

  
  
  
  
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
WHERE patientNo = '" . $_SESSION['clientno'] . "'");?>



<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>
 <td><?php echo $row['patientNo'] ?></td>
 <td><?php echo $_SESSION["clientengname"] ?></td>
 <td><?php echo $_SESSION["clientchinesename"] ?></td>
 
 <td><?php echo $row['gender'] ?></td>
			  
 <td><?php echo $_SESSION["clientcontactno"] ?></td>
 <td><?php echo $_SESSION["clientemail"] ?></td>

	   <?php } ?>
 </tr>
 </table> 

	<!--   End Show respective patient personal info when the button is clicked -->		

<br>
	<hr>
		    
	<!-- ***********  Use the WHERE clause to narrow down to a specific patient ************* -->
	
	
	
	<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>



    <form action="" method="POST">
	
    <div class="col-xs-6">
	
	<!--  Print only the below table-->
	<div class="div4">
      <table class="table"  cellpadding='10' id="table">
        <tr>
       <!--   <th>Patient No.</th><th>ID No.</th>
          <th>Vaccine ID</th>-->
          <th>Vaccine </th>
          <th>Total</th>
          <th> Completed</th>
          <th> Last<br> Injection Date</th>
          <!--<th>Next Next<br>Injection<br>Date</th>-->
          <!--<th>Skip (In Days)</th>
          <th>Language</th>
          <th>信息</th>
          <th>信息</th>
          <th>Message</th>-->
           <!--<th> Status</th>-->
          <th>By</th>
          <th> Payment</th>
          <th>In<br> Arrears</th>
		  
		  
		  
          <!--<th>Remove<br> record</th>-->
          
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
		
	    	header("Location: index3.php");
		}
        }
      		?>
          <?php
// connect to the database
include('connect-db.php');

///select from the db the vaccineid (WITHOUT REPEAT) for each patient
//So it'll show the vaccine type the patient has injected 

$result = mysql_query("SELECT*
FROM patientvaccinedetail WHERE patientid = '" . $_SESSION['clientno'] . "' AND completed = 'completed' Group by vaccineid")	or die(mysql_error());?>            <!-- display data in an editable table-->
            
			
			
			
			
			<?php if (!mysql_num_rows($result)) {?>
    <div class='jumbotron'>
	
	<h4>OOPS!! No matched record could be found in the database</h4></div>
    <?php 
}
				else{?>
			
			
			<!--// loop through results of database query, displaying them in the table-->

            <?php while($row = mysql_fetch_array( $result )) {?>
            <tr>
              <input type="hidden" size="3" name="id[]" readonly value="<?php echo $row['id'] ?>">
            <!--  <td><?php echo $row['patientid'] ?></td>
              <td><?php echo $row['patienthkid'] ?></td>
        
			  <td><?php echo $row['vaccineid'] ?></td>-->
             
			 
			 <!-- ********When click on the patient's vaccine name will show detail of each vaccine injection *******-->
			 
			 
			 
			 <!--<td><a href="index.php?vaccineid =<?php //echo "$row['vaccineid']";?>&patientid=<?php //echo "p001"; ?>"><?php //echo $row['vaccinename3'];?></a></td>-->
			
<!--============================-->
		       <td> <a href="displaypatientall2old.php?vaccineid=<?php echo "$row[vaccineid]";?>&patienthkid=<?php echo "$_SESSION[clientid]"; ?>"><?php echo $row['vaccinename3'];?></a></td>
              
			  
			  
	 <!--============================-->
			  
			  <td><?php echo $row['totalnoofinjection'] ?></td>
              <td><?php echo $row['nthinjection'] ?></td>
              <td><?php echo $row['date'] ?></td>
              <!--<td><?php echo $row['nextdate'] ?></td>-->
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
              <!--<td><select class="form-control" name="status[]" style="width: 100px">

<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
   </select></td>-->
              <td><?php echo $row['nurse'] ?></td>
			  
              <td><?php echo "$".$row['total'] ?></td>
			  
              <td><?php echo "$".$row['arrears'] ?></td>
			  
			               <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <!--<td>
                <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
				onclick="return confirm('Are you sure to delete this record?');"></a>
              </td>-->
            </tr>
            <?php } ?>
      </table>
				
	  <!-- /close the if/else statement -->
			<?php } ?>	
	  <!--End of the printing area-->
	  </div>
     <!-- <input type="submit" class="btn btn-outline-primary" name="submit" value="Save change">-->
    </form><br>
    <!--<input type="button" class="btn btn-outline-primary" name="print" value="Print the record" id="print"><br><br>-->
	
	
	
	 </div>
                            </div>
                        </main>   
                   </div> 	
              </div>
        </div>  
		
	 
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
	
		<script>
jQuery(document).ready(function(e) {
    jQuery('.bd-example-modal-sm').on('click');
});
</script>

	
  </div> </div>
  </div>
</body>

</html>