<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>
<body>

<center><h2>User Registration</h2></center>

<form onsubmit="return handleSubmit()">

    <label>Full Name:</label>
    <input type="text" id="fullname"><br><br>

    <label>Email Address:</label>
    <input type="email" id="email"><br><br>

    <label>Password:</label>
    <input type="password" id="password"><br><br>

    <label>Confirm Password:</label>
    <input type="password" id="confirmpassword"><br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <label>Date of Birth:</label>
    <input type="date" id="dob">
    <br><br>

    <button type="submit">Submit</button>

</form>

<div id="error"></div>
<div id="output"></div>

<script>

function handleSubmit() {

    var fullname = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    var dob = document.getElementById("dob").value;

    var genderOptions = document.getElementsByName("gender");
    var selectedGender = "";

    for (var i = 0; i < genderOptions.length; i++) {
        if (genderOptions[i].checked) {
            selectedGender = genderOptions[i].value;
        }
    }

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Rule 1: All fields required
    if (fullname === "" || email === "" || password === "" || confirmpassword === "" || selectedGender === "" || dob === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }

    // Rule 2: Email format validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorDiv.innerHTML = "Please enter a valid email address.";
        return false;
    }

    // Rule 3: Password at least 8 characters
    if (password.length < 8) {
        errorDiv.innerHTML = "Password must be at least 8 characters long.";
        return false;
    }

    // Rule 4: Confirm password must match
    if (password !== confirmpassword) {
        errorDiv.innerHTML = "Passwords do not match.";
        return false;
    }

    // Rule 5: Gender must be selected
    if (selectedGender === "") {
        errorDiv.innerHTML = "Please select your gender.";
        return false;
    }

    // Rule 6: DOB cannot be empty
    if (dob === "") {
        errorDiv.innerHTML = "Please select your date of birth.";
        return false;
    }

    outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${fullname}<br>
        Email: ${email}<br>
        Gender: ${selectedGender}<br>
        Date of Birth: ${dob}
    `;

    return false;
}

</script>

</body>
</html>
