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

<script>
let counter = 1;  
let editRow = null; 

document.getElementById("custForm").addEventListener("submit", function(e){
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    if(name === "" || email === "" || phone === ""){
        alert("All fields are required.");
        return;
    }

    if(editRow){
        editRow.cells[1].innerText = name;
        editRow.cells[2].innerText = email;
        editRow.cells[3].innerText = phone;

        editRow = null;
        document.getElementById("custForm").reset();
        return;
    }

    
    const table = document.getElementById("custTable");
    const row = table.insertRow(-1);

    row.innerHTML = `
        <td>${counter}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td>${phone}</td>
        <td><button onclick="editCustomer(this)">Edit</button></td>
        <td><button onclick="deleteCustomer(this)">Delete</button></td>
    `;

    counter++;
    document.getElementById("custForm").reset();
});


function editCustomer(btn){
    const row = btn.parentNode.parentNode;
    editRow = row;

    document.getElementById("name").value = row.cells[1].innerText;
    document.getElementById("email").value = row.cells[2].innerText;
    document.getElementById("phone").value = row.cells[3].innerText;
}


function deleteCustomer(btn){
    btn.parentNode.parentNode.remove();
}
</script>

</center>
</body>
</html>
