<?php require_once("include/connection.php");

$groupID = $_GET['group'];
$batchID = $_GET['batch'];


echo $groupID;
echo $batchID;




   //Student Graph
   
   $query5 = "SELECT * FROM hourofcode_perfomance WHERE GrpNo = $groupID AND batch = $batchID";
   
  $result5 = mysqli_query($connection,$query5);
	if (!$result5) { die("Query Failed."); }
	while($row5 = mysqli_fetch_array($result5))
	{

		$dataPoints5[] = [
			'label' => $row5[0],
			'y' => $row5[6]
		];
	//	echo $Name[] = $row5[0];
	//	echo $Time[] = $row5[5];		
	 }

?> 



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Monitoring | Hour of Code</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>


  
    <!-- This is for search --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"> 





  <script>window.onload = function() {
 
 
 var chart = new CanvasJS.Chart("chartContainer", {
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
     indexLabel: "{label} ({y}Min)",
     dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
   }]
 });
 
 
 
 
 
 chart.render();
 }
 
 </script>



</head>


<body>

<div class="container"> 
	<div class="row">
			<div class="col-sm-12">
				<!--	<center><img src="image/e3alog.png" ></center> -->
				<center><div class="alert alert-success" role="alert"><b>HOUR OF CODE REPORT</b></div></center>
			</div>
	</div>


          <div class="row">

                                <div class="col-sm-3" >
                                          <?php
                                                $query3 = "SELECT COUNT(*) AS TOTAL FROM hourofcode_perfomance WHERE Status ='Finished' AND grpNo = $groupID AND batch = $batchID";

                                                  $result3 = mysqli_query($connection,$query3);
                                                  if (!$result3) { die("Query Failed."); }
                                                    
                                                  while($row3 = mysqli_fetch_array($result3))
                                                  {
                                                  ?>
                                                    <div><center><h1 style="color:#668080"><b>Finished</b></h1></center></div>
                                                    <div><center><p style="font-size:80px; color:#668080;"><b><?php echo $row3[0];?></b></p></center></div>
                                                    <?php } ?>
                                                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                                    </div>



                                    <div class="col-sm-3" >
                                          <?php
                                                $query4 = "SELECT COUNT(*) AS TOTAL FROM hourofcode_perfomance WHERE Status = 'Incomplete' AND grpNo = $groupID AND batch = $batchID";

                                                  $result4 = mysqli_query($connection,$query4);
                                                  if (!$result4) { die("Query Failed."); }
                                                    
                                                  while($row4 = mysqli_fetch_array($result4))
                                                  {
                                                  ?>
                                                    <div><center><h1 style="color:#668080"><b>Incomple</b></h1></center></div>
                                                    <div><center><p style="font-size:80px; color:#668080;"><b><?php echo $row4[0];?></b></p></center></div>
                                                    <?php } ?>
                                                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                                    </div>


                  <div class="col-sm-3" >
                        <?php
                          $query1 = "SELECT COUNT(*) AS TOTAL FROM hourofcode_perfomance  WHERE Status = 'Average'  AND grpNo = $groupID AND batch = $batchID";

                            $result1 = mysqli_query($connection,$query1);
                            if (!$result1) { die("Query Failed."); }
                              
                            while($row1 = mysqli_fetch_array($result1))
                            {
                        ?>
                            <div><center><h1 style="color:#668080"><b>Average</b></h1></center></div>
                            <div><center><p style="font-size:80px; color:#668080;"><b><b><?php echo $row1[0];?></b></p></center></div>
                            <?php } ?>
                            <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                  </div>


                          <div class="col-sm-3" >
                          <?php
                                $query2 = "SELECT COUNT(*) AS TOTAL FROM hourofcode_perfomance WHERE Status = 'Absent' AND grpNo = $groupID AND batch = $batchID";

                                  $result2 = mysqli_query($connection,$query2);
                                  if (!$result2) { die("Query Failed."); }
                                    
                                  while($row2 = mysqli_fetch_array($result2))
                                  {
                                  ?>
                                    <div><center><h1 style="color:#668080"><b>Absent</b></h1></center></div>
                                    <div><center><p style="font-size:80px; color:#668080;"><b><?php echo $row2[0];?></b></p></center></div>
                                    <?php } ?>
                                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                          </div>  
          </div>



          <div class="row">
              <div class="col-sm-12">

                    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
              
            </div>
  </div>   


    <div class="row">
			<div class="col-sm-12">
				<!--	<center><img src="image/e3alog.png" ></center> -->
				<center><div class="alert alert-success" role="alert">STUDENT RECORDS</div></center>


        <table class="table table-hover"   cellspacing="0" width="100%" data-toggle="table"  data-pagination="true"  data-search="true">
			  <thead>
				<tr>
					<th scope="col">StudentName</th>
					<th scope="col">MS</th>
					<th scope="col">TIME</th>
          <th scope="col">Group</th>
				</tr>
			  </thead>
			  
			  <tbody>
			  
			  <?php
			  
			  $result3 = mysqli_query($connection,"SELECT * FROM hourofcode_perfomance  WHERE grpNo = $groupID AND batch = $batchID" );

			  		while($row3 = mysqli_fetch_array($result3)) {

			  ?>
	
			  
				<tr>
				<td><?php echo $row3['0']; ?></td>		 
				 <td><?php echo $row3['1']; ?></td>
				 <td><?php echo $row3['2']; ?></td>
				 <td><?php echo $row3['3']; ?></td>
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


