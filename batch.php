<?php

include('include/connection.php');

$groupID = $_GET['ID'];

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
                border: 5px solid green;
            }
            table.gridtable {
                margin:-100 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:12px;
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
        <a href="dashboard.php" class="logo">
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
				
				<li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>COBET</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
				
				<li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>CTS</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
				
				<li>
                    <a href="other_group.php">
                        <i class="fa fa-database"></i> <span>AGHS</span>
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
            <ol class="breadcrumb">
                <li><a href="main_dashboard -.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Report View</li>
            </ol>
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
							
							<div>
							
							<center><a href="index.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">HOME</a>
                            <a href="ci_group.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#addstock">COMPASSION</a>
                            <a href="other_group.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">TRAINING CENTER</a>
							
							</div>
							<P>
							</P>
							<center>
							<div class="alert alert-success" role="alert">
								BATCHES.
							</div>
							</center>
							
                            <center><span><b>FOR E3A , SELECT MONTH</b></span></center>
							<P>
							</P>
							<div>
						   <center>
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=1"><button type="button" class="btn btn-info" ><b>January </button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=2"><button type="button" class="btn btn-info" ><b>February </button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=3"><button type="button" class="btn btn-info" ><b>March</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=4"><button type="button" class="btn btn-info" ><b>April</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=5"><button type="button" class="btn btn-info" ><b>May</button></a>
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=6"><button type="button" class="btn btn-info" ><b>June</button></a> 							   
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=7"><button type="button" class="btn btn-info" ><b>July</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=8"><button type="button" class="btn btn-info" ><b>August</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=9"><button type="button" class="btn btn-info" ><b>September</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=10"><button type="button" class="btn btn-info" ><b>October</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=11"><button type="button" class="btn btn-info" ><b>November</button></a>
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=12"><button type="button" class="btn btn-info" ><b>December</button></a>
							
							
                            </div>
							<P>
							</P>
							
							<P>
							</P>
							<center><span><b>FOR OTHER CENTERS , SELECT BATCH</b></span></center>
							<P>
							</P>
							<div>
						   <center>
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=1"><button type="button" class="btn btn-info" ><b>Batch 1</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=2"><button type="button" class="btn btn-info" ><b>Batch 2</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=3"><button type="button" class="btn btn-info" ><b>Batch 3</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=4"><button type="button" class="btn btn-info" ><b>Batch 4</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=5"><button type="button" class="btn btn-info" ><b>Batch 5</button></a> 
						   <a href="server.php?ID=<?php echo $groupID ?>&batch=6"><button type="button" class="btn btn-info" ><b>Batch 6</button></a> <br/>
						   
							
							
                            </div>
                            </p>   
                        <div class="col-sm-5"></div>

                        <div class="col-sm-2 ">
                            <p class="pull-left">

                            </p>
                        </div>
						
						<div>
						
                             
                        
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
