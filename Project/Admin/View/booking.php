<!DOCTYPE html>
<html>
<head>
    <title>Booking & Billing</title>
</head>
<body>
<center>

<h2>Booking & Billing Information</h2>

<form id="bookingForm" method="POST" >

    <label>Customer Phone Number</label><br>
    <input type="tel" id="customerNumber"><br><br>

    <label>Room Type</label><br>
    <select id="roomType">
        <option value="">-- Select Room --</option>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Deluxe">Deluxe</option>
        <option value="Suite">Suite</option>
    </select>
    <br><br>
    <label>Booking Date</label><br>
    <input type="date" id="bdate"><br><br>
    <label>Price Per Night</label><br>
    <input type="number" id="price"><br><br>

   <label>Nights</label><br>
   <input type="number" id="nights"><br><br>

    <button type="submit">Add Booking</button>
</form>

<br><br>

<table border="1" id="bookTable">
    <tr>
        <th>No.</th>
        <th>Customer Phone Number</th>
        <th>Type</th>
        <th>Date</th>
        <th>Price</th>
        <th>Nights</th>
        <th>Total Bill</th>
        <th>Delete</th>
    </tr>
</table>

<p><a href="dashboard.html">Back</a></p>


</center>
</body>
</html>
