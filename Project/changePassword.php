<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>
<center>
<h2>Change Password</h2>

<form id="passwordForm" method="POST">
     <label>Current Password</label><br>
     <input type="password" id="currentpassword"><br><br>
    <label>New Password</label><br>
    <input type="password" id="newpassword"><br><br>
    <label>Confirm Password</label><br>
    <input type="password" id="confirmPassword"><br><br>
    <button type="submit">Change</button>
</form>

<p><a href="dashboard.html">Back</a></p>

<script>
document.getElementById("passwordForm").addEventListener("submit", function(e){
    e.preventDefault();
    var c = document.getElementById("currentpassword").value;
    var n = document.getElementById("newpassword").value;
    var x = document.getElementById("confirmPassword").value;
    if(c === "" || n === "" || x === "") {
        alert("All fields required.");
        return;
    }
    if(n.length < 6) {
        alert("Password must be 6+ characters.");
        return;
    }
    if(n !== x) {
        alert("Passwords do not match.");
        return;
    }

    alert("Password changed (prototype).");
    window.location.href = "login.html";
});
</script>
</center>
</body>
</html>
