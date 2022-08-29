<!--<php
require_once 'php/conn.php';
?>-->

<!DOCTYPE html>
<html  lang="en">
<title>Futo Student's Forum</title>
<!--meta descriptions-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Futo students forum, official futo student forum">
<meta name="ozoemena bright" content="developer, student, CEO fsf">
<meta name="keywords" content="Futo, online, school, Educational, Forum, Students, Freshers, Tutorials, Engineering, University">
<!-- Links-->
<link rel="stylesheet" href="fsf.css">
<link rel="stylesheet" href="fsf-theme-color.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon set-->
<link rel="icon" href="images/fsf.jpg" type="image/jpg">
<!--Icon-->

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
  <a style="color:blue;" class="w3-bar-item w3-button w3-hover-black" href="index.php">About</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="academic.php">Academic Calendar</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="500level.php">500L Data Capturing Schedule</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="scholarship.php">Scholarship</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="article.php">Article</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

<div class="w3-row w3-padding-64">
				<div class="w3-twothird w3-container">
				  <h1><u>Futo Student's Forum.</u></h1>
				  <p>Hello friends, welcome to another platform of students helping students, welcome to <i><abbr title="futo student's forum">f<span style="text-transform:uppercase;">s</span>f</abbr></i> 
				  . The <i><abbr title="futo student's forum">f<span style="text-transform:uppercase;">s</span>f </abbr></i> is here to make interactivity
					 among students swift and information within the school dispersed with ease. <i><abbr title="futo student's forum">f<span style="text-transform:uppercase;">s</span>f </abbr></i> 
					 provides the following stated below. 
				  </p>
			  </div>

			<div class="w3-row">
				<div class="w3-twothird w3-container">
				  <h1><u>The Student's Forum.</u></h1>
				  <p>Our core objective as <i><abbr title="futo student's forum">f<span style="text-transform:uppercase;">s</span>f </abbr></i> provides a platform of interactivity.
					<p style="text-indent:17px;">
						Do  you have an event, occassion, tutorial class, football competition, information, seminars, or anything of interest?, 
						and you'd like other students to know about it?, it simple, just make it trend, login and post a trend simply by <span style="text-transform:capitalize;color:teal;">#hashtagging</span> the important keyword(s).
					</p>
					<p style="text-indent:17px;">
						You can also attach a photo to your update as well as sharing pdf file. <i>You are advised to upload sensible content.</i>
					</p>
					
				  </p>
				</div>
				<div class="w3-third w3-container">
					  <p class="w3-border w3-padding-large w3-padding-64 w3-center">Advertise with Us</p>
				</div>
			</div>

			  <div class="w3-row w3-padding-64">
				<div class="w3-twothird w3-container">
				  <h1><u>Tutorial Videos</u></h1>
				  <p>
					Watch tutorial videos for free. The tutorial videos is dedicated mainly for the 100Level students set to assist them academically. The videos on tutorial coomprises mainly of <i><abbr title="federal university of technology, owerri">Futo</abbr></i>
					general courses.
					<p style="text-indent:17px;">All videos might be currently unavailable for some reason, but we're trying all we can to deliver more educational contents to our students.</p>
				  </p>
				</div>
				<div class="w3-third w3-container">
					<p class="w3-border w3-padding-large w3-padding-64 w3-center">Advertise with Us</p>
				</div>
			  </div>
			  
			  <div class="w3-row w3-padding-64">
				<div class="w3-twothird w3-container">
				  <h1><u>Contact Us.</u></h1>
				  <p>
					Do you have any questions, or you'd like to pots an Advert image, or you'd like to get in-touch with us for any reason?, kindly <a href="#contactUs">contact us</a> 
					or <a href="#contactUs">mail</a> to us. See details below.
				  </p>
				</div>
				<div class="w3-third w3-container">
					<p class="w3-border w3-padding-large w3-padding-32 w3-center">Post Your Free Ads Here</p>
					<p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
				</div>
			  </div>
			  
			  <div class="w3-row w3-padding-64">
				<div class="w3-twothird w3-container">
				  <h1><u>Terms And Policy.</u></h1>
				  <p>
					<ul style="list-style-type:none;">
						<li>All users are expected to be a bonafide <i><abbr title="federal university of technology, owerri.">Futo</abbr></i> student.</li>
						<li>We use cookies to deliver our responsive contents. </li>
						<li>You are advised to allow cookies in your browser to get the responsive contents.</li>
						<li>Videos and gif's images cannot be attached to your updates in the forum.</li>
					<ul/>
				  </p>
				</div>
				<div class="w3-third w3-container">
				  <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
				  <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
				</div>
			  </div>
			
			<!-- // the footer-->
		  <footer id="myFooter">
			<div class="w3-container w3-theme-l1">
				<p>
					<center>
						<a name="contactUs"></a><h3>contact us</h3>
					For Advert Placements, Sponsorship And Support Please Contact Us on <br>
					<address><i  style="color:teal;">(+234)902-1505-625</i> or Mail Us on <i  style="color:teal;">futostudentforum@gmail.com</i></address>
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
