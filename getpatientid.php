<?php 
//Retrieve the patientid from cms
//put it in the session, so it can be access throughtout the vaccine program

session_start();
     $patientid = "P0000";
     $_SESSION["getvaccine"] = $patientid;


?>
Get the patient ID from CMS
<input type="text" value="<?php echo $_SESSION["getvaccine"];  ?>">