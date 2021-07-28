<?php
header('Content-Type: application/json');

$connection= mysqli_connect("localhost","root","");
		if(!$connection){
			die("Connection failed: " .mysqli_error());
		} 
		
	$db = mysqli_select_db($connection,"e3a");
		if(!$db){
			die("Database failed: " .mysql_error());
			} 


$sqlQuery = "SELECT tblgroup.grpName,
COUNT(*) AS TOTAL 
FROM tblstudent
JOIN tblgroup ON(tblstudent.grpNo = tblgroup.grpNo) 
GROUP BY grpName";

$result = mysqli_query($connection,$sqlQuery);

$data = array();
if (!$result) { die("Query Failed."); }

while($row = mysqli_fetch_array($result)) {

    $data[] = [
        'name' => $row[0],
        'marks' => $row[1]
    ];

}

mysqli_close($connection);

echo json_encode($data);
?>