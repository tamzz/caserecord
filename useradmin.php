<?php ob_start();
session_start();?><!DOCTYPE HTML>

<html>
<head>
<title>用户 </title>
<style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
  @media print
{
body * { visibility: hidden; }
.div2 * { visibility: visible; }
.div2 { position: absolute; top: 0px; left: 0px; }
}


/* Narrow the height of tr*/

#hey>tbody>tr>td{
  height:20px;
  padding:0px;
  border-top: 0px;
} 

/* Bootstrap 4 modal center, to correctly center the modal, cite "modal id" then .modal-dialog, like in CSS below */

#MyModal .modal-dialog {
    transform: translate(0, -55%);
    top: 38%;
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
<?php include ('header.php');?>
<!-- Nav Bar -->

<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
  <div class="wrapper" style=" background-color: #D6D6D6;" >
 <main id="page-content-wrapper" role="main" >
			
  <div class="content"> 
  <?php //echo $_SESSION['gettreatment'];?>
 </div>
<!-- Button trigger modal -->
<div class="container-fluid">
    <div class="modal fade" id="MyModal">
    <div class="modal-dialog modal-sm" role="document">
     <div class="modal-content">
               <div class="modal-header">
                新用户 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <div class="row">
                            <div class="col-12">
							
							
      <form action="addtype.php" method="post">
        <!--<p></p><br> <input type="hidden" name="id" value="<?php echo $id; ?>" /><br/>-->
        <div class="form-group">
		<!--
          <p>Treatment ID : *</p> <input type="hidden" style="width: 250px" name="treatmentid" class="form-control"  value="<?php echo 'T'.' '.$digits; ?>"><br/>-->
          
		  <p>用戶名: *</p>
		
		  <input type="text" name="Username" style="width: 250px"  class="form-control" required>
		  		  
          <p>密碼: *</p>
		  <input type="text" name="Password" style="width: 250px" class="form-control" required>
		<!--<p>Total number of injection: *</p><br> <input type="number" name="totalnoofinjection" class="form-control"><br/></div>-->
        <p><p> * 必填</p></p>
        <button type="submit" class="btn btn-outline-primary" name="submit">提交</button>
        <button class="btn btn-outline-primary" type="reset" name="reset">重啟</button>
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
     <a  href="#MyModal" data-toggle="modal"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a><br><br>

<h5>&nbsp;用户  </h5>
<hr>
	
<?php
//Dislpay data from database
include('connect-db.php');

$result = mysql_query("SELECT UserNameID,userName , aes_decrypt(pass,'k')  
AS pass_decrypted from username")

or die(mysql_error());?>

<form action="" method="POST">	
<!--
<div class="input-group"> <span class="input-group-addon">Filter</span>

<input id="filter" type="text" class="form-control" placeholder="Type here...">
</div>-->
<div class="container">
<table id="hey" class='table' cellpadding='5'>                                                         
<thead>
<tr>
<!-- <th><p>ID</p></th> 
 <th><font size="4">Treatment ID</font></th>-->
<th> <th><font size="4">用戶名</font></th> <th><font size="4">密碼</font></th> 
 </tr></thead>

<!-- loop through results of database query, displaying them in the table-->

<?php while($row = mysql_fetch_array( $result )) {?>

<!--echo out the contents of each row into a table-->

<tbody class="searchable">
<tr>

<td><input type="hidden"   class="form-control" name = "id[]" value="<?php echo $row['UserNameID'] ?>"></td>
<td><input type="text"   class="form-control" name = "userName[]" value="<?php echo $row['userName'] ?>"></td>
<td><input type="text"  class="form-control" name = "pass[]" value="<?php echo $row['pass_decrypted']; ?>"></td>
<!--echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';-->

<td>&nbsp;&nbsp;&nbsp;<a href="deletedisplaytype000.php?id=<?php echo $row['UserNameID'];?>"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('刪除此用戶？');"></i></a></td>

<!--Hidden field-->

</tr>
</tbody>
<?php } ?>

</table>

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="submit" align="center" class="btn btn-outline-primary" name="submit" value="Save change">
</div>
</form>
<?php echo $row['id'];?>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</div> <!--End Container-->
 </div> <!--End Content-->
 </div>
 </main>
 </div>
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
</body>

</div>
</html>
<?php 
// connect to the database,save updated multiple records to the database at once
//***********INSERT NEWLY ADDED DOSAGE to mysql*************************

include('connect-db.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
    foreach( $_POST['userName'] as $index => $userName ) {
		$id = mysql_real_escape_string($_POST['id'][$index]);
        /* Escape string queries */
	    $userName = mysql_real_escape_string($userName);
		$pass = mysql_real_escape_string($_POST['pass'][$index]);
		//$treatmentname2= mysql_real_escape_string($_POST['treatmentname2'][$index]);
		//$treatmentname3 = mysql_real_escape_string($_POST['treatmentname3'][$index]);
		//$price = mysql_real_escape_string($_POST['price'][$index]);
		//$treatmentdescription = mysql_real_escape_string($_POST['treatmentdescription'][$index]);
		
mysql_query("UPDATE username  
SET pass = AES_ENCRYPT( '$pass', 'k' ) , userName='$userName'
WHERE UserNameID = '$id'") or die(mysql_error()); 




header("Location: useradmin.php");

}
}
?>