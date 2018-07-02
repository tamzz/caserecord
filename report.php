<?php session_start();?><html>
<head>

<title>報告 </title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
  <!--Print only the table of the page-->
   @media print
{
body * { visibility: hidden; }
.div4 * { visibility: visible; }
.div4 { position: absolute; top: 0px; left: 0px; }
}

.jumbotron {
    /* add bootstrap jumbotron background image */
   /* background: url("images/banner.jpg");*/
    /* change bootstrap jumbotron text color */
    color:black;
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
<?php include ('header.php');?>
<!-- Nav Bar -->
		
		<!-- The Wrapper box that wrap the whole main content-->
  <div class="main-wrap" id="main-content">
         <div class="wrapper" style=" background-color: #D6D6D6;" >
         <main id="page-content-wrapper" role="main" >
                            

<div class="container">
<br>
<h5>報告</h5><hr>    <!--Show current time and date-->
<em>
<?php
date_default_timezone_set('Asia/HongKong');
$date = date('d-m-Y h:i:s a', time());
echo $date;
?></em>

<div class="row">

<div class="col-md-4">

<div class="jumbotron"  style="border-style:double;">
<p><strong> <i class="fa fa-file-text" aria-hidden="true"></i> 進展報告</strong></p><hr>
<form class="form-inline" name="frmSearch" method="post" action="regreport.php">
	 <br>
	 <p class="search_input">
		從&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="date" class="form-control form-control-sm" name="fromdate" style="width: 165px"  />
		<br><br>
		
		至&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="date"  class="form-control form-control-sm" name="todate" style="width: 165px"  />
		<br><br>
	最低完成%
	<input type="text"  class="form-control form-control-sm" name="status000" style="width: 165px"  />
	<br><br><button type="submit" name="submit" style="width:165px" class="btn btn-outline-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i>搜索</button>
	</p>
	</form>
	<p></p>
	<!--<a href="smsall.php"><input type="button" class="btn btn-outline-primary btn-sm" name="smsall" value="All record" id="ok" style="width: 165px" ></a>-->
	
</div></div>	
<div class="col-md-4">
<div class="jumbotron"  style="border-style:double;">
<p><strong> <i class="fa fa-file-text" aria-hidden="true"></i> 信息報告</strong></p><hr>
<form class="form-inline" name="frmSearch" method="post" action="messagereport.php">
	 <br>
	 <p class="search_input">
從&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		<input type="date" class="form-control form-control-sm" name="fromdate" style="width: 165px"  />
		<br><br>
		
至&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date"  class="form-control form-control-sm" name="todate" style="width: 165px"  />
<br><br><br><br>
 <button type="submit" name="submit" style="width:165px" class="btn btn-outline-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i>搜索</button>
	</p>
	</form>
	<p></p>
	<!--<a href="smsall.php"><input type="button" class="btn btn-outline-primary btn-sm" name="smsall" value="All record" id="ok" style="width: 165px" ></a>-->
	
	</div></div>
	
<div class="col-md-4">
<div class="jumbotron"  style="border-style:double;">
<p><strong>  <i class="fa fa-file-text" aria-hidden="true"></i> 個人頻率報告  </strong></p><hr>
<form class="form-inline" name="frmSearch" method="post" action="frequencyreport.php">
<br>
<p class="search_input">
從&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
<input type="date" class="form-control form-control-sm" name="fromdate" style="width: 165px"  />
<br><br>
		
至&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" class="form-control form-control-sm" name="todate" style="width: 165px"  />
<br><br>
姓名 &nbsp;&nbsp;
<input type="text"  class="form-control form-control-sm" name="namequery" style="width: 165px"  /> 
<br><br>
<button type="submit" name="submit" style="width:165px" class="btn btn-outline-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i>搜索</button>
			

	
	</p>
	</form>
	<p></p>
	<!--<a href="smsall.php"><input type="button" class="btn btn-outline-primary btn-sm" name="smsall" value="All record" id="ok" style="width: 165px" ></a>-->
	
	</div></div></div>
	
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
