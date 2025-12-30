<?php
$host = "localhost";
$user = "root";        // default for XAMPP
$pass = "";            // leave empty unless you set one
$dbname = "hotel_db";  // your database name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
