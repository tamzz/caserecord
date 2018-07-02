<?php ob_start();?>
<?php session_start();?><!DOCTYPE HTML>
<html>
<head>
<title>案件類型</title><meta charset="utf-8">
<style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
	/* Narrow the height of tr*/

#hey>tbody>tr>td{
  height:10px;
  padding:0px;
  border-top: 0px;
}  



 /*--Print only the table of the page--*/
   @media print
{
	
	 @page {size: A4 landscape;max-height:100%; max-width:100%;}

body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
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
  <!-- Nav Bar -->
<?php include ('header.php');?>

<!-- Nav Bar -->
<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                     <main id="page-content-wrapper" role="main" >
                      
						
                      <div class="content"> 
								
									<!--Modal-->

   <!-- Button trigger modal -->
<div class="container-fluid">

    <div class="modal fade" id="MyModal">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    New Vaccine
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
							
							
							
                                <!--=======================================FORM================================================================-->
      <?php 
     //Generate random no that dont repeat
     $amountOfDigits = 4;
     $numbers = range(0,9);
     shuffle($numbers);

     for($i = 0;$i < $amountOfDigits;$i++)
     $digits .= $numbers[$i];
     ?>
      <form action="newtype.php" method="post"><br>
        <!--<strong></strong><br> <input type="hidden" name="id" value="<?php echo $id; ?>" /><br/>-->
        <div class="form-group">
          <!--<p>Vaccine ID : * </p>--> <input type="hidden" style="width: 250px" name="vaccineid" class="form-control" value="<?php echo 'VI'.' '.$digits; ?>" 
           readonly>
         <p>疫苗名稱 (繁體): *</p> <input type="text" style="width: 250px"  name="vaccinename1" class="form-control" ><br/>
           <p>疫苗名称 (简体): * </p> <input type="text" style="width: 250px" name="vaccinename2" class="form-control"><br/>
         <p>Vaccine Name (Eng): *</p><input type="text" style="width: 250px" name="vaccinename3" class="form-control"><br/>
           <p>Vaccine Description: * </p><input type="text"  style="width: 250px" name="vaccinedescription" class="form-control"><br/>
          <p>Total number of Injection: *</p> <input type="number" style="width:250px" name="totalnoofinjection" class="form-control"><br/></div>
        <p>* Compulsory field</p>
        <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
        <button class="btn btn-outline-primary" type="reset" name="reset">Reset</button>
    </div>
    </form>


                            </div>
                        </div>
                    </div>
                </div>
         </div>
        </div>
    </div>

<br>
<!-- POP UP NEW MODAL  HIde for now -->

    <!--  <a  href="#MyModal" data-toggle="modal"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>-->
      									
			&nbsp;<a href="javascript:history.go(-1)"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
			&nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a><br>

<form action="" method="POST">

<div class="div4">
<br><h5> 案件類型 </h5><hr>
<select class="form-control " style="width: 250px" name="ForceSelection" id="ForceSelection" onChange="javascript:return setDropDown();">
<option value="default" disabled  >選擇案件類型</option> <!-- default option -->
<?php
include('connect-db.php');
   $sql = "SELECT *FROM casetype";
   $result = mysql_query($sql);
   while ($row = mysql_fetch_array($result)) {?>
    <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $_GET['typeid']) echo 'selected="selected"'; ?> ><?php echo $row['typename1']; ?></option>
	<!--    <option value="<?php $row['typeid']; ?>" <?php if ($row['typeid'] == $_GET['typeid']) //echo 'selected="selected"'; ?> ><?php// echo $row['typename1']; ?></option>
-->
	<?php  } ?>
    </select><br>  
<!--*****************Below, then 3 input field is getting same value as table below,
when one of the 3 are changed, other row value change accordingly********************-->
<table class="table-sm" align="left" border='0' cellpadding='10' >
<?php include('connect-db.php');

$result = mysql_query("SELECT *FROM casedetail
WHERE vaccineid ='". $_GET['vaccineid']."' GROUP BY vaccineid");?>
<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<th> &nbsp; &nbsp;案件名稱 </th>
<tr>
<!--**change one of those below, all other row will chnage accordingly, the result is hidden for now**-->
<td><input type="text" class="form-control"   id ="A1" value="<?php echo $row['vaccinename1'] ?>"></td>
<!--<td><input type="text" class="form-control"   id ="B1" value="<?php echo $row['vaccinename2'] ?>"></td>
<td><input type="text" class="form-control"   id ="C1" value="<?php echo $row['vaccinename3'] ?>"></td>-->
  
 <?php 

 $_SESSION['totalnoofinjection'] = $row['totalnoofinjection']; ?>

 
<?php } ?>
</tr>
</table>  

<br><br>
<table class="table table-hover" cellpadding="0" cellspacing="0" class="table" id="zero">
<tr>
 <!--<th> &nbsp; &nbsp;Vaccine ID</th> <th> &nbsp; &nbsp;疫苗名稱 (繁體)</th><th> &nbsp; &nbsp;疫苗名称 (简体)</th> <th> &nbsp; &nbsp;Vaccine Name (Eng)</th> -->
 <th> &nbsp; &nbsp;總數</th>
<th> &nbsp; &nbsp;次數</th> <th> &nbsp;  間距日子 </th> <th> &nbsp; &nbsp;計劃程序 <br> &nbsp; &nbsp;</th>
<!--<th>Description</th>--> </tr>
<?php

include('connect-db.php');
//PS : each record for each vaccine need to hv a unique id 
//So it can be uniquly identified with, later can EDIT(UPDATE) /DELETE certain specific record.

$result = mysql_query("SELECT * FROM casedetail
WHERE vaccineid = '" . $_GET['vaccineid'] . "'")//<--- show the specifc type of vaccine taht match the vaccine type in the typeserach.php
or die(mysql_error());
?>
<?php while($row = mysql_fetch_array( $result )){?>

<tr height="2px">
<!--

<td><input type="text" class="form-control" style="border: none"name = "vaccineid[]" id ="E1" value="<?php echo $row['vaccineid'] ?>"></td>
<td><input type="text" class="form-control changable"  style="border: none"id ="A1" name = "vaccinename1[]" value="<?php echo $row['vaccinename1'] ?>"></td>
<td><input type="text" class="form-control changable1" style="border: none" id ="B1" name = "vaccinename2[]" value="<?php echo $row['vaccinename2'] ?>"></td>
<td><input type="text" class="form-control changable2" style="border: none"id ="C1" name = "vaccinename3[]" value="<?php echo $row['vaccinename3'] ?>"></td>-->
<td width="13%"><input type="text" class="form-control changable3" size="1"  style="border: none" id ="D1" name = "totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>

<td width="13%"><input type="text" class="form-control"  size="1" style="border: none"name = "nthinjection[]" value="<?php echo $row['nthinjection'] ;?>"></td>

<td width="13%"><input type="text" class="form-control" style="border: none" size="1" name = "skip[]" value="<?php echo $row['skip'] ?>"></td>

<!-- *****************NOTE : the price column is now storing the case description data-->
<td width="20%"><input type="text" class="form-control" style="border:none"    size="1" name = "price[]" value="<?php echo $row['price'] ;?>"></td>

<!--<td><input type="text" class="form-control" style="border: none" name = "vaccinedes[]" id ="F1" value="<?php echo $row['vaccinedes'] ?>"></td>-->
<td>
<a href="deletedisplaytype.php?id=<?php echo $row['id'];?>">
  
<i class="fa fa-trash fa-1x" onclick="return confirm('你確定要刪除這條記錄嗎？');"aria-hidden="true" ></i></td>
<!--<td width="16%"> <textarea  rows="3" cols="27" name = "vaccinedes[]" id ="F1"><?php echo $row['vaccinedes'] ?></textarea></td>-->
 
<td><input type="hidden" class="form-control" style="border: none" name = "id[]"  value="<?php echo $row['id'] ?>"></td>
<!---=============================hidden field=======================================-->

<td><input type="hidden" class="form-control" style="border: none"name = "vaccineid[]" id ="E1" value="<?php echo $row['vaccineid'] ?>"></td>
<td><input type="hidden" name="typeid[]" class="result" id ="G1" value="<?php echo $row['typeid'] ?>"></td>
<td><input type="hidden" class="form-control changable"  style="border: none"id ="A1" name = "vaccinename1[]" value="<?php echo $row['vaccinename1'] ?>"></td>

<!--<td><input type="text" class="form-control changable1" style="border: none" id ="B1" name = "vaccinename2[]" value="<?php echo $row['vaccinename2'] ?>"></td>
<td><input type="text" class="form-control changable2" style="border: none"id ="C1" name = "vaccinename3[]" value="<?php echo $row['vaccinename3'] ?>"></td>-->

</tr>
 <?php }?>
</table>

</div>
<br><br>

 <button type="submit" name="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i> Save</button>
 
<button  type="button" class="btn btn-outline-primary btn-sm" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>新添加行 
   </button>
   <!--<input type="button" class="btn btn-outline-primary btn-sm" id="print" value="Print">-->


</form>
<!-- Add new dosage to current-->

      <div class="collapse" id="collapseExample">
	  <div class="card-block">
	  
      <p>新添加行數</p><br>
      <input type="number" class="form-control"id="insert-rows-amnt" name="insert-rows-amnt" style="width: 170px"  />
      <button id="add-row" class="btn btn-outline-primary" type="button">確認</button>
      <button type="reset" class="btn btn-outline-primary" name="reset"> 取消</button>
      </div>
      <br>
      </div>   <br>   <br>
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
    
     <td><input type="text"  class="form-control changable3" id ="D1"  name="totalnoofinjectiona[]"  ></td>
     <td><input type="text"  class="form-control"  name="nthinjectiona[]" value="${lastRowIndex}"></td>	 
	      <td><input type="text" name="skipa[]" class="form-control" ></td>

	 <td><input type="text" name="pricea[]" class="form-control" ></td>
	 <!--<td><input type="text" name = "vaccinedesa[]" class="form-control F1" ></td>-->
	 <td><textarea rows="3" cols="20"  name="traditionalmessagea[] class="traditional" readonly></textarea> </td>
	 <!--<td><textarea rows="3" cols="20"  name="simplifiedmessagea[]" class="simplified" readonly></textarea> </td>
	 <td><textarea rows="3" cols="20"  name="engmessagea[]" class="eng" readonly></textarea> </td>-->
	  <td><input type="hidden" style="width: 100px" name="id[]" readonly placeholder="Leave empty"></td>
	 
	 <td><input type="hidden"  name="vaccineida[]" class="E1" > </td>
	 <td><input type="hidden" name="typeida[]" class="form-control G1 result" value="<?php echo $row['typeid'] ?>" ></td>
	 <td><input type="hidden" name="vaccinename1a[]"  class="A1 changable" ></td>
	 <!--<td><input type="hidden" name="vaccinename2a[]"  class="B1 changable1" ></td>
	 <td><input type="hidden" name="vaccinename3a[]"  class="C1 changable2" ></td>-->
         
	 
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
       
	   

      <td><input type="text"  class="form-control changable3" id ="D1"  name="totalnoofinjectiona[]"  ></td>
      <td><input type="text"  class="form-control"  name="nthinjectiona[]" value="${lastRowIndex}"></td>
 <td><input type="text" name="skipa[]" class="form-control" ></td>
	  <td><input type="text" name="pricea[]" class="form-control" ></td>
	   <!--<td><input type="text" name = "vaccinedesa[]" class="form-control F1"></td>-->
	  <td><textarea rows="3" cols="20" style="display:none;" name="traditionalmessagea[]" class="traditional" readonly></textarea></td>
	  <!--<td><textarea rows="3" cols="20" style="display:none;" name="simplifiedmessagea[]" class="simplified" readonly></textarea></td>
	  <td><textarea rows="3" cols="20" style="display:none;" name="engmessagea[]"class="eng" readonly></textarea> </td>-->
	  
	  <td><input type="hidden" style="width: 100px" name="id[]" readonly placeholder="Leave empty"></td>
	  	   <td><input type="hidden"  name="vaccineida[]" class="E1"> </td>

	 <td><input type="hidden" name="typeida[]" class="form-control G1 result" value="<?php echo $row['typeid'] ?>" ></td>
	  	  <td><input type="hidden" name="vaccinename1a[]"  class="A1 changable"></td>

	  <!--<td><input type="hidden" name="vaccinename2a[]"  class="B1 changable1"  ></td>
	  <td><input type="hidden" name="vaccinename3a[]"  class="C1 changable2" ></td>-->
  	  </tr>`
      lastRowIndex=lastRowIndex+1;
    }
       $tbody.append(additionalRows.join());
  }
});
</script>

<!--   ************To add new rows to the page according to user input value********************-->


<!--****When add new dosage, get the vaccinename value  & display thems to the newly added row****-->
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
  var set = $('#G1').val();
  if (set) {
   $('.G1').val(set);
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
   $('.traditional').val(set+"\n下一次見面為");
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

<script>
jQuery(document).ready(function(e) {
    jQuery('.bd-example-modal-sm').on('click');
});
</script>

  <script>
  $('#print').click(function() {
   window.print();
   });
    </script>

<!--script for when user select dropdown case type,change table rows typeid accordingly too-->	
<script>

$("#ForceSelection").on('change', function() {
  var set = $('#ForceSelection').val();
  if (set) {
   $('.result').val(set);
     }
  });
</script>
</body>
</html>

<?php 
//*******************UpDATE current record(s)*********************************
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
    foreach( $_POST['vaccineid'] as $index => $vaccineid ) {
    $id = mysql_real_escape_string($_POST['id'][$index]);
    /* Escape string queries */
	    $data1 = mysql_real_escape_string($vaccineid);
		$data10 = mysql_real_escape_string($_POST['typeid'][$index]);
		$data2 = mysql_real_escape_string($_POST['vaccinename1'][$index]);
		//$data3 = mysql_real_escape_string($_POST['vaccinename2'][$index]);
		//$data4 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
		$data5 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
        $data6 = mysql_real_escape_string($_POST['nthinjection'][$index]);
        $data9 = mysql_real_escape_string($_POST['price'][$index]);
		
		$data7 = mysql_real_escape_string($_POST['skip'][$index]);
		//$data8 = mysql_real_escape_string($_POST['vaccinedes'][$index]);
		
    mysql_query(
    "UPDATE 
      casedetail SET vaccineid ='$data1', 
	  typeid = '$data10',
      vaccinename1 = '$data2',
      
      totalnoofinjection ='$data5', 
      nthinjection ='$data6', 
      price ='$data9', 
      skip ='$data7'
	  
    WHERE id = $id")  // need a where clause to update specific record
        or die(mysql_error()); 
    header("Location: typesearch.php");
}
}
?>
<?php 
//***********INSERT NEWLY ADDED DOSAGE to mysql*************************
include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
    foreach( $_POST['vaccineida'] as $index => $vaccineid ) {
        /* Escape string queries */
	    $vaccineid = mysql_real_escape_string($vaccineid);
        $typeid = mysql_real_escape_string($_POST['typeida'][$index]);
 
		$vaccinename1 = mysql_real_escape_string($_POST['vaccinename1a'][$index]);
		//$vaccinename2 = mysql_real_escape_string($_POST['vaccinename2a'][$index]);
		//$vaccinename3 = mysql_real_escape_string($_POST['vaccinename3a'][$index]);
		$totalnoofinjection = mysql_real_escape_string($_POST['totalnoofinjectiona'][$index]);
        $nthinjection = mysql_real_escape_string($_POST['nthinjectiona'][$index]);
		$date = mysql_real_escape_string($_POST['datea'][$index]);
		$price = mysql_real_escape_string($_POST['pricea'][$index]);
		$nextdate = mysql_real_escape_string($_POST['nextdatea'][$index]);
		$skip = mysql_real_escape_string($_POST['skipa'][$index]);
		//$vaccinedes = mysql_real_escape_string($_POST['vaccinedesa'][$index]);
		$traditionalmessage= mysql_real_escape_string($_POST['traditionalmessagea'][$index]);
		//$simplifiedmessage= mysql_real_escape_string($_POST['simplifiedmessagea'][$index]);
		//$engmessage= mysql_real_escape_string($_POST['engmessagea'][$index]);
		$typeid= mysql_real_escape_string($_POST['typeida'][$index]);
		
	mysql_query("INSERT casedetail SET vaccineid='$vaccineid', typeid='$typeid',vaccinename1='$vaccinename1',
      totalnoofinjection='$totalnoofinjection',nthinjection ='$nthinjection', price='$price',
       date='$date',nextdate='$nextdate',skip='$skip',traditionalmessage='$traditionalmessage'")
       or die(mysql_error()); 
    header("Location: typesearch.php");
}
}
?>