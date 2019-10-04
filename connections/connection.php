<?php

// DATABASE CONNECTION SERVER DIRECTLY
// $servername = "localhost";
// $username = "losreyeslapazgob_admin";
// $password = "adminPHPlosreyes";
// $bd = "losreyeslapazgob_municipioReyes";

// DATABASE CONNECTION LOCAL SERVER MAC
$servername = "localhost";
$username = "root";
$password = "root";
$bd = "municipioReyes";

// Create connection
$conn = new mysqli($servername, $username, $password, $bd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>