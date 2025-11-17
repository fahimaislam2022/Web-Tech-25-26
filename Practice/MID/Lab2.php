<!DOCTYPE html>
<html>
<head>
    <title>Lab2odd</title>

    <style>
        body {
            background-color: #3ff5ff;
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
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 18px;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            padding: 10px 20px;
            background-color: #2e476e;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-size: 14px;
        }

        .success-box {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-size: 15px;
            background-color: #e9ffe6;
            border-left: 5px solid #2e476e;
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
            background-color: red;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Registration</h1>

    <label>Full Name</label>
    <input type="text" id="fullname">

    <label>Email</label>
    <input type="text" id="email">

    <label>Password</label>
    <input type="password" id="password">

    <label>Confirm Password</label>
    <input type="password" id="confirmPassword">

    <button onclick="registerStudent()">Register</button>

    <div id="successmessage"></div>
</div>



<div class="container">
    <h1>Course Registration</h1>

    <label>Course Name</label>
    <input type="text" id="courseInput">

    <button onclick="addCourse()">Add Course</button>

    <div id="courseList"></div>
</div>



<script>

function registerStudent() {

    var name = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var msgBox = document.getElementById("successmessage");

    if (name === "" || email === "" || password === "" || confirmPassword === "") {
        alert("Fill it properly!!");
        return;
    }

    if (!email.includes("@")) {
        alert("Invalid email!");
        return;
    }

    if (password !== confirmPassword) {
        alert("Password does not match!");
        return;
    }

    msgBox.innerHTML = `
        <div class="success-box">
            <strong>Registration successful!</strong><br><br>
            <b>Name:</b> ${name}<br>
            <b>Email:</b> ${email}
        </div>
    `;
}



function addCourse() {

    var courseName = document.getElementById("courseInput").value;
    var courseList = document.getElementById("courseList");

    if (courseName === "") {
        alert("Please enter a course name");
        return;
    }

    var div = document.createElement("div");
    div.className = "course-item";

    var text = document.createElement("span");
    text.innerHTML = courseName;

    var delBtn = document.createElement("button");
    delBtn.className = "delete-btn";
    delBtn.innerHTML = "Delete";

    delBtn.onclick = function () {
        div.remove();
    };

    div.appendChild(text);
    div.appendChild(delBtn);
    courseList.appendChild(div);

    document.getElementById("courseInput").value = "";
}

</script>

</body>
</html>
