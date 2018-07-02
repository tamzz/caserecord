<?php
session_start();
/*  NEW.PHP  (Allows user to create a new entry in the database)*/
// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>Injection Reminder</title>
<style>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
      <!--<li class="nav-item">
        <a class="nav-link" href="index.php"><p>| <i class="fa fa-home" aria-hidden="true"></i> Home | </p></a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"><p>| <i class="fa fa-list-alt" aria-hidden="true"></i> Vaccine Type |</p></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="displaypatientall.php"><p>| <i class="fa fa-users" aria-hidden="true"></i> Patient Injection Record |</p></a>
      </li> 
  <!--<li class="nav-item">
        <a class="nav-link" href="messagetime.php"><p>| <i class="fa fa-clock-o" aria-hidden="true"></i> Injection Reminder |</p></a>
      </li> -->	  
	  
    </ul> 
  </div>
</nav>
		<!-- Nav Bar -->
		
		
	
		<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                           
						<div class="container">
                                <div class="content"> 
<form action="thirty.php" method="GET">


<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>




<?php
// if there are any errors, display them
if ($error != ''){
echo '<div style="padding:4px;border:1px solid red; color:red;">'.$error.'</div>';}
?>
<br><br>
<h4> Injection Reminder By Date <br>
 </h4> <p><hr>

<div id="accordion" role="tablist" aria-multiselectable="true" style="width: 550px">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <p class="mb-0">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Tomorrow Reminder
        </a>
      </p>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
<div class="jumbotron">

<a href="thirty.php"><button type="button" class="btn btn-outline-primary btn-lg">SMS List  </button></a>
<a href="thirtye.php"><button type="button" class="btn btn-outline-primary btn-lg">Call List </button></a>
<a href="email.php"><button type="button" class="btn btn-outline-primary btn-lg">Email List </button></a>

<!--<a href="thirtys.php"><button type="button" class="btn btn-outline-primary btn-lg">简体</button></a>
<a href="thirtye.php"><button type="button" class="btn btn-outline-primary btn-lg">English</button></a>-->
</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <p class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          14 Days Reminder
        </a>
      </p>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="card-block">
	  <div class="jumbotron">

<a href="14t.php"><button type="button" class="btn btn-outline-primary btn-lg">SMS List </button></a>
<a href="14e.php"><button type="button" class="btn btn-outline-primary btn-lg">Call List  </button></a>
<a href="email2.php"><button type="button" class="btn btn-outline-primary btn-lg">Email List </button></a>

<!--<a href="14s.php"><button type="button" class="btn btn-outline-primary btn-lg">English</button></a>-->
</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <p class="mb-0">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          30 Days Reminder
        </a>
      </p>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="card-block">
<div class="jumbotron">

<a href="30t.php"><button type="button" class="btn btn-outline-primary btn-lg">SMS List</button></a>
<a href="30e.php"><button type="button" class="btn btn-outline-primary btn-lg">Call List </button></a>
<a href="email3.php"><button type="button" class="btn btn-outline-primary btn-lg">Email List </button></a>

<!--<a href="30s.php"><button type="button" class="btn btn-outline-primary btn-lg">简体</button></a>
<a href="30e.php"><button type="button" class="btn btn-outline-primary btn-lg">English</button></a>-->
</div>      </div>
    </div>
  </div>
</div>

</form>


<!--Closse the wrapper-->
</div>
        </div>
        </main>   
        </div> 	
        </div>
        </div>  

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
