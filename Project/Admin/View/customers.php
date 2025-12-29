<!DOCTYPE html>
<html>
<head>
    <title>Customer Profile Management</title>
</head>
<body>
<center>

<h2>Manage Customer Profiles</h2>


<form id="customerForm" method="POST">
    <label>Name</label><br>
    <input type="text" id="name"><br><br>
    <label>Email</label><br>
    <input type="email" id="email"><br><br>
    <label>Phone</label><br>
    <input type="text" id="phone"><br><br>
    <button type="submit">Add Customer</button>
</form>

<br><br>


<table border="1" thickness="1" id="custTable">
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</table>

<p><a href="dashboard.html">Back</a></p>



</center>
</body>
</html>
