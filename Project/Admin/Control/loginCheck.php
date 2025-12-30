<?php
session_start();
@include("../db/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        $error = "All fields are required!";
    } else {
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $_SESSION["username"] = $username;

            // ✅ Remember Me
            if (isset($_POST["remember"])) {
                setcookie("username", $username, time() + (86400 * 7), "/");
                setcookie("password", $password, time() + (86400 * 7), "/");
            } else {
                setcookie("username", "", time() - 3600, "/");
                setcookie("password", "", time() - 3600, "/");
            }

            header("Location: ../html/dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password!";
        }
    }
}
?>
