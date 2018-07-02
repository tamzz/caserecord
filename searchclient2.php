<?php ob_start();?>
<?php session_start();?><!DOCTYPE HTML>
<html>
<head>
<title>案件</title><meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	
	/* Narrow the height of tr*/

#hey>tbody>tr>td{
  height:10px;
  padding:0px;
  border-top: 0px;
}   

#hey{
	
	font-weight:normal;
}

/* Bootstrap 4 modal center, to correctly center the modal, cite "modal id" then .modal-dialog, like in CSS below */

#MyModal .modal-dialog {
    transform: translate(0, -55%);
    top: 40%;
    margin: 0 auto;
    width:350px;

}


/*  mobile devices  */

#hide,#hide2,#hide3,#hide4,#hide5,#hide6,#hide7,#hide8,#hide000 {

	   display:none;
	
        position:relative;
        width: 538px;
        margin: 0 auto;
}


/* desktop devices  */
@media (min-width: 769px) {
	
#hide,#hide2,#hide3,#hide4,#hide5,#hide6,#hide7,#hide8 {
	
	  display:table-cell; 
        margin: 0 auto;      
}

#hide000{

  display:none;
}
}


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
  
 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
 <!-- Custom styles for this template -->
 <link href="css/carousel.css" rel="stylesheet">
<script src="https://use.fontawesome.com/ead802b541.js"></script>
</head>
<body>

<div class="container">
<!--******Get the client personal info and put them in the session ********-->
 <!-- patient info above the table-->
 <!--<table class="table-sm" align="left" border='0' cellpadding='10' >-->
<?php
include('connect-db.php');

$result = mysql_query("SELECT *FROM clients
WHERE patientNo = '". $_GET['clientid']."'");?>
<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>


<?php $row['patientNo'] ?>

<?php //echo $row['patienthkid'] ?>
<?php  $row['patientnamec']; ?>
<?php //echo $row['patientnamee']; ?>
<?php //echo $row['gender'] ?>
<?php //echo $row['contactno'] ?>
<?php //echo $row['email'] ?>

 
<?php 
$_SESSION['patientNo333'] = $row['patientNo']; 
 $_SESSION['clienthkid333'] = $row['patienthkid']; 
 $_SESSION['clientnamec333'] = $row['patientnamec']; 
 $_SESSION['clientnamee333'] = $row['patientnamee']; 
 $_SESSION['clientgender333'] = $row['gender']; 
 $_SESSION['clientcontactno333'] = $row['contactno']; 
 $_SESSION['clientemail333'] = $row['email']; ?>
 
<!--******Get the client personal info and put them in the session ********-->
<?php //echo  $_SESSION['clientemail333']  ;?>
</div>

<?php } ?>



<!-- Nav Bar -->
<?php include ('header.php');
?>
<!-- Nav Bar -->


<!-- The Wrapper box that wrap the whole main content-->
 <div class="main-wrap" id="main-content">
              <div class="wrapper" style=" background-color: #D6D6D6;" >
                    <main id="page-content-wrapper" role="main" >
                        						   
                     <div class="content"> 
<!--==============FORM started here, it submit to displaytype.php ,so that page can can the value of the form using $_POST['']-->   
<!--==============FORM ended here, it submit to displaytype.php ,so that page can can the value of the form using $_POST['']-->
<!--<strong><p>** To change to name of the vaccine/Total no of injection,please change the value in the 1st row, values in the other will update accordingly</p ></strong>-->
<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>
    <a href="searchclient3.php?vaccineid=<?php echo "$row[vaccineid]";?>&clientid=<?php echo $_GET['clientid']; ?>"><?php echo $row['vaccinename1']; ?></a>			   
  
<!-- Button trigger modal -->                                                                                          
  <a  href="#MyModal" data-toggle="modal"  data-target="#myModal"title="添加新案件"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
  <a  href="previousrecord.php?clientid=<?php echo $_GET['clientid']; ?>" title="完成案件"><i class="fa fa-clipboard fa-2x" aria-hidden="true"></i></a>
  <!--
  &nbsp;<a href="oldrecord.php" title="View inactive injection record" alt="Submit" /><i class="fa fa-history fa-2x" aria-hidden="true"></i></a>
    &nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>
	-->
	<br><br>	
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">新案件</h4>   
        </div>
        <div class="modal-body">
		
		<div class="container">
<form action="newpatient.php" method="post" align="center">
   <div class="form-group row">
   <!-- <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">客戶 ID</label>-->
   <div class="col-sm-10">
   <input type="hidden" class="form-control form-control" id="lgFormGroupInput" name="patientid" value="<?php echo $_SESSION['patientNo333'];?>">
   </div></div>
   <?php echo $_SESSION['clientnamec3330'];?>
    <div class="form-group row">
    <!-- <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">香港身份證</label>-->
    <div class="col-sm-10">
    <input type="hidden" class="form-control form-control" id="smFormGroupInput" name="patienthkid" value="<?php echo $_SESSION['clienthkid333'];?>">
      </div>
    </div>
	<div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">來源</label>
      <div class="col-sm-10">
<select  name="source" class='form-control form-control' id="lgFormGroupInput">
<option value="Call">來電訪問</option>
<option value="Home Visit">家訪</option>
<option value="Street Station">街站</option>
</select>
   </div>
    </div>
	
<div class="form-group row">
<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">案件類型</label>
      <div class="col-sm-10">
 <?php
include('connect-db.php');

$sql = "SELECT DISTINCT(typename1),id AS id,typename1 FROM casetype";
$result = mysql_query($sql);
echo "<select name='casetypeid' class='form-control' >";

while ($row = mysql_fetch_array($result)) {
	
echo "<option value='" . $row['id'] . "'>" . $row['typename1'] . "</option>";
}
echo "</select>";?></div>
    </div>
	
	 <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">案件</label>
      <div class="col-sm-10">
	  
<?php  include('connect-db.php');

$sql = "SELECT DISTINCT(vaccinename1),vaccineid AS vaccineid,vaccinename1 FROM casedetail";
$result = mysql_query($sql);
echo "<select name='caseid' class='form-control' >";

while ($row = mysql_fetch_array($result)) {
	
echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename1'] . "</option>";
}
echo "</select>";?>      
</div></div>
	
<div class="form-group row">
<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">性質</label>
<div class="col-sm-10">
<select name="nature"  class='form-control'>
<option value="Referral out">轉介</option>
<option value="Internal matter">內部處理</option>
</select>
</div>
</div>
<!-- hide it set default language to traditional chinese-->
 <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label"></label>
      <div class="col-sm-10">
 <select name="language" style="display:none"  class="form-control">
	 
    <option value="繁體">繁體</option>
    
    </select> </div>
    </div>
  
 
<div class="form-group row">
<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">提醒</label>
<div class="col-sm-10">
<select name="smsorcall[]"  class="form-control" multiple>
<option value="SMS">短信</option>
<option value="Email">電子郵件</option>
<option value="Call">來電</option>
</select>
</div>
</div>
  
</div>
<!--
<br><p><strong>* Required</p></p>-->

 <button type="submit" class="btn btn-outline-primary" name="submit"> 提交</button>
<!--<button class="btn btn-outline-primary" class="close_popup" >Reset</button>-->
</div>

</form>
                            
        </div>
        
      </div>
    </div>
  </div>	
	<!--****display client personal info*****--> 
&nbsp;&nbsp;&nbsp;&nbsp;
<!--<h5>案件</h5>--> <?php echo  "<h5>".$_SESSION['clientnamec3330'].' ' .$_SESSION['clientgender333'].' '. $_SESSION['clientcontactno333']. "</h5>";?>


<hr>   


<!--Select dropdown of the case type-->
<div class="container">
<select class="form-control " style="width: 250px" name="ForceSelection" id="select" onChange="javascript:return setDropDown();">
    <option value="" disabled >選擇案件</option> <!-- default option -->
    <?php
	include('connect-db.php');

$sql = "SELECT * FROM casetype";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {?>
<option value="<?php echo $row['id']; ?>" ><?php echo $row['typename1']; ?></option>
<!-- <option value="<?php $row['typeid']; ?>" <?php if ($row['typeid'] == $_GET['typeid']) //echo 'selected="selected"'; ?> ><?php// echo $row['typename1']; ?></option>
-->
	  <?php  } ?>
</select><br>
   
<!-- Filter the vaccine type-->
<div class="input-group"> <span class="input-group-addon">過濾</span>
<input id="filter"  width="50px" type="text" class="" placeholder="">
</div>
<br>
</div>
<!-- container-->

<div class="container">
<table id="hey" class="table table-hover table-sm" cellpadding='10' class="table table-striped" id="zero">
<thead>

<tr> 
<!--<th scope="row">ID</th>-->
 <th>當前案件</th>   
<!--<th>Nth Injection</th>
<th>Next Injection Skip(days)</th>-->
 </tr></thead>
<?php
// connect to the database
include('connect-db.php');
//display data in editable table
//PS : each record for each vaccine need to hv a unique id 
//So it can be uniquly identified with, later can EDIT(UPDATE) /DELETE certain specific record.
$result = mysql_query("SELECT * FROM patientvaccinedetail 
WHERE patientid = '". $_GET['clientid']."' 
AND (done != 'done' || done = ' ')

 GROUP BY vaccineid ORDER BY id DESC")

or die(mysql_error());
?>

<?php //$result = mysql_query("SELECT*
//FROM patientvaccinedetail WHERE patientid = '" . $_SESSION['three'] . "' AND status= 'open' Group by vaccineid")	or die(mysql_error());?>            <!-- display data in an editable table-->

<!--loop through results of database query, displaying them in the table-->
<?php while($row = mysql_fetch_array( $result)){?>
<!--echo out the contents of each row into a table-->
<tbody class="searchable">

<tr>
<td width="25%" id="hide000"><?php echo $row['casetypeid']; ?></td>
<td width="15%"><a href="searchclient3.php?vaccineid=<?php echo "$row[vaccineid]";?>&clientid=<?php echo $_GET['clientid']; ?>"><?php echo $row['vaccinename1']; ?></a></td>			   
<!--<td width="15%"><?php// echo $row['id'];?></td>-->
<td width="15%"><?php //echo $row['vaccinename3'];?></td>

<!-- Pass the vaccine id through URL to the next page-->
<!--
<td><a href="typesearch1.php?vaccineid=<?php echo "$row[vaccineid]";?>&typeid=<?php echo "$row[typeid]"; ?>"><?php echo $row['vaccinename3']; ?></a></td>			   
<td><?php echo $row['totalnoofinjection'] ?></td>
<td><?php echo $row['nthinjection'] ?></td>
<td><?php echo $row['skip'] ?></td>
<td><?php echo $row['vaccinedes'] ?></td>-->

<!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
<!--<td><a href="deletedisplaytype.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="50px" onclick="return confirm('Are you sure to delete this record?');"></a></td>-->
</tr>

</tbody>

 <?php }?>
</table>
</div>

<br><br>
<!--<input type="submit" class="btn btn-outline-primary" name="submit" value="Save change">-->
</form>
<!-- Add new dosage to current vaccine-->
<p>
   <!--<br><button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Add new dosage to current vaccine
   </button>-->
    </p>
      <div class="collapse" id="collapseExample">
	  <div class="card-block">
	  
      <p>Input newly added injection dosage</p><br>
      <input type="number" class="form-control"id="insert-rows-amnt" name="insert-rows-amnt" style="width: 250px"  />
      <br><br><button id="add-row" class="btn btn-outline-primary" type="button"> Confirm</button>
      <button type="reset" class="btn btn-outline-primary" name="reset"> Reset</button>
      </div>
     <br>
     </div>
	 <!-- Close the wrapper-->
	  
	 </div>
                            </div>
                        </main>   
                   </div> 	
              </div>
        </div>  
		

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</div>
<!--   ************To add new rows to the page according to user input value********************-->
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
	 <td><input type="text" name = "vaccinedesa[]" class="form-control F1" ></td>

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
	   <td><input type="text" name = "vaccinedesa[]" class="form-control F1"></td>
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

<!--   ************To add new rows to the page according to user input value********************-->

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

<script>
$("#add-row").on('click', function() {
  var set = $('#F1').val();
  if (set) {
   $('.F1').val(set);
     }
  });
</script>
<!--**** end of When add new dosage, get the vaccinename & display them to the newly added row****-->
<script>
$("#add-row").on('click', function() {
  var set = $('#A1').val();
  if (set) {
   $('.traditional').val(set+"\n下一個次見面日期為");
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

<!--Filter the vaccine type -->

<script>
<!--  filter-->
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
<!-- select filter-->
<script>
$(document).ready(function($) {
 
  $('#select').change(function() {
	
 var selection = $(this).val();
	
 var dataset = $('table').find('tr');
  
 dataset.show();
    
 dataset.filter(function(index, item) {
 return $(item).find('td:first-child').text().split(',').indexOf(selection) === -1;
 }).hide();

  });
});

</script>

<script>

$('.modal-content').resizable({
      //alsoResize: ".modal-dialog",
      minHeight: 300,
      minWidth: 300
    });
    $('.modal-dialog').draggable();

    $('#myModal').on('show.bs.modal', function() {
      $(this).find('.modal-body').css({
        'max-height': '100%'
      });
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
		$data8 = mysql_real_escape_string($_POST['vaccinedes'][$index]);

		
    mysql_query(
    "UPDATE 
      vaccinedetail SET vaccineid ='$data1', 
      vaccinename1 = '$data2',
      vaccinename2 = '$data3',
      vaccinename3 = '$data4',
      totalnoofinjection ='$data5', 
      nthinjection ='$data6', 
      skip ='$data7',
	  vaccinedes='$data8'
    WHERE id = $id")  // need a where clause to update specific record
        or die(mysql_error()); 
    header("Location: index.php");
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
		$vaccinedes = mysql_real_escape_string($_POST['vaccinedesa'][$index]);
		$traditionalmessage= mysql_real_escape_string($_POST['traditionalmessagea'][$index]);
		$simplifiedmessage= mysql_real_escape_string($_POST['simplifiedmessagea'][$index]);
		$engmessage= mysql_real_escape_string($_POST['engmessagea'][$index]);
		
			mysql_query("INSERT vaccinedetail SET vaccineid='$vaccineid', vaccinename1='$vaccinename1',vaccinename2='$vaccinename2',vaccinename3='$vaccinename3', 
               totalnoofinjection='$totalnoofinjection',nthinjection ='$nthinjection ',
			   date='$date',nextdate='$nextdate',skip='$skip',vaccinedes='$vaccinedes',traditionalmessage='$traditionalmessage',
			   simplifiedmessage='$simplifiedmessage',engmessage='$engmessage'")
        or die(mysql_error()); 
    header("Location: index.php");
}
}
?>