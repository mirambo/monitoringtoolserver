<?php

include('include/connection.php');

$groupID = $_GET['ID'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Batch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>


    <!-- This is for search --->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"> 
  
  
  
  
  


</head>
<body>
		
<div class="container">
       <center><div class="alert alert-success" role="alert"><b>BATCH</b></div></center>
	   
			 <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=1"><button type="button" class="btn btn-info" ><b>Batch 1</button></a> 
       <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=2"><button type="button" class="btn btn-info" ><b>Batch 2</button></a> 
       <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=3"><button type="button" class="btn btn-info" ><b>Batch 3</button></a> 
       <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=4"><button type="button" class="btn btn-info" ><b>Batch 4</button></a> 
       <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=5"><button type="button" class="btn btn-info" ><b>Batch 5</button></a> 
       <a href="dashboard.php?ID=<?php echo $groupID ?>&batch=6"><button type="button" class="btn btn-info" ><b>Batch 6</button></a> 
		

      

</div>

</body>
</html>