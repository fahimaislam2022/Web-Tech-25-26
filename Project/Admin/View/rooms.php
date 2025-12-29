<!DOCTYPE html>
<html>
<head>
    <title>Manage Rooms</title>
</head>
<body>
<center>
<h2>Manage Room Types</h2>

<form id="roomForm" method="POST">
    <label>Room Type:</label><br>
    <select id="roomtype">
        <option value="">-- Select Room Type --</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Suite">Suite</option>
    </select>
    <br><br>

    <label>Price:</label><br>
    <input type="number" id="roomprice"><br><br>
    <label>Available From:</label><br>
    <input type="date" id="fromDate"><br><br>
    <label>Available To:</label><br>
    <input type="date" id="toDate"><br><br>

    <label>Capacity:</label><br>
    <label><input type="radio" name="capacity" value="1"> 1 Person</label>
    <label><input type="radio" name="capacity" value="2"> 2 Persons</label>
    <label><input type="radio" name="capacity" value="4"> 4 Persons</label>
    <label><input type="radio" name="capacity" value="6"> 6 Persons</label><br><br>

    <button type="submit">Add Room</button>
</form>

<br><br>

<table border="1" id="roomTable">
    <tr>
        <th>No. of Rooms</th>
        <th>Type</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Available From</th>
        <th>Available To</th>
        <th>Remove</th>
    </tr>
</table>

<p><a href="dashboard.html">Back</a></p>


</center>
</body>
</html>
