<?php require_once("include/connection.php");

$groupID = $_GET['group'];
$batchID = $_GET['batch'];
$servername = $_GET['servername'];


echo $groupID;
echo $batchID;
echo $servername;



   //Student Graph
   
   $query5 = "SELECT * FROM scratch_perfomance WHERE GrpNo = $groupID AND servers= \"$servername\" AND batch = $batchID ORDER by Minutes DESC";
   
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
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CI MONITOR </title>
	
	
	<style>
            table,tr,th,thead,td
            {
                border: 3px solid green;
            }
            table.gridtable {
                margin:-100 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:11px;
                color:#333333;
                border-width: 2px;
                border-collapse: collapse;
                text-align: center;
               
            }
        </style>
	
	
	
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.css">
    <script src="../../datepicker/js/min.js"></script>
    <script src="../../bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- datatable style -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript" language="JavaScript" src="../validate.js"></script>

    <![endif]-->
	
	
	
	
	<!-- This is for search --->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css"> 
	
	<script>window.onload = function() {
 
 
 var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   title: {
     text: "APPLICATIONS' TOTAL TIME IN MINS"
   },
   subtitles: [{
     text: ""
   }],
   
   axisY: { maximum: 1000 , title: 'Minutes'},
        axisX:{
            interval: 1,
            labelAngle: -70 
        },
   
   
   data: [{
     type: "column",
     yValueFormatString: "###",
    // indexLabel: "{label} ({y}Min)",
     dataPoints: <?php echo json_encode($dataPoints5, JSON_NUMERIC_CHECK); ?>
   }]
 });
 
 
 
 
 chart.render();
 }
 
 </script>
	
	
	
	
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
$host = 'localhost';
$username = 'root';
$password='';
$dbconfig = mysqli_connect($host, $username, $password);
mysqli_select_db($dbconfig,"monitoring") or die("cannot select DB");


    ?>
    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b></b>MONITORING TOOL</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">

                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">

                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/img_avatar2.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrator<?php // while($row = mysqli_fetch_array($fromuser2)){?><?php //echo ucfirst($row['jina']); ?><?php //}?></p>
                    <a href="index.php"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">

                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

                <li>
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
             
                <li>
                    <a href="general_report.php" data-toggle="modal" data-target="#profit">
                        <i class="fa fa-bar-chart"></i> <span>General Report</span>
                    </a>
                </li>
                <li>
                    <a href="ci_group.php">
                        <i class="fa fa-database"></i> <span>Compassion</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>              
                
                <li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>Other Training Centers</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>E3A</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>WAILSES</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>MBALIZI</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-database"></i> Report View
            </h1>
            
        </section>
        <section class="content">
            <!-- Info boxes -->
    <div class="row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>&nbsp;&nbsp;
                    <div class="row">
                        <div class="col-sm-12">
                            <p>
							
							
							<center>
							<center><div class="alert alert-success" role="alert"><b>SCRATCH REPORT </b></div></center>
							</center>
							
                            <div>
							
							<center><a href="index.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">HOME</a>
                            <a href="ci_group.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#addstock">COMPASSION</a>
                            <a href="other_group.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">TRAINING CENTER</a>
							
							</div>
							
							<p>
							</p>
							
							<div class="container">
					
	   
							<center>
							<a href="ms.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Ms Word </b></button></a>                  
							<a href="excel.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Ms Excel </b></button></a>
							<a href="ppt.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Ms Powerpoint </b></button></a>
							<a href="scratch.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Scratch </b></button></a> 
							<a href="rogic.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Rogic </b></button></a>
							<a href="hourofcode.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Hours of CODE </b></button></a>
							<a href="notepad.php?group=<?php echo $groupID; ?>&batch=<?php echo $batchID; ?>"><button type="submit" class="btn btn-info"><b>Notepad </b></button></a>
							<a href="#"><button type="submit" class="btn btn-info"><b>Ms Publisher </b></button></a>
							<a href="#"><button type="submit" class="btn btn-info"><b>Rachel </b></button></a>
			 
							</div>
							
							
							
							<P>
							</P>
							
                            </p>   
                        <div class="col-sm-5"></div>

                        <div class="col-sm-2 ">
                            <p class="pull-left">

                            </p>
                        </div>
						
						<div>
						
					
					<div class="container"> 
					<div class="row">
					<div class="col-sm-11">
						<!--	<center><img src="image/e3alog.png" ></center> -->
						
					</div>
					</div>			
                         
					<div class="row">

                                <div class="col-sm-2" >
                                          <?php
                                                $query3 = "SELECT COUNT(*) AS TOTAL FROM scratch_perfomance WHERE Status ='Finished' AND grpNo = $groupID AND servers= \"$servername\" AND batch = $batchID";

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
												  $query1 = "SELECT COUNT(*) AS TOTAL FROM scratch_perfomance  WHERE Status = 'Average'  AND grpNo = $groupID AND servers= \"$servername\" AND batch = $batchID";

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
                                                $query4 = "SELECT COUNT(*) AS TOTAL FROM scratch_perfomance WHERE Status = 'Incomplete' AND grpNo = $groupID AND servers= \"$servername\" AND batch = $batchID";

                                                  $result4 = mysqli_query($connection,$query4);
                                                  if (!$result4) { die("Query Failed."); }
                                                    
                                                  while($row4 = mysqli_fetch_array($result4))
                                                  {
                                                  ?>
                                                    <div><center><h1 style="color:#668080"><b>Incomplete</b></h1></center></div>
                                                    <div><center><p style="font-size:80px; color:#668080;"><b><?php echo $row4[0];?></b></p></center></div>
                                                    <?php } ?>
                                                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
                                    </div>


                  


									  <div class="col-sm-3" >
										  <?php
											$query2 = "SELECT COUNT(*) AS TOTAL FROM scratch_perfomance WHERE Status = 'Absent' AND grpNo = $groupID AND servers= \"$servername\" AND batch = $batchID";

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
              <div class="col-sm-11">

                    <div id="chartContainer" style="height: 500px; width: 100%;"></div>
                    <div><hr style="height:2px;border-width:0;color:gray;background-color:gray"></div>
              
            </div>
  </div>   


    <div class="row">
			<div class="col-sm-11">
				<!--	<center><img src="image/e3alog.png" ></center> -->
				<center><div class="alert alert-success" role="alert">STUDENTS' RECORDS</div></center>


        <table class="table table-hover"   cellspacing="0" width="100%" data-toggle="table"  data-pagination="true"  data-search="true">
			  <thead>
				<tr>
					<th scope="col">StudentName</th>
					<th scope="col">MS</th>
          <th scope="col">Status</th>
					<th scope="col">Time</th>
          <th scope="col">Batch</th>
				</tr>
			  </thead>
			  
			  <tbody>
			  
			  <?php
			  
			  $result3 = mysqli_query($connection,"SELECT * FROM scratch_perfomance  WHERE grpNo = $groupID AND servers= \"$servername\" AND batch = $batchID" );

			  		while($row3 = mysqli_fetch_array($result3)) {

			  ?>
	
			  
				<tr>
				 <td><?php echo $row3['0']; ?></td>		 
				 <td><?php echo $row3['1']; ?></td>
				 <td><?php echo $row3['2']; ?></td>
				 <td><?php echo $row3['7']; ?></td>
         <td><?php echo $row3['5']; ?></td>
					<?php  }  ?>

				</tr>
			  </tbody>
			  
			</table>
			</div>
                
	</div>



</div>


<div>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

						 
                        
                </div>
            </div>
        </section>
 
        </div>
    </div>


   
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script src="filter.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
   $('#mydata').dataTable();
</script>
</body>
</html>
