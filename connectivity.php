<?php session_start();?><?php $_SESSION['username2222']= $_POST['user'];?> 

<!-- To get the user id to be used in sender id to send sms-->

<?php

include('connect-db.php');
$result = mysql_query("SELECT *FROM username
WHERE userName = '". $_POST['user']."'");?>
<?php
while($row = mysql_fetch_array( $result,MYSQL_ASSOC)) {?>
<?php $row['UserNameID'] ?>

<?php 
$_SESSION['UserNameID111'] = $row['UserNameID']; 
 
 ?>
 
<?php } ?>

<?php 
include('connect-db.php');

$result = mysql_query("SELECT userName , aes_decrypt(pass,'k')  AS pass_decrypted from username  
HAVING userName ='". $_POST['user']."'
  AND pass_decrypted ='". $_POST['pass']."' ");


if (!mysql_num_rows($result)) {
 echo 'Invalid Login Credential!';
 echo '<a href="index.php">'.'Try Again'.'</a>';
//header('Location: newpatient1.php');
exit;
}
else {

header('Location: searchclient.php');
//echo 'yes';  };

}