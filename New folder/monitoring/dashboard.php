<?php

include('include/connection.php');
$groupID = $_GET['ID'];
$batchID = $_GET['batch'];

echo $groupID;
echo $batchID;
 
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
  
  
  
  


</head>
<body>
		
<div class="container">
       <center><div class="alert alert-success" role="alert"><b>DASHBOARD</b></div></center>
	   
			 <a href="index.php"><button type="button" class="btn btn-info" >Home</button></a>
       <a href="scratch.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Scratch </b></button></a> 
			 <a href="rogic.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Rogic </b></button></a>
			<a href="hourofcode.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Hours of CODE </b></button></a>
                    <a href="ms.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Ms Word </b></button></a>                  
                    <a href="excel.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Ms Excel </b></button></a>
                    <a href="ppt.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Ms PowerPoint </b></button></a>
                    <a href="#"><button type="submit" class="btn btn-info"><b>Ms Publisher </b></button></a>
                    <a href="ppt.php?group=<?php echo $groupID ?>"><button type="submit" class="btn btn-info"><b>Notepad </b></button></a>
                    <a href="#"><button type="submit" class="btn btn-info"><b>Rachel </b></button></a>
			 
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
</body>
</html>