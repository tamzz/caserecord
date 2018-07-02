<?php session_start();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>New Injection</title>
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
		
		
		
		<!-- Nav Bar -->

<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
                   <div class="wrapper" style=" background-color: #D6D6D6;" >
                        <main id="page-content-wrapper" role="main" >
                            <div class="container">
						
                                <div class="content"> 
			  
			    <div class="container">

  
    <!--<?php
// if there are any errors, display them
if ($error != ''){
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';}
?>-->
    <div class="btn-group" role="group" aria-label="Basic example">
      <!--<a href="typesearch.php"> <button type="button" class="btn btn-primary btn-lg">View Current Vaccine</button></a>&nbsp;
      <a href="index.html"><button type="button" class="btn btn-primary btn-lg">Back to Home</button></a>-->
    </div>
    <div class="jumbotron">
	      <h4>Define New Vaccine</h4><hr>
		  <?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>


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
          <p>Vaccine ID : * </p> <input type="text" style="width: 550px" name="vaccineid" class="form-control" value="<?php echo 'VI'.' '.$digits; ?>" 
           readonly><br/>
          <p>疫苗名稱 (繁體): *</p> <input type="text" style="width: 550px"  name="vaccinename1" class="form-control" ><br/>
           <p>疫苗名称 (简体): * </p> <input type="text" style="width: 550px" name="vaccinename2" class="form-control"><br/>
         <p>Vaccine Name (Eng): *</p><input type="text" style="width: 550px" name="vaccinename3" class="form-control"
		  ><br/>
           <p>Vaccine Description: * </p><input type="text"  style="width: 550px" name="vaccinedescription" class="form-control"><br/>
          <p>Total number of Injection: *</p> <input type="number" style="width: 550px" name="totalnoofinjection" class="form-control"><br/></div>
        <p>* Compulsory field</p><br>
        <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
        <button class="btn btn-outline-primary" type="reset" name="reset">Reset</button>
    </div>
    </form>
  </div>
  
  </div>
                            </div>
                        </main>   
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