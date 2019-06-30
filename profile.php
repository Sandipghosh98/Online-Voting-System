
<?php
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
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
	<!-- <script type="text/javascript">
		fetch('https://uinames.com/api/?amount=1&region=india&ext')
		  .then(
		    function(response) {
		   		response.json().then(
		   			function(data) {
		   				var photo = data.photo;
                        var fname = data.name;
                        var email = data.email;
                        var lname = data.surname;
                        var DOB   = data.birthday.dmy;
                        var username = data.username;
                        var Password = data.password;
                        var gender = data.gender;
                        var number = data.phone; 
		   				
					    $(".pic").attr("src",photo);
					    $(".name").append(fname+" ");
					    $(".name").append(lname);
					    $(".email").append(email);
					    $(".pass").append(Password);
					    $(".dob").append(DOB);
					    $(".gender").append(gender);
					    $(".number").append(number);
		      		}
		      	);
		    }
		  );
	</script> -->
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
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img class="pic img-responsive" src="abhi.jpg">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['name'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li><a href="election.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="active"><a href="profile.php"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
			<li ><a href="election.php"><em class="fa fa-bar-chart">&nbsp;</em> Election</a></li>
			
			
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.html">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profile</h1>
			</div>
		</div><!--/.row-->

		<div class="row">						
			<div class="col-md-9 col-md-offset-1">
				
				<div class="panel panel-info">
					<div class="panel-heading">
						Your Details	
					</div>
					
					<div class="panel-body">
						<div class="col-md-4 mt-3">
							<img class="pic img-rounded" src="abhi.jpg" alt="Cinque Terre" width="160px"; height="160px";>
						<!-- Name-->
								<div style="margin-top: 20px;">
									<b class="name"><?php echo $_SESSION['name'];?></b>
								</div>		
						</div>
						<div class="form-horizontal">
							<fieldset>											
								<!-- Email -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="email">Your E-mail:</label>
									<div class="col-md-8" style="margin-top: 6px;">
										<b class="email"><?php echo $_SESSION['email'];?></b>
									</div>
								</div>
                                <!-- Password -->
								
								
								<!-- DOB -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="message">Your DOB:</label>
									<div class="col-md-8" style="margin-top: 6px;">
										<b class="dob"><?php echo $_SESSION['dob'];?></b>
									</div>
								</div>
                                <!-- Gender -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="message">Your Gender:</label>
									<div class="col-md-8" style="margin-top: 6px;">
										<b class="gender"><?php echo $_SESSION['gender'];?></b>
									</div>
								</div>
								<!-- DOB -->
								
                                <!-- Phone Number -->
								<div class="form-group">
									<label class="col-md-4 control-label" for="message">Your Phone Number:</label>
									<div class="col-md-8" style="margin-top: 6px;">
										<b class="number"><?php echo $_SESSION['number'];?></b>
									</div>
								</div>
								<!-- Form actions -->								
							</fieldset>
						</div>
					</div>
				</div>
			</div><!--/.col-->
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
