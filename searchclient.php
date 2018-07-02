<?php ob_start(); ?>
<?php session_Start(); ?>
<!DOCTYPE HTML>
<!--Start page for the search of client with name, contact no, hkid etc-->
<html>
<head>
  <title>案件管理</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <style>
  
  
/* Print only specific area*/
  
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
/* Change the font to without bold type*/
.searchable{
	
	font-weight:normal;
}

.table-sm{
	
	font-weight:normal;
}


/* Bootstrap 4 modal center, to correctly center the modal, cite "modal id" then .modal-dialog, like in CSS below */




/*  mobile devices  */


#hide,#hide2,#hide3,#hide4,#hide5,#hide6,#hide7,#hide8,#hide9,#hide10  {

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
}



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </style>
  
   <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/nav.css" rel="stylesheet" type="text/css" />

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
<div class="container-fluid"  >

    <div class="modal fade" id="MyModal" >
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    新客戶
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <div class="row">
                 <div class="col-12">
							
<!-- *****pop up form for user to add new record *****-->                          						
	
	<?php $second = rand(10000,20000);?>
	

	
	
<form action="newclientdb.php" method="post" align="center">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">用户 ID</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="lgFormGroupInput" name="clientid" value="<?php echo "C". $second ;?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">姓名</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="clientchiname" required />
      </div>
    </div>
	<!--<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">	Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="clientengname" >
      </div>
    </div>-->
	
	<div class="form-group row">
    <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">性别</label>
    <div class="col-sm-10">
	<select name="gender" class="form-control form-control" id="smFormGroupInput">
	<option value="女">女</option>
	<option value="男">男</option>
    </select>
    </div>
    </div>
<div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">香港身份證</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="clienthkid" required / >
      </div>
    </div>
	
	 <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label" >聯繫電話</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control form-control" id="smFormGroupInput" name="clienttel" required />
      </div>
    </div>
	
	 
	 <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">	地址</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-control" id="smFormGroupInput" name="clientaddress" >
    </div>
    </div>
	
   <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label">	電郵</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control" id="smFormGroupInput" name="clientemail" >
</div>
</div>


 <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label">出生日期</label>
      <div class="col-sm-10">
        <input type="date" class="form-control form-control" id="smFormGroupInput" name="clientdob" >
      </div>
    </div>
 
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
 <button type="submit" class="btn btn-outline-primary" name="submit" align="center"> 提交</button>
<!--<button class="btn btn-outline-primary" class="close_popup" >Reset</button>-->
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
&nbsp;&nbsp;<a  href="#MyModal" data-toggle="modal" title="新客戶"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
  
	   <!--
&nbsp;<a href="oldrecord.php" title="View inactive injection record" alt="Submit" /><i class="fa fa-history fa-2x" aria-hidden="true"></i></a>

 &nbsp;<a href="#"  id="print" title="print" /><i class="fa fa-print fa-2x" aria-hidden="true"></i></a><br><br>-->
	
<h5> 客戶 </h5><hr>

<h1 class="display-4" align="center"><!--Heading yet to be filled--></h1>
 
<!-- Search box. -->
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">搜索</span>
<input type="text" id="search"  aria-describedby="basic-addon1">
</div> 
<!-- Suggestions will be displayed in below div. -->
<div id="display">
</div>
<!--Upper table contain client personal info-->
<!--Hide for now, coz this page dont need it-->
<!--
<table class="table-sm" align="left" border='0' cellpadding='10'
<?php
include('connect-db.php');

//**********The order of the table.column name doesn't matter***************===
//************Make sure if you want to show data from certain db column, include them here in the select statement**
$result = mysql_query("SELECT *FROM clients WHERE patienthkid = '" . $_SESSION['clientid'] . "'");?>

<?php

while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<tr>`
<td><?php echo $row['patientNo'] ?></td>
<td><?php echo $row['patienthkid'] ?></td>
<td><?php echo $row['patientnamec'] ?></td>
<td><?php echo $row['gender'] ?></td>
<td><?php echo $row['contactno'] ?></td> 
<td>&nbsp;&nbsp;<?php echo $_SESSION["clientid"] ?></td>
 <?php } ?>
</tr>
</table> -->

<!-- REtrieve data u want from the Token stored in the cookie-->


<!-- <?php $json =  $_COOKIE["Token"];
//echo $json;?>

<br><br>
User ID:

<?php /*$obj2 = json_decode($json, true );

 $userid = $obj2["accessRight"]["userid"];
 echo $userid;*/?>
  
  Clinic ID
  <?php /*$obj2 = json_decode($json, true );

 $clinicid= $obj2["clinicID"];
  echo $clinicid;
  */?>

  -->

    <form action="" method="POST">
	
    <div class="col-xs-6">

<!--  Print only the below table-->
<div class="div2">

     <table id="hey"class="table table-hover"  cellpadding='0' id="table">
       <thead><tr>
          
      <th width="7%" >客戶號碼</th>
      <th width="12%">姓名</th>
      <th id="hide8">香港身份證</th>
	  <th id="hide5">聯繫電話 </th>
	  <th id="hide9">地址 </th>
	  <th id="hide6">電郵 </th>
	  <th id="hide7">出生日期</th>
	  </tr></thead>
	  
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
	    //$data9 = mysql_real_escape_string($_POST['nextdate'][$index]);
	    $data10 = mysql_real_escape_string($_POST['skip'][$index]);
		
	    $data11 = mysql_real_escape_string($_POST['language'][$index]);
	    $data12 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		$data13 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
		$data14 = mysql_real_escape_string($_POST['engmessage'][$index]);
		$data15 = mysql_real_escape_string($_POST['status'][$index]);
		//$data16 = mysql_real_escape_string($_POST['nurse'][$index]);
			
 mysql_query("UPDATE patientvaccinedetail SET patientid ='$data1',patienthkid ='$data17',vaccineid='$data2',vaccinename3='$data5', totalnoofinjection='$data6',
		nthinjection='$data7',date='$data8',skip='$data10',language='$data11',
		traditionalmessage='$data12',simplifiedmessage='$data13',engmessage='$data14',status='$data15',nurse='$data16'
		WHERE id=$id")	 or die(mysql_error());
		
	    header("Location: index.php");
		}
        }
		?>
<?php
//include the db	  
include('connect-db.php');
//select from the db the vaccineid (WITHOUT REPEAT) for each patient, hence 
//in the select statement use GROUP BY 

$result = mysql_query("SELECT*
FROM clients")	or die(mysql_error());?>
      
	<?php //if (!mysql_num_rows($result)) {
   // header('Location: newpatient1.php');
    //exit;
//}

//else{  ?><!--// loop through results of database query, displaying them in the table-->

<?php while($row = mysql_fetch_array( $result )) {?>
<tbody class="searchable">
<tr height="8px">
<input type="hidden" size="3" name="id[]" readonly value="<?php echo $row['id']; ?>">
		  
<!-- ******************HIDE******************-->

             <!-- <td>&nbsp;&nbsp;&nbsp;<?php //echo $row['patientid']; ?></td>
              <td>&nbsp;&nbsp;&nbsp;<?php //echo $row['patienthkid']; ?></td>*-->
			  
        	  <!--<td>&nbsp;&nbsp;&nbsp;<?php echo $row['vaccineid']; ?></td>-->
             
			 <!-- ********When click on the patient's vaccine name will show detail of each vaccine injection *******-->
			
			 <!--<td><a href="index.php?vaccineid =<?php //echo "$row['vaccineid']";?>&patientid=<?php //echo "p001"; ?>"><?php //echo $row['vaccinename3'];?></a></td>-->
			
			<!--for future reference for passing multiple variables in the url,can be get using $_GET['']-->
			
<!-- <td width="13%">&nbsp;&nbsp; <a href="clientsearch2.php?clientid=<?php echo "$row[patientNo]";?>&patienthkid=<?php echo "$_SESSION[clientid]"; ?>"><?php echo $row['patientNo'];?></a></td>-->

<!-- Passing variable via the url -->
<td width="7%">&nbsp;&nbsp; <a href="searchclient2.php?clientid=<?php echo "$row[patientNo]";?>"><?php echo $row['patientNo'];?></a></td>
<td width="12%">&nbsp;&nbsp;&nbsp;<?php echo $row['patientnamec']; ?></td>
				
<td width="13%" id="hide">&nbsp;&nbsp;&nbsp;<?php echo $row['patienthkid']; ?></td>
<td width="13%" id="hide2">&nbsp;&nbsp;&nbsp;<?php echo $row['contactno']; ?></td>
<td width="13%" id="hide10">&nbsp;&nbsp;&nbsp;<?php echo $row['address']; ?></td>
<td width="13%" id="hide3">&nbsp;&nbsp;&nbsp;<?php echo $row['email']; ?></td>
<td width="13%" id="hide4">&nbsp;&nbsp;&nbsp;<?php echo $row['date']; ?></td>
<!--<td><?php echo $row['patientnamee']; ?></td>-->
              <!--<td><input type="text" size="1" name="skip[]" class="form-control days" value="<?php echo $row['gender']; ?>"></td>-->
              <!--
			  <td>		 
    <select name="language[]">
<option value="繁體" <?php if($row['language'] == '繁體') echo 'selected="selected"';?> >繁體</option>
<option value="简体" <?php if($row['language'] == '简体') echo 'selected="selected"';?> >简体</option>
<option value="ENG" <?php if($row['language'] == 'ENG') echo 'selected="selected"'; ?> >ENG</option>
    </select></td>
	
              <td><textarea rows="3" cols="13" class="form-control url" name="traditionalmessage[]" data-value="<?php echo $row['treatmentname1'].'下一個注射期為';?>"><?php echo $row['traditionalmessage'];?></textarea> </td>
              <td><textarea rows="3" cols="13" readonly class="form-control url" name="simplifiedmessage[]" data-value="<?php echo $row['treatmentname2'].'下一个注射期为';?>"><?php echo $row['simplifiedmessage'];?></textarea> </td>
              <td> <textarea rows="3" cols="13" readonly class="form-control url" name="engmessage[]" data-value="<?php echo $row['treatmentname3'].'Next injection period will be';?>"><?php echo $row['engmessage'];?></textarea> </td>-->
             &nbsp;&nbsp;&nbsp;&nbsp; 
			 
			 <!--<td><select class="form-control" name="status[]" style="width: 130px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<option value="open" <?php if ($row['status'] == 'open') echo 'selected="selected"'; ?> > open</option>
<option value="closed" <?php if ($row['status'] == 'closed') echo 'selected="selected"';?> >closed</option>
   </select></td>-->
   
   <!--<<td>&nbsp;&nbsp;&nbsp;<?php echo "$".$row['total'] ?></td>
   
   <td>&nbsp;&nbsp;&nbsp;<?php echo "$".$row['arrears'] ?></td>-->

   
              <!--<td><input type="text" size="3" name="nurse[]" class="form-control" value="<?php echo $row['nurse'] ?>"></td>-->
              <!--<td><a href="editdisplaytype.php?id=' . $row['id'] . '"><img src="edit.png" width="20px"></a>-->
              <!--<td>
			  
                <a href="deletedisplaypatient.php?id=<?php echo $row['id'];?>"><img src="delete.jpg" width="56px"
				onclick="return confirm('Are you sure to delete this record?');"></a>
              </td>-->
</tr>
<tbody>
<?php } ?>
</table>
<!-- /close the if/else statement -->
				<?php //;} ?>
				<!--End of the printing area-->
				</div>
 <!--<input type="submit" class="btn btn-outline-primary" name="submit" value="Save change">-->
    
	</form>
	<br><br>
   <!-- <input type="button" class="btn btn-outline-primary btn-sm" name="print" value="Print the record" id="print"><br><br>-->
	 </div>
     </div>
     </main>   
     </div> 	
     </div>
     </div>  
	
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
<script>
	
	
      (function($, window, document, undefined) {

        $(".addSkip").click(function() {
          // row instance to use `find()` for the other input classes
          var $row = $(this).closest('tr');

          var date = new Date($row.find(".start_date").val() + " 0:00:00"),
            days = parseInt($row.find(".days").val(), 10);

          if (!isNaN(date.getTime())) {
            date.setDate(date.getDate() + days);

            $row.find(".end_date").val(date.toInputFormat());
          } else {
            alert("Invalid Date");
          }
        });
        //From: http://stackoverflow.com/questions/3066586/get-string-in-yyyymmdd-format-from-js-date-object
        Date.prototype.toInputFormat = function() {
          var yyyy = this.getFullYear().toString();
          var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
          var dd = this.getDate().toString();
          return yyyy + "-" + (mm[0] ? mm : "0" + mm[0]) + "-" + (dd[0] ? dd : "0" + dd[0]); // padding
        };
      })
      (jQuery, this, document);
    </script>
    <script>
      $(".addSkip").on('click', function() {
        var set = $(this).closest('tr').find('.end_date').val();
        if (set) {
          $(this).closest('tr').find('.url').each(function() {
            $(this).val($(this).attr("data-value") + set);
          })
        }
      });
    </script>
    <script>
      $('#print').click(function() {
        window.print();
      });
    </script>
    <script>
      $('.msg').change(function() {
        if ($(this).val() === 'open') {
          $(this).parent().css({
            'background-color': 'green'
          });
        } else {
          $(this).parent().css({
            'background-color': 'red'
          });
        }
      }).trigger('change');
    </script>
	<script>
	$("#table").hide();
	
		if $("#table").on("click",function(){
			
			$("#table").toggle();
		})
</script>
	<!-- To get the user name from the session and when button clicked get the name-->
	
<script>
	$(".done").on('click', function() {
   
    var test = $("#session").val();
   
    $(this).closest('tr').find('.input').val(test);
       
      });
	
</script>
<script>

$(document).ready(function () {
	
// $('#hey').hide();
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
$(function() { 

    $('a[href="#toggle-search"], .navbar-bootsnipp .bootsnipp-search .input-group-btn > .btn[type="reset"]').on('click', function(event) {
		event.preventDefault();
		$('.navbar-bootsnipp .bootsnipp-search .input-group > input').val('');
		$('.navbar-bootsnipp .bootsnipp-search').toggleClass('open');
		$('a[href="#toggle-search"]').closest('li').toggleClass('active');

		if ($('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			/* I think .focus dosen't like css animations, set timeout to make sure input gets focus */
			setTimeout(function() { 
				$('.navbar-bootsnipp .bootsnipp-search .form-control').focus();
			}, 100);
		}			
	});

	$(document).on('keyup', function(event) {
		if (event.which == 27 && $('.navbar-bootsnipp .bootsnipp-search').hasClass('open')) {
			$('a[href="#toggle-search"]').trigger('click');
		}
	});
    
});

</script>
</div> </div>
</div>
</body>
</html>