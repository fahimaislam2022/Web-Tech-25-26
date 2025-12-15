<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>

<body>
<center>
<h1>PHP From Validation </h1>
<hr>
<?php

$name = "";
$email = "";
$dateofbirth = "";
$gender = "";
$blood = "";
$degree = [];
$nameErr = "";
$emailErr = "";
$dateofbirthErr = "";
$genderErr = "";
$degreeErr = ""; 
$bloodErr = "";

function test_input($data)
{
    $data = trim($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[A-Za-z][A-Za-z.\- ]*$/", $name)) {
            $nameErr = "Invalid name format Must start with a letter & Can contain a-z, A-Z, period, dash only";
        }
        elseif (strlen($name) < 5) {
            $nameErr = "At least two words required";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"])) {
        $dateofbirthErr = "Date of birth is required";
    } else {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];

        if ($day < 1 || $day > 31) {
            $dateofbirthErr = "Invalid day(dd: 1-31) ";
        }
        elseif ($month < 1 || $month > 12) {
            $dateofbirthErr = "Invalid month(mm: 1-12) ";
        }
        elseif ($year < 1953 || $year > 1998) {
            $dateofbirthErr = "Invalid year(yyyy: 1953-1998) ";
        } else {
            $dateofbirth = $day . "-" . $month . "-" . $year;
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Select at least one";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["degree"]) || count($_POST["degree"]) < 2) {
        $degreeErr = "Select at least 2 degrees";
    } else {
        $degree = $_POST["degree"];
    }

    if (empty($_POST["blood"])) {
        $bloodErr = "Blood group required";
    } else {
        $blood = $_POST["blood"];
    }
}
?>


<form method="post" action="">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    <?php echo $nameErr; ?><br>
    

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
    <?php echo $emailErr; ?><br>
    

    <label>Date of Birth:</label><br>
    <input type="text" name="day" size="2" placeholder="dd">
    <input type="text" name="month" size="2" placeholder="mm">
    <input type="text" name="year" size="4" placeholder="yyyy"><br><br>
    <?php echo $dateofbirthErr; ?><br>
    

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other<br><br>
    <?php echo $genderErr; ?><br>
    

    <label>Degree:</label><br>
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="checkbox" name="degree[]" value="MSc"> MSc<br><br>
    <?php echo $degreeErr; ?><br>
    

    <label>Blood Group:</label><br>
    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><br><br>
    <?php echo $bloodErr; ?><br>
    
<hr>
    <input type="submit" value="Submit">

</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($nameErr) && empty($emailErr) && empty($dateofbirthErr) &&
    empty($genderErr) && empty($degreeErr) && empty($bloodErr))
{
    echo "<h1>Submitted Successfully</h1>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Date of Birth: $dateofbirth <br>";
    echo "Gender: $gender <br>";
    echo "Degree: ";
 for($i = 0; $i < count($degree); $i++){
    echo $degree[$i] . " & ";
 }
echo "<br>";
    echo "Blood Group: $blood <br>";
}
?>
<hr>
</center>
</body>
</html>
