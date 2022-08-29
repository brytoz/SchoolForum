<!--<php
require_once 'php/conn.php';
?>
-->

<!DOCTYPE html>
<html  lang="en">
<title>FUTO 500Level ID Card Data Capturing Schedule | Futo Student's Forum</title>
<!--meta descriptions-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="futo 500level data capturing, students forum">
<!-- Links-->
<link rel="stylesheet" href="fsf.css">
<link rel="stylesheet" href="fsf-theme-color.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon set-->
<link rel="icon" href="images/fsf.jpg" type="image/jpg">
<!--Icon-->
<style>
table {
	text-align:center;
	}
img{
	width:100%;
	height: 100%;
	}
.w3-third p {
	padding:0px;
}

@media screen and (max-width: 767px) {
 
 
}

</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="dashboard/forum.php" class="w3-bar-item w3-button w3-theme-l1">Forum</a>
	<a href="dashboard/profile.php" class="w3-bar-item w3-button w3-theme-l1">Profile</a>
    <a href="dashboard/tutorial/tutorials.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Tutorials</a>
    <a href="#contactUs" name="contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
	<span style="float:right;"><a href="php/logout.php" class="w3-bar-item w3-button w3-theme-11 w3-hover-white">Login/Logout</a><span>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:43px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Updates</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="index.php">About</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="academic.php">Academic Calendar</a>
  <a style="color:blue;" class="w3-bar-item w3-button w3-hover-black" href="500level.php">500L Data Capturing Schedule</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="scholarship.php">Scholarship</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="article.php">Article</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

<div class="w3-row w3-padding-64">
			

		<div class="w3-row">
			<div class="w3-twothird w3-container" style="padding-top:10px;">
				  <center>
					  <h3><u> OFFICE OF THE REGISTRAR<br>
					  SENATE AFFAIRS UNIT<br> 
					  2016/2017 ACADEMIC CALENDAR FOR RAIN SEMESTER</u></h3>
				  </center>
				  <p>
						  
				</p>
			</div>
			<div class="w3-third w3-container">
			<!-- carousel-->
					  <p class="w3-border w3-padding-large w3-padding-64 w3-center">Advertise with Us</p>
					</div>
		</div>
		
		
		<div class="w3-row">
			<div class="w3-twothird w3-container" style="padding-top:10px;">
				  
		
			</div>
			<div class="w3-third w3-container">
			<!-- carousel-->
					  <p class="w3-border w3-padding-large w3-padding-64 w3-center"><img src="ads/excess3.jpg" alt="Excessneeds"></p>
					  <p class="w3-border w3-padding-large w3-padding-64 w3-center">Advertise with Us</p>
					  <p class="w3-border w3-padding-large w3-padding-32 w3-center"><a target="_blank" href="excessneeds.com"><img src="ads/excess1.jpg"  alt="Excessneeds"></a></p>
					  <p class="w3-border w3-padding-large w3-padding-64 w3-center"><img src="ads/canzona2.jpg" alt="Canzona9"></p>
					</div>
		</div>

			  
			
			<!-- // the footer-->
		  <footer id="myFooter">
			<div class="w3-container w3-theme-l1">
				<p>
					<center>
						<a name="contactUs"></a><h3>contact us</h3>
					For Advert Placements, Sponsorship And Support Please Contact Us on <br>
					<address><i  style="color:teal;">(+234)902-1505-625</i> or Mail Us on <i style="color:teal;">futostudentforum@gmail.com</i></address>
					</center>
				</p>
			</div>
			
			<div class="w3-container w3-theme-l2 w3-padding-32">
			  <h6><center>© 2017 Futo Students Forum. All rights reserved</center></h6>
			</div>
		  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
