<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Patient Vaccination Alert (30 days)(繁體) </title>
<style> 

 <!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</style>
</head>
<body>

<div class="jumbotron">
<h1 display-1 align="center">Patient Vaccination Alert</h1><br><br>
(Tomorrow) (繁體)</div>

<div class="jumbotron">
<table class="table table-striped align="center" border='5' cellpadding='25'>

<tr> 
<th>ID</th> <th>病人編號</th> <th>疫苗編號</th><th>疫苗名稱 (繁體)</th>
<th>總注射次數</th> <th>第幾次注射</th>
<th>注射日期</th> <th>下一個注射日期</th> <th>注射相日期</th><th>信息</th><th>tel</th>
</tr>
<?php
session_start();
/*VIEW.PHP Displays all data from 'players' table*/
// connect to the database
include('connect-db.php');
// get results from database
//$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE DATEDIFF(NOW(), nextdate) = -1 AND language ='繁體'")
$result = mysql_query("SELECT patientvaccinedetail.id,patientvaccinedetail.patientid, patientvaccinedetail.vaccineid, patientvaccinedetail.vaccinename1,patientvaccinedetail.totalnoofinjection,
patientvaccinedetail.nthinjection,patientvaccinedetail.date,patientvaccinedetail.nextdate,patientvaccinedetail.skip, patientvaccinedetail.traditionalmessage, patients.telMobile
FROM patientvaccinedetail
 JOIN patients ON patientvaccinedetail.patientid=patients.patientid
WHERE DATEDIFF(NOW(), nextdate) = -1 AND language ='繁體'");

// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {
// echo out the contents of each row into a table

echo "<tr>";
echo '<td width="100px">' . $row['id'] . '</td>';
echo '<td width="200px">' . $row['patientid'] . '</td>';
echo '<td width="200px">' . $row['vaccineid'] . '</td>';
echo '<td width="200px">' . $row['vaccinename1'] . '</td>';
echo '<td width="100px">' . $row['totalnoofinjection'] . '</td>';
echo '<td width="100px">' . $row['nthinjection'] . '</td>';
echo '<td width="200px">' . $row['date'] . '</td>';
echo '<td width="200px">' . $row['nextdate'] . '</td>';
echo '<td width="200px">' . $row['skip'] . '</td>';
echo '<td>' . $row['traditionalmessage'] ."<br />";
echo '<td>' . $row['telMobile'] . '</td>';



//**********Convert the array into json*******************

      $specific[] = ["message" => $row["traditionalmessage"],
                     "mobile" => $row["telMobile"]];
}

//print_r($specific);

$_SESSION['hi'] = "hi";
$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
echo $result;


// result
//[{"message":"B型肝炎疫苗下一個注射期为","mobile":"96709394"},{"message":"B型肝炎疫苗下一個注射期为2017-7-27","mobile":"96709394"}]


echo "</tr>";

echo "</table>";

?>
<a href="guzzle.php"><button type="button" class="btn btn-primary">Send sms alert</button></a>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>



</script>

</div>
</div>
</body>
</html>

========================================
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Patient Vaccination Alert (30 days)(繁體) </title>
<style> 

 <!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</style>
</head>
<body>

<div class="jumbotron">
<h1 display-1 align="center">Patient Vaccination Alert</h1><br><br>
(Tomorrow) (繁體)</div>

<div class="jumbotron">
<table class="table table-striped align="center" border='5' cellpadding='25'>

<tr> 
<th>ID</th> <th>病人編號</th> <th>疫苗編號</th><th>疫苗名稱 (繁體)</th>
<th>總注射次數</th> <th>第幾次注射</th>
<th>注射日期</th> <th>下一個注射日期</th> <th>注射相日期</th><th>信息</th><th>tel</th>
</tr>
<?php
session_start();
/*VIEW.PHP Displays all data from 'players' table*/
// connect to the database
include('connect-db.php');
// get results from database
//$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE DATEDIFF(NOW(), nextdate) = -1 AND language ='繁體'")
$result = mysql_query("SELECT patientvaccinedetail.id,patientvaccinedetail.patientid, patientvaccinedetail.vaccineid, patientvaccinedetail.vaccinename1,patientvaccinedetail.totalnoofinjection,
patientvaccinedetail.nthinjection,patientvaccinedetail.date,patientvaccinedetail.nextdate,patientvaccinedetail.skip, patientvaccinedetail.traditionalmessage, patients.telMobile
FROM patientvaccinedetail
 JOIN patients ON patientvaccinedetail.patientid=patients.patientid
WHERE DATEDIFF(NOW(), nextdate) = -1 AND language ='繁體'");

// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {
// echo out the contents of each row into a table

echo "<tr>";
echo '<td width="100px">' . $row['id'] . '</td>';
echo '<td width="200px">' . $row['patientid'] . '</td>';
echo '<td width="200px">' . $row['vaccineid'] . '</td>';
echo '<td width="200px">' . $row['vaccinename1'] . '</td>';
echo '<td width="100px">' . $row['totalnoofinjection'] . '</td>';
echo '<td width="100px">' . $row['nthinjection'] . '</td>';
echo '<td width="200px">' . $row['date'] . '</td>';
echo '<td width="200px">' . $row['nextdate'] . '</td>';
echo '<td width="200px">' . $row['skip'] . '</td>';
echo '<td>' . $row['traditionalmessage'] ."<br />";
echo '<td>' . $row['telMobile'] . '</td>';



//**********Convert the array into json*******************

      $specific = ["religious" => "000",
                     "religiousLang2" => "000",
					 "religiousLang3" => "222"];
            }

//print_r($specific);


$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
echo $result;

$_SESSION['hi'] = "$result";
// result
//[{"message":"B型肝炎疫苗下一個注射期为","mobile":"96709394"},{"message":"B型肝炎疫苗下一個注射期为2017-7-27","mobile":"96709394"}]


echo "</tr>";

echo "</table>";

?>
<a href="guzzle.php"><button type="button" class="btn btn-primary">Send sms alert</button></a>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>



</script>

</div>
</div>
</body>
</html>
