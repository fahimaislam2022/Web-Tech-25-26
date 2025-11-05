<!DOCTYPE html>
 
<head>
        <title>
            WT_0
</title>
</head>
<style>
    body {
        background-color:LavenderBlush;
 
    }
    div{
        width:800px;
        height:950px;
        padding:10px;
        border:4px solid;
        margin:0;
        background-color:white;////
    }
   
</style>
 
<body>
 <center>
    <div>
<table>
 <h1 style ="color:red;font-size:30px">Student Registration Information</h1>
 <hr color = "Red";border =8px soild>

<tr>
<td>Enter Your Frist Name:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
 
<tr>
<td>Enter Your Last Name:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
 
 
<tr>
<td>Enter Your Student ID:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
 
 
<tr>
<td>Program/Major:</td>
</tr>

<tr>
        <td><select name="sub" id="sub">
            <option value="CSE">BSc in CSE</option>
                        <option value="EEE">BSc in EEE</option>
                                    <option value="BBa">BSc in BBA</option>
                                                <option value="English">BSc in ENGLISH</option>
        </select></td>
    </tr>


<tr>
<td>Department:</td>
</tr>
<tr>
        <td><select name="sub" id="sub">
            <option value="FST">FST</option>
                        <option value="FBA">FBA</option>
                                    <option value="FA">FA</option>
                                                <option value="FP">FP</option>
        </select></td>
    </tr>


<tr>
<td>Phone:</td>
</tr>
<tr>
<td><input type="number"></td>
</tr>
<tr>

<tr>
<td>University Email:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
<tr>

<tr>
<td>Create Password (8 Characters)</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
<tr>

<tr>
<td>Confrim Password </td>
</tr>
<tr>
<td><input type="text"></td>
</tr>
<tr>

<tr>
<td>Select Semester</td>
</tr>

<td><input type="radio" name="PC">Summer 2024
    <input type="radio" name="PC">Fall 2024
    <input type="radio" name="PC">Spring 2025
    <input type="radio" name="PC">Other/Special Term
</td>

</table>

<tr>
<td>Requested Credit Load(Max 15)</td>
</tr>
<tr>
    <br>
<td><input type="number" placeholder="e.g, 9 or 12"></td>
</tr>

<br>
<tr> 
<input type="checkbox">I required academic advising before final registration 
    </tr> 
    <h1 style ="color:red;font-size:30px">Course Selection</h1>
 <hr color = "Red";border =4px soild>
 <td>
    <input type="checkbox">Math1201 (Calculus l)
    <input type="checkbox">CS 2105(Data Strutures)
    <input type="checkbox">ECON 1001 (Microeconomics)
    <br>
    <input type="checkbox">PHY 1102(Physic Lab)
</td>
<br><br>
<tr>
<td>Comments/ Sepcial Requests
</tr>
<br>
<tr>
<td><input type="text">
<br><br>
 <center><input type="submit"></center>
<br>
   <center> <input type="reset"></center>
    </td>
</tr>
</center>
</div>
</body>
</html>
 