 <?php 
session_start();
 //echo $_SESSION['getvaccine'];?> <!DOCTYPE html>
<html>
<head>
  <title>Patient search</title>
  <style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </style>
  		<script src="https://use.fontawesome.com/ead802b541.js"></script>

</head>
<body>
<!-- Nav Bar -->
    <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;"> 
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h3>Vaccine Management</h3></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="search.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> 	  
	  
    </ul> 
  </div>
</nav>
		<!-- Nav Bar -->
  <div class="container">
    <!--<?php
// if there are any errors, display them
if ($error != ''){
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';}
?>-->
   
   
   <div class="container">
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

	  
	<div class="jumbotron ">  
          <h1 class="display-4"> Patient Injection Record </h1><hr>     <br><br> 
     <!-- ======1st Form =============--> 
	 
	  <form class="form-inline" action="searchallhandle.php" method="POST">
      <h4 class="display-5">Enter Patient ID</h4>&nbsp;&nbsp;
      
      <p><input type="test" name="patientid" class="form-control mb-2 mr-sm-2 mb-sm-0"  style="width:250px"; value="<?php echo $_SESSION["getvaccine"];?>"></p><br>
   

      <input type="submit" name="submit" value="Go" class="btn btn-outline-primary" id="searchresult">
       </form><br> 
     <!-- ====== end of 1st Form =============--> 
         <h4>OR	</h4> <br> 
	   
     <!-- ======2nd Form =============--> 
	   <form class="form-inline" action="searchallhandle.php" method="POST">
        <h4 class="display-5">Select Patient ID</h4>&nbsp;&nbsp;
	 <input type="hidden" class="form-control mb-2 mr-sm-2 mb-sm-0" name="patientid" placeholder="Patient ID" value="<?php echo $_SESSION['all'];?> ">
    <select class="form-control" name="patientid" style="width:250px"; >
	<option >Select Patient ID </option>
    <?php
	
		   include('connect-db.php');

    //Select the treatmentname from the table treatmentdetail 
	//then use the where clause to narrow down to a specific patient's respective treatment
    $sql = "SELECT DISTINCT(patientid),patientid AS patientid,patientid FROM patientvaccinedetail ORDER BY patientid";
    $result = mysql_query($sql);
     while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['patientid'] . "'>" . $row['patientid'] . "</option>";
     }
     ?>
    </select><br>
    <input type="submit" value="Go"  name="submit"class="btn btn-outline-primary" id="done">
    </form><br><br>
     <!-- ====== end of 2nd Form =============--> 
    
	
<!--=====================================================================-->

<!--<div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <p class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          By Date </a>
        
      </p>
      </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-block">

	   <div class="jumbotron">

       <form name="frmSearch" method="post" action="searchdate2.php">
	 
	    <p class="search_input">
		<label><strong> From Date </strong></label>
		<input type="date" class="form-control" name="fromdate" style="width:450px"; />
		<br>
		
		<label><strong> To Date </strong></label>
		<input type="date"  class="form-control" name="todate" style="width:450px"; />
		<br><br>
		<input type="submit" class="form-control" name="go" value="Search" id="ok" style="width:450px";>
	    </p>
	    </form>
		
        </div></div></div></div>	-->
	
	
	
	
  
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</div>
</div>
</div>
</div>
  </div>
  </div>
</div>	  
</div>



  <!--=======================================FORM================================================================-->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </div>
</body>

</html>