<!DOCTYPE html>
<html>
<head>
    <title>Student Marks Entry</title>
</head>

<body>

<h1> Student Marks Form </h1>

<label>Name:</label>
<input type="text" id="name">
<br><br>
<label>Marks:</label>
<input type="number" id="marks">
<br><br>
<button onclick="submitData()">Submit</button>

<div id="error"></div>

<br><br>

<table id="datatable">
    <tr>
        <th>Name</th>
        <th>Marks</th>
    </tr>
</table>


<script>

function submitData()
{
    var name = document.getElementById("name").value.trim();
    var marks = document.getElementById("marks").value.trim();
    var error = document.getElementById("error");

    error.innerHTML = "";

    // Validation
    if (name === "" || marks === "") {
        error.innerHTML = "Please fill in all fields.";
        return false;
    }

    var letterCheck = /^[A-Za-z]+(\s[A-Za-z]+)?$/;
    if (!letterCheck.test(name)) {
        error.innerHTML = "Name must contain only letters.";
        return false;
    }

    if (isNaN(marks) || marks < 0 || marks > 100) {
        error.innerHTML = "Marks must be between 0 and 100.";
        return false;
    }

    // Add new row dynamically
    var table = document.getElementById("datatable");
    var row = table.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = name;
    cell2.innerHTML = marks;

    // Row color based on marks
    if (marks > 50) {
        row.style.backgroundColor = "green";
        row.style.color = "white";
    } else {
        row.style.backgroundColor = "red";
        row.style.color = "white";
    }

    // Clear input fields after submit
    document.getElementById("name").value = "";
    document.getElementById("marks").value = "";

    return false;
}

</script>

</body>
</html>
