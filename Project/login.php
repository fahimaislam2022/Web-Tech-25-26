<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<center>
<h2>Admin Login</h2>

<form id="loginForm" method="post" action="#">
    <label>Username:</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label>Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <button type="submit">Login</button>
</form>

<p>
    <a href="changePassword.html">Change Password</a>
</p>

<script>
document.getElementById("loginForm").addEventListener("submit", function(e){
    e.preventDefault();
    var u = document.getElementById("username").value.trim();
    var p = document.getElementById("password").value;
    if(u === "" || p === "") {
        alert("Please enter username and password.");
        return;
    }
    // In a real system this would be submitted to server.
    // For this static prototype we redirect to dashboard.
    window.location.href = "dashboard.html";
});
</script>
</center>
</body>
</html>