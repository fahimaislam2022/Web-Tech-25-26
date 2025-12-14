<?php 
session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Signup</title> 
</head> 
<body> 
    <h2>Signup Form</h2> 
    <form action="validate.php" method="post" enctype="multipart/form-data"> 
        Full Name: <input type="text" name="fullname"><br><br> 
        Username: <input type="text" name="username"><br><br> 
        Password: <input type="password" name="password"><br><br> 
         
        Gender: 
        <input type="radio" name="gender" value="Male"> Male 
        <input type="radio" name="gender" value="Female"> Female 
        <input type="radio" name="gender" value="Other"> Other <br><br> 
         
        Country: 
        <select name="country"> 
            <option value="">--Select--</option> 
            <option value="Bangladesh">Bangladesh</option> 
            <option value="India">India</option> 
            <option value="USA">USA</option> 
            <option value="UK">UK</option> 
            <option value="Canada">Canada</option> 
        </select><br><br> 
         
        Profile Picture: <input type="file" name="profile"><br><br> 
         
        <input type="submit" value="Signup"> 
    </form> 
</body> 
</html>