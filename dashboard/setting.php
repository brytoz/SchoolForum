<?php
require_once '../php/all.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
		
		<title>Settings | FUTO STUDENTS FORUM</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/main.css">
		<!-- ICON SET-->
		<link rel="icon" href="../images/fsf.jpg" type="image/jpg">
		<!-- // ICON SET-->

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="css/main.js"></script>

		
		<!-- icon set-->
	
		

	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-institution"></i>
				<span>Students Forum</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-institution"></i>
				<span>Menu</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="../index.php">
							<span><i class="fa fa-feed"></i></span>
							<span>Feeds</span>
						</a>
					</li>
					<li>
						<a href="profile.php">
							<span><i class="fa fa-mortar-board"></i></span>
							<span>My profile</span>
						</a>
					</li>
					<li>
						<a href="forum.php">
							<span><i class="fa fa-bullseye"></i></span>
							<span>Forum</span>
						</a>
					</li>
					<li>
						<a href="tutorial/tutorials.php">
							<span><i class="fa fa-play-circle-o"></i></span>
							<span>Tutorials</span>
						</a>
					</li>
					<li class="active">
						<a href="setting.php">
							<span><i class="fa fa-cog"></i></span>
							<span>Setting</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				My Settings
				<div class="pashword"> 
						<a href="../php/logout.php">
							<span><i class="fa fa-bar-user"></i></span>
							<span><span><i class="fa fa-sign-out"></i></span>Log out </span>
						</a>	
				</div>
			</div>
			
			<div class="main">
				<div class="widget">
						<div class="title">Change password</div>
						<div class="chart"></div>
					<div class="context" style="padding:10px;"> 
					<div id="alert"></div>
					<?php	
						echo '<form action="'.changepassword($conn).'" method="POST"  >
									<input type="text" name="passwordchange" placeholder=" Old password" required=""><br><br>
									<input type="password" name="new_password" placeholder=" New password" required=""><br><br>
									<input type="password" name="password_again" placeholder=" Re-type password" required=""><br><br>
									<input type="submit" name="submit" value="Change password">
						</form>';
					 ?>
					
					
					
														
						
					</div>			
				
				</div>
			</div>
		</div>
	</body>
</html>