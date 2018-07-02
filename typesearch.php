<?php ob_start();?>
<?php session_start();?><!DOCTYPE HTML>
<html>
<head>
<title>案件類型</title><meta charset="utf-8">
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

#hide,#hide1,#hide2,#hide3,#hide4,#hide5,#hide7,#hide8 {

     display:none;
  
        position:relative;
        width: 538px;
        margin: 0 auto;
}


/* desktop devices  */
@media (min-width: 769px) {
  
#hide,#hide1,#hide2,#hide3,#hide4,#hide5,#hide6,#hide7,#hide8 {
  
    display:table-cell; 
        margin: 0 auto;      
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

<!-- Nav Bar -->
<?php include ('header.php');?>

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
<!--Modal-->
<!-- Button trigger modal -->
  
  <a  href="#MyModal" data-toggle="modal"  data-target="#myModal"title="Add new case"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>

  &nbsp;
    &nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a>

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
<?php 
     $amountOfDigits = 5;
     $numbers = range(0,9);
     shuffle($numbers);

     for($i = 0;$i < $amountOfDigits;$i++)
     $digits .= $numbers[$i];?> 
  
     <form action="newtype.php" method="post">
     <!--<strong></strong><br> <input type="hidden" name="id" value="<?php echo $id; ?>" /><br/>-->
     <div class="form-group">
     <!--<p>Vaccine ID : * </p>--> <input type="hidden" style="width: 250px" name="vaccineid" class="form-control" value="<?php echo 'C'.' '.$digits; ?>" 
           readonly>




 <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">案件類型*</label>
      <div class="col-sm-5">
<select class="form-control "  name="casetype"  onChange="javascript:return setDropDown();">
    <option value="default" disabled >選擇類型</option> <!-- default option -->
    <?php
  include('connect-db.php');

$sql = "SELECT * FROM casetype";

$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {?>
<option value="<?php echo $row['id']; ?>" ><?php echo $row['typename1']; ?></option>
<!-- <option value="<?php $row['typeid']; ?>" <?php if ($row['typeid'] == $_GET['typeid']) //echo 'selected="selected"'; ?> ><?php// echo $row['typename1']; ?></option>
-->
    <?php  } ?>
    
    </select>      </div>
    </div>



    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">案件名稱* </label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="vaccinename1" required  />
      </div>
    </div>
<!--
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">案件名称 (简体)</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="vaccinename2" >
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">Case Name (Eng):</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="vaccinename3" >
      </div>
    </div>-->

     <br/>
<!--
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">Case Description:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="vaccinedescription" >
      </div>
    </div>-->

     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">
會面總數*</label>
      <div class="col-sm-5">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="totalnoofinjection" required />
      </div>
    </div>

        </div>
        <p>* 必填</p>
       
	   <button type="submit" class="btn btn-outline-primary" name="submit">提交</button>
        <button class="btn btn-outline-primary" type="reset" name="reset">清空</button>
  
  </div>
    </form>
                            
        </div>
        
      </div>
    </div>
  </div>  
 
<!--&nbsp;&nbsp;<a href="javascript:history.go(-1)"><img src="images/backback.jpeg" width="28px" title="back"></a>-->
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<h5>案件類型</h5><hr>

<!--Select dropdown of the case type-->
<div class="container">
<select class="form-control " style="width: 250px" name="ForceSelection" id="select" onChange="javascript:return setDropDown();">
    <option value="default" >選擇案件類型</option> <!-- default option -->
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
   <span>
<div class="input-group"> <span class="input-group-addon">過濾</span>
<input id="filter" type="text" class="" placeholder=""></span>
</div>
<br>

<table id="hey" class="table table-hover" cellpadding='10' class="table table-striped" id="zero">
<thead>
<tr> 
<!--<th scope="row">ID</th>  類型-->
 <th width="20%">案件</th>
 <!--<th id="hide">案例类型 (简体)</th> <th id="hide1">Case Name (Eng)</th> --><th width="20%" id="hide6">會面總數</th>
<!--<th>Nth  njection</th>
<th>Next Injection Skip(days)</th>-->
 </tr></thead>
 
<?php

// connect to the database
include('connect-db.php');

//display data in editable table
//PS : each record for each vaccine need to hv a unique id 
//So it can be uniquly identified with, later can EDIT(UPDATE) /DELETE certain specific record.

$result = mysql_query("SELECT * FROM casedetail 
Group by vaccineid ")//<--- show the specifc type of vaccine taht match the vaccine type in the typeserach.php
or die(mysql_error());
?>

<?php //$result = mysql_query("SELECT*
//FROM patientcasedetail WHERE patientid = '" . $_SESSION['three'] . "' AND status= 'open' Group by vaccineid")  or die(mysql_error());?>            <!-- display data in an editable table-->

<!--loop through results of database query, displaying them in the table-->
<?php while($row = mysql_fetch_array( $result)){?>
<!--echo out the contents of each row into a table-->
<tbody class="searchable">

<tr>

<td style="display:none";><?php echo $row['typeid'];?></td>

<td width="20%"><a href="typesearch1.php?vaccineid=<?php echo "$row[vaccineid]";?>&typeid=<?php echo "$row[typeid]"; ?>"><?php echo $row['vaccinename1']; ?></a></td> 
<!--
<td id="hide2"><?php echo $row['vaccinename2'];?></td>
<td id="hide3"><?php echo $row['vaccinename3'];?></td>-->

<!-- Pass the vaccine id through URL to the next page-->

<td width="20%"><?php echo $row['totalnoofinjection'] ?></td>
<!--<td><?php echo $row['nthinjection'] ?></td>
<td><?php echo $row['skip'] ?></td>-->
<!--<td id="hide5"><?php echo $row['vaccinedes'] ?></td>-->

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

<!--Filter the vaccine type -->

<script>

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
      casedetail SET vaccineid ='$data1', 
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
    
      mysql_query("INSERT casedetail SET vaccineid='$vaccineid', vaccinename1='$vaccinename1',vaccinename2='$vaccinename2',vaccinename3='$vaccinename3', 
               totalnoofinjection='$totalnoofinjection',nthinjection ='$nthinjection ',
         date='$date',nextdate='$nextdate',skip='$skip',vaccinedes='$vaccinedes',traditionalmessage='$traditionalmessage',
         simplifiedmessage='$simplifiedmessage',engmessage='$engmessage'")
        or die(mysql_error()); 
    header("Location: index.php");
}
}
?>