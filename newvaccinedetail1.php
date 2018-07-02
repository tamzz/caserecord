<?php ob_start();?><?php session_start();?><!Doctype html>
<html>
<head>
<style>
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
<!-- start of Nav Bar -->
   <!-- Nav Bar -->
<?php include ('header.php');?>
		<!-- end of Nav Bar -->
		<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;">
                        <main id="page-content-wrapper" role="main" >
                           
                                <div class="content"> 
			 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <form action="" method="post">
		
<!-- Retrieve The variable pass through $_SESSION from previous pages-->
<?php 
//session_start();
//totalnoofinjection
$tam = $_SESSION['varname5'];
//echo $tam;
//vaccineid
$tamtam = $_SESSION['varname50'];
//echo $tamtam;
//疫苗名稱 (繁體)
$traditional = $_SESSION['traditional'];
//echo $traditional;
//疫苗名称 (简体)
$simplified = $_SESSION['simplified'];
//echo $simplified;
//Vaccine Name (Eng)
$eng = $_SESSION['eng'];
//echo $eng;
//Vaccine description
//it's passed to this page,
//but it's set as a hidden page 
//so it can't be seen on the page
$des= $_SESSION['des'];
//echo $des;
?>

<h5>

<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>
<h4>案件</h4><hr><br>

1. 會見總數<br>
&nbsp;&nbsp;&nbsp&nbsp<input type="number" class="form-control form-control-sm" style="width: 175px" id="insert-rows-amnt" name="insert-rows-amnt" value="<?php echo $tam ?>"  />
<br><button id="add-row" type="button" class="btn btn-outline-primary btn-sm">Confirm</button>
<button type="reset" class="btn btn-outline-primary btn-sm" name="reset">Reset</button><hr>
<table id="one"><br>

       2. 案件細節<br>
          <thead>
	      <th>案件</th>
	      <th>總數</th>
          <th>Nth</th>
	      <th>間隔日子*</th>
	      <th>計劃行動*</th>
          </thead>
		  
<tbody>
    </tbody>
      </table><br>
    <p>* 必填項</p>
	<p>請填寫“Last”在最後一排的輸入.</p><br><br>

    <input type="submit" class="btn btn-outline-primary" name="submit" value="Submit"><br><br>
    </form>

<script>
$('#add-row').click(function() {
  var $tbody, $row, additionalRows;
  var numNewRows = parseInt($('#insert-rows-amnt').val(), 10);

  if (isNaN(numNewRows) || numNewRows <= 0) {
    alert('Please enter number of injection');
  } else {

    $tbody = $('table tbody');
    $row = $tbody.find('#one tr:last');
    var lastRowIndex=($row.index()==-1? 0:$row.index()) +1 ;
    additionalRows = new Array(numNewRows);
    for(i=0;i<numNewRows;i++)
    {
    additionalRows[i]=` <tr>
	
<td><input type="text" class="form-control" style="width: 160px"name="vaccinename1[]" value="<?php echo $traditional ;?>" readonly></td>
<td><input type="text" class="form-control total" size="2" name="totalnoofinjection[]" value="<?php echo $tam ;?>" readonly></td>
	  <!--<td><input type="text" style="width: 130px" name="nthinjection[]" ></td>-->
    <td><textarea rows="1" class="form-control"cols="3" readonly name="nthinjection[]">${lastRowIndex}</textarea></td>	  
	  <td><input type="text" class="form-control fill" name="skip[]" placeholder="" ></td>
  	<td><input type="text" class="form-control" style="width: 160px" name="description[]"></td>
	
<td><input type="hidden" class="form-control" style="width: 160px" name="casetype[]" 
    value="<?php echo $_SESSION['casetype'] ;?>"  ></td>
		
		
<!--***** Below 6 columns are hidden / display:none that will saved data to 'casedetail' table************-->
	    
	<td><input type="hidden" class="form-control" style="width: 100px" name="vaccineid[]" value="<?php echo $tamtam;?>" readonly="readonly"> </td>
	  <td><input type="hidden" class="form-control" size="2" name="vaccinedes[]" value="<?php echo $des ;?>" readonly></td>
	  <!--<td><input type="text" style="display:none;" class="one" name="vaccinename2[]" value="<?php echo $simplified ;?>"  ></td>
	  <td><input type="text"  style="display:none;" class="two" name="vaccinename3[]" value="<?php echo $eng ;?>"  ></td>
-->
	  <td><textarea rows="3" style="display:none;" class="form-control" cols="20"  name="traditionalmessage[]" ><?php echo $traditional."\n下一次見面為";?></textarea> </td>
	  <!--<td><textarea rows="3" style="display:none;" class="form-control" cols="20" name="simplifiedmessage[]" ><?php echo $simplified."\n下一次见面为";?></textarea> </td>
	  <td><textarea rows="3" style="display:none;" class="form-control" cols="20"  name="engmessage[]" ><?php echo $eng."\nNext meeting will be";?></textarea> </td>-->
  	   
	  <td><input type="hidden" class="form-control"style="width: 130px" name="date[]" placeholder="Leave empty" readonly></td>
	  <td><input type="hidden" class="form-control"style="width: 130px" name="nextdate[]" placeholder="Leave empty" readonly></td>

	  </tr>`
      lastRowIndex=lastRowIndex+1;
    }
   
    $tbody.append(additionalRows.join());
  }
});
</script>

<!-- When button is clicked, get total vaccination value and display in the below table [totalnoofvaccine]field-->
<script>
$("#add-row").on('click', function() {
  var set = $('#insert-rows-amnt').val();
  if (set) {
   $('.total').val(set);
      }
});
 
</script>
<!--***************Remove only the tbody tr keep the thead tr****************************-->
<script>
$('[name="reset"]').click(function() {
  $('#one tbody tr').remove();
});
</script>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</div>

<!--Closse the wrapper-->
</div>
        </div>
        </main>   
        </div> 	
        </div>
        </div>  

		</body>

</html>
<?php 
// connect to the database,save multiple records to the database at once
include('connect-db.php');
// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST["submit"])){
	{
        foreach ($_POST['vaccineid'] as $index => $vaccineid) {
        $data1 = mysql_real_escape_string($vaccineid);
	    $data2 = mysql_real_escape_string($_POST['vaccinename1'][$index]);
        //$data3 = mysql_real_escape_string($_POST['vaccinename2'][$index]);
       // $data4 = mysql_real_escape_string($_POST['vaccinename3'][$index]);
        $data14 = mysql_real_escape_string($_POST['description'][$index]);
        $data5 = mysql_real_escape_string($_POST['totalnoofinjection'][$index]);
		$data6 = mysql_real_escape_string($_POST['nthinjection'][$index]);
	    $data7 = mysql_real_escape_string($_POST['date'][$index]);
	    $data8 = mysql_real_escape_string($_POST['nextdate'][$index]);
	    $data9 = mysql_real_escape_string($_POST['skip'][$index]);
	    $data10 = mysql_real_escape_string($_POST['traditionalmessage'][$index]);
		//$data11 = mysql_real_escape_string($_POST['simplifiedmessage'][$index]);
        //$data12 = mysql_real_escape_string($_POST['engmessage'][$index]);
        $data13 = mysql_real_escape_string($_POST['vaccinedes'][$index]);
        $data15 = mysql_real_escape_string($_POST['casetype'][$index]);
		
	    //if ($data14 == '' || $data9 == '')
//{
// generate error message
//echo "<script>
//alert('Please fill in all the required field before submission');
//window.location.href='newcasedetail1.php';
//</script>";
//}
//else{
     mysql_query("INSERT INTO casedetail (vaccineid,typeid, vaccinename1,price,totalnoofinjection,nthinjection,date,nextdate,skip,traditionalmessage,vaccinedes)
	 VALUES ('$data1', '$data15','$data2','$data14','$data5','$data6','$data7','$data8','$data9','$data10','$data13')") or die(mysql_error());
    header("Location: typesearch.php");
//	}
	}
}}
?>