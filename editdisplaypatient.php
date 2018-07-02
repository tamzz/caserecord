<?php
/*EDIT.PHP  Allows user to edit specific entry in database*/
// creates the edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $patientid, $vaccineid,$vaccinename1,$vaccinename2,$vaccinename3,$totalnoofinjection, $nthinjection,$date,$nextdate,$skip, $error){
 ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
      <html>
        <head><title>Edit displaytype</title><style>
          <!-- bootstrap css -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
              </style></head>
                <body>
                  <div class="jumbotron">
                    <h1 display-3>Edit Vaccine Record</h1></div>
                      <div class="jumbotron">
                        <?php
                         // if there are any errors, display them
                              if ($error != ''){
                               echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';}
                                 ?>
                               <form action="" method="post">
                               <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                              <div>
                             <p><strong>ID:</strong> <?php echo $id; ?></p>
							  <strong>VID: *</strong> <br><input type="text" name="patientid" value="<?php echo $patientid; ?>"/><br/>

                            <strong>VID: *</strong> <br><input type="text" name="vaccineid" value="<?php echo $vaccineid; ?>"/><br/>
                          <strong>>疫苗名稱 (繁體): *</strong> <br><input type="text" name="vaccinename1" value="<?php echo $vaccinename1; ?>"/><br/>
                          <strong>疫苗名称 (简体): *</strong> <br><input type="text" name="vaccinename2" value="<?php echo $vaccinename2; ?>"/><br/>
                          <strong>Vaccine Name (Eng): *</strong> <br><input type="text" name="vaccinename3" value="<?php echo $vaccinename3; ?>"/><br/>
                         <strong>Total No of injection: *</strong> <br> <input type="text" name="totalnoofinjection" value="<?php echo $totalnoofinjection; ?>"/><br/>
                        <strong>Nth injection: *</strong> <br><input type="text" name="nthinjection" value="<?php echo $nthinjection; ?>"/><br/>
                        <strong> Date: *</strong> <br><input type="text" name="date" value="<?php echo $date ; ?>"/><br/>

                        <strong> Next date: *</strong> <br><input type="text" name="nextdate" value="<?php echo $nextdate ; ?>"/><br/>

                      <strong> Next Injection: *</strong> <br><input type="text" name="skip" value="<?php echo $skip ; ?>"/><br/>
                     <p>* Required</p>
                    <input type="submit" name="submit" value="Submit">
                    </div>
                  </form>
                 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
               </div>
</body>
</html>
<?php
}
// connect to the database
include('connect-db.php');
// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit'])){
// confirm that the 'id' value is a valid integer before getting the form data
if (is_numeric($_POST['id'])){
// get the ***updated*** form data, making sure it is valid
$id = $_POST['id'];
$patientid = mysql_real_escape_string(htmlspecialchars($_POST['patientid']));

$vaccineid = mysql_real_escape_string(htmlspecialchars($_POST['vaccineid']));
$vaccinename1 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename1']));
$vaccinename2 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename2']));
$vaccinename3 = mysql_real_escape_string(htmlspecialchars($_POST['vaccinename3']));
$totalnoofinjection = mysql_real_escape_string(htmlspecialchars($_POST['totalnoofinjection']));
$nthinjection = mysql_real_escape_string(htmlspecialchars($_POST['nthinjection']));
$date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
$nextdate = mysql_real_escape_string(htmlspecialchars($_POST['nextdate']));
$skip = mysql_real_escape_string(htmlspecialchars($_POST['skip']));

// check  fields are both filled in

if ($vaccineid == '' || $nthinjection == ''|| $skip == ''){
// generate error message
$error = 'ERROR: Please fill in all required fields!';
//error, display form
renderForm($id,$patientid, $vaccineid ,$vaccinename1,$vaccinename2,$vaccinename3,$totalnoofinjection, $nthinjection,$date,$nextdate,$skip, $error);
}
else{
// Update specific vaccine type record to the mysql database


$sql2 = "UPDATE patientvaccinedetail SET patientid='$patientid', vaccineid='$vaccineid',vaccinename1= '$vaccinename1',vaccinename2= '$vaccinename2',vaccinename3= '$vaccinename3', totalnoofinjection='$totalnoofinjection', nthinjection='$nthinjection',date='$date',nextdate='$nextdate',skip='$skip' WHERE id='$id'";
mysql_query($sql2) or die(mysql_error());
// once saved, redirect back to the view page

header("Location: start.php");
}
}
else
{
// if the 'id' isn't valid, display an error
echo 'Error!';
}
}
else
//******* if the form hasn't been submitted, get the data from the db and display the form
{
// get the 'id' value from the ****URL (if it exists)from the displaytype.php****
//, making sure that it is valid (checing that it is numeric/larger than 0)
if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{
// query db, ****Only fetch one row with ****matching ID***** in the mysql table

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM patientvaccinedetail
WHERE id=$id")or die(mysql_error());

//Only fetch one row in the mysql table

$row = mysql_fetch_array($result);

// check that the 'id' matches up with a row in the databse
if($row){
// get data from db
$patientid= $row['patientid'];
$vaccineid = $row['vaccineid'];
$vaccinename1 = $row['vaccinename1'];
$vaccinename2 = $row['vaccinename2'];
$vaccinename3 = $row['vaccinename3'];
$totalnoofinjection = $row['totalnoofinjection'];
$nthinjection = $row['nthinjection'];
$date = $row['date'];
$nextdate = $row['nextdate'];
$skip = $row['skip'];

// show form
renderForm($id, $patientid, $vaccineid,$vaccinename1,$vaccinename2,$vaccinename3,$totalnoofinjection, $nthinjection,$date,$nextdate,$skip, '');
}
else{
// if no match, display result
echo "No results!";
}
}
else{
// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
echo 'Error!';
}
}
?>