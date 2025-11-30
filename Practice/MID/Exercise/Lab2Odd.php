<!DOCTYPE html>
<html>
<head>
    <title>ABC University Demo</title>
</head>

<body>

<center>
    <h1>ABC University Student Onboarding Demo</h1>
</center>

<h2>Student Registration</h2>

<!-- Registration Form -->
<form onsubmit="return registerStudent()">
    Full Name: <br>
    <input type="text" id="fullname"><br><br>

    Email: <br>
    <input type="text" id="email"><br><br>

    Password: <br>
    <input type="password" id="pass"><br><br>

    Confirm Password: <br>
    <input type="password" id="cpass"><br><br>

    <button type="submit">Register</button>
</form>

<br>
<div id="regOutput"></div>

<hr>

<h2>Course Selection</h2>

Enter Course Name: <br>
<input type="text" id="courseInput">
<button onclick="addCourse()">Add Course</button>

<br><br>

<div id="courseList"></div>

<script>

// ===============================
// STUDENT REGISTRATION VALIDATION
// ===============================

function registerStudent() {

    var name = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("pass").value.trim();
    var cpass = document.getElementById("cpass").value.trim();
    var output = document.getElementById("regOutput");

    output.innerHTML = "";

    // Required field validation
    if (name === "" || email === "" || pass === "" || cpass === "") {
        alert("All fields are required!");
        return false;
    }

    // Email validation
    if (!email.includes("@")) {
        alert("Invalid email! Email must contain '@' ");
        return false;
    }

    // Password match check
    if (pass !== cpass) {
        alert("Passwords do not match!");
        return false;
    }

    // Success output
    output.innerHTML = `
        <h3>Registration Successful!</h3>
        Full Name: ${name} <br>
        Email: ${email} <br>
    `;

    return false;
}


// ===============================
// COURSE ADD & DELETE USING DOM
// ===============================

function addCourse() {
    var courseName = document.getElementById("courseInput").value.trim();
    var listDiv = document.getElementById("courseList");

    if (courseName === "") {
        alert("Please enter a course name.");
        return;
    }

    var item = document.createElement("div");

    item.innerHTML = `
        ${courseName}
        <button onclick="this.parentNode.remove()">Delete</button>
        <br><br>
    `;

    listDiv.appendChild(item);

    document.getElementById("courseInput").value = "";
}

</script>

</body>
</html>
