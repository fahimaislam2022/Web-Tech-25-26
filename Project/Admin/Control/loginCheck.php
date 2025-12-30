<?php
session_start();
@include("../Model/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  if (empty($username) || empty($password)) {
    $error = "All fields are required!";
  } else {
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $_SESSION["username"] = $username;
      header("Location: ../View/dashboard.php");
      exit();
    } else {
      $error = "Invalid username or password!";
    }
  }
}
?>
