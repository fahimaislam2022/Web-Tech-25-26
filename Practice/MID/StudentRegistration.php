<!DOCTYPE html>
<html>
<head>
    <title>Lab_2_ODD – Student & Course Registration</title>

    <style>
        body {
            background-color: #e9efff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px 0;
        }

        .container {
            width: 500px;
            background-color: white;
            margin: 20px auto;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #003366;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #0055d4;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 14px;
        }

        button:hover {
            background-color: #003ea0;
        }

        .success-box {
            margin-top: 20px;
            padding: 15px;
            background-color: #dbffdb;
            border-radius: 8px;
            border: 1px solid #9be89b;
            font-size: 15px;
        }

        .course-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px;
            border-radius: 6px;
            margin-top: 12px;
            border: 1px solid #ddd;
        }

        .delete-btn {
            background-color: #ffcece;
            color: darkred;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #ff9c9c;
        }
    </style>
</head>

<body>

<!-- STUDENT REGISTRATION -->
<div class="container">
    <h2>Student Registration</h2>

    <label>Full Name:</label>
    <input type="text" id="fullname">

    <label>Email:</label>
    <input type="text" id="email">

    <label>Password:</label>
    <input type="password" id="password">

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword">

    <button onclick="registerStudent()">Register</button>

    <div id="successMessage"></div>
</div>


<!-- COURSE REGISTRATION -->
<div class="container">
    <h2>Course Registration</h2>

    <label>Course Name:</label>
    <input type="text" id="courseInput">

    <button onclick="addCourse()">Add Course</button>

    <div id="courseList"></div>
</div>


<script>

// ---------------- STUDENT REGISTRATION ----------------
function registerStudent() {
    var name = document.getElementById("fullname").value.trim();
    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("password").value;
    var confPass = document.getElementById("confirmPassword").value;
    var msgBox = document.getElementById("successMessage");

    if (name === "" || email === "" || pass === "" || confPass === "") {
        alert("All fields are required!");
        return;
    }

    if (!email.includes("@")) {
        alert("Invalid email! Must contain '@'");
        return;
    }

    if (pass !== confPass) {
        alert("Passwords do not match!");
        return;
    }

    msgBox.innerHTML = `
        <div class="success-box">
            <strong>Registration Successful!</strong><br><br>
            <b>Name:</b> ${name}<br>
            <b>Email:</b> ${email}
        </div>
    `;
}



// ---------------- COURSE REGISTRATION ----------------
function addCourse() {
    var courseName = document.getElementById("courseInput").value.trim();
    var courseList = document.getElementById("courseList");

    if (courseName === "") {
        alert("Please enter a course name");
        return;
    }

    var div = document.createElement("div");
    div.className = "course-item";

    var nameSpan = document.createElement("span");
    nameSpan.innerHTML = courseName;

    var delBtn = document.createElement("button");
    delBtn.className = "delete-btn";
    delBtn.innerHTML = "Delete";
    delBtn.onclick = function() {
        div.remove();
    };

    div.appendChild(nameSpan);
    div.appendChild(delBtn);
    courseList.appendChild(div);

    document.getElementById("courseInput").value = "";
}

</script>

</body>
</html>
