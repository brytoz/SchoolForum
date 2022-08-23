<?php
require_once '../../php/all.php';

?>

<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		
		
		
		<title>Tutorials. | Futo Student's Forum</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../css/main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="../css/main.js"></script>

		
		<!-- icon set-->
		<link rel="icon" href="../../images/fsf.jpg" type="image/jpg">
		<!-- //icon set-->
		
		

	</head>
	<body>

		<div class="header">
			<div class="logo">
				<i class="fa fa-play-circle-o"></i>
				<span>Tutorials</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-play-circle-o"></i>
				<span>Tutorials</span>
			</div>
			<nav>
				<ul>
					
					<li class="active">
						<a href="tutorials.html">
							<span><i class="fa fa-mortar-board"></i></span>
							<span>INTRO</span>
						</a>
					</li>
					<li>
						<a onclick="explode()">
							<span><i class="fa fa-laptop"></i></span>
							<span>MTH 102</span>
						</a>
					</li>
					<li>
						<a onclick="explode()">
							<span><i class="fa fa-laptop"></i></span>
							<span>CHM 102</span>
						</a>
					</li>
					<li>
						<a onclick="explode()">
							<span><i class="fa fa-laptop"></i></span>
							<span>PHY 102</span>
						</a>
					</li>
					<li>
						<a  onclick="explode()">
							<span><i class="fa fa-laptop"></i></span>
							<span>ENG 104</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				Introductory Message
				<div class="pashword">
						<a href="../profile.php">
							<span><i class="fa fa-bar-user"></i></span>
							<span><span><i class="fa fa-user"></i></span> Home </span>
						</a>	
				</div>
			</div>
			
			<div class="main">
				<div class="widget">
						<div class="title">Tutorials</div>
						<div class="chart"></div>
					<div class="context"> 
						<center style="margin-top:8px;"><p>Hello  <?php echo $Username; ?>, Welcome to our tutorial page. Please note that the tutorials is mainly for the 
						100Level students and specifically for general courses. We shall continue to work effortlessly on uploading more tutorial videos to assist FUTO students.</p>
						<p><noscript>Your browser does nnot support javascript, Please use the upgraded version or enable javascript in your browser</noscript></p>
							<br>
							
							<strong><mark>DISCLAIMER!</mark></strong><p>Disclaim any false news or stories on unlicensed video copyright uploaded on FSF. <br>FSF bears a sole-copyrighted-ownership on all uploaded videos.<br>all videos are free.</p>
							<br><br><p>Copyright of <span style="color:royalblue;">f</span>uto <span style="color:royalblue;">s</span>tudent's <span style="color:royalblue;">f</span>orum.</p>
							</center>
					</div>								
									
				</div>
			</div>
		</div>
																<script>
																	function explode() {
																		alert("This Tutorial Is Currently Unavailable This Time! kindly check back later.");
																	
																	}
																</script>
	</body>
</html>