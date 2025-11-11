
<form method="GET" target="_self" autocomplete="off"> 

	<fieldset>
		<legend>Form 1</legend>
		
		<label for="fname" id="fnameLabel">First Name: </label>
	<input type="text" name="fname" id="fname">

	<br> <br>

	<label for="lname">Last Name: </label>
	<input type="text" name="lname">

	<br> <br>

	<label for="pass">Password: </label>
	<input type="password" name="pass">

	<br> <br>

	<label for="email">Email: </label>
	<input type="email" name="email">

	<br> <br>
	<label for="gender">Male: </label>
	<input type="radio" name="gender" value="male">

	<label for="gender">Female: </label>
	<input type="radio" name="gender" value="female">


	<br><br>
	<select>
		<option>Web tech</option>
		<option>C#</option>
		<option>Java</option>
	</select>

	<br> <br>

	<label>Text: </label>
	<textarea></textarea>

<br> <br>
	<label for="file">Select a file: </label>
	<input type="file" name="file">

	<br> <br>
	<input type="submit" name="submit">

	</fieldset>

</form>
