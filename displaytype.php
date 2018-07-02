<?php ob_start();?><!DOCTYPE HTML>
<html>
<head>
<title>Display Vaccine type1</title>
<style>
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
     
    </ul>
   
  </div>
</nav>
		<!-- Nav Bar -->
<div class="jumbotron">
<h1 class="display-3">Current Vaccine Record </h1>
<!--(Adjust vaccine detail eg vaccine name,no of injection (can add and delete), skip day-->
</div>
<div class="jumbotron">
<form action="" method="POST">
<strong><p>** To change to name of the vaccine/Total no of injection,please change the value in the 1st row, values in the other will update accordingly</p ></strong>

<table border='1' cellpadding='10' class="table" id="zero" >
<tr> <th>ID</th><th>Vaccine ID</th> <th>疫苗名稱 (繁體)</th><th>疫苗名称 (简体)</th> <th>Vaccine Name (Eng)</th> <th>Total <br>injection</th>
<th>Nth Injection</th><th>Next Injection Skip(days)</th><th>Delete</th> </tr>
<?php
session_start();
// connect to the database
include('connect-db.php');
// get results from database
//display data in editable table
//PS : each record for each vaccine need to hv a unique id 
//So it can be uniquly identified with, later can EDIT(UPDATE) /DELETE certain specific record.

$result = mysql_query("SELECT * FROM vaccinedetail 
WHERE vaccineid = '" . $_POST['vaccineid'] . "'")//<--- show the specifc type of vaccine taht match the vaccine type in the typeserach.php
or die(mysql_error());
?>
<!--loop through results of database query, displaying them in the table-->
<?php while($row = mysql_fetch_array( $result )){?>
<!--echo out the contents of each row into a table-->
<tr>
<td><input type="text" class="form-control" name = "id[]"  value="<?php echo $row['id'] ?>"></td>
<td><input type="text" class="form-control"name = "vaccineid[]" id ="E1" value="<?php echo $row['vaccineid'] ?>"></td>
<td><input type="text" class="form-control changable" id ="A1" name = "vaccinename1[]" value="<?php echo $row['vaccinename1'] ?>"></td>
<td><input type="text" class="form-control changable1" id ="B1" name = "vaccinename2[]" value="<?php echo $row['vaccinename2'] ?>"></td>
<td><input type="text" class="form-control changable2" id ="C1" name = "vaccinename3[]" value="<?php echo $row['vaccinename3'] ?>"></td>
<td><input type="text" class="form-control changable3" id ="D1" name = "totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>
<td><input type="text" class="form-control"name = "nthinjection[]" value="<?php echo $row['nthinjection'] ?>"></td>
<td><input type="text" class="form-control"name = "skip[]" value="<?php echo $row['skip'] ?>"></td>
<!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
<td><a href="deletedisplaytype.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="50px" onclick="return confirm('Are you sure to delete this record?');"></a></td>

</tr>
<hr>
 <?php }?>
</table>
<br><br>
<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Save change">
</form>
 
<!-- Add new dosage to current vaccine-->
<p>
   <br><button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Add new dosage to current vaccine
   </button>
   <a href="index.html"><button class="btn btn-primary btn-lg" type="button">Back to Home</button></a>
</p>
      <div class="collapse" id="collapseExample">
      <h1 display-3><strong>1. Enter the number of dosage to be added to current vaccine</strong></h1><br><br><br>
      <label><strong> Number of dosages to be added</strong></label><br>
      <input type="number" class="form-control"id="insert-rows-amnt" name="insert-rows-amnt"  />
      <button id="add-row" class="btn btn-primary btn-lg" type="button"> confirm</button>
      <button type="reset" class="btn btn-primary btn-lg" name="reset"> Reset</button>
       </div>
<br>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</div>
</div>

<script>
$('#add-row').click(function() {
  var $tbody, $row, additionalRows;
  var numNewRows = parseInt($('#insert-rows-amnt').val(), 10);
	$('button[type="reset"]').attr('lastCount', parseInt($('#insert-rows-amnt').val(), 10));
  if (isNaN(numNewRows) || numNewRows <= 0) {
    alert('Please enter number of injection');
  } else {

    $tbody = $('table#one tbody ');
    $row = $tbody.find('tr:last');
    var lastRowIndex=($row.index()==-1? 0:$row.index()) +1 ;
    additionalRows = new Array(numNewRows);
    for(i=0;i<numNewRows;i++)
    {
    additionalRows[i]=` <tr data-additional='true'>
    <td>${lastRowIndex}</td>
      
     <td><input type="text" style="width: 100px" name="id[]" readonly placeholder="Leave empty"></td>
     <td><input type="text"  name="vaccineida[]" class="E1" > </td>
	 <td><input type="text" name="vaccinename1a[]"  class="A1 changable" ></td>
	 <td><input type="text" name="vaccinename2a[]"  class="B1 changable1" ></td>
	 <td><input type="text" name="vaccinename3a[]"  class="C1 changable2" ></td>
     <td><input type="text"  class="form-control changable3" id ="D1"  name="totalnoofinjectiona[]"  ></td>
     <td><input type="text"  class="form-control"  name="nthinjectiona[]" value="${lastRowIndex}"></td>	  
     <td><input type="text" name="skipa[]" class="form-control" ></td>
	 <td><textarea rows="3" cols="20"  name="traditionalmessagea[] class="traditional" readonly></textarea> </td>
	 <td><textarea rows="3" cols="20"  name="simplifiedmessagea[]" class="simplified" readonly></textarea> </td>
	 <td><textarea rows="3" cols="20"  name="engmessagea[]" class="eng" readonly></textarea> </td>
  	 </tr>`
      lastRowIndex=lastRowIndex+1;
    }
       $tbody.append(additionalRows.join());
  }
});
</script>

<script>
$('#add-row').click(function() {
  var $tbody, $row, additionalRows;
  var numNewRows = parseInt($('#insert-rows-amnt').val(), 10);
  $('button[type="reset"]').attr('lastCount', parseInt($('#insert-rows-amnt').val(), 10));

  if (isNaN(numNewRows) || numNewRows <= 0) {
    alert('Please enter number of injection');
  } else {

    $tbody = $('table#zero tbody ');
    $row = $tbody.find('tr:last');
    var lastRowIndex=($row.index()==-1? 0:$row.index()) +1 ;
    additionalRows = new Array(numNewRows);
    for(i=0;i<numNewRows;i++)
    {
    additionalRows[i]=`<tr data-additional='true'>

	
	
      <td><input type="text" style="width: 100px" name="id[]" readonly placeholder="Leave empty"></td>

      <td><input type="text"  name="vaccineida[]" class="E1"> </td>
	  <td><input type="text" name="vaccinename1a[]"  class="A1 changable"></td>
	  <td><input type="text" name="vaccinename2a[]"  class="B1 changable1"  ></td>
	  <td><input type="text" name="vaccinename3a[]"  class="C1 changable2" ></td>
      <td><input type="text"  class="form-control changable3" id ="D1"  name="totalnoofinjectiona[]"  ></td>
      <td><input type="text"  class="form-control"  name="nthinjectiona[]" value="${lastRowIndex}"></td>	  
       <td><input type="text" name="skipa[]" class="form-control" ></td>
	  <td><textarea rows="3" cols="20"  name="traditionalmessagea[]" class="traditional" readonly></textarea> </td>
	  <td><textarea rows="3" cols="20"  name="simplifiedmessagea[]" class="simplified" readonly></textarea> </td>
	  <td><textarea rows="3" cols="20"  name="engmessagea[]"class="eng" readonly></textarea> </td>
  	  </tr>`
      lastRowIndex=lastRowIndex+1;
    }
       $tbody.append(additionalRows.join());
  }
});
</script>
<!--****When add new dosage, get the vaccinename & display thems to the newly added row****-->
<script>
$("#add-row").on('click', function() {
  var set = $('#E1').val();
  if (set) {
   $('.E1').val(set);
     }
  });
</script>

<script>
$("#add-row").on('click', function() {
  var set = $('#A1').val();
  if (set) {
   $('.A1').val(set);
     }
  });
</script>
<script>
$("#add-row").on('click', function() {
  var set = $('#B1').val();
  if (set) {
   $('.B1').val(set);
     }
  });
</script>
<script>
$("#add-row").on('click', function() {
  var set = $('#C1').val();
  if (set) {
   $('.C1').val(set);
     }
  });
</script>
<!--****When add new dosage, get the vaccinename & display them to the newly added row****-->

<script>
$("#add-row").on('click', function() {
  var set = $('#A1').val();
  if (set) {
   $('.traditional').val(set+"\n下一個注射期為");
     }
  });
</script>
<script>
$("#add-row").on('click', function() {
  var set = $('#B1').val();
  if (set) {
   $('.simplified').val(set+"\n下一个注射期为");
     }
  });
</script>
<script>
$("#add-row").on('click', function() {
  var set = $('#C1').val();
  if (set) {
   $('.eng').val(set+"\nNext injection period will be");
     }
  });
</script>

<script>
$('button[type="reset"]').click(function(){
  var cnt = $('button[type="reset"]').attr('lastCount');
  for(var i=0; i<cnt; i++){
  	$('table#zero tbody tr[data-additional]:nth-last-child(' + (cnt-i) + ')').remove();
  }
});
</script>
<script>
<!--To change the value of the rows according to the 1st row value-->
$("#A1").keyup(function() {
    $(".changable").val($("#A1").val());
});
$("#B1").keyup(function() {
    $(".changable1").val($("#B1").val());
});
$("#C1").keyup(function() {
    $(".changable2").val($("#C1").val());
});
$("#D1").keyup(function() {
    $(".changable3").val($("#D1").val());
});
</script>
</body>
</html>
<?php 
// connect to the database,save updated multiple records to the database at once
//*******************UpDATE current record(s)*********************************
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
    foreach( $_POST['vaccineid'] as $index => $vaccineid ) {
    $id = mysql_real_escape_string($_POST['id'][$index]);
    /* Escape string queries */
	    $data1 = mysql_real_escape_string($vaccineid);
		$data2 = mysql_real_escape_string($_POST['vaccinename1'][$index]);
		$data3 = mysql_real_escape_string($_POST['vaccinename2'][$index]);
		$data4 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
		$data5 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
        $data6 = mysql_real_escape_string($_POST['nthinjection'][$index]);
		$data7 = mysql_real_escape_string($_POST['skip'][$index]);
		
    mysql_query(
    "UPDATE 
      vaccinedetail SET vaccineid ='$data1', 
      vaccinename1 = '$data2',
      vaccinename2 = '$data3',
      vaccinename3 = '$data4',
      totalnoofinjection ='$data5', 
      nthinjection ='$data6', 
      skip ='$data7' 
    WHERE id = $id")  // need a where clause to update specific record
        or die(mysql_error()); 
    header("Location: index.html");
}
}
?>
<?php 
// connect to the database,save updated multiple records to the database at once
//***********INSERT NEWLY ADDED DOSAGE to mysql*************************
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
    foreach( $_POST['vaccineida'] as $index => $vaccineid ) {
        /* Escape string queries */
	    $vaccineid = mysql_real_escape_string($vaccineid);
		$vaccinename1 = mysql_real_escape_string($_POST['vaccinename1a'][$index]);
		$vaccinename2 = mysql_real_escape_string($_POST['vaccinename2a'][$index]);
		$vaccinename3 = mysql_real_escape_string($_POST['vaccinename3a'][$index]);
		$totalnoofinjection = mysql_real_escape_string($_POST['totalnoofinjectiona'][$index]);
        $nthinjection = mysql_real_escape_string($_POST['nthinjectiona'][$index]);
		$date = mysql_real_escape_string($_POST['datea'][$index]);
		$nextdate = mysql_real_escape_string($_POST['nextdatea'][$index]);
		$skip = mysql_real_escape_string($_POST['skipa'][$index]);
		$traditionalmessage= mysql_real_escape_string($_POST['traditionalmessagea'][$index]);
		$simplifiedmessage= mysql_real_escape_string($_POST['simplifiedmessagea'][$index]);
		$engmessage= mysql_real_escape_string($_POST['engmessagea'][$index]);
		
			mysql_query("INSERT vaccinedetail SET vaccineid='$vaccineid', vaccinename1='$vaccinename1',vaccinename2='$vaccinename2',vaccinename3='$vaccinename3', 
               totalnoofinjection='$totalnoofinjection',nthinjection ='$nthinjection ',
			   date='$date',nextdate='$nextdate',skip='$skip',traditionalmessage='$traditionalmessage',
			   simplifiedmessage='$simplifiedmessage',engmessage='$engmessage'")
        or die(mysql_error()); 
    header("Location: index.html");
}
}
?>