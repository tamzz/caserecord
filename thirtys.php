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
<!-- Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h2>Vaccine Management</h2></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h3>| Home |</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><h3>| Vaccine Type |</h3></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="search.php"><h3>| Patient Injection Record |</h3></a>
      </li>
     
    </ul>
   
  </div>
</nav>
		<!-- Nav Bar -->
<div class="jumbotron">
<h1 class="display-3" align="center">病人注射提醒(明天)</h1><br><br>
</div>

<div class="jumbotron">
<!--<table class="table-striped align="center" border='5' cellpadding='25'>-->
<table class="table-striped align="center" border='1'>

<tr> 
<th>ID</th> <th>病人编号</th> <th>
疫苗编号</th><th>疫苗名称 (简体)</th>
<th>总注射次数</th> <th>
第几次注射</th>
<th>注射日期</th> <th>下一个注射日期</th> <th>注射相日期</th><th>信息</th><th>手机号码</th><th>
国家代码</th> 
</tr>
<?php
session_start();

// connect to the database
include('connect-db.php');

$result = mysql_query("SELECT patientvaccinedetail.id,patientvaccinedetail.patientid, patientvaccinedetail.vaccineid, patientvaccinedetail.vaccinename2,patientvaccinedetail.totalnoofinjection,
patientvaccinedetail.nthinjection,patientvaccinedetail.date,patientvaccinedetail.nextdate,patientvaccinedetail.skip, patientvaccinedetail.simplifiedmessage, patients.telMobile, patients.telMobileCountryCode
FROM patientvaccinedetail
 JOIN patients ON patientvaccinedetail.patientid=patients.patientNo
WHERE DATEDIFF(NOW(), nextdate) = -30 AND language ='简体'");

// loop through results of database query, displaying them in the table
$specific = [];
while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {
// echo out the contents of each row into a table

echo "<tr>";
echo '<td width="100px">' . $row['id'] . '</td>';
echo '<td width="200px">' . $row['patientid'] . '</td>';
echo '<td width="200px">' . $row['vaccineid'] . '</td>';
echo '<td width="200px">' . $row['vaccinename2'] . '</td>';
echo '<td width="100px">' . $row['totalnoofinjection'] . '</td>';
echo '<td width="100px">' . $row['nthinjection'] . '</td>';
echo '<td width="200px">' . $row['date'] . '</td>';
echo '<td width="200px">' . $row['nextdate'] . '</td>';
echo '<td width="200px">' . $row['skip'] . '</td>';
echo '<td>' . $row['simplifiedmessage'] ."<br />";
echo '<td>' . $row['telMobile'] . '</td>';
echo '<td>' . $row['telMobileCountryCode'] . '</td>';

//**********Convert the array into json*******************

      $specific[] = ["countryCode" => $row["telMobileCountryCode"],
                     "phone" => $row["telMobile"],
					 "message" => $row["simplifiedmessage"]
					 
					 
					 ];
				
}
//End of while loop
$result = json_encode($specific,JSON_UNESCAPED_UNICODE);
//To remove the square bracket of the JSON 
$result1 = trim($result,'[]');

echo $result1;
$_SESSION['hi'] = "$result1";
//echo $result;
echo "</tr>";
echo "</table>";
?>

<br><br>
<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
</script>
</div>
</div>
</body>
</html>