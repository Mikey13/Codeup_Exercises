<!DOCTYPE html>
<html>

<head>
	<title>My First Form</title>
</head>

<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<h3> User Login </h3>

<form method="POST" action="/my_first_form.php">
	<p>
		<label for="username"></label>
		<input id="username" type="text" name="username" placeholder="enter username">
	</p>
	<p>
		<label for="password"></label>
		<input id="password" type="password" name="passowrd" placeholder="EnTeR P@sSwOrD">
		</p>
		<p>
			<button type="submit">My Lil Button. OR my big button. It depends, how long can this button be? </button>

		</p>
</form>

<h3> Compose Email </h3>

<form method="POST" action="/my_first_form.php">
	<p>
		<label for="To"></label>
		<input id="To" type="text" name="to" placeholder="To Address">
	</p>

	<p>
		<label for="From"></label>
		<input id="From" type="text" name="From" placeholder="From Address">
	</p>
	<p>
		<label for="Subject"></label>
		<input id="Subject" type="text" name"Subject" placeholder="Subject">
	</p>

		<textarea id="email_body" name="email_body"> Content Here</textarea>
	</p>
	<p>
			<button type="submit">Send</button>
	</p>
	<p>
		<input type="checkbox" id="Save Copy" name="Save Copy" value="yes" checked>
		<label for="Save Copy">Save Copy in Sent Folder</label>
	</p>
</form>

<form method="POST" action="/my_first_form.php">

<h3> Multiple Choice Test </h3>
	<p>Which Country Do I NOT Have Relatives in?</p>
	<label>
	    <input type="radio" name="q1" value="Germany">
	    Germany
	</label>
	<label>
	    <input type="radio" name="q1" value="Holland">
	    Holland
	</label>
	<label>
	    <input type="radio" name="q1" value="Mexico">
	    Mexico
	</label>

	<p>What States Have I traveled to?</p>
		<label><input type="checkbox" id="state1" name="os[]" value="Louisiana"> Louisiana</label>
		<label><input type="checkbox" id="state2" name="os[]" value="Hawaii"> Hawaii X</label>
		<label><input type="checkbox" id="state3" name="os[]" value="Alaska"> Alaska</label>
	<p>
		<label for="Bird">What types of birds do you see in your backyard? </label>
			<select id="bird" name="bird[]" multiple>
   				 <option value="Sparrow">Sparrow</option>
   				 <option value="Ostrich">Ostrich</option>
  				 <option value="Cardinal">Cardinal</option>
  				 <option value="Blue Jay">Blue Jay</option>
  				 <option value="Crow">Crow</option>
			</select>
	</p>
		<button type="submit">Good Luck, and don't **** it up.</button>
	</p>
</form>

<form method="POST" action="/my_first_form.php">

<h3> Select Testing </h3>
	
	<label for="Hot or Not?">Are you HOT or NOT? </label>
		<select id="Hot or Not?" name="Hot or Not?">
    <option value="1">HOT</option>
    <option value="0" selected>NOT</option>
		</select>
			<button type="submit"></button>
</form>
</html>

