<!DOCTYPE html>
<html>
<head>
    <title>Event Management</title>
</head>
<body>

<h2>Participant Registration</h2>

<form onsubmit="return handleSubmit()">
    <label>Name:</label>
    <input type="text" id="name" ><br><br>

    <label>Age:</label>
    <input type="number" id="age" ><br><br>

    <button type="submit">Submit</button>
</form>

<div id="error"></div>

<table border="1" id="participantTable">
    <tr>
        <th>Name</th><br><br>
        <th>Age</th>
    </tr>
</table>

<script>
function handleSubmit() {
    var name = document.getElementById("name").value.trim();
    var age = document.getElementById("age").value.trim();
    var errorDiv = document.getElementById("error");

    // Clear previous error
    errorDiv.innerHTML = "";

    // Name validation: not empty, only letters
    var nameRegex = /^[A-Za-z]+(\s[A-Za-z]+)?$/;
    if(name === "" || !nameRegex.test(name)) {
        errorDiv.innerHTML = "Please enter a valid name (letters only).";
        return false;
    }

    // Age validation: number between 18 and 100
    if(age === "" || isNaN(age) || age < 18 || age > 100) {
        errorDiv.innerHTML = "Please enter a valid age between 18 and 100.";
        return false;
    }

    // Add participant to table
    var table = document.getElementById("participantTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = name;
    cell2.innerHTML = age;

    // Set row color based on age
    if(age < 30) {
        row.style.backgroundColor = "lightblue";
    } else {
        row.style.backgroundColor = "lightyellow";
    }

    // Clear inputs after submission
    document.getElementById("name").value = "";
    document.getElementById("age").value = "";

    return false;
}
</script>

</body>
</html>
