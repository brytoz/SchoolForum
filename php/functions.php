<?php
ob_start();
session_start();
require 'conn.php';	
date_default_timezone_set('Africa/lagos');

//register function
function register($conn) {
	
if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["year"]) && isset($_POST["faculty"]) && isset($_POST["phone"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["submit"])) {
		$username = $_POST["username"];
		$email = $_POST["email"];
		$year = $_POST["year"];
		$faculty = $_POST["faculty"];
		$phone = $_POST["phone"];
		$gender = $_POST["gender"];
		$password = $_POST["password"]; 
		$password_again = $_POST["password_again"];
		$password_hash = md5($password);   //timestamp

		
	 if (!empty($username) &&!empty($email) &&!empty($year) &&!empty($faculty) &&!empty($phone) &&!empty($gender)&&!empty($password)&&!empty($password_again)) {
		 if ($password!=$password_again) {
			 echo '<script>document.getElementById("alert").innerHTML = "Your passwords do not match!";</script>';
		 } else {
				// CHANGE THE NAME OF THE TABLE LATER ON
			 $sql_select1 = "SELECT *  FROM myguests WHERE username LIKE '".mysqli_real_escape_string($conn, $username)."'";
			 $sql_select2 = "SELECT *  FROM myguests WHERE email LIKE '".mysqli_real_escape_string($conn, $email)."'";
			 $sql_select3 = "SELECT *  FROM myguests WHERE phone LIKE '".mysqli_real_escape_string($conn, $phone)."'";
			 $result1 = mysqli_query($conn, $sql_select1);
			 $result2 = mysqli_query($conn, $sql_select2);
			 $result3 = mysqli_query($conn, $sql_select3);
			 
				
			 if (mysqli_num_rows($result1)==1) {
				 echo '<script>document.getElementById("alert").innerHTML = "The Username '.$username.' already exist.!";</script>';
			 } else if (mysqli_num_rows($result2)==1) {
				 echo '<script>document.getElementById("alert").innerHTML = "The Email '.$email.' already exist.!";</script>';
			 } else if (mysqli_num_rows($result3)==1) {
				echo '<script>document.getElementById("alert").innerHTML = "The number '.$phone.' already exist.!";</script>';
			 } else {
						
						//INSERTING
				$insert = "INSERT INTO MyGuests VALUES ('', 
				'".mysqli_real_escape_string($conn, $username)."',
				'".mysqli_real_escape_string($conn, $email)."',
				'".mysqli_real_escape_string($conn, $year)."',
				'".mysqli_real_escape_string($conn, $faculty)."',
				'".mysqli_real_escape_string($conn, $phone)."',
				'".mysqli_real_escape_string($conn, $gender)."',
				'".mysqli_real_escape_string($conn, $password_hash)."',
				'')";
				
				
				$insert_query = mysqli_query($conn, $insert);
				
				if ($insert_query==true) {	
					echo '<script>document.getElementById("alert").innerHTML = "Please Log in";</script>';
				} else {
					echo '<script> alert("Sorry, we couldn\'t Register you this time please try again later");</script>';
				} 
			 }
		 }
	} else {
		 echo '<script>document.getElementById("alert").innerHTML = "Please fill all fields!";</script>';
	 }
 }
}


//log in function	
function login($conn) {
	 if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['checkbox'])&&isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	
	
	if (!empty($username) &&!empty($password) && isset($_POST['checkbox'])) {
		
		$sql_select = "SELECT `id` FROM myguests WHERE username LIKE 
		'".mysqli_real_escape_string($conn, $username)."' AND password LIKE 
		'".mysqli_real_escape_string($conn, $password_hash)."'";
		
		$login_query = mysqli_query($conn, $sql_select);
		$rows = mysqli_num_rows($login_query);
		
		if ($rows==0) {
			echo '<script>document.getElementById("alert").innerHTML = "Incorrect username or password!";</script>';
		}else if ($rows==1) {
			
			$count = mysqli_fetch_row($login_query);
			$user_id = $count[0];
				//set cookie 
			setcookie('username', $username, time() + 28800, '/');
			setcookie('password', $password_hash, time() + 28800, '/');
			
			$_SESSION['user_id'] = $user_id;
				//Redirect to profile.php page
			header('Location: ../dashboard/profile.php');
					
		}
	} else {
		echo '<script>document.getElementById("alert").innerHTML = "Fields are empty!"; </script>';
	}
 } 
}



//logged in function
function loggedin() {
	if (isset($_COOKIE['username']) && isset($_COOKIE['password']) && isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false; 
	}
}


//userId function
function UserId($get) {
	require 'conn.php';
	$query = "SELECT ".$get." FROM myguests WHERE `id`='".$_SESSION['user_id']."'";
	if ($data_query = mysqli_query($conn, $query)) {
			$data_row = mysqli_fetch_row($data_query);
			$data_count = $data_row[0];
		if ($data_count == true) {
			return $data_count;
		}
	}
}

//setcomment function 
function setComments($conn) {
		if (isset($_POST['message']) && isset($_POST['submitcomment']) || isset($_FILES['file']) ) {
	
			$user = mysqli_real_escape_string($conn, $_POST['username']);
			$message = mysqli_real_escape_string($conn, $_POST['message']);
			$date = mysqli_real_escape_string($conn, $_POST['date']);
			
			//start file variables
			$file = $_FILES['file'];
			$target = '../php/uploads/'.basename($_FILES['file']['name']);
			
			$filename = $file['name'];
			$fileTmpname = $file['tmp_name'];
			$filesize = $file['size'];
			$fileError = $file['error'];
			$filetype = $file['type'];// the text
			$allowedExt = array('jpg', 'jpeg', 'png', 'pdf');
			
			$fileExt = explode('.', $filename);
			$fileActualExt = strtolower(end($fileExt));
			
			if(empty($message) && !empty($file)) {
				echo '<script> alert("the field is empty!");</script>';
				
			} else if(!empty($message) && empty($filename)) {
				$insert = "INSERT INTO comments VALUES ('', '".$user."', '".$message."', '', '".$date."')";
				$result = mysqli_query($conn, $insert);
				//Recdirect to the comment page
				header('Location: forum.php');
				
			} else if (!empty($message) && !empty($filename)) {
					if ($filesize < 1000000) {
						if ($fileError === 0) {
							if (in_array($fileActualExt, $allowedExt) == true) {
								move_uploaded_file($fileTmpname, $target);
								//query
								$upload_insert = "INSERT INTO comments VALUES ('', '".$user."', '".$message."', '".$filename."', '".$date."')";
								$upload_result = mysqli_query($conn, $upload_insert);
								//Recdirect to the comment page
								header('Location: forum.php');
								
							} else {
								echo "<script>alert('You cannot Upload files of this type!');</script>";
							}
						} else {
							echo "<script>alert('There was an error uploading your file!');</script>";
						}
					} else {
						echo "<script>alert('File too large!!');</script>";
					}
			} else {
					echo 'okkkk';
			} 	

		} 
}


//getcomment function
function getComment($conn) {
	$Username = UserId('username'); 
	$_SESSION['username'] = $Username;			
				
	
	 $sql =  "SELECT * FROM comments ORDER BY id DESC LIMIT 50";
	 $results = mysqli_query($conn, $sql);
	 while ($row = mysqli_fetch_assoc($results)) {
		 echo "<div class='display-container'><div class='display-item'>";
		 echo "<br>";
		 echo '<strong>Posted on::</strong> <span style="color:royalblue;">'.$row['reg_date'].'</span><p></p>';
		 echo '<strong style="color:royalblue; float:left;text-transform:capitalize;"><span style="color:black;">By</span> '.$row['username'].'</strong><br><br>';
		 echo nl2br($row['comments'])."<br><br>" ;
			if (!empty($row['uploads'])) {
				echo '<p><img src="../php/uploads/'.$row['uploads'].'" style="height:200px;width:298px;"></p>';
			}
		 
			if (isset($_SESSION['user_id'])) {
				if ($_COOKIE['username'] == $row['username'] ) {
						 echo '<br><form method="POST" action="'.deletecomment($conn).'">
							<input type="hidden" name="id" value="'.$row['id'].'">
							<button type="submit" name="delete" style="text-shadow: 1px 1px 1px #000; border:0;cursor:pointer; color:white; background-color:rgba(255,0,0,0.9); border-radius:4px; padding:4px 12px;">Delete post</button>
						   </form>';
				}
			} else {
				echo '<script>alert("please kindly accept cookie from your browser");</script>';
				//take him to the login page
			}
				
				 echo '</div></div>';
				 echo '<hr>';
		 
	 }
 }

 
 //Delete comment function
 function deletecomment($conn) {
	if (isset($_POST['delete'])) {
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		
		$query = "DELETE FROM comments WHERE id='".$id."'";
		$query_result = mysqli_query($conn, $query);
		//redirect to the index page
		header('Location: ../dashboard/forum.php');
		
	}
 } 
 
 
 //change password function
 function changepassword($conn) {
	$Username = UserId('username'); 
	$_SESSION['username'] = $Username;
	 
	 if (isset($_POST['passwordchange']) && isset($_POST['new_password']) && isset($_POST['password_again']) && isset($_POST['submit'])) {
		 $passwordchange = mysqli_real_escape_string($conn, $_POST['passwordchange']);
		 $hash = md5($passwordchange);
		 
		 $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
		 $password_again = mysqli_real_escape_string($conn, $_POST['password_again']);
		 
		 
		 if (empty($passwordchange) && empty($new_password) && empty($password_again)) {
			 echo '<script>alert("Please fill all fields");</script>';
		 } else {
			if ($new_password == $password_again) {
				$sql = "SELECT * FROM myguests WHERE `username` LIKE '".$_SESSION['username']."'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				
				if ($hash == $row["password"]) {
					$new_hash = md5($new_password);
					$up = "UPDATE myguests SET password='".$new_hash."' WHERE username='".$_SESSION['username']."'";
					$up_result = mysqli_query($conn, $up);
					//Redirect to the profile page with a success domain
					header('Location: setting.php?PasswordChanged succesfully');
					
				} else {
					 echo 'your recent password is incorrect!';
				}
				
			} else {
				 echo '<script>alert("Your new password do not match!");</script>';
			}
		 }
	 }
 }
 
 
 
 
 