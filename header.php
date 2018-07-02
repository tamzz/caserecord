<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><strong><em><img src="images/111.png" width="140px" height="85px" > </em></strong></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	<!--
	<li class="nav-item active">
        <a class="nav-link" href="searchclient.php"><h3> 陳文偉&nbsp;<br><small>區議員</small></h3></a>
      </li>-->
	
	 &nbsp;&nbsp;&nbsp;&nbsp;	
	 &nbsp;&nbsp;&nbsp;&nbsp;
	 	
	 &nbsp;&nbsp;&nbsp;&nbsp;
	
      <li class="nav-item ">
        <a class="nav-link" href="searchclient.php"><i class="fa fa-users" aria-hidden="true"></i>  客戶  </a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link" href="typesearch.php"> <i class="fa fa-list-alt" aria-hidden="true"> </i> 案件類型 </a>
      </li>&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
        <a class="nav-link " href="messagetime.php"> <i class="fa fa-clock-o" aria-hidden="true"></i> 案件提醒</a>
      </li>&nbsp;&nbsp;&nbsp;
	  
	   <li class="nav-item">
        <a class="nav-link " href="report.php" disabled > <i class="fa fa-file-text" aria-hidden="true"></i> 報告</a>
      </li>&nbsp;&nbsp;&nbsp;
	  
	  
	  <!--When login as admin, the user icon will show, allow admin to edit,add/delete user,
	  While for other user, the user icon wont be shown-->
	   <?php if ($_SESSION['username2222'] == 'admin') : ?>
<li class="nav-item">
        <a class="nav-link " href="useradmin.php"> <i class="fa fa-user-o" aria-hidden="true"></i> 用户</a>
    </li>      
	  <?php endif; ?>
	  
	  
	  
 
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>-->
  
  
	 <?php echo  '你好,'. ' ' . $_SESSION['username2222']; ?>
	  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 
	 <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
	 &nbsp;
     <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search">-->
   
   
   
</div>
</nav>