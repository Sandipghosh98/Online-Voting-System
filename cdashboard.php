<?php 
session_start();
require('connection.php');

?>
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
		<?php 
			$id=$_SESSION['id'];
			$query2="select * from candidatelists where id='".$id."'";
 					$result2=mysqli_query($con,$query2);
 					 while($row1=mysqli_fetch_array($result2))
						{
		?>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo $_SESSION['pic'];?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $row1[1]; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			
			
			
			<li class="active"><a href="cdashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Cand-Dashboard</a></li>
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
		<?php
	$x=0;
	?>	<div class="row">						
			<div class="col-md-9 col-md-offset-1">
				
				<div class="panel panel-info">
					<div class="panel-heading">
						Your Details	
					</div>
					
					<div class="panel-body">
						<div class="col-md-4 mt-3">
							<img src="<?php echo $row1[6]?>" class="img-rounded" alt="Cinque Terre" width="160px"; height="160px";>
						<!-- Name-->
								<div style="margin-top: 20px;">
									<b><?php echo $row1[1]; 
										$x=$row1[0]; ?></b>
								</div>		
						</div>
						<form method="post">
							<div class="form-horizontal">
								<fieldset>											
									<!-- Email -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="email">Your E-mail:</label>
										<div class="col-md-8">
										<input class="form-control" id="email" value="<?php echo $row1[2]; ?>"type="email" name="email2" placeholder="email">
									    </div>
									</div>
	                                <!-- Password -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="email">Your Password:</label>
										<div class="col-md-8">
										<input class="form-control" id="name" value="<?php echo $row1[3]; ?>" type="Password" name="pass2" placeholder="pass">
									    </div>
									</div>
									
									<!-- DOB -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your DOB:</label>
										<div class="col-md-8">
										<input class="form-control" id="DOB" value="<?php echo $row1[4]; ?>" type="dob" name="dob1" placeholder="dob">
									    </div>
									</div>
	                                <!-- Gender -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Gender:</label>
										<div class="col-md-8">
										<!-- <input class="form-control" id="name" type="Password" placeholder="Your Password"> -->
										<?php //if($row1[]=='male')                    ?>
										<span>Male</span><input type="radio" name="gender" value="Male" checked>
										<span>Female</span><input type="radio" name="gender" value="Female">
										<?php //}?>
									    </div>
									</div>
									
	                                <!-- Phone Number -->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Phone Number:</label>
										<div class="col-md-8">
										<input class="form-control" id="name" name="num" type="text" value="<?php echo $row1[8]; ?>" placeholder="number">
									    </div>
									</div>
	                                <!-- bio-->
									<div class="form-group">
										<label class="col-md-4 control-label" for="message">Your Bio:</label>
										<div class="col-md-8">
										<input class="form-control" id="message" type="text" value="<?php echo $row1[7]; ?>" name="message" placeholder="Bio" >
									    </div>
									</div>
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 ">
											<input type="submit" name="sub1" class="btn btn-primary btn-md pull-right" value="update">
										</div>
									</div>								
								</fieldset>
							</div>
						</form>	

					<?php } 
						if(isset($_POST['sub1'])){
						$email3=$_POST['email2'];
						$pass2=$_POST['pass2'];
						$gn=$_POST['gender'];
						$dob=$_POST['dob1'];
						$ph=$_POST['num'];
						$mg=$_POST['message'];
						// echo $gn;
						// echo $pass2;
					

						$query3="update candidatelists set email='".$email3."', password='".$pass2."', dob='".$dob."' , gender='".$gn."' ,number='".$ph."', biodata='".$mg."'  where id='".$id."' ";
		echo $query3;
        $result3=mysqli_query($con,$query3);



						}

						?>

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