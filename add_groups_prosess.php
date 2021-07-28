<?php
include("include/connection.php");

$groupid = $_POST['groupid'];
$groupname = $_POST['groupname'];
$initialID = $_POST['initialID'];
$contactperson = $_POST['contactperson'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
          

//Test the Variables from Form

/*
echo $groupid;
echo $groupname;
echo $initialID;
echo $contactperson;
echo $phoneno;
echo $email;

*/

if($_POST['email'] == ''){
	echo '<p> You must enter Email</p>';
	$error = true;

 }

if($_POST['groupname'] == ''){
	echo '<p> You must enter Group Name</p>';
	$error = true;

 } 

 if($_POST['initialID'] == ''){
	echo '<p> You must enter ID NO</p>';
	$error = true;

 
	$url='add_groups.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="3; '.$url.'">';
  
 
 } else { 
  
// execute the stored procedure
$sql = "Call groupadd('$groupid','$groupname','$contactperson','$phoneno','$email','$initialID')";


$q = $connection->query($sql) or die('Query failed: ' . preg_last_error());


echo " Record Has been Added";


$url='add_groups.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="2; '.$url.'">';	

 } 


?>

    
