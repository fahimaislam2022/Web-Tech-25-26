<?php 
session_start(); 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $fullname = $_POST['fullname']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $gender   = $_POST['gender']; 
    $country  = $_POST['country']; 
    $profilePic = $_FILES['profile']['name']; 
 
    if (empty($fullname) || empty($username) || empty($password) ||  
        empty($gender) || empty($country) || empty($profilePic)) { 
        echo "Enter Valid data"; 
        exit; 
    } 
 
    $_SESSION['fullname'] = $fullname; 
    $_SESSION['username'] = $username; 
    $_SESSION['profile'] = $profilePic; 
    $_SESSION['gender'] = $gender; 
    $_SESSION['country'] = $country; 
 
 
    header("Location:dashboard.php"); 
    exit; 
} else { 
    echo "Invalid Request"; 
} 
?>