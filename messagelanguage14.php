<?php
/*  NEW.PHP  (Allows user to create a new entry in the database)*/
// creates the new record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
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
<h1 display-1> Filter patient vaccination alert Tomorrow by language 14days</h1>
</div>
<div class="jumbotron">
<!--
<strong>Select Language: *</strong><br>
  <?php
mysql_connect('localhost', 'root', 'funfun8888funfun');
mysql_select_db('vaccine3');
$sql = "SELECT DISTINCT(language),language AS language,language FROM patientvaccinedetail";
$result = mysql_query($sql);
echo "<select name='language'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['language'] . "'>" . $row['language'] . "</option>";
}
echo "</select>";?><br>

<p>* required</p>-->

<a href="14t.php"><button type="button" class="btn btn-secondary btn-lg btn-block">繁體</button></a><br><br>
<a href="14s.php"><button type="button" class="btn btn-secondary btn-lg btn-block">简体</button></a><br><br>
<a href="14e.php"><button type="button" class="btn btn-secondary btn-lg btn-block">English</button></a><br><br>
<!--<input type="submit" name="submit" value="Submit">-->
</div>
</form>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


</body>
</html>
