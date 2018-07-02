<?php
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>New Patient</title>
<style><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"></style>
</head>
<body><div class="container">
<form action="thirty.php" method="GET">
<?php
// if there are any errors, display them
if ($error != ''){
echo '<div style="padding:4px;border:1px solid red; color:red;">'.$error.'</div>';}
?>
<div class="jumbotron">
<hr>
<h1 display-1> Filter patient vaccination alert Tomorrow by language</h1>
</div>
<div class="jumbotron">



<a href="thirty.php"><button type="button" class="btn btn-secondary btn-lg btn-block">繁體</button></a><br><br>
<a href="thirtys.php"><button type="button" class="btn btn-secondary btn-lg btn-block">简体</button></a><br><br>
<a href="thirtye.php"><button type="button" class="btn btn-secondary btn-lg btn-block">English</button></a><br><br>
<!--<input type="submit" name="submit" value="Submit">-->
</div>
</form>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</body>
</html>
