<?php ob_start(); ?>
<?php session_Start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Case Management</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <style>
  
  
/* Print only specific area*/
  
 @media print
{
body * { visibility: hidden; }
.div2 * { visibility: visible; }
.div2 { position: absolute; top: 0px; left: 0px; }
}


/* Narrow the height of tr*/

#hey>tbody>tr>td{
  height:20px;
  padding:0px;
  border-top: 0px;
}   
/* Change the font to without bold type*/
.searchable{
	
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

		  

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
  
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />

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
  <a class="navbar-brand" href="#"><h3>Case Management</h3></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
      <!--<li class="nav-item">
        <a class="nav-link" href="index.php"><p>|<i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
      
	  <li class="nav-item">
      <a class="nav-link disabled" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i>  Case Record |</p></a>
      </li> 
	  <li class="nav-item">
	  
      <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Field Content Edit     |</p></a>
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
								
			 
 
  
   <!-- Button trigger modal -->
<div class="container-fluid">

    <div class="modal fade" id="MyModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    New Case
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
							
		
	<!-- *****pop up form for user to add new record *****-->                          						
						
   <form action="newpatient.php" method="post">

  <!--Generate random no-->
  
<?php $second = rand(10000,20000);?>

<!--Get both of the session variable-->

<!-- Certain row of input field turn into hidden field-->
 
<!--<p>Patient ID: *</p>--><input type="text" style="width: 250px" style="border: none"  class="form-control" name="patientid" value="<?php echo $_SESSION['clientno'];?>"/>
<!--<p>Patient HKID / Other ID: </p>--><input type="text" style="width: 550px"  class="form-control" name="patienthkid" value="<?php echo $_SESSION['clientid'];?>"/>

<p>Vaccine Type: *</p>
  <?php
include('connect-db.php');

$sql = "SELECT DISTINCT(vaccinename1),vaccineid AS vaccineid,vaccinename1 FROM vaccinedetail";
$result = mysql_query($sql);
echo "<select name='vaccineid' class='form-control' style='width: 250px'>";


while ($row = mysql_fetch_array($result)) {
	
    echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename1'] . "</option>";
}
echo "</select>";?>
<br>
<p>Language Preference: *</p>
  
    <select name="language"  style="width: 250px" class="form-control">
	 
    <option value="繁體">繁體</option>
    <option value="简体">简体</option>
    <option value="ENG">ENG</option>
    </select><br>
	
		
		  <p>Reminder Preference: *</p> 
		  <select name="smsorcall[]" style="width: 250px" class="form-control" multiple>
          <option value="SMS">SMS</option>
		  <option value="Email">Email</option>
          <option value="Call">Call</option>
         
          
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
            
<a  href="#MyModal" data-toggle="modal" title="Add new injection"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
       
  &nbsp;<a href="oldrecord.php" title="View inactive injection record" alt="Submit" /><i class="fa fa-history fa-2x" aria-hidden="true"></i></a>

  
    &nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a><br><br>

	
<h5> Case Record</h5><hr>

<h1 class="display-4" align="center"><!--Heading yet to be filled--></h1>
 
<!-- Filter the vaccine type-->
<div class="input-group"> <span class="input-group-addon">Filter</span>
 
<input id="filter"  type="text" class="form-control" placeholder="Type here...">
</div>
<br>

<!--Upper table contain client personal info-->
<table class="table-sm" align="left" border='0' cellpadding='10'
<?php
include('connect-db.php');

//**********The order of the table.column name doesn't matter***************===
//************Make sure if you want to show data from certain db column, include them here in the select statement**

$result = mysql_query("SELECT *FROM patients WHERE patienthkid = '" . $_SESSION['clientid'] . "'");?>

<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>

<td><?php echo $row['patientNo'] ?></td>
<td><?php echo $row['patienthkid'] ?></td>

<td><?php echo $row['patientnamee'] ?></td>
<td><?php echo $row['patientnamec'] ?></td>

<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['contactno'] ?></td>
 
<!--<td>&nbsp;&nbsp;<?php echo $_SESSION["clientid"] ?></td>-->
 
 <?php } ?>
</tr>
</table> 

<br>

<!-- REtrieve data u want from the Token stored in the cookie-->


<!-- <?php $json =  $_COOKIE["Token"];
//echo $json;?>

<br><br>
User ID:

<?php /*$obj2 = json_decode($json, true );

 $userid = $obj2["accessRight"]["userid"];
 echo $userid;*/?>
  
  Clinic ID
  <?php /*$obj2 = json_decode($json, true );

 $clinicid= $obj2["clinicID"];
  echo $clinicid;
  */?>

  -->

    <form action="" method="POST">
	
    <div class="col-xs-6">

<!--  Print only the below table-->
<div class="div2">

     <table id="hey"class="table table-hover"  cellpadding='0' id="table">
       <thead><tr>
         
          
        <th>Case </th>
        <th>Total</th>
        <th>Next Nth</th>
        <th>Expected<br>Next Date</th>
<!--    <th>Next Next<br>Injection<br>Date</th>-->
          <!--<th>Skip (In Days)</th>
          <th>Language</th>
          <th>信息</th>
          <th>信息</th>
          <th>Message</th>-->
          <!--<th>Status</th>-->
		  <th>Payment </th>
		  <th> In Arrears</th>
		  </thead>
          <!--<th>Injection<br> Personnel</th>-->
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
	    //$data9 = mysql_real_escape_string($_POST['nextdate'][$index]);
	    $data10 = mysql_real_escape_string($_POST['skip'][$index]);
		
	    $data11 = mysql_real_escape_string($_POST['language'][$index]);
	    $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		$data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
		$data14 = mysql_real_escape_string($_POST['engmessage'][$index]);
		$data15 = mysql_real_escape_string($_POST['status'][$index]);
		//$data16 = mysql_real_escape_string($_POST['nurse'][$index]);
			
 mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
		nthinjection='$data7',date='$data8',skip='$data10',language='$data11',
		traditionalmessage='$data12',simplifiedmessage='$data13',engmessage='$data14',status='$data15',nurse='$data16'
		WHERE id=$id")	 or die(mysql_error());
		
	    header("Location: index.php");
		}
        }
      		?>
          <?php
		  
include('connect-db.php');

//select from the db the vaccineid (WITHOUT REPEAT) for each patient, hence 
//in the select statement use GROUP BY 

$result = mysql_query("SELECT*
FROM patientvaccinedetail
WHERE patienthkid = '" . $_SESSION['clientid'] . "' AND completed = 'ongoing'   Group by vaccineid
ORDER BY vaccinename3 ASC")	or die(mysql_error());?>
      
	<?php //if (!mysql_num_rows($result)) {
   // header('Location: newpatient1.php');
    //exit;
//}
		//else{  ?><!--// loop through results of database query, displaying them in the table-->

<?php while($row = mysql_fetch_array( $result )) {?>
<tbody class="searchable">
<tr height="8px">
<input type="hidden" size="3" name="id[]" readonly value="<?php echo $row['id']; ?>">
		  
<!-- HIDE-->
			  
             <!-- <td>&nbsp;&nbsp;&nbsp;<?php //echo $row['patientid']; ?></td>
              <td>&nbsp;&nbsp;&nbsp;<?php //echo $row['patienthkid']; ?></td>*-->
			  
        	  <!--<td>&nbsp;&nbsp;&nbsp;<?php echo $row['vaccineid']; ?></td>-->
             
			 <!-- ********When click on the patient's vaccine name will show detail of each vaccine injection *******-->
			
			 <!--<td><a href="index.php?vaccineid =<?php //echo "$row['vaccineid']";?>&patientid=<?php //echo "p001"; ?>"><?php //echo $row['vaccinename3'];?></a></td>-->
			
			<!--============================-->
		       <td width="27%">&nbsp;&nbsp; <a href="displaypatientall2.php?vaccineid=<?php echo "$row[vaccineid]";?>&patienthkid=<?php echo "$_SESSION[clientid]"; ?>"><?php echo $row['vaccinename3'];?></a></td>
              
			  <!--============================-->
			  
			  <td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['totalnoofinjection']; ?></td>
              <td width="13%">&nbsp;&nbsp;&nbsp;<?php echo $row['nthinjection']; ?></td>
              <td>&nbsp;&nbsp;&nbsp;<?php echo $row['date']; ?></td>
              <!--<td><?php echo $row['nextdate']; ?></td>-->
              <!--<td><input type="text" size="1" name="skip[]" class="form-control days" value="<?php echo $row['skip']; ?>"></td>-->
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
             &nbsp;&nbsp;&nbsp;&nbsp; 
			 
			 <!--<td><select class="form-control" name="status[]" style="width: 130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
   </select></td>-->
   
   <td>&nbsp;&nbsp;&nbsp;<?php echo "$".$row['total'] ?></td>
   
   <td>&nbsp;&nbsp;&nbsp;<?php echo "$".$row['arrears'] ?></td>

   
              <!--<td><input type="text" size="3" name="nurse[]" class="form-control" value="<?php echo $row['nurse'] ?>"></td>-->
              <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <!--<td>
			  
                <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
				onclick="return confirm('Are you sure to delete this record?');"></a>
              </td>-->
            </tr>
		
		<tbody>
		
		
            <?php } ?>
      </table>


	  <!-- /close the if/else statement -->
				<?php //;} ?>
	  <!--End of the printing area-->
	  </div>
      <!--<input type="submit" class="btn btn-outline-primary" name="submit" value="Save change">-->
    </form>
	<br><br>
   <!-- <input type="button" class="btn btn-outline-primary btn-sm" name="print" value="Print the record" id="print"><br><br>-->
    
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

	
	<!-- To get the user name from the session and when button clicked get the name-->
	
	<script>
	$(".done").on('click', function() {
   
    var test = $("#session").val();
   
    $(this).closest('tr').find('.input').val(test);
       
      });
	
	</script>
	
	
<!--Filter the vaccine type -->

<script>

$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
});


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