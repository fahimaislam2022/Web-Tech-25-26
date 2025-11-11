<!DOCTYPE html>
<html>
<head>
<title>Student Registration Form</title>
<style>
    body {
        background-color: LavenderBlush;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 1000px;
        padding: 10px;
        border: 4px solid;
        background-color: white;
        display: flex;
    }
    .left {
        width: 45%;
    }
    .left img {
        width: 100%;
        height: auto;
    }
    .right {
        width: 55%;
        padding-left: 20px;
    }
    table {
        width: 100%;
    }
    input, select {
        width: 90%;
        padding: 6px;
        margin-top: 5px;
    }
    h2 {
        color: red;
        font-size: 28px;
    }
</style>
</head>
<body>
<center>
<div class="container">

    <div class="left">
        <img src="Group-College-Student-Free-PNG-Image.png">
    </div>

    <div class="right">
        <h2>STUDENT REGISTRATION FORM</h2>
        <hr color="Red" style="border:2px solid red;">

        <table>
            <tr><td>Name :</td><td><input type="text"></td></tr>
            <tr><td>Father Name :</td><td><input type="text"></td></tr>
            <tr><td>Address :</td><td><input type="text"></td></tr>

            <tr><td>Gender :</td>
            <td><input type="radio" name="PC"> Male
                <input type="radio" name="PC"> Female 
            </td>
            </tr>

            <tr><td>State :</td><td><input type="text"></td></tr>
            <tr><td>City :</td><td><input type="text"></td></tr>
            <tr><td>DOB :</td><td><input type="date"></td></tr>
            <tr><td>Pincode :</td><td><input type="number"></td></tr>

            <tr><td>Course :</td>
            <td>
                <select>
                    <option>Select Course</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>BBA</option>
                </select>
            </td></tr>

            <tr><td>Email ID :</td><td><input type="email"></td></tr>
        </table>

        <br>

        <center>
            <input type="reset"> 
            <input type="submit">
        </center>

    </div>
</div>
</center>
</body>
</html>
