<?php

include('include/connection.php');
$groupID = $_GET['ID'];
$batchID = $_GET['batch'];

echo $groupID;
echo $batchID;




$query = "SELECT 
MS as Package,
COUNT(*) AS 'Total Access',
HOUR(SEC_TO_TIME(SUM(TDiff ))) AS TIME
FROM data_group
WHERE GrpNo = $groupID AND batch = $batchID
group by MS";


$query2 = "SELECT 
MS as Package,
COUNT(*) AS 'Total Access',
HOUR(SEC_TO_TIME(SUM(TDiff ))) AS TIME
FROM data_group
WHERE GrpNo = $groupID AND batch = $batch
group by MS";


$result = mysqli_query($connection,$query);
	if (!$result) { die("Query Failed."); }
	while($row = mysqli_fetch_array($result))
	{

		$dataPoints1[] = [
			'label' => $row[0],
			'y' => $row[1]
		];
	//	$Package[] = $row[0];
	//	$TotalTime[] = $row[1];		
	 }



     $result2 = mysqli_query($connection,$query2);
	if (!$result2) { die("Query Failed."); }
	while($row2 = mysqli_fetch_array($result2))
	{

		$dataPoints2[] = [
			'label' => $row2[0],
			'y' => $row2[2]
		];
		//$Package[] = $row[0];
		//$TotalAccessTime[] = $row[2];		
	 }


//Group Bar Graph Ends Here	

 
?> 



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Goups Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>


    <!-- This is for search --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"> 
  
  
  
  
  
 <script>window.onload = function() {
 
 
var chart1 = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	title: {
		text: "PACKAGIES TOTAL TIME IN HOURS"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		yValueFormatString: "###",
		indexLabel: "{label} ({y}Hr)",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "ACCESS TIME"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "bar",
		yValueFormatString: "###",
		indexLabel: "{y}",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});



chart1.render();
chart2.render();
}

</script>


</head>
<body>
		
<div class="container">
       <center><div class="alert alert-success" role="alert"><b>CENTER ANALYSIS</b></div></center>
	   
			 <a href="index.php"><button type="button" class="btn btn-info" >Home</button></a> 
			 <a href="#"><button type="submit" class="btn btn-info"><b>Rogic </b></button></a>
			<a href="#"><button type="submit" class="btn btn-info"><b>Hours of CODE </b></button></a>
                    <a href="ms.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Ms Word </b></button></a>                  
                    <a href="excel.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Ms Excel </b></button></a>
                    <a href="ppt.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Ms PowerPoint </b></button></a>
                    <a href="#"><button type="submit" class="btn btn-info"><b>Ms Publisher </b></button></a>
                    <a href="ppt.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Notepad </b></button></a>
                    <a href="#"><button type="submit" class="btn btn-info"><b>Rachel </b></button></a>
			 

        <div class="row">
                <div class="col-sm-6" >
                    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                </div>
                    
                
                <div class="col-sm-6" >
                    <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                </div>
        </div>



        <div class="row">
                <div class="col-sm-12" >

				<center><div class="alert alert-success" role="alert"><b>STUDENT RECORDS</b></div></center>

          <table class="table table-hover"   cellspacing="0" width="100%" data-toggle="table"  data-pagination="true"  data-search="true">
			  <thead>
				<tr>
					<th scope="col">StudentName</th>
					<th scope="col">Package Name</th>
					<th scope="col">TotalAcessTime</th>
					<th scope="col">TIME</th>
                    <th scope="col">Action</th>
				</tr>
			  </thead>
			  
			  <tbody>
			  
			  <?php
			  
			  $result3 = mysqli_query($connection,"SELECT 
              Name,MS,COUNT(*),SEC_TO_TIME(SUM(TDiff )) AS TIME,
              HOUR(SEC_TO_TIME(SUM(TDiff ))) AS HOURS
              
              FROM data_group
              WHERE GrpNo = $groupID AND batch = $batchID
              GROUP BY MS,Name" );

//$result = mysqli_query($connection,"Call matokeo5()");


			  		while($row3 = mysqli_fetch_array($result3)) {

			  ?>
	
			  
				<tr>
				<td><?php echo $row3['0']; ?></td>		 
				 <td><?php echo $row3['1']; ?></a></td>
				 <td><?php echo $row3['2']; ?></a></td>
				 <td><?php echo $row3['3']; ?></a></td>
				 <td><a href="student-update-marks.php?studentID=<?php echo $row['1']; ?>"><button type="button" class="btn btn-danger btn-sm" >Personal Report</button></a></td>
					<?php  }  ?>

				</tr>
			  </tbody>
			  
			</table>
                </div>
                    
        </div>

</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
</body>
</html>