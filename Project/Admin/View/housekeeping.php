<!DOCTYPE html>
<html>
<head>
    <title>Housekeeping Staff</title>
</head>
<body>
<center>
<h2>Housekeeping Staff</h2>


<form id="housekeepingForm" method="POST">
    <label>Name</label><br>
    <input type="text" id="housekeepingName" placeholder="Enter name"><br><br>

    <label>Gender</label><br>
    <label><input type="radio" name="housekeepingGender" value="Male"> Male</label>
    <label><input type="radio" name="housekeepingGender" value="Female"> Female</label>
    <br><br>

     <label>Phone Number</label><br>
    <input type="tel" id="housekeepingPhone" placeholder="Enter phone number"><br><br>
    <label>Date of Birth:</label><br>
    <input type="date" id="housekeepingDOB"><br><br>

    <button type="submit">Add Staff</button>
</form>

<br>


<table border="1" thickness="1" id="housekeepingTable">
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>DOB</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</table>

<p><a href="dashboard.html">Back</a></p>


</center>
</body>
</html>
