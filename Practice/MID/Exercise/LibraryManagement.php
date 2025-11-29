<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>
</head>
<body>
<center
<h2>Library Management</h2>

<form onsubmit="return addBook()">
    <label>Book Title:</label>
    <input type="text" id="title" /><br><br>
    
    <label>Publication Year:</label>
    <input type="number" id="year" /><br><br>

    <button type="submit">Add Book</button>
</form>
<br><br>
<div id="error"></div>

<table border="1" id="bookTable">
    <tr>
        <th>Title</th>
        <th>Year</th>
    </tr>
</table>
</center>
<script>
function addBook() {
    var title = document.getElementById("title").value.trim();
    var year = document.getElementById("year").value.trim();

    var errorDiv = document.getElementById("error");
    var table = document.getElementById("bookTable");

    // Clear previous error
    errorDiv.innerHTML = "";

    // Validation
    var titleRegex = /^[A-Za-z]+$/;
    var currentYear = new Date().getFullYear();

    if(title === "" || year === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
    }

    if(!titleRegex.test(title)) {
        errorDiv.innerHTML = "Title must contain letters only, no spaces or numbers.";
        return false;
    }

    if(isNaN(year) || year < 1900 || year > currentYear || year.length != 4) {
        errorDiv.innerHTML = "Enter a valid 4-digit year between 1900 and " + currentYear + ".";
        return false;
    }

    // Create new row
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = title;
    cell2.innerHTML = year;

    // Set row color
    if(year < 2000) {
        row.style.backgroundColor = "lightgray";
    } else {
        row.style.backgroundColor = "lightgreen";
    }

    // Clear input fields
    document.getElementById("title").value = "";
    document.getElementById("year").value = "";

    return false;
}
</script>

</body>
</html>
