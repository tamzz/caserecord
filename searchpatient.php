<!DOCTYPE HTML>
<html>
<head>
<title>Search Patient</title>
<style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</style>
</head>
<body> 
<div class="container">
     <div class="jumbotron ">
     <h1 class="display-3">Patient Vaccine Record </h1>
	 <hr>
	 </div>
	  <div class="btn-group" role="group" aria-label="Basic example">
      <a href="index.html"><button type="button" class="btn btn-primary btn-lg">Back to Home</button></a>
      </div>
<!-- ============ 1st FROM started============================================>-->
<div class="jumbotron">
    <!--<form class="form-group" action="displaypatient.php" method="GET">
    <h1> Patient Vaccine record (Specific1) </h1><hr><br>
	 <input type="test" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" name="patientid" placeholder="Patient ID"><br><br>
    <select class="form-control" name="treatmentid" style="width:550px"; >
    <?php
    mysql_connect('localhost', 'root', 'IwCtelom!');
    mysql_select_db('vaccine3');
    //Select the vaccinename from the table vaccinedetail
    $sql = "SELECT DISTINCT(vaccinename3),vaccineid AS vaccineid,vaccinename3 FROM patientvaccinedetail";
    $result = mysql_query($sql);

     while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename3'] . "</option>";
     }
     ?>
    </select><br>
    <input type="submit" value="Go" class="btn btn-primary btn-lg" id="searchresult">
    </form><br><br>-->
 <!--============Start of second form====================-->
 <!--============When the go button is pressed, pass the patientid user input
 to the searchallhandle.php, to get the patientid and store in the $_SESSION,
 In the displaypatientall.php get the patientid using $_SESSION====================-->

<form class="form-group" action="searchallhandle.php" method="POST">
  <h1>Patient Vaccine record (All)</h1>
  <hr>
  	<br>
  <p><input type="test" name="patientid" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Patient ID"></p><br>
   
 <input type="submit" name="submit" value="Go" class="btn btn-primary btn-lg" id="searchresult">
 </form>
 <!--============End of second form====================-->
 <br><br>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</div>
</div>
</html>