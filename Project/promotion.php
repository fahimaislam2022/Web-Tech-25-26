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

<script>
let promoCounter = 1;

document.getElementById("promoForm").addEventListener("submit", function(e){
    e.preventDefault();

    var t = document.getElementById("title").value.trim();
    var d = document.getElementById("discount").value;
    var v = document.getElementById("valid").value;

    if(t === "" || d === "" || v === ""){
        alert("All fields required.");
        return;
    }

    var tb = document.getElementById("promoTable");
    var row = tb.insertRow(-1);

    row.innerHTML =
        "<td>" + promoCounter + "</td>" +
        "<td>" + t + "</td>" +
        "<td>" + d + "%</td>" +
        "<td>" + v + "</td>" +
        "<td><button onclick='del(this)'>Delete</button></td>";

    promoCounter++;
    document.getElementById("promoForm").reset();
});

function del(btn){
    btn.parentNode.parentNode.remove();
}
</script>

</center>
</body>
</html>
