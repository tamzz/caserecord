<?php ob_start(); ?>
<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
  <title>完成案件</title>

  
<style>
  /*--Print only the table of the page--*/
 @media print
 {
 body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
@page {size: landscape}
  }

 .table-sm{
  
  font-weight:normal;
}

/* Bootstrap 4 modal center, to correctly center the modal, cite "modal id" then .modal-dialog, like in CSS below */

#MyModal .modal-dialog {
    transform: translate(0, -55%);
    top: 35%;
    margin: 0 auto;
    width:350px;

}
    
.result {
  position: fixed;
  width: 200px;
  height: 200px;
  left: 67%;
  top: 0%;
}


.th{
  background-color:#dfe2e1; 
}

.th2{
  background-color:#E7F2F9;
  font-size:small;
 
}

/* start of mobile friendly table*/

table {display: block; overflow-x: auto; }
/* Extra CSS, just styling the look: */
table {border-collapse: collapse;}
table td,th {padding: 10px; border:none;}

/* end of mobile friendly table*/
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                
                
 <!-- Button trigger modal -->
<div class="container-fluid">

    <div class="modal fade" id="MyModal">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-header">
    案件
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
    </div>
    <div class="modal-body">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
                
   <form action="newpatient.php" method="post">
<!--===============================================================================================================-->
  <!--Generate random no-->
  
<?php $second = rand(10000,20000);?>

<!--Get both of the session variable-->

<!-- Certain row of input field turn into hidden field-->
 
<!--<p>Patient ID: *</p>--><input type="hidden" style="width: 250px" style="border: none"  class="form-control" name="patientid" value="<?php echo $_SESSION['getvaccine'];?>"/><br/>
<!--<p>Patient HKID / Other ID: </p>--><input type="hidden" style="width: 550px"  class="form-control" name="patienthkid" value="<?php echo $_SESSION['gethkid'];?>"/><br/>

<p>Vaccine Type: *</p>
  <?php
include('connect-db.php');

$sql = "SELECT DISTINCT(vaccinename3),vaccineid AS vaccineid,vaccinename3 FROM vaccinedetail";
$result = mysql_query($sql);
echo "<select name='vaccineid' class='form-control' style='width: 250px'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['vaccineid'] . "'>" . $row['vaccinename3'] . "</option>";
}
echo "</select>";?>

<p>Language Preference: *</p>
  
  <select name="language"  style="width: 250px" class="form-control">
  <option value="繁體">繁體 </option>
  <option value="简体">简体 </option>
  <option value="ENG"> ENG  </option>
  </select>
  

  <p>Reminder Preference: *</p> 
     <select name="smsorcall[]" style="width: 250px" class="form-control" multiple>
     <option value="SMS">SMS</option>
     <option value="Email">Email</option>
     <option value="Call">Call</option>
     </select>

<br><p><strong>* Required</p></p>

<button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
<!--<button class="btn btn-outline-primary" class="close_popup" >Reset</button>-->
</div>
</form>
</div></div></div></div></div></div></div>
  

 <!--<a  href="#MyModal" data-toggle="modal"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>&nbsp;-->

 <!-- get the clientid from the url to store in $_SESSION for report use

<!--******Get the client personal info and put them in the session ********-->
 <!-- patient info above the table-->
 <!--<table class="table-sm" align="left" border='0' cellpadding='10' >-->
<?php
include('connect-db.php');

$result = mysql_query("SELECT *FROM patientvaccinedetail
WHERE patientid = '". $_GET['clientid']."'
 AND vaccineid = '". $_GET['vaccineid']."'
 Group by patientid");

 ?>
 
<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<?php $row['chinesename'] ?>

<?php  $row['patientnamec']; ?>
<?php //echo $row['patientnamee']; ?>
<?php //echo $row['gender'] ?>
<?php //echo $row['contactno'] ?>
<?php //echo $row['email'] ?>

<?php 

$_SESSION['chinesename777'] = $row['chinesename']; 
$_SESSION['vaccinename1777'] = $row['vaccinename1'];?>
 
<!--******Get the client personal info and put them in the session ********-->
<?php //echo  $_SESSION['clientemail333']  ;?>
</div>

<?php } ?>

<!-- get the clientid from the url to store in $_SESSION for report use-->

<a href="javascript:history.go(-1)"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>

&nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a><br>

<!--  Print only the below table-->
 <div class="div4">  

<h1 class="display-4" align="center"><!--Heading yet to be filled--></h1>
  <h5>完成案件   </h5>  
  <?php echo $_SESSION['chinesename777'] ;?> ---
  <?php echo $_SESSION['vaccinename1777'];?>
  <hr>
 
  <!--*********************** case brief and details info above the table*******************************-->  
 
<table class="table-sm" align="left" border='0' cellpadding='10'>

  <?php

//===========testtestttesttest
include('connect-db.php');
$result = mysql_query("SELECT *FROM patientvaccinedetail
WHERE patientid= '". $_GET['clientid']."' AND vaccineid= '". $_GET['vaccineid']."'
AND (done != 'done' )

GROUP BY vaccineid ");?>
<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>
<th><a class="btn btn-outline-primary btn-sm" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> 案件簡介 </a></th>
<th><a class="btn btn-outline-primary btn-sm" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">  案件詳情</a></th></tr>
<div class="collapse" id="collapseExample">
<div class="card-block">
<textarea rows="3" cols="30" name="brief[]" id ="A1"><?php echo $row['brief'] ;?>
</textarea>
</div>
</div>

<div class="collapse" id="collapseExample1">
  <div class="card-block">
<textarea rows="3" cols="30" name="details[]" id ="B1"><?php echo $row['details']; ?>
</textarea>
</div>
</div>

<?php } ?>
 </tr>
 </table>  
   <!--*********************** case brief and details info above the table*******************************-->  
 
<!-- =================================COOKIE  BELOW  HIDE FOR NOW======================-->
 <!-- For the By column, to enter the responsible personnel-->
       <?php //$json =  $_COOKIE["Token"];
//for testing purposecho
//echo $json;?>


<!-- convert to array-->
<?php // ************* Hide for now  ***********

//$cookie = json_decode($json, true );
 //$username = $cookie["name"];
 //echo $username;
 
  //$_SESSION['username0'] = $username;
//echo  $_SESSION['username']; 
//echo  $_SESSION['username']; 
  ?>

  <!--Clinic ID-->
  <?php //$obj2 = json_decode($json, true );

// $clinicid= $obj2["clinicID"];
  //echo $clinicid;
  
  ?>
 
<!--===============================================================   get session user name  =================================-->
<input type="hidden"  id="session" value="<?php echo $_SESSION['username2222']?>">

<!-- patient info above the table-->

<table class="table-sm" align="left" border='0' cellpadding='10' >

<?php
include('connect-db.php');

//==*****************The order of the table.column name doesn't matter***************==================
//==*****************Make sure if you want to show data from certain db column, include them here in the select statement**************==================
//$_SESSION['all'] is the value of patient id

$result = mysql_query("SELECT *FROM patientvaccinedetail
WHERE patienthkid = '". $_GET['clientid']."' AND vaccineid ='". $_GET['vaccineid']."' 
GROUP BY vaccineid");?>
<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>
 <td>&nbsp;&nbsp;<h4><?php //echo $row['vaccinename3'] ?></h4></td>
 <td>&nbsp;&nbsp;<h4><?php //echo $row['totalnoofinjection'] ?></h4></td>
  
  <?php 
 $_SESSION['vaccinename3b'] = $row['vaccinename3']; 
 $_SESSION['totalnoofinjection'] = $row['totalnoofinjection']; ?>


 <?php } ?>
 </tr>
 </table>  
 <!--show the vaccine name and the total no of injection needed-->
 <!--  hide for now-->
 <!--<h4><em><?php echo $_SESSION['vaccinename3b']; ?></em>  (<?php echo $_SESSION['totalnoofinjection']; ?>)</h4>
<br>-->


       
    <form action="" method="POST">
  
    <div class="col-xs-6">
   <table class="table"  cellpadding='10' id="table">  
    <tr class="th2">
    <th>次數</th>
   <th>跟進</th> <th>狀態</th> <th>期待日期</th><th>&nbsp;間隔</th><th>規劃</th><th>備註</th>
      </tr>
        
      <?php 
include_once('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
// once saved, redirect back to the view page
if (isset($_POST['submit'])){
    foreach ($_POST['patientid'] as $index => $patientid) {
    $id = mysql_real_escape_string($_POST['id'][$index]);
        $data1 = mysql_real_escape_string($patientid);
    $data17 = mysql_real_escape_string($_POST['patienthkid'][$index]);

    $data2 = mysql_real_escape_string($_POST['vaccineid'][$index]);
    $data5 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
        $data6 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
    $data7 = mysql_real_escape_string($_POST['nthinjection'][$index]);
      $data8 = mysql_real_escape_string($_POST['date'][$index]);
      $data9 = mysql_real_escape_string($_POST['nextdate'][$index]);
      $data10 = mysql_real_escape_string($_POST['skip'][$index]);
      $data11 = mysql_real_escape_string($_POST['language'][$index]);
      $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
    $data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
    $data14 = mysql_real_escape_string($_POST['engmessage'][$index]);
    $data15 = mysql_real_escape_string($_POST['status'][$index]);
    $data16 = mysql_real_escape_string($_POST['nurse'][$index]);
    $data22 = mysql_real_escape_string($_POST['paymentmethod'][$index]);

    $data18 = mysql_real_escape_string($_POST['price'][$index]);
    $data19 = mysql_real_escape_string($_POST['paystatus'][$index]);
    
     $data21 = mysql_real_escape_string($_POST['remark'][$index]);
    $data23 = mysql_real_escape_string($_POST['total'][$index]);
    $data24 = mysql_real_escape_string($_POST['arrears'][$index]);
    $data25 = mysql_real_escape_string($_POST['completed'][$index]);
    $data26 = mysql_real_escape_string($_POST['status000'][$index]);
    $data27 = mysql_real_escape_string($_POST['brief'][$index]);
    $data28 = mysql_real_escape_string($_POST['details'][$index]);
	$data29 = mysql_real_escape_string($_POST['done'][$index]);

    
    //There's 3 column of message with different language in the db
    //only update the column which is the chosen one which mean it isn't null
    //so in the db only 1 column will be update while the other two columns' data will remain unchange
    //currently no allow user to change language as some issues arised (after change of date
    //of one column other two column date remain the unchange, no sth we want )
    
     if ($data12 != null) {
        mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
    nthinjection='$data7',date='$data8',nextdate='$data9',skip='$data10',language='$data11',
          traditionalmessage='$data12',status='$data15',nurse='$data16',paymentmethod='$data22' ,price='$data18',paystatus='$data19',remark='$data21'
    ,total='$data23',arrears='$data24' ,completed='$data25',status000='$data26',
brief='$data27',details='$data28',done='$data29'	WHERE id=$id")   or die(mysql_error());
    }
    else if ($data13 != null) {
        mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
    nthinjection='$data7',date='$data8',nextdate='$data9',skip='$data10',language='$data11',
          simplifiedmessage='$data13',status='$data15',nurse='$data16',paymentmethod='$data22' ,price='$data18',paystatus='$data19',remark='$data21'
    ,total='$data23',arrears='$data24' ,completed='$data25',status000='$data26',
brief='$data27',details='$data28' ,done='$data29'		WHERE id=$id")   or die(mysql_error());
    }
    else if ($data14 != null) {
        mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
    nthinjection='$data7',date='$data8',nextdate='$data9',skip='$data10',language='$data11',
          engmessage='$data14',status='$data15',nurse='$data16' ,paymentmethod='$data22' ,price='$data18',paystatus='$data19',remark='$data21'
    ,total='$data23',arrears='$data24' ,completed='$data25',status000='$data26',
brief='$data27',details='$data28',done='$data29'		WHERE id=$id")   or die(mysql_error());
    }
    
    header("Location: searchclient.php");
    }
   }
 ?>
  <?php
include('connect-db.php');

//===*******************Get the patientid and vaccineid from the URL passed from displaypatientall.php***************==      

$result = mysql_query("SELECT * FROM patientvaccinedetail WHERE patientid = '" . $_GET['clientid']."' AND vaccineid = '" . $_GET['vaccineid']."'
AND done = 'done' 
")  or die(mysql_error());?>            <!-- display data in an editable table-->

<?php while($row = mysql_fetch_array( $result)) {?>
           
<tr>
    
<input type="hidden" size="3" name="id[]" style="border: none" value="<?php echo $row['id'] ?>">
      <!--<td><input style="border: none"  type="text" size="6" name="patienthkid[]"  value="<?php echo $row['patienthkid'] ?>"></td>-->
      <!--<td><input style="border: none"  " type="text" size="5" name="vaccineid[]" value="<?php echo $row['vaccineid'] ?>"></td>-->
           
       
      <!--<td><input class="form-control" style="border: none" type="text" size="1" name="totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>--> 
       
 <td><input class=""  type="text" style="border: none" size="1" name="nthinjection[]" value="<?php echo $row['nthinjection'] ?>"></td>
       
 <td width="13%"><input size="5" type="text" class="input" name="nurse[]" value="<?php echo $row['nurse']?>">
 <input type="button" value="&#10003;" class="done">
 <input type="button" value="&#10007;" class="reset">
  </td> 
  <td>
  <div class="form-group">
    <input type="text" name="status000[]" value="<?php echo $row['status000'];?>" class=" form-control-sm test" />  
</div>  
<div class="progress">
    <div class="progress-bar progress-bar-success"
         role="progressbar" 
         aria-valuenow="0" aria-valuemin="0" 
         aria-valuemax="100" >
        <span class="sr-only"></span>
    </div>
</div>

  </td>
  <td><input type="date" width="50px" class="start_date" name="date[]" value="<?php echo $row['date'] ?>"> </td>
 
                          
        <td><input type="text" style="border: none" size="1" name="skip[]" class="days" value="<?php echo $row['skip'] ?>"></td>
              
         
  
   <!--<td><input type="text" size="15" name="price[]" class="txtCal" value="<?php echo $row['price'] ?>"></td>-->
        <td><textarea rows="2" cols="18" class="txtCal"  name="price[]"><?php echo $row['price'];?></textarea> </td>

<td><textarea rows="2" cols="18"   name="remark[]"><?php echo $row['remark'];?></textarea> </td>
             <!--  <td><input type="text"  size="3" name="remark[]" class="" value="<?php echo $row['remark'] ?>"></td>-->
         <td><input type="hidden" size="3" name="done[]" class="form-control donedone" value="<?php echo $row['done'] ?>"></td>  
       
       
              <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <td>
    
            <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>">
        <i class="fa fa-trash fa-1x" onclick="return confirm('你確定要刪除這個記錄嗎？');"aria-hidden="true" ></i>

                 <!--  <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
        onclick="return confirm('Are you sure to delete this record?');">-->
        
       </a>
       </td>
			  
		<!--****************************** *******Hidden field  ************************************************************-->
 	<td><input type="hidden"  size="3" name="unique[]" id ="A1" class="form-control" value="<?php echo $row['unique2'];?>" ></td>


            <!--     <select name="language[]" style="border: none">
<option value="繁體" <?php if($row['language'] == '繁體') echo 'selected="selected"';?> >繁體</option>
<option value="简体" <?php if($row['language'] == '简体') echo 'selected="selected"';?> >简体</option>
<option value="ENG" <?php if($row['language'] == 'ENG') echo 'selected="selected"'; ?> >ENG</option>
    </select></td>-->
  
  <!-- Original the 3 message column
                <td><textarea rows="3" cols="13" class="form-control url" name="traditionalmessage[]" data-value="<?php echo $row['treatmentname1'].'下一個注射期為';?>"><?php echo $row['traditionalmessage'];?></textarea> </td>
              <td><textarea rows="3" cols="13" style="border: none" class="form-control url" name="simplifiedmessage[]" data-value="<?php echo $row['treatmentname2'].'下一个注射期为';?>"><?php echo $row['simplifiedmessage'];?></textarea> </td>
              <td> <textarea rows="3" cols="13" style="border: none" class="form-control url" name="engmessage[]" data-value="<?php echo $row['treatmentname3'].'Next injection period will be';?>"><?php echo $row['engmessage'];?></textarea> </td>
  -->
  <!-- AMENDED CODE FOR THE MESSAGE COLUMN-->
  <!--Only one column message is saved to the database, desired outcome is three-->
  <!-- For user to amended the message sent if necessary-->
  <!-- Temporary hidden -->

<?php
$possibleLang = ["繁體","简体","ENG"];
$testAreaField = ["traditionalmessage","simplifiedmessage","engmessage"];
$treatmentName = ["vaccinename1","vaccinename2","vaccinename3"];
$treatmentNameSuffix = ["\n下一次見面為:","\n下一次见面为:","\nNext meeting will be:"];

$index = array_search($row['language'],$possibleLang);
?>
<td>
  <textarea  rows="3" cols="10" class="url" style="display:none" name="<?php echo $testAreaField[$index]; ?>[]" data-value="<?php echo $row[$treatmentName[$index]] . $treatmentNameSuffix[$index]; ?>"><?php echo $row[$testAreaField[$index]]; ?>
  </textarea>
</td>
    <!-- AMENDED CODE FOR THE MESSAGE COLUMN-->   		
		
<td><input type="hidden"  size="3" name="brief[]" id ="A1" class="form-control changable" value="<?php echo $row['brief'] ?>" ></td>
<td><input type="hidden"  size="3" name="details[]" id ="B1" class="form-control changable1" value="<?php echo $row['details'] ?>" ></td>
	
<td><input type="hidden"  size="3" name="completed[]" class="form-control finished" value="<?php echo $row['completed'] ?>" ></td>

<td><select class="status option" style="display: none" name="paystatus[]">
<option value="N" <?php if ($row['paystatus'] == 'N') echo 'selected="selected"'; ?> > N</option>
<option value="Y" <?php if ($row['paystatus'] == 'Y') echo 'selected="selected"';?> >Y
</option>
</select></td>

<td><select class="form-control" style="display: none" name="paymentmethod[]">
<option value="Cash" <?php if ($row['paymentmethod'] == 'Cash') echo 'selected="selected"'; ?> >Cash</option>
<option value="Card" <?php if ($row['paymentmethod'] == 'Card') echo 'selected="selected"';?> >Card</option>
</select></td>
    		  
<td><input style="border: none" type="hidden"name="patientid[]"  value="<?php echo $row['patientid'] ?>"></td>
<td><input style="border: none"  type="hidden" size="6" name="patienthkid[]"  value="<?php echo $row['patienthkid'] ?>"></td>
<td><input style="border: none" type="hidden" size="5" name="vaccineid[]" value="<?php echo $row['vaccineid'] ?>"></td>
                  
<td><input type="hidden" name="language[]" value="<?php echo $row['language'] ?>"></td>
                      
<td><textarea  class="total_sum_value" rows="" cols="5"  style="display: none;" name="total[]"><?php echo $row['total'] ?></textarea> </td>
      
<td><textarea  class="arrears" rows="" cols="5"  style="display: none;" name="arrears[]"><?php echo $row['arrears'] ?></textarea> </td>
       
<td><textarea style="display: none;"  rows="2" cols="12" name="vaccinename3[]"><?php echo $row['vaccinename3'];?></textarea> </td>
               
<td><input class="form-control" style="border: none" type="hidden" size="1" name="totalnoofinjection[]" value="<?php echo $row['totalnoofinjection'] ?>"></td>

<td><input type="hidden"   style="border: none"size="8" name="nextdate[]" class="end_date" value="<?php echo $row['nextdate'] ?>"></td>

<td><select class="msg" name="status[]"  style="display: none;"   >
<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
</select>
</td>
 <!--<td>
 <select name="language[]" style="border: none" type="hidden">
<option value="繁體" <?php if($row['language'] == '繁體') //echo 'selected="selected"';?> >繁體</option>
<option value="简体" <?php if($row['language'] == '简体') //echo 'selected="selected"';?> >简体</option>
<option value="ENG" <?php if($row['language'] == 'ENG') //echo 'selected="selected"'; ?> >ENG</option>
    </select></td>-->
       
  </tr>
  <?php } ?>
  </table><hr>
         
   <button type="submit" name="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-floppy-o  fa-2x" aria-hidden="true"></i> Save</button>
      <!--<input type="submit" class="btn btn-outline-primary btn-sm" name="submit" value="Save change">-->
    <!--  <div class="col-lg-6 result">
         
        <div class="input-group">
        <p>
      <span class="input-group-addon">Total Payment</span>
      <span class="input-group-addon">$HKD</span>
    <span class="input-group-addon total_sum_value"></span></p>
    
    <br><br><br>
    <p>
    <span class="input-group-addon">In Arrears</span>
      <span class="input-group-addon">$HKD</span>
     <span  class="input-group-addon arrears"></span></p>
      
</div>
</div>-->
</div>


    <!--test for the complete-->
<!-- Hide for now-->
<!--
<table class="table-sm" align="left" border='0' cellpadding='10'
<?php
include('connect-db.php');

//**********The order of the table.column name doesn't matter***************===
//************Make sure if you want to show data from certain db column, include them here in the select statement**

$result = mysql_query("SELECT DISTINCT * FROM patientvaccinedetail WHERE patientid = '" . $_GET['clientid']."' AND vaccineid = '" . $_GET['vaccineid']."'
GROUP BY vaccineid ") or die(mysql_error());?>            

<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>

<tr>

<td><select  class="finished1">
<option value="" ></option>
<option value="Y" <?php if ($row['completed'] == 'Y') echo 'selected="selected"'; ?> > Y</option>
<option value="N" <?php if ($row['completed'] == 'N') echo 'selected="selected"';?> >N</option>
</select></td>
 
 
 <?php } ?>
</tr>
</table> 
-->
   <!--End of the printing area-->
</div>
    
    <!--<input type="button" class="btn btn-outline-primary" name="print" value="Print the record" id="print">-->
</form>
  
 <br><br>
   
   <!-- Get patient id from the URL -->
   
   <?php //$_SESSION ['current'] = $_GET['patientid'];?>
   
   <!-- End of Get patient id from the URL -->

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
    
    $('input.start_date, input.days').on('change', function () {
 var $row = $(this).closest('tr');
 var start = $row.find('.start_date').val();
 
 if (!isNaN($row.find(".days").val()) && start) {
   
     //  date = new Date($start.val()+" 0:00:00"),
   var set = new Date(start+" 0:00:00");
   set.setDate(set.getDate() + Number($row.find(".days").val()));
   $row.find(".end_date").val([set.getFullYear(), set.getMonth() + 1,set.getDate()].join('-'));
   var dt = set.getFullYear() + "-" + ("0" + (set.getMonth() + 1)).slice(-2) + "-" + ("0" + set.getDate()).slice(-2);
   $row.next('tr').find('.start_date').attr('value', dt).trigger('change');
 }
  console.log(start);
});

</script>     
 <script>
$('input.start_date, input.days').on('change',function() {
        var set = $(this).closest('tr').find('.end_date').val();
       
          $(this).closest('tr').find('.url').each(function() {
            $(this).val($(this).attr("data-value") + set);
          })
                  });
    </script>
  
    <script>
      $('#print').click(function() {
        window.print();
      });
    </script>
 
  
  <script>
  $("#table").hide();
  
    if $("#table").on("click",function(){
      
      $("#table").toggle();
    })
 </script>

  <script>
jQuery(document).ready(function(e) {
    jQuery('.bd-example-modal-sm').on('click');
});


</script>


<script>
$('#selectAll')                                  .click(function(e){
    var table= $(e.target).closest('table');
    $('td input:checkbox',table).prop('checked',this.checked);
});

</script>
<script>
$('#check').on('change', function() {

  if ($(this).is(':checked')) {

    $('option:contains(Y)').prop('selected', true);
  
  var calculated_total_sum = 0;
    var to_be_paid = 0;

    $("#table tr").each(function() {
      var get_textbox_value = $('.txtCal', this).val();
      var get_payment_status = $('.status', this).val();
      
      if (get_textbox_value && get_payment_status) {
        if ($.isNumeric(get_textbox_value)) {
          calculated_total_sum += parseFloat(get_textbox_value);
        }

    
        if (get_payment_status === 'N') {
          to_be_paid += parseFloat(get_textbox_value);
        }
      }
    });
    $(".total_sum_value").html(calculated_total_sum);
    $(".arrears").html(to_be_paid);

  } else {

    $('option:contains(N)').prop('selected', true);
  
  var calculated_total_sum = 0;
    var to_be_paid = 0;

    $("#table tr").each(function() {
      var get_textbox_value = $('.txtCal', this).val();
      var get_payment_status = $('.status', this).val();
      
      if (get_textbox_value && get_payment_status) {
        if ($.isNumeric(get_textbox_value)) {
          calculated_total_sum += parseFloat(get_textbox_value);
        }

        if (get_payment_status === 'N') {
          to_be_paid += parseFloat(get_textbox_value);
        }
      }
    });
    $(".total_sum_value").html(calculated_total_sum);
    $(".arrears").html(to_be_paid);
  
  }
});</script>

<script> 
$(document).ready(function() {

  $("#table").on('input', '.txtCal, .status, .option', '#check', function() {
   calculate();
  });

  
  function calculate() {
    var calculated_total_sum = 0;
    var to_be_paid = 0;

    $("#table tr").each(function() {
      var get_textbox_value = $('.txtCal', this).val();
      var get_payment_status = $('.status', this).val();
      
      if (get_textbox_value && get_payment_status) {
        if ($.isNumeric(get_textbox_value)) {
          calculated_total_sum += parseFloat(get_textbox_value);
        }

        if (get_payment_status === 'N') {
          to_be_paid += parseFloat(get_textbox_value);
        }
      }
    });
    $(".total_sum_value").html(calculated_total_sum);
    $(".arrears").html(to_be_paid);
  }

  calculate();

});

</script>

<script>

$('.input').on("change",function() {
  if ($(this).val() === ' ') {
    $(this).parents("tr").find('.msg').val('open');
  } else {
    $(this).parents("tr").find('.msg').val('closed');
  }
})
</script>

<script>

$('.finished1').on('change',function(){
   if($(this).val() == 'N' || $(this).val() == ''){
     $('.finished').val('');
   }else{
     $('.finished').val('completed');
   }
});


</script>

<!--Get the session username , and display in the column By-->
<script>

$(".done").on('click', function() {
   
    var test = $("#session").val();
   
    $(this).closest('tr').find('.input').val(test);
       $(this).closest('tr').find('.msg').val('closed');
   
      });
      
      $(".reset").on('click', function() {
   
 
    $(this).closest('tr').find('.input').val(' ');
       $(this).closest('tr').find('.msg').val('open');
   
      });</script>

      <script>
$('input').on('keyup', function(){
    var value = this.value;
   var bar = 
    $(this).parent().next('.progress').find('.progress-bar')
        .css('width', value+'%')
        .attr('aria-valuenow', value);    
}).keyup();

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


<!--wait till all table row is 100 % completed, then show the status "done"-->

<script>

$(".test").on('input', function() {
  checkAndUpdateSecondColumn();
});

function checkAndUpdateSecondColumn() {
  var empty = $("input.test").filter(function() {
    return this.value != "";
  });


  if ($("input.test").length == empty.length) {
    var sum = $('.test').toArray().reduce(function(sum, element) {
      return sum + Number(element.value);
    }, 0);


    $('.donedone').val('');
    if (sum == $("input.test").length * 100) {
      $('.donedone').val('done');
    }
	
	else
		
		{
		$('.donedone').val('nil');	
			
		}
  }
}

</script>
<!--Reset button-->
  </div> </div>
  </div>
  
   </div>
   
                            </div>
                        </main>   
                   </div>   
              </div>
        </div>  
    
</body>

</html>