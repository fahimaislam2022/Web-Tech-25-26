<!DOCTYPE html>
<html>
<head>
    <title>University Admission Form</title>
</head>

<body>

<form>

<fieldset>
    <legend>Personal Info</legend>

    Name: <input type="text" required maxlength="50"><br>
    Email: <input type="email" required><br>
    Gender:
    <input type="radio" name="gender">Male
    <input type="radio" name="gender">Female<br>
    Date of Birth: <input type="date" required><br>
</fieldset>

<fieldset>
    <legend>Academic Info</legend>

    Previous School: <input type="text" required><br>
    GPA: <input type="text" required maxlength="5"><br>

    Preferred Department:
    <select required>
        <option value="">Select</option>
        <option>CSE</option>
        <option>BBA</option>
        <option>EEE</option>
    </select><br>

    Interests:
    <input type="checkbox">Science
    <input type="checkbox">Sports
    <input type="checkbox">Music<br>

    Upload Documents: <input type="file" required><br>
</fieldset>

<button type="submit">Submit</button>
<button type="reset">Reset</button>

</form>

</body>
</html>
