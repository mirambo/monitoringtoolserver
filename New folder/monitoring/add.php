<?php require_once("include/connection.php"); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>e3empower africa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container"> 
	<div class="row">
			<div class="col-sm-12">
			<center><img src="image/e3alog.png"></center>
				
				
				
				<center>
				    <form class="form-horizontal" action="process_group.php" method="POST" enctype="multipart/form-data">
							
					<div class="form-group">
					<div class="col-sm-6">          
					<center>
					<label for="sel1">Select Group Below:</label><br/>
					<label for="sel1">Note:You can create new Group <a href="add_groups.php">Here:</a></label>
					</center>
					<select class="form-control" id="group" name="group">
						<?php 
							$getMedia = mysqli_query($connection,"SELECT * FROM tblgroup");
							while ($ViewGetMedia = mysqli_fetch_array($getMedia)){
						?>
									<option value="<?php echo $ViewGetMedia['0'];?>"><?php echo $ViewGetMedia['1'];?></option>
									<?php } ?>
						</select>
					</div>
					</div>

					<div class="form-group">
					<div class="col-sm-10">          
						<center> <button type="submit" class="btn btn-info">Submit</button> </center>
					</div>
					</div>


					</form>
				</center>

			</div>
	</div>
</div>
</body>
</html>