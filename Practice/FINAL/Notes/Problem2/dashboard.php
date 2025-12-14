<?php 
session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Dashboard</title> 
</head> 
<body> 
    <h2>User Dashboard</h2> 
    <p>Full Name:<?php echo $_SESSION['fullname']; ?></p> 
    <p>Username:<?php echo $_SESSION['username']; ?></p> 
    <p>Gender:<?php echo $_SESSION['gender']; ?></p> 
    <p>Country:<?php echo $_SESSION['country']; ?></p> 
    <p>Profile Picture:</p> 
    <img src="<?php echo $_SESSION['profile']; ?>" width="150"> 
</body> 
</html> 