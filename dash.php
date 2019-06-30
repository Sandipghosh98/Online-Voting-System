<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Voting</span>System</a>
				
					
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<script type="text/javascript">
		fetch('https://uinames.com/api/?amount=1&region=india&ext')
		  .then(
		    function(response) {
		   		response.json().then(
		   			function(data) {
		   				var photo = data.photo;

		   				// var teams = '';
		   				// for (let match of matches) {

					    //     var team1 = match['team-1'];
					    //     var team2 = match['team-2'];
					    //     var toss  = match['toss_winner_team'];
					    //     var win   = match['winner_team'];
         //                    var start = match['matchStarted'];
         //                    var id    = match['unique_id'];
         //                    if (start == true)
         //                    {
 					   //      	teams += `<li>${team1} VS ${team2}, Winner= ${win}, Toss Winner= ${toss}, id=${id} </li>`;

 					   //     	}
 					   //     	else
 					   //     	{
 					   //     		teams += `<li>${team1} VS ${team2}, Match Started: ${start}, id=${id} </li>`;
 					   //     	}
					    // }

					    
		      		}
		      	);
		    }
		  );
	</script>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="abhi.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">abhi</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="election.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
			<li ><a href="election.php"><em class="fa fa-bar-chart">&nbsp;</em> Election</a></li>
			
			
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
			
		

		<!-- New election -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-warning">
					<div class="panel-heading">
						Coming Up Election Date
					</div>
					<div class="panel-body">		
						<!-- Name-->
						<div class="row">
							<div class="col-md-3 col-sm-3 ">
											<b>Lok Sabha Election 2019</b>			
							</div>
							
								<div class="form-horizontal col-md-7 col-sm-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 col-sm-2 control-label" style="margin-top: -10px;">Date:</label>
											<div class="col-md-8 col-sm-8" style="margin-top: -3px;">
												<b>28-04-2019</b>
											</div>
										</div>																				
								</div>
						</div><!-- close row -->
						
						<hr>
                         
                        <div class="row">
							<div class="col-md-3 col-sm-3 ">
										<b>	Lok Sabha Election 2019	</b>		
							</div>
							
								<div class="form-horizontal col-md-7 col-sm-7">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-2 col-sm-2 control-label" style="margin-top: -10px;">Date:</label>
											<div class="col-md-8 col-sm-8" style="margin-top: -3px;">
												<b>28-04-2019</b>
											</div>
										</div>																				
								</div>
						</div><!-- close row --> 

					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->

        <!-- Older Election Result -->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						Older Elections Result
					</div>
					<div class="panel-body">
						<!-- second Candidate-->
						<div class="row">
							<div class="col-md-3">
								<label style="margin-top: 15%;">Rajya sabha election 2016</label>								
							</div>
							
								<div class="form-horizontal col-md-9">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-3 control-label" for="email">Winner Name:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>Abhishek Dadhich</b>
											</div>
										</div>									
																		
										<!-- Votes -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Votes:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>125800 vote</b>
											</div>
										</div>
		                                
		                                <!-- Bio -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Bio:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>He has good behaviour </b>
											</div>
										</div>																			
								</div>
								
							
						</div><!-- close row -->
						<hr>
						<div class="row">
							<div class="col-md-3">
								<label style="margin-top: 15%;">Lok sabha election 2016</label>								
							</div>
							
								<div class="form-horizontal col-md-9">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-3 control-label" for="email">Winner Name:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>Abhishek Dadhich</b>
											</div>
										</div>									
																		
										<!-- Votes -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Votes:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>125800 vote</b>
											</div>
										</div>
		                                
		                                <!-- Bio -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Bio:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b>He has good behaviour </b>
											</div>
										</div>																			
								</div>
								
							
						</div><!-- close row -->	
					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
		
</body>
</html>