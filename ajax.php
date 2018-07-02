<?php 
//Including Database configuration file.
 
include "db.php";
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $patientnamee variable.
 
   $patientnamee = $_POST['search'];
 
//Search query.
 
   $Query = "SELECT * FROM clients 
   WHERE   patientnamec LIKE '%$patientnamee%'
   OR patienthkid LIKE '%$patientnamee%' OR patientNo LIKE '%$patientnamee%'
   OR contactno LIKE '%$patientnamee%'  OR email LIKE '%$patientnamee%' 
   OR date LIKE '%$patientnamee%'
   OR address LIKE '%$patientnamee%'";
 
//Query execution
 
   $ExecQuery = MySQLi_query($con, $Query);
 
//Creating unordered list to display result.
 
   echo '<table  class="table table-sm">';
 
   //Fetching result from database.
 
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
<tr>
   <!-- Creating unordered list items.
   Calling javascript function named as "fill" found in "script.js" file.
   By passing fetched result as parameter. -->
 
   <td onclick='fill("<?php echo $Result['patientnamec']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
   <a href="searchclient2.php?clientid=<?php echo $Result['patientNo']; ?>">
   <?php echo $Result['patientnamec']; ?> </a>
 <a href="searchclient2.php?clientid=<?php echo $Result['patientNo']; ?>">
   <?php echo $Result['contactno']; ?> </a> 
   </td></a>
 </tr>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
</table>