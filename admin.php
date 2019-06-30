<?php 
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script> e3A	
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
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo $_SESSION['pic']; ?>" class="img-responsive" alt="">
			</div>
			
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			
			
			<li class="active"><a href="admin.php"><em class="fa fa-dashboard">&nbsp;</em> Admin-Dashboard</a></li>
			
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
						<?php 
								 $a="select * from countings"; 
   									 $result=mysqli_query($con,$a); 
   										 while($row=mysqli_fetch_array($result))
											{
	
											$cid=$row[0];
        
    											
						?>
						<div class="row">
							<div class="col-md-3 col-sm-3 ">
											<b><?php echo $row[1]; ?></b>			
							</div>
							
								
								<div class="col-ml-2">
									<a href='count.php?id=<?php echo $cid ?>' ><em class="fa fa-lg fa-close"></em></a>
								</div>
						</div><!-- close row -->
						
						<hr>
                         <?php
                         	}
                         ?>
                      

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
						<?php
						 $query="select * from olderelections ";
       						 $result=mysqli_query($con,$query);
       							 while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
									{

    
						?>
						<div class="row">							
							<div class="col-md-3">								
								<label style="margin-top: 15%;"><?php echo $row[1];?></label>
							</div>
							
								<div class="form-horizontal col-md-9">	
		                                <!-- Name-->
									    <div class="form-group">
											<label class="col-md-3 control-label" for="email">Winner Name:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b><?php echo $row[2];?></b>
											</div>
										</div>									
																		
										<!-- Votes -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Votes:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b><?php echo $row[3];?></b>
											</div>
										</div>
		                                
		                                <!-- Bio -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="message">Bio:</label>
											<div class="col-md-9" style="margin-top: 6px;">
												<b><?php echo $row[4];?></b>
											</div>
										</div>														
									</div>
								
							
						</div><!-- close row -->
						<hr>
						<?php } ?>
							
					</div><!-- panel-body -->
				</div><!-- panel -->
			</div>		
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						ADD Candidate
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="admin.php" method="post">
							
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Password:</label>
									<div class="col-md-9">
										<input id="password" name="password" type="password" placeholder="Your password" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">DOB:</label>
									<div class="col-md-9">
										<input id="dob" name="dob" type="date" placeholder="Your DOB" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Gender</label>
									<div class="col-md-9">
										<input id="gender" name="gender" type="text" placeholder="Your gender" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Number</label>
									<div class="col-md-9">
										<input id="number" name="number" type="number" placeholder="Your number" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Pic</label>
									<div class="col-md-9">
										<input id="pic" name="pic" type="text" placeholder="Your pic" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Bio:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="bio" placeholder="Please enter your Bio here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" name="candidate" class="btn btn-default btn-md pull-right" value="Submit">
									</div>
								</div>
							</fieldset>

						</form>
						<?php
								if(isset($_POST['candidate'])){
									$a=$_POST['name'];
									$b=$_POST['email'];
									$c=$_POST['password'];
									$d=$_POST['dob'];
									$e=$_POST['gender'];
									$f=$_POST['number'];
									$g=$_POST['pic'];
									$h=$_POST['bio'];
									 $db1="insert into candidatelists(name,email,password,dob,gender,pic,biodata,number) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$g."','".$h."','".$f."')";  
                                     $r=mysqli_query($con,$db1);
            							if(!$r){
             								   echo "<script>alert('inserted successfully')";
            							}
								}
						?>
					</div><!-- panel-body-->
				</div><!-- panel-->
			</div><!-- col-->
		

			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Add Voter
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="admin.php" method="post">
							
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="email" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">password:</label>
									<div class="col-md-9">
										<input id="email" name="password" type="password" placeholder="Your email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">DOB:</label>
									<div class="col-md-9">
										<input id="text" name="dob" type="date" placeholder="Your DOB" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Gender</label>
									<div class="col-md-9">
										<input id="email" name="gender" type="text" placeholder="Your gender" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Number</label>
									<div class="col-md-9">
										<input id="email" name="number" type="number" placeholder="Your number" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">PIC:</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="pic" placeholder="Please enter your Bio here..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" name="voter" class="btn btn-default btn-md pull-right" value="ADD">
									</div>
								</div>
							</fieldset>
						</form>
						<?php
								if(isset($_POST['voter'])){
									$a=$_POST['name'];
									$b=$_POST['email'];
									$c=$_POST['password'];
									$d=$_POST['dob'];
									$e=$_POST['gender'];
									$f=$_POST['number'];
									$g=$_POST['pic'];
								
									 $db1="insert into voterlists(name,email,password,dob,gender,pic,number) values('".$a."','".$b."','".$c."','".$d."','".$e."','".$g."','".$f."')";  
                                     $r=mysqli_query($con,$db1);
            							if(!$r){
             								   echo "<script>alert('inserted successfully')";
            							}
								}
						?>
					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->


		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Delete Candidate
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="admin.php" method="post">
							
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="email" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-default btn-md pull-right" name="delcan">
									</div>
								</div>
							</fieldset>
						</form>
						<?php
								if(isset($_POST['delcan'])){
									$a=$_POST['name'];
									$b=$_POST['email'];
									
									 $db1="delete from candidatelists where name='".$a."' and email='".$b."'";  
                                     $r=mysqli_query($con,$db1);
            							if(!$r){
             								   echo "<script>alert('deleted successfully')";
            							}
								}
						?>
					</div><!-- panel-body-->
				</div><!-- panel-->
			</div><!-- col-->
		

			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Delete Voter
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="admin.php" method="post">
						
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">E-mail:</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
									</div>
								</div>
								
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-default btn-md pull-right" value="Delete" name="delvot">
									</div>
								</div>
							</fieldset>
						</form>
						<?php
								if(isset($_POST['delvot'])){
									$a=$_POST['name'];
									$b=$_POST['email'];
									
									 $db1="delete from voterlists where name='".$a."' and email='".$b."'";  
                                     $r=mysqli_query($con,$db1);
            							if(!$r){
             								   echo "<script>alert('deleted successfully')";
            							}
								}
						?>
					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Add Elections
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							
							<fieldset>

								<!-- Name input-->
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Name:</label>
										<div class="col-md-9">
											<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
										</div>
									</div>
							    
							    	<div class="form-group">
										<label class="col-md-3 control-label" for="email">Date:</label>
										<div class="col-md-9">
											<input id="email" name="date" type="date" placeholder="Details" class="form-control">
										</div>
									</div>
								<!-- Detail input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Candidate ID 1:</label>
										<div class="col-md-9">
											<input id="email" name="name1" type="number" placeholder="Details" class="form-control">
										</div>
									</div>

									

									

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Candidate ID 2:</label>
										<div class="col-md-9">
											<input id="email" name="name2" type="number" placeholder="Details" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Candidate ID 3:</label>
										<div class="col-md-9">
											<input id="email" name="name3" type="number" placeholder="Details" class="form-control">
										</div>
									</div>
											
								</div>

								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<input type="submit" class="btn btn-primary btn-md pull-right" name="election" value="ADD">
									</div>
								</div>
							</fieldset>
						</form>
									<?php
								if(isset($_POST['election'])){
									$a=$_POST['name'];
									$b=$_POST['date'];
									$c=$_POST['name1'];
									$d=$_POST['name2'];
									$e=$_POST['name3'];
									
									echo $a." ".$b." ".$c." ".$d." ".$e." "; 	
									 $db1="insert into countings(election_name,Date,can1,can2,can3) values('".$a."','".$b."','".$c."','".$d."','".$e."')";  

                                     $r=mysqli_query($con,$db1);
                                    $db2="alter table voterlists add column ".$a." int(2) DEFAULT '0'";
                                  
                                       $r=mysqli_query($con,$db2);
                                    
            							if(!$r){
             								   echo "<script>alert('inserted successfully')</script>	";
            							}
								}
						?>
								

									
							

					</div><!-- panel body-->
				</div><!-- panel-->
			</div><!--col-->
		</div>	<!-- row-->	
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