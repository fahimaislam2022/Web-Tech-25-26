<!DOCTYPE html>
<html>
<head>
    <title>Account Information Form</title>
</head>

<body>

<h2>Account Information Form</h2>

<form onsubmit="return handleSubmit()">

    <label>First Name:</label>
    <input type="text" id="fname"><br><br>

    <label>Last Name:</label>
    <input type="text" id="lname"><br><br>

    <label>Date of Birth:</label>
    <input type="date" id="dob"><br><br>

    <label>Phone:</label>
    <input type="number" id="phone"><br><br>

    <label>Email:</label>
    <input type="email" id="email"><br><br>

    <label>Password:</label>
    <input type="password" id="password"><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <label>Age Range:</label>
    <select id="ageRange">
        <option value="">-- Select Age Range --</option>
        <option>10-18</option>
        <option>19-30</option>
        <option>31-50</option>
        <option>51+</option>
    </select>
    <br><br>

    <label>Subscribe to Newsletter:</label>
    <input type="checkbox" id="newsletter"> Yes
    <br><br>

    <center><input type="submit" value="Submit"></center>
    <br>
    <center><input type="reset" value="Reset"></center>

</form>

<div id="error"></div>
<div id="output"></div>

<script>

function handleSubmit() {

    var fname = document.getElementById("fname").value.trim();
    var lname = document.getElementById("lname").value.trim();
    var dob = document.getElementById("dob").value;
    var phone = document.getElementById("phone").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;

    var genderNodes = document.getElementsByName("gender");
    var gender = "";
    for (var i = 0; i < genderNodes.length; i++) {
        if (genderNodes[i].checked) {
            gender = genderNodes[i].value;
        }
    }

    var ageRange = document.getElementById("ageRange").value;

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Rule 1: All fields required
    if (fname === "" || lname === "" || dob === "" || phone === "" ||
        email === "" || password === "" || gender === "" || ageRange === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }

    // Email format validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorDiv.innerHTML = "Please enter a valid email address.";
        return false;
    }

    // Phone number must be numeric
    if (isNaN(phone)) {
        errorDiv.innerHTML = "Phone number must be numeric.";
        return false;
    }

    // Password must be at least 8 characters
    if (password.length < 8) {
        errorDiv.innerHTML = "Password must be at least 8 characters long.";
        return false;
    }

    outputDiv.innerHTML = `
        <strong>Form Submitted Successfully!</strong><br><br>
        First Name: ${fname}<br>
        Last Name: ${lname}<br>
        DOB: ${dob}<br>
        Phone: ${phone}<br>
        Email: ${email}<br>
        Gender: ${gender}<br>
        Age Range: ${ageRange}<br>
        Newsletter: ${document.getElementById("newsletter").checked ? "Subscribed" : "Not Subscribed"}
    `;

    return false;
}

</script>

</body>
</html>
 