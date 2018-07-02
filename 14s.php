<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Patient Vaccination Alert (30 days) </title>
<style>
 <!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</style>
</head>
<body>
<!-- Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;"> 
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h2>Vaccine Management</h2></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h5>| Home |</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><h5>| Vaccine Type |</h5></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="search.php"><h5>| Patient Injection Record |</h5></a>
      </li>  
	  
    </ul> 
  </div>
</nav>
		<!-- Nav Bar -->

<div class="jumbotron">
<h1 align="center">Display Patient Vaccination Alert (14 days)(简体)(</h1><br><br></div>

<div class="jumbotron">
<table align="center" border='5' cellpadding='25'>

<tr> 
<th>ID</th> <th>病人编号</th> <th>
疫苗编号</th><th>疫苗名称 (简体)</th>
<th>总注射次数</th> <th>
第几次注射</th>
<th>注射日期</th> <th>下一个注射日期</th> <th>注射相日期</th><th>信息</th><th></th> <th></th>
</tr>
<?php
/*VIEW.PHP Displays all data from 'players' table*/
// connect to the database
include('connect-db.php');
// get results from database
$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE DATEDIFF(NOW(), nextdate) = -14 AND language ='简体'")

//$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE NOW() >= nextdate - INTERVAL 14 DAY and NOW() <= nextdate AND language = '简体'")
//"SELECT * FROM patientvaccinedetail WHERE NOW() >= nextdate - INTERVAL 30 DAY and NOW() <= nextdate AND language = '" . $_GET['language'] . "'")

or die(mysql_error());
// display data in table

// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {
// echo out the contents of each row into a table

echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['patientid'] . '</td>';
echo '<td>' . $row['vaccineid'] . '</td>';
echo '<td>' . $row['vaccinename2'] . '</td>';
echo '<td>' . $row['totalnoofinjection'] . '</td>';
echo '<td>' . $row['nthinjection'] . '</td>';
echo '<td>' . $row['date'] . '</td>';
echo '<td>' . $row['nextdate'] . '</td>';
echo '<td>' . $row['skip'] . '</td>';
echo '<td>' . $row['simplifiedmessage'] ."<br />".$row['nextdate']. '</td>';

echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";
}
// close table>

echo "</table>";
?>
<p><a href="new.php">Add a new record</a></p>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>