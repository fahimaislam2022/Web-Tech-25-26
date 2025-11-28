<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Form</title>
</head>
<body>

<select id="userType" onchange="showFields()">
    <option value="">Select</option>
    <option value="Student">Student</option>
    <option value="Teacher">Teacher</option>
</select>

<br><br>

<div id="rollDiv" style="display:none;">
    Roll Number: <input type="text">
</div>

<div id="deptDiv" style="display:none;">
    Department: <input type="text">
</div>

<script>

function showFields(){
    var type=document.getElementById("userType").value;

    if(type==="Student"){
        rollDiv.style.display="block";
        deptDiv.style.display="none";
    }
    else if(type==="Teacher"){
        deptDiv.style.display="block";
        rollDiv.style.display="none";
    }
    else{
        rollDiv.style.display="none";
        deptDiv.style.display="none";
    }
}

</script>

</body>
</html>
