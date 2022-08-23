<!--<php 
require '../php/all.php';
?>
-->

<!DOCTYPE html>
<html  lang="en">
<title>Forum | Trends | Futo Student's Forum</title>
<!--meta descriptions-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Futo students forum, official futo student's forum">
<meta name="ozoemena bright" content="developer, student, CEO fsf, author">
<!-- Links-->
<link rel="stylesheet" href="../fsf.css">
<link rel="stylesheet" href="../fsf-theme-color.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Icon set-->
<link rel="icon" href="../images/fsf.jpg" type="image/jpg">
<!--Icon-->
<style>

.display-container {
	display:flex;
	display:-webkit-flex;
	display:-moz-flex;
}

.display-item {
	margin:4px;
	padding:5px;
	border:1px inset transparent;
	border-radius:4px;
}
.display-item {
	flex-grow:1;
	-webkit-flex-grow:1;
	-moz-flex-grow:1;
	flex-shrink:1;
	-webkit-flex-shrink:1;
	-moz-flex-shrink:1;
	flex-basis:1;
}

@media screen and (max-width: 767px) {
	
}
</style>


<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a href="../index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
	<a href="profile.php" class="w3-bar-item w3-button w3-theme-l1 w3-hover-white">Profile</a>
    <a href="tutorial/tutorials.php" class="w3-bar-item w3-button w3-theme-11 w3-hover-white">Tutorials</a>
	<span style="float:right;"><a href="../php/logout.php" class="w3-bar-item w3-button w3-theme-11 w3-hover-white">Logout</a><span>
  </div>
</div>


<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

<div class="w3-row w3-padding-64">
			  <div class="w3-row">
				<div class="w3-twothird w3-container" style="padding-top:10px;">
				  <center><h2>The Student's Forum.</h2></center><br>
				<p>
				
					<?php
					echo '<form action="'.setComment($conn).'" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="username" value="'.$Username.'">
						<input type="file" name="file" style="background-color:#35475f;"><br>
						<textarea class="comment" name="message" style="line-height: 1.4em; height:200px; display:block;width:100%;" required=""></textarea>
						<input type="hidden" name="date" value="'.date('Y-m-d  H:i:s').'"><br>
						<input type="submit" value="Post" name="submitcomment" style="width:150px;"><br><br>
						</form><br>';
					?><strong><hr></strong>
				</p><h2>See trends</h2><br>
				<p><?php getComment($conn);?></p>
				</div>
			  </div>

			  
			
			<!-- // the footer-->
		  <footer id="myFooter">
			<div class="w3-container w3-theme-l2 w3-padding-32">
			  <h6><center>&copy; 2017 Futo Students Forum. All rights reserved</center></h6>
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
