<?php
session_start();
@include("../Control/loginCheck.php");

// if (isset($_SESSION["username"])) {
//     header("Location: dashboard.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login</title>
  <link rel="stylesheet" href="../CSS/adminlogin.css" />
</head>
<body>
  <div class="container">
    <div class="form-card">
      <h2>Admin Login</h2>

      <form id="loginForm" method="post" action="">
        <label>Username:</label>
        <input type="text" id="username" name="username" />
        <p id="userError" class="error"></p>

        <label>Password:</label>
        <input type="password" id="password" name="password" />
        <p id="passError" class="error"></p>

        <button type="submit" name="submit">Login</button>

        <p class="message">
          <?php if (isset($error)) echo $error; ?>
        </p>
      </form>

      <div class="links">
        <a href="changePassword.php">Change Password</a>
      </div>
    </div>
  </div>

  <script src="../JS/adminlogin.js"></script>
</body>
</html>
