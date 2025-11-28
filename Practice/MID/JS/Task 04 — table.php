<!DOCTYPE html>
<html>
<head>
    <title>Editable Table</title>
</head>
<body>

Name: <input type="text" id="name"><br>
Roll: <input type="text" id="roll"><br>
Department: <input type="text" id="dept"><br>
<button onclick="addStudent()">Add Student</button>

<br><br>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Department</th>
        <th>Action</th>
    </tr>
    <tbody id="tableBody"></tbody>
</table>

<script>

function addStudent(){

    var n=document.getElementById("name").value;
    var r=document.getElementById("roll").value;
    var d=document.getElementById("dept").value;

    if(n==="" || r==="" || d===""){
        return;
    }

    var tr=document.createElement("tr");

    tr.innerHTML=
    "<td>"+n+"</td>"+
    "<td>"+r+"</td>"+
    "<td>"+d+"</td>"+
    "<td><button onclick='delRow(this)'>Delete</button></td>";

    document.getElementById("tableBody").appendChild(tr);

}

function delRow(btn){
    btn.parentNode.parentNode.remove();
}

</script>

</body>
</html>
