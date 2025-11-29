<!DOCTYPE html>
<html>
<head>
    <title>Event Demo Page</title>
</head>
<body>

<center>
<h1>Participant Registration</h1>
</center>

<form onsubmit="return registerNow()">

    <label>Full Name:</label><br>
    <input type="text" id="fullname"><br><br>

    <label>Email:</label><br>
    <input type="text" id="email"><br><br>

    <label>Phone Number:</label><br>
    <input type="text" id="phone"><br><br>

    <label>Password:</label><br>
    <input type="password" id="pass"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" id="cpass"><br><br>

    <button type="submit">Register</button>

</form>

<div id="regOutput"></div>

<hr>

<center>
<h2>Activity Selection</h2>
</center>

<label>Activity Name:</label><br>
<input type="text" id="activity"><br><br>

<button onclick="addActivity()">Add Activity</button>

<div id="activityList"></div>

<script>

// ---------------------- Registration ----------------------

function registerNow()
{
    var name = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var pass = document.getElementById("pass").value.trim();
    var cpass = document.getElementById("cpass").value.trim();

    var output = document.getElementById("regOutput");
    output.innerHTML = "";

    if (name == "" || email == "" || phone == "" || pass == "" || cpass == "")
    {
        alert("Please fill all fields.");
        return false;
    }

    if (!email.includes("@"))
    {
        alert("Email must contain '@'.");
        return false;
    }

    if (isNaN(phone))
    {
        alert("Phone must be numeric.");
        return false;
    }

    if (pass !== cpass)
    {
        alert("Passwords do not match.");
        return false;
    }

    output.innerHTML = 
        "Registration Successful!<br><br>" +
        "Name: " + name + "<br>" +
        "Email: " + email + "<br>" +
        "Phone: " + phone;

    // Clear input fields
    document.getElementById("fullname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("pass").value = "";
    document.getElementById("cpass").value = "";

    return false;
}

// ---------------------- Activities ----------------------

function addActivity()
{
    var act = document.getElementById("activity").value.trim();
    var list = document.getElementById("activityList");

    if (act == "")
    {
        alert("Enter an activity name.");
        return;
    }

   
    list.innerHTML += "<p>" + act + " <button onclick='removeActivity(this)'>Remove</button></p>";

    document.getElementById("activity").value = "";
}

function removeActivity(btn)
{
    btn.parentElement.remove();
}

</script>

</body>
</html>
