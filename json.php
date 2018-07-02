<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Patient Vaccination Alert (30 days)(繁體) </title>
<style> 

 <!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing: 0; 
}

td, th {  
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background:#e6e6e6;  /* Darken header a bit */
    font-weight: bold;
	border: 3px solid black;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
tr:nth-child(even) td { background: #cce6ff; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */        
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; }  
/* Hover cell effect! */
</style>
</head>
<body>

<div class="jumbotron">
<h1 display-1 align="center">Patient Vaccination Alert</h1><br><br>
(Tomorrow) (繁體)</div>

<div class="jumbotron">
<table align="center" border='5' cellpadding='25'>

<tr> 
<th>ID</th> <th>病人編號</th> <th>疫苗編號</th><th>疫苗名稱 (繁體)</th>
<th>總注射次數</th> <th>第幾次注射</th>
<th>注射日期</th> <th>下一個注射日期</th> <th>注射相日期</th><th>信息</th><th>tel</th><th></th> <th></th>
</tr>
<?php
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

//$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE NOW() >= nextdate - INTERVAL 1 DAY and NOW() <= nextdate AND language = '繁體'")
//"SELECT * FROM patientvaccinedetail WHERE NOW() >= nextdate - INTERVAL 30 DAY and NOW() <= nextdate AND language = '" . $_GET['language'] . "'")

//or die(mysql_error());
// display data in table

// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result ,MYSQL_ASSOC)) {
// echo out the contents of each row into a table

echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['patientid'] . '</td>';
echo '<td>' . $row['vaccineid'] . '</td>';
echo '<td>' . $row['vaccinename1'] . '</td>';
echo '<td>' . $row['totalnoofinjection'] . '</td>';
echo '<td>' . $row['nthinjection'] . '</td>';
echo '<td>' . $row['date'] . '</td>';
echo '<td>' . $row['nextdate'] . '</td>';
echo '<td>' . $row['skip'] . '</td>';
echo '<td>' . $row['traditionalmessage'] ."<br />";
echo '<td>' . $row['telMobile'] . '</td>';



//echo '<td>' . $row['traditionalmessage'] ."<br />". $row['nextdate']. '</td>';

//echo json_encode(array($row['patientid'].$row['traditionalmessage'].$row['telMobile‌​']));
//print_r ([$row['patientid'],$row['traditionalmessage'],$row['telMobile']]);

//**********Convert the array into json*******************
//$data_array = [$row['traditionalmessage'],$row['telMobile']];

//print_r(array_values($data_array));
$data = [];
//foreach ($row as $rowk) {
      $data = array(
          'message'   => $row['traditionalmessage'],
          'phone'   => $row['telMobile']
          
          );
		  
// }
 print_r(json_encode($data));


//foreach($data_array as $key => $value){
 //$new_data_array[urlencode($key)] = urlencode($value);
// }
// $data_json_url = json_encode($new_data_array);
//$data_json = urldecode($data_json_url);

//echo $data_json;

//print_r([$row['telMobile']]);

//print_r($row['patientid'].$row['traditionalmessage'].$row['telMobile']."<br/>");
//echo json_encode($row['patientid'].$row['traditionalmessage'].$row['telMobile']);
//echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
//echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";



//$array = ["patientid" =>$row['patientid'], "traditionalmessage" =>$row['traditionalmessage'],
//  "telMobile" =>$row['telMobile']];
//  echo $array;
// close table>

}
echo "</table>";

?>
<p><a href="new.php">Add a new record</a></p>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>



</script>

</div>
</div>
</body>
</html>