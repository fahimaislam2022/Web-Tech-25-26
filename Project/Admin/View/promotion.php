<!DOCTYPE html>
<html>
<head>
    <title>Manage Promotions</title>
</head>
<body>
<center>

<h2>Hotel Promotions</h2>

<form id="promoForm">

    Promotion Title: <input type="text" id="title"><br><br>

    Discount (%): <input type="number" id="discount"><br><br>

    Valid Until: <input type="date" id="valid"><br><br>

    <button type="submit">Add Promotion</button>
</form>

<br><br>

<table border="1" id="promoTable">
    <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Discount</th>
        <th>Valid Date</th>
        <th>Delete</th>
    </tr>
</table>

<p><a href="dashboard.html">Back</a></p>


</center>
</body>
</html>
