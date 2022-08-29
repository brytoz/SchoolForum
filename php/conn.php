<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lr";
// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


/*
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
year VARCHAR(4) NOT NULL,
faculty VARCHAR(6) NOT NULL,
phone VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
password VARCHAR(40) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
comments VARCHAR(700),
uploads VARCHAR(200),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table comments created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
?>
