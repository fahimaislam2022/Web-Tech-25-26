<!DOCTYPE html>
<html>
<head>
    <title>ABC University Demo System</title>
</head>

<body>

<center>
    <h1>ABC University  Demo Registration & Course Selector</h1>
</center>

<!-- ============================
     STUDENT REGISTRATION SECTION
     ============================ -->
<h2>Student Registration</h2>

<form onsubmit="return registerStudent()">
    <label>Full Name:</label><br>
    <input type="text" id="fullname"><br><br>

    <label>Email:</label><br>
    <input type="text" id="email"><br><br>

    <label>Password:</label><br>
    <input type="password" id="password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" id="confirmpass"><br><br>

    <button type="submit">Register</button>
</form>

<div id="regOutput"></div>

<br><hr><br>

<!-- ============================
     COURSE SELECTION SECTION
     ============================ -->
<h2>Course Selection</h2>

<label>Course Name:</label><br>
<input type="text" id="courseName"><br><br>

<button onclick="addCourse()">Add Course</button><br><br>

<label>Selected Courses:</label>
<ul id="courseList"></ul>

<script>

// =========================
// STUDENT REGISTRATION LOGIC
// =========================
function registerStudent() {
    var name = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("password").value.trim();
    var conf = document.getElementById("confirmpass").value.trim();

    // Validation
    if (name === "" || email === "" || pass === "" || conf === "") {
        alert("Please fill in all fields.");
        return false;
    }

    if (!email.includes("@")) {
        alert("Email must contain '@'.");
        return false;
    }

    if (pass !== conf) {
        alert("Passwords do not match.");
        return false;
    }

    // Show success message
    var output = document.getElementById("regOutput");
    output.innerHTML = `
        <h3>Registration Successful!</h3>
        Name: ${name}<br>
        Email: ${email}<br>
    `;

    return false;
}



// =========================
// COURSE SELECTION LOGIC
// =========================
function addCourse() {
    var course = document.getElementById("courseName").value.trim();

    if (course === "") {
        alert("Please enter a course name.");
        return;
    }

    // Create list item
    var li = document.createElement("li");
    li.innerHTML = `${course} 
        <button onclick="deleteCourse(this)">Delete</button>`;

    document.getElementById("courseList").appendChild(li);

    document.getElementById("courseName").value = "";
}

function deleteCourse(btn) {
    var li = btn.parentElement;
    li.remove();
}

</script>

</body>
</html>
