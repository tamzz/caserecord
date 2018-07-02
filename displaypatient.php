<?php ob_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Display patient specific vaccine record</title>
  <style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </style>
</head>
<body>
  <div class="jumbotron">
    <p class="display-3" align="center">Display patient vaccine record</p>(for vaccination date change &injection status )
    <hr><br><br></div>
  <div class="btn-group" role="group" aria-label="Basic example">
    <a href="index.html"><button type="button" class="btn btn-primary">Back to Home</button></a>
  </div>
  <div class="jumbotron">
    <form action="" method="POST">
      <table class="table table-striped" border='1' cellpadding='10'>
        <tr>
          <th>PatientID</th>
          <th>VaccineID</th>
          <th>Vaccine Name (Eng)</th>
          <th>Total <br>injection</th>
          <th>nth<br>injection</th>
          <th>date</th>
          <th>nextdate</th>
          <th>skip</th>
          <th>Language</th>
          <th>信息</th>
          <th>信息</th>
          <th>Message</th>
          <th>Injection status</th>
          <th>Injection<br> personnel</th>
          <th>Remove<br> record</th>
          <?php 
include_once('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST['submit'])){
    foreach ($_POST['patientid'] as $index => $patientid) {
		$id = mysql_real_escape_string($_POST['id'][$index]);
        $data1 = mysql_real_escape_string($patientid);
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

 mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
		nthinjection='$data7',date='$data8',nextdate='$data9',skip='$data10',language='$data11',
		traditionalmessage='$data12',simplifiedmessage='$data13',engmessage='$data14',status='$data15',nurse='$data16'
		WHERE id=$id")	 or die(mysql_error());
		
	    	header("Location: start.php");
		}
        }
      		?>
          <?php
// connect to the database
include('connect-db.php');
// get results from database
$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE patientid = '" . $_GET['patientid'] . "' AND vaccineid = '" . $_GET['vaccineid'] . "'")	or die(mysql_error());?>
            <!-- display data in an editable table-->
            <!--// loop through results of database query, displaying them in the table-->

            <?php while($row = mysql_fetch_array( $result )) {?>
            <tr>
              <input type="hidden" size="3" name="id[]" readonly value="<?php echo $row['id'] ?>">
              <td><input class="form-control" type="text" size="3" name="patientid[]" readonly value="<?php echo $row['patientid'] ?>"></td>
              <td><input class="form-control" type="text" size="3" name="vaccineid[]" readonly value="<?php echo $row['vaccineid'] ?>"></td>
              <td><textarea rows="3" cols="3" class="form-control " name="vaccinename3[]"><?php echo $row['vaccinename3'];?></textarea> </td>

              <td><input class="form-control" type="text" size="1" name="totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>
              <td><input class="form-control" type="text" size="1" name="nthinjection[]" value="<?php echo $row['nthinjection'] ?>"></td>
              <td><input type="date" size="1" class="form-control start_date" name="date[]" value="<?php echo $row['date'] ?>"> <input type="button" class="addSkip" value="Confirm"></td>
              <td><input type="text" size="8" name="nextdate[]" class="end_date" value="<?php echo $row['nextdate'] ?>"></td>
              <td><input type="text" size="1" name="skip[]" class="form-control days" value="<?php echo $row['skip'] ?>"></td>
              <td>
                <select name="language[]">
<option value="繁體" <?php if($row['language'] == '繁體') echo 'selected="selected"';?> >繁體</option>
<option value="简体" <?php if($row['language'] == '简体') echo 'selected="selected"';?> >简体</option>
<option value="ENG" <?php if($row['language'] == 'ENG') echo 'selected="selected"'; ?> >ENG</option>
    </select></td>

              <td><textarea rows="3" cols="13" class="form-control url" name="traditionalmessage[]" data-value="<?php echo $row['vaccinename1'].'下一個注射期为';?>"><?php echo $row['traditionalmessage'];?></textarea> </td>
              <td><textarea rows="3" cols="13" readonly class="form-control url" name="simplifiedmessage[]" data-value="<?php echo $row['vaccinename2'].'下一个注射期';?>"><?php echo $row['simplifiedmessage'];?></textarea> </td>
              <td> <textarea rows="3" cols="13" readonly class="form-control url" name="engmessage[]" data-value="<?php echo $row['vaccinename3'].'Next injection period';?>"><?php echo $row['engmessage'];?></textarea> </td>
              <td><select class="form-control msg" name="status[]">

<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
   </select></td>
              <td><input type="text" size="3" name="nurse[]" class="form-control" value="<?php echo $row['nurse'] ?>"></td>

              <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <td>
                <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
				onclick="return confirm('Are you sure to delete this record?');"></a>
              </td>
            </tr>
            <?php } ?>
      </table>
	  <div class="btn-group" role="group" aria-label="Basic example">
      <input type="submit" name="submit"  class="btn btn-primary btn-lg" value="Save change"><br>&nbsp;&nbsp;&nbsp;
	  <input type="button" name="print" value="Print the vaccine record" id="print"></div>
    </form>
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
  </div>
  </div>
</body>

</html>