<?php
// DATABASE CONNECTION SERVER DIRECTLY
// $servername = "localhost";
// $username = "losreyeslapazgob_admin";
// $password = "adminPHPlosreyes";

// DATABASE CONNECTION LOCAL SERVER MAC
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>