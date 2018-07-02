<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     
    <title>Vaccine Start page </title>
	
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
		<script src="https://use.fontawesome.com/ead802b541.js"></script>

   </head>
    <body>
	


<input type="text" value="<?php echo $_SESSION["getvaccine"];  ?>">


<div class="navbar-wrapper" role="group">
  <nav class=" navbar-default navbar-fixed-top" role="navigation" id="top-nav" >
         <a href="#" onclick="menuActive(this);" class="logo navbar-brand"><b>Vaccine - <blue>Management</blue></b></a> 
    <div class="collapse navbar-collapse" id="top_menu">
    <ul class="nav navbar-nav" id="main_menu">  
      <!--<li ui-sref-active="active">
        <a href="index.php">
         <span class="sidebar-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
         <span class="sidebar-title">Home</span>
        </a>
      </li>
      <li ui-sref-active="active">
          <a href="admin.php">
         <span class="sidebar-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
         <span class="sidebar-title">Admin</span>
        </a>
      </li>-->
     
    </div>
    </ul>
  </nav>
   

</div>

    <?php 
      //Retrieve the patientid from cms
      //put it in the session, so it can be access throughtout the vaccine program
         
	  
	  
        session_start();
        
        echo $_SESSION["one"];
        echo $_SESSION["two"];
		
		
		//$patienthkid = $_GET["hkid"];
       // echo $_GET["hkid"];
        //$_SESSION["gethkid"] = $patienthkid;
		
		//echo $_SESSION["getvaccine"];
       
	   

?>
<div class="main-wrap" id="main-content" style="padding-top: 70px;">
    <main id="page-content-wrapper" role="main" >
       <div class="container">

          <div class="content" id="home">

              <div class="container text-center">
                <h3 class="display-4">  Vaccine Management</h3><hr>
              </div>
			  <br><br> <br><br>

              <div class="container" style="max-width:1080px;">
                <div class="col-lg-12">
        	      <div class="row">
                  

                   

                    <!--Patient Injection Record-->
                    <div class="col-md-4 col-sm-4mb">
                      <a href="displaypatientalladd.php">
                      <div class="modules_div pn">
                         
                          <div class="card-box">
                           <i class="fa fa-users fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5>Patient Injection<br>Record </h5>
                          </div>
                        </div>
                      </a>
                    </div>

                   <!--End row-->

               

                  <!--Patient Injection Record-->
                    <div class="col-md-4 col-sm-4 mb">
                      <a href="typesearch.php">
                        <div class="modules_div pn">
                          <div class="card-box">
                           <i class="fa fa-list fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5>Vaccine<br>Type List </h5>
                          </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-4 col-sm-4 mb">
                      <a href="admin.php">
                        <div class="modules_div pn">
                          <div class="card-box">
                           <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5>Admin<br>&nbsp;</h5>
                          </div>
                        </div>
                      </a>
                    </div>

                  </div><!--End col-12-->
                </div><!--End Row-->
        	

        		  </div> <!--End Container-->
          </div> <!--End Content-->
        </div>
      </main>
    </div>
           
    		

  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
