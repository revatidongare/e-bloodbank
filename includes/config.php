<?php
ob_start();
session_start();


$servername = "localhost";
$username = "id1162638_user_e_bloodbank";
$password = "e_bloodbank";
$dbname = "id1162638_e_bloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>