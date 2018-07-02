<?php session_start();?><html>
<head>
<title>Search date</title>
  <style>
  <!--Print only the table of the page-->
   @media print
{
body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
}
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
    <nav class="navbar navbar-toggleable-md navbar-light" style="background-color: #e3f2fd;"> 
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h3>Vaccine Management</h3></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <!-- <li class="nav-item">
        <a class="nav-link" href="index2.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
      
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
	  
	  <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> 	  	  
    </ul> 
  </div>
</nav>
<!-- Nav Bar -->


		
						<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                            
						
                                

<div class="container">

<div class="row">

<div class="col-md-4">

<!--Show current time and date-->
Current time:
<?php
date_default_timezone_set('Asia/HongKong');
$date = date('m-d-Y h:i:s a', time());
echo $date;
?>
<br><br>
<p> SMS</p><hr>
<form name="frmSearch" method="post" action="searchdate2.php">
	 <br>
	    <p class="search_input">
		<label><strong> From Date </strong></label>
		<input type="date" class="form-control" name="fromdate" style="width: 180px"  />
		<br>
		
		<label><strong> To Date </strong></label>
		<input type="date"  class="form-control" name="todate" style="width: 180px"  />
		<br><br>
		<input type="submit" class="form-control" name="go" value="Search" id="ok" style="width: 180px" >
	</p>
	</form>
	
	</div>
	
	<div class="col-md-4">
	<br><br>
	<p> Call</p><hr>
<form name="frmSearch" method="post" action="call2.php">
	 <br>
	    <p class="search_input">
		<label><strong> From Date </strong></label>
		<input type="date" class="form-control" name="fromdate" style="width: 180px"  />
		<br>
		
		<label><strong> To Date </strong></label>
		<input type="date"  class="form-control" name="todate" style="width:180px"  />
		<br><br>
		<input type="submit" class="form-control" name="go" value="Search" id="ok" style="width: 180px" >
	</p>
	</form>

	</div>
	
		<div class="col-md-4">

	<br><br>
	<p> Email</p><hr>
<form name="frmSearch" method="post" action="emaillist2.php">
	 <br>
	    <p class="search_input">
		<label><strong> From Date </strong></label>
		<input type="date" class="form-control" name="fromdate" style="width: 180px"  />
		<br>
		
		<label><strong> To Date </strong></label>
		<input type="date"  class="form-control" name="todate" style="width: 180px"  />
		<br><br>
		<input type="submit" class="form-control" name="go" value="Search" id="ok" style="width: 180px" >
	</p>
	</form>

    </div></div>
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	
	
	<!-- Close the wrapper-->
</div>
                            </div>
                        </main>   
                   </div> 	
              </div>
        </div> 
</body>
</html>
