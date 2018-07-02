<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     
    <title>Vaccine Admin Page </title>
	
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
	


<input type="hidden" value="<?php echo $_SESSION["getvaccine"];  ?>">


<div class="navbar-wrapper" role="group">
  <nav class=" navbar-default navbar-fixed-top" role="navigation" id="top-nav" >
         <a href="index.php" onclick="menuActive(this);" class="logo navbar-brand"><b>Vaccine - <blue>Management ADMIN</blue></b></a> 
    <div class="collapse navbar-collapse" id="top_menu">
    <ul class="nav navbar-nav" id="main_menu">  
      <li ui-sref-active="active">
        <a href="index.php">
         <span class="sidebar-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
         <span class="sidebar-title"> Home</span>
        </a>
      </li>
      <li ui-sref-active="active">
          <a href="admin.php">
         <span class="sidebar-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
         <span class="sidebar-title">Admin</span>
        </a>
      </li>
      
    </div>
    </ul>
  </nav>
   

</div>

    <?php 
      //Retrieve the patientid from cms
      //put it in the session, so it can be access throughtout the vaccine program

        session_start();
        $patientid = $_GET["id"];
        echo $_GET["id"];
        $_SESSION["getvaccine"] = $patientid;
        echo $_SESSION["getvaccine"];

?>

<div class="main-wrap" id="main-content" style="padding-top: 70px;">
    <main id="page-content-wrapper" role="main" >
       <div class="container">

          <div class="content" id="home">

              <div class="container text-center">
                <h2 class="display-4">  Vaccine Management | Admin</h2>
              </div>
			  <br><br>

              <div class="container" style="max-width:1080px;">
                <div class="col-lg-12">
        	      <div class="row">
                  

                    <!--New Vaccine Injection-->
                    <div class="col-md-6 col-sm-6 mb">
                      <a href="newtype1.php">
                      <div class="modules_div pn">
                          <div class="card-box">
                          <i class="fa fa-plus-square" aria-hidden="true"></i>                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5>Define New <br>Vaccine  </h5>
                          </div>
                        </div>
                      </a>
                    </div>

                    <!--Patient Injection Record-->
                    <div class="col-md-6 col-sm-6 mb">
                      <a href="typesearch.php">
                      <div class="modules_div pn">
                         
                          <div class="card-box">
                           <i class="fa fa-list fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                       <h5>View Vaccine<br> Type List</h5>          
					</div>
                        </div>
                      </a>
                    </div>

                  </div> <!--End row-->

                  <div class="row">

                  <!--Patient Injection Record-->
                    <div class="col-md-6 col-sm-6 mb">
                      <a href="search.php">
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

                    <div class="col-md-6 col-sm-6 mb">
                      <a href="messagetime.php">
                        <div class="modules_div pn">
                          <div class="card-box">
                           <i class="fa fa-clock-o fa-4x" aria-hidden="true"></i>
                          </div>
                          <div class="modules-header" style="font-size: 5em !important;">
                            <h5>Injection Reminder<br>&nbsp;</h5>
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
