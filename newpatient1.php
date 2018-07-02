<?php 
session_start();
 //echo $_SESSION['getvaccine'];?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>New Patient</title>
<style><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></style>
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
        <a class="nav-link" href="index.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li>   
	  
    </ul> 
  </div>
</nav>
		<!-- Nav Bar -->
		<div class="container">
<?php
// if there are any errors, display them
if ($error != ''){
echo '<div style="padding:4px;border:1px solid red; color:red;">'.$error.'</div>';}
?>

  <div class="btn-group" role="group" aria-label="Basic example">
</div>
<div class="jumbotron">
  <h4>New Injection</h4><hr>

<form action="newpatient.php" method="post">
<!--===============================================================================================================-->
  <!--Generate random no-->
<?php $second = rand(10000,20000);?>


<p>Patient ID: *</p><input type="text" style="width: 550px"class="form-control" name="patientid" value="<?php echo $_SESSION['getvaccine'];?>"/><br/>
<p>Patient HKID / Other ID: </p><input type="text" style="width: 550px"class="form-control" name="patienthkid" value="<?php echo $_SESSION['gethkid'];?>"/><br/>

<p>Vaccine Type: *</p>
  <?php
include('connect-db.php');

$sql = "SELECT DISTINCT(vaccinename3),vaccineid AS vaccineid,vaccinename3 FROM vaccinedetail";
$result = mysql_query($sql);
echo "<select name='vaccineid' class='form-control' style='width: 550px'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename3'] . "</option>";
}
echo "</select>";?><br>

<p>Patient-Vaccine ID: *</p>  <input type="text" style="width: 550px" readonly class="form-control"name="patientvid" value="<?php echo 'PVI'.' '. $second; ?>" /><br/>
<p>Language Preference: *</p>
  
    <select name="language"  style="width: 550px" class="form-control">
    <option value="繁體">繁體</option>
    <option value="简体">简体</option>
    <option value="ENG">ENG</option>
    </select>
	<br>
		  <p>Reminder Preference: *</p> 
		  <select name="smsorcall" style="width: 550px" class="form-control">
          <option value="SMS">SMS</option>
          <option value="Call">Call</option>
		  <option value="Email">Email</option>
          
		  
          </select>

<br><p><strong>* Required</p></p>

 <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
<button class="btn btn-outline-primary" type="reset" name="reset" >Reset</button>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>

</script></div>
</div>
</body>
</html>
