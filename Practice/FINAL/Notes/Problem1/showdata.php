<?php 
session_start(); 
 
$fname     = $_REQUEST['fname']; 
$lname     = $_REQUEST['lname']; 
$dob       = $_REQUEST['dob']; 
$gender    = $_REQUEST['gender'] ?? ""; 
$phone     = $_REQUEST['phone']; 
$email     = $_REQUEST['email']; 
$password  = $_REQUEST['password']; 
$cpassword = $_REQUEST['cpassword']; 
 
if (empty($fname) || empty($lname) || empty($dob) || empty($gender) ||  
    empty($phone) || empty($email) || empty($password) || empty($cpassword)) { 
    header("Location: registration.php"); 
    exit; 
} 
 
if ($password !== $cpassword) { 
    echo "Passwords do not match. <a href='registration.php'>Try Again</a>"; 
    exit; 
} 
 
$_SESSION['email'] = $email; 
$_SESSION['password'] = $password; 
 
echo "<h2>Registration Details</h2>"; 
echo "First Name: $fname <br>"; 
echo "Last Name: $lname <br>"; 
echo "Date of Birth: $dob <br>"; 
echo "Gender: $gender <br>"; 
echo "Phone: $phone <br>"; 
echo "Email: $email <br>"; 
 
header("Location: login.php"); 
 
?>