<?php

include('include/connection.php');


$query = "SELECT  
ClusterName AS 'Cluster Name',
(CONCAT(MONTHNAME(scStartDate),' ',YEAR(scStartDate))) AS DATE,
CourseName AS 'Course Name',
count(*) AS 'Total', 
count(case when Sex ='M' then 1 end) as Male,
count(case when Sex ='F' then 1 end) as Female
FROM ci_statistics  
group by ClusterName";


$result = mysqli_query($connection,$query);
	if (!$result) { die("Query Failed."); }
		
	while($row = mysqli_fetch_array($result))
	{

		$dataPoints[] = [
			'label' => $row[0],
			'y' => $row[3]
		];
		//$Course[] = $row[0];
		//$Count[] = $row[1];
			
	 }
	 
	  
	 
$query2 = "SELECT
count(case when Sex ='M' then 1 end) as Male,   
count(case when Sex = 'F' then 1 end) as Female
FROM ci_statistics";

$result2 = mysqli_query($connection,$query2);
	if (!$result2) { die("Query Failed."); }
	
	
	while($row2 = mysqli_fetch_array($result2))
	
	$dataPoints2 = array( 
	array("label"=>"Male", "y"=>$row2[0]),
	array("label"=>"Female", "y"=>$row2[1])
);




$query3 = "SELECT
    SUM(IF(Age <= 11,1,0)) as 'Under11',
    SUM(IF(Age BETWEEN 12 and 15,1,0)) as '12-15',
    SUM(IF(Age BETWEEN 16 and 18,1,0)) as '16-18',
	SUM(IF(Age BETWEEN 19 and 100,1,0)) as 'Above18'
FROM ci_statistics ";



$result3 = mysqli_query($connection,$query3);
	if (!$result3) { die("Query Failed."); }
	
	
	
	while($row3 = mysqli_fetch_array($result3)) {

	$dataPoints3 = array( 
	array("label"=>"Under11", "y"=>$row3[0]),
	array("label"=>"12-15", "y"=>$row3[1]),
	array("label"=>"16-18", "y"=>$row3[2]),
	array("label"=>"Above18", "y"=>$row3[3])
	);
 }
	
 $query4 = "SELECT
    SUM(IF(Age <= 11,1,0)) as 'Under11',
    SUM(IF(Age BETWEEN 12 and 15,1,0)) as '12-15',
    SUM(IF(Age BETWEEN 16 and 18,1,0)) as '16-18',
	SUM(IF(Age BETWEEN 19 and 100,1,0)) as 'Above18'
FROM ci_statistics WHERE Sex = 'M' ";



$result4 = mysqli_query($connection,$query4);
	if (!$result4) { die("Query Failed."); }
	
	
	
	while($row4 = mysqli_fetch_array($result4)) {

	$dataPoints4 = array( 
	array("label"=>"Under11", "y"=>$row4[0]),
	array("label"=>"12-15", "y"=>$row4[1]),
	array("label"=>"16-18", "y"=>$row4[2]),
	array("label"=>"Above18", "y"=>$row4[3])
	);
 }
 
 
 //BAR CHART FOR AGE (FEMALE GROUP) START HERE
 
 $query5 = "SELECT
    SUM(IF(Age <= 11,1,0)) as 'Under11',
    SUM(IF(Age BETWEEN 12 and 15,1,0)) as '12-15',
    SUM(IF(Age BETWEEN 16 and 18,1,0)) as '16-18',
	SUM(IF(Age BETWEEN 19 and 100,1,0)) as 'Above18'
FROM ci_statistics WHERE Sex = 'F' ";



$result5 = mysqli_query($connection,$query5);
	if (!$result5) { die("Query Failed."); }
	
	
	
	while($row5 = mysqli_fetch_array($result5)) {

	$dataPoints5 = array( 
	array("label"=>"Under11", "y"=>$row5[0]),
	array("label"=>"12-15", "y"=>$row5[1]),
	array("label"=>"16-18", "y"=>$row5[2]),
	array("label"=>"Above18", "y"=>$row5[3])
	);
 }
	
 //BAR CHART FOR AGE (FEMALE GROUP) ENDS HERE

 //Course Distribution Start here
$query6 = "SELECT  
CourseName,
count(*) AS 'Total', 
count(case when Sex ='M' then 1 end) as Male,
count(case when Sex ='F' then 1 end) as Female
FROM ci_statistics  
group by CourseName;";


$result6 = mysqli_query($connection,$query6);
	if (!$result6) { die("Query Failed."); }
		
	while($row6 = mysqli_fetch_array($result6))
	{

		$dataPoints6[] = [
			'label' => $row6[0],
			'y' => $row6[1]
		];
		//$Course[] = $row[0];
		//$Count[] = $row[1];		
	 }
//Course Distribution Ends here
 


//Number of Students Per Regions Start here
$query7 = "SELECT clusterName,
count(*) AS Total
FROM ci_statistics  
WHERE scStartDate BETWEEN '2018-01-01' AND  '2021-12-31'
group by clusterName;";

$result7 = mysqli_query($connection,$query7);
	if (!$result7) { die("Query Failed."); }
		
	while($row7 = mysqli_fetch_array($result7))
	{

		$dataPoints7[] = [
			'label' => $row7[0],
			'y' => $row7[1]
		];
		//$Course[] = $row[0];
		//$Count[] = $row[1];		
	 }
//Number of Students Per Regions Ends here
 


//Number of Students Per Centers Start here
$query8 = "SELECT CenterNo, centerName,CONCAT(CenterNo,' - ' ,centerName) as Name,
count(*) AS Total
FROM ci_statistics  
WHERE scStartDate BETWEEN '2018-01-01' AND  '2021-12-31'
group by CenterNo;";

$result8 = mysqli_query($connection,$query8);
	if (!$result8) { die("Query Failed."); }
		
	while($row8 = mysqli_fetch_array($result8))
	{

		$dataPoints8[] = [
			'label' => $row8[1],
			'y' => $row8[3]
		];
		//$Course[] = $row[0];
		//$Count[] = $row[1];		
	 }
//Number of Students Per Center Ends here


?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>e3empower africa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
  
  
  
 <script>window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "TOTAL PER CLUSTER"
	},
	subtitles: [{
		text: "2021"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "###",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "TOTAL NO OF STUDENTS"
	},
	subtitles: [{
		text: "2021"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "###",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});


var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	title: {
		text: "Age Group Distribution"
	},
	subtitles: [{
		text: "2021"
	}],
	data: [{
		type: "bar",
		yValueFormatString: "###",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});


var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title: {
		text: "Age Group Male"
	},
	subtitles: [{
		text: "2021"
	}],
	data: [{
		type: "bar",
		yValueFormatString: "###",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart5 = new CanvasJS.Chart("chartContainer5", {
	animationEnabled: true,
	title: {
		text: "Age Group Female"
	},
	subtitles: [{
		text: "2021"
	}],
	data: [{
		type: "bar",
		yValueFormatString: "###",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart6 = new CanvasJS.Chart("chartContainer6", {
	animationEnabled: true,
	title: {
		text: "Total No of Students PER Course"
	},
	subtitles: [{
		text: "2020"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "###",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints6, JSON_NUMERIC_CHECK); ?>
	}]
});


var chart7 = new CanvasJS.Chart("chartContainer7", {
	animationEnabled: true,
	
	title:{
		text:"Region Total Student Summary"
	},
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "rgba(1,77,101,.2)",
		gridColor: "rgba(1,77,101,.1)",
		title: "Number of Students"
	},
	data: [{
		type: "bar",
		name: "students",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: <?php echo json_encode($dataPoints7, JSON_NUMERIC_CHECK); ?>  
	}]
});


chart.render();
chart2.render();
chart3.render();
chart4.render();
chart5.render();
chart6.render();
chart7.render();

 
}

</script>



</head>


<body>
<div class="container">

		<div class="alert alert-success" role="alert">
				<center>COMPASSION</center>		
		</div>
		
		<a href="index.php"><button type="button" class="btn btn-primary" >Home</button></a>
	   <a href="e3areport.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Report Dashboard</button></a>

	
  <div class="row">
		<div class="col-sm-6" >
			<div id="chartContainer2" style="height: 370px; width: 100%;"></div>	
		</div>
			
		
		<div class="col-sm-6" >
		  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
		</div>
	</div>
	
  
			 <div class="container">  
			  <div class="row">
					<div class="col-sm-4" >
						<div id="chartContainer3" style="height: 370px; width: 100%;"></div>
					</div>
					
					<div class="col-sm-4" >
						<div id="chartContainer4" style="height: 370px; width: 100%;"></div> 
					</div>
					
					<div class="col-sm-4" >
						<div id="chartContainer5" style="height: 370px; width: 100%;"></div> 
					</div>
					
					
				</div>				
			  </div> 



			  <div class="container">  
			  <div class="row">
					<div class="col-sm-6" >
						<div id="chartContainer6" style="height: 370px; width: 100%;"></div>
					</div>
					<div class="col-sm-6" >
						<div id="chartContainer7" style="height: 370px; width: 100%;"></div>
					</div>
					
				</div>				
			  </div> 
	


</div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>