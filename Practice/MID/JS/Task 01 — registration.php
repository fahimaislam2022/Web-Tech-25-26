<!DOCTYPE html>
<html>
<head>
    <title>Registration Form Validation</title>
</head>
<body>

<form id="regForm">
    Full Name: <input type="text" id="name"><br>
    <span id="nameError"></span><br>

    Email: <input type="text" id="email"><br>
    <span id="emailError"></span><br>

    Password: <input type="password" id="pass"><br>
    <span id="passError"></span><br>

    Confirm Password: <input type="password" id="cpass"><br>
    <span id="cpassError"></span><br>

    Phone Number: <input type="text" id="phone"><br>
    <span id="phoneError"></span><br>

    <button type="submit">Submit</button>
</form>

<p id="successMsg"></p>

<script>

document.getElementById("regForm").addEventListener("submit", function(e){
    e.preventDefault();

    document.getElementById("nameError").innerText="";
    document.getElementById("emailError").innerText="";
    document.getElementById("passError").innerText="";
    document.getElementById("cpassError").innerText="";
    document.getElementById("phoneError").innerText="";
    document.getElementById("successMsg").innerText="";

    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("cpass").value;
    var phone=document.getElementById("phone").value;

    var valid=true;

    if(name===""){
        document.getElementById("nameError").innerText="Required";
        valid=false;
    }

    if(email==="" || email.indexOf("@")===-1 || email.indexOf(".")===-1){
        document.getElementById("emailError").innerText="Invalid Email";
        valid=false;
    }

    if(pass.length<6){
        document.getElementById("passError").innerText="Min 6 characters";
        valid=false;
    }

    if(pass!==cpass){
        document.getElementById("cpassError").innerText="Passwords do not match";
        valid=false;
    }

    if(isNaN(phone) || phone===""){
        document.getElementById("phoneError").innerText="Digits only";
        valid=false;
    }

    if(valid===true){
        document.getElementById("successMsg").innerText="Registration Successful!";
    }

});

</script>

</body>
</html>
