<?php
session_start();
require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#loginasvoter" data-toggle="tab">Login As Voter</a></li>
							<li><a href="#loginascandidate" data-toggle="tab">Login As Candidate</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="loginasvoter">
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
										<div class="login-panel panel panel-default">
											<div class="panel-heading">Login As Voter</div>
											<div class="panel-body">
												<form  action="" method="post">
													
													
													<fieldset>
														<div class="form-group">
															<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
														</div>
														<div class="form-group">
															<input class="form-control" placeholder="Password" name="password" type="password" value="">
														</div>
														<div class="checkbox">
															<label>
																<input name="remember" type="checkbox" value="Remember Me">Remember Me
															</label>
														</div>
														<input  type="submit" class="btn btn-primary" name="subm"value="login">
														</fieldset>
												</form>
													<?php
															if(isset($_POST['subm'])){
																
																 $a=$_POST['email']; //to take the value from the form user id
      																  $b=$_POST['password'];
      																$q=0;
																$a1="select * from voterlists";
																 $result=mysqli_query($con,$a1); 
																 $p=mysqli_num_fields($result);

   																 while($row=mysqli_fetch_array($result))
   															
																		{			
																				if($a==$row[2] && $b==$row[3]){
																					$_SESSION['id']=$row[0];
        																			$_SESSION['name']=$row[1];
        																			$_SESSION['email']=$row[2];
        																			$_SESSION['pic']=$row[6];
        																			$_SESSION['number']=$row[7];
        																			$_SESSION['voter']=$row[8];
        																			$_SESSION['dob']=$row[4];
        																			$_SESSION['gender']=$row[5];
        																			if($row[8]==0){
        																			header("Refresh:1;URL=election.php");
        																			}else{
        																				header("Refresh:1;URL=admin.php");						
        																			}
        																			$q=1;
  																						  }
																				}
																				if($q!=1){
																			echo "<script>alert( 'Wrong User name or Password')</script>";
																		}
															}
													?>
											
											</div>
										</div>
									</div><!-- /.col-->
								</div><!-- /.row -->	
							</div>
							<div class="tab-pane fade" id="loginascandidate">
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
										<div class="login-panel panel panel-default">
											<div class="panel-heading">Login As Candidate</div>
											<div class="panel-body">
												<form role="form" action="" method="post">
													
													<fieldset>
														<div class="form-group">
															<input class="form-control" placeholder="E-mail" name="email1" type="email" autofocus="">
														</div>
														<div class="form-group">
															<input class="form-control" placeholder="Password" name="password1" type="password" value="">
														</div>
														<div class="checkbox">
															<label>
																<input name="remember" type="checkbox" value="Remember Me">Remember Me
															</label>
														</div>
														<input type="submit" class="btn btn-primary" name="submit1" value="Login">
													</fieldset>
													</form>
													<?php
															if(isset($_POST['submit1'])){
															
																	
																require('connection.php');
																 $x=$_POST['email1']; //to take the value from the form user id
      																  $y=$_POST['password1'];
																$qq="select * from candidateLists";
																 $result=mysqli_query($con,$qq); //it helps to collect the data record wise one by one
   																 while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
																		{
																				if($x==$row[2] && $y==$row[3]){
																					$_SESSION['id']=$row[0];
        																			$_SESSION['name']=$row[1];
        																			$_SESSION['email']=$row[2];
        																			$_SESSION['pic']=$row[6];
        																			$_SESSION['number']=$row[8];
        																					header("Refresh:1;URL=cdashboard.php");
        																					
  																						  }
																				}
																				echo "<script> Wrong User name or Password</script>";
															}
													?>
												
											</div>
										</div>
									</div><!-- /.col-->
								</div><!-- /.row -->
							</div>
							
						</div>
					</div>
				</div><!--/.panel-->
	</div>
	</div>
	
		
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
