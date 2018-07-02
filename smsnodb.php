<?php session_start();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<h1><title>SMS List no record redirect </title></h1>
<style> 
@media print
{
body * { visibility: hidden; }
.div2 * { visibility: visible; }
.div2 { position: absolute; top: 0px; left: 0px; }
}
 <!-- bootstrap css -->
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
		<?php //echo $_SESSION["getvaccine"];?>
<?php //echo $_SESSION["gethkid"];?>

        <section class="text-center">
       <br><br>
        <h4 align="left">沒有相關記錄</h4><hr><br><br>
		<p>數據庫中找不到有關您指定日期範圍的相關記錄. </p>
		

		<a href="messagetime.php"><input type="button" name="print" class="btn btn-outline-secondary" style="color: black" value="再試一次" ></a><br>
        <br></p></div>
        </section>


<br><br>
<!--<a href="guzzle.php"><button name="send" type="submit" class="btn btn-primary btn-lg">Send SMS Alert</button></a>-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
$('#print').click(function() {
        window.print();
      });
</script>
</div>
</div>

								 <!-- Close the wrapper-->
	  
	 </div>
                            </div>
                        </main>   
                   </div> 	
              </div>
        </div>  

								

</body>
</html>