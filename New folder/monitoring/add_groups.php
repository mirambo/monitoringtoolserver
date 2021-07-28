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




<!-- This is for search --->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"> 
</head>


<body>

<div class="container">

<div class="row">
    <div class="col-sm-12">

    <center><img src="image/e3alog.png">
                    <div class="alert alert-success" role="alert">
                            Add New Group.
                            </div>
            <div class="row">
                    <div class="col-sm-6">
                   
                            </center>

                        
                            <form class="form-horizontal" action="add_groups_prosess.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group" >
                                <div class="col-sm-4">
                                    <label for="exampleInputEmail1">Assign Group ID</label>
                                    <input type="text" class="form-control"  placeholder="" name="groupid">   
                                </div>
                            </div>
                

                            <div class="form-group" >
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Group Name</label>
                                    <input type="text" class="form-control"  placeholder="" name="groupname">
                                </div>
                            </div>

                            <div class="form-group" >
                                <div class="col-sm-4">
                                    <label for="exampleInputEmail1">ID No Initial</label>
                                    <input type="text" class="form-control"  placeholder="E3A-1" name="initialID">
                                </div>
                            </div>

                        
                            <div class="form-group" >
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Contact Person</label>
                                    <input type="text" class="form-control"  placeholder="" name="contactperson">
                                </div>
                            </div>

                            <div class="form-group" >
                                <div class="col-sm-4">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control"  placeholder="" name="phoneno">
                                </div>
                            </div>

                            <div class="form-group" >
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control"  placeholder="" name="email">
                                </div>
                            </div>


                            <div class="form-group">
                            <div class="col-sm-6">          
                                <button type="submit" class="btn btn-info">Submit</button> 
                            </div>
                            </div>


                            </form>





   <center> <div class="alert alert-success" role="alert">Group Details.</div></center>

                            <table class="table table-hover"   cellspacing="0" width="100%" data-toggle="table"  data-pagination="true"  data-search="true">
			  <thead>
				<tr>
					<th scope="col">Group ID</th>
					<th scope="col">Group Name</th>
					<th scope="col">Contact Person</th>
					<th scope="col">Phone No</th>
					<th scope="col">Email</th>
					

				</tr>
			  </thead>
			  
			  <tbody>
			  
			  <?php
			  
			  $result = mysqli_query($connection,"SELECT * FROM tblgroup" );

//$result = mysqli_query($connection,"Call matokeo5()");


			  		while($row = mysqli_fetch_array($result)) {

			  ?>
	
			  
				<tr>
						 
				 <td><?php echo $row['0']; ?></a></td>
				 <td><?php echo $row['1']; ?></a></td>
				 <td><?php echo $row['2']; ?></a></td>
				 <td><?php echo $row['3']; ?></a></td>
				 <td><?php echo $row['4']; ?></a></td>
				  

					<?php  }  ?>

				</tr>
				

			  </tbody>
			  
			</table>
                

                    </div>
            </div>

        </div>
        </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>


</body>
</html>