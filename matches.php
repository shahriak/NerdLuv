<?php include("top.html")?>
<!--
	Shahria Kazi, CSE 190M, Section MK, TA: Tyler Rigsby, April 26th, 2012
	This webpage lets the users that are already signed
	up view their matches through inputting their name into the form field.
	It then submits the data as a get request to the server
-->
	<form action="matches-submit.php">
		<fieldset>
			<legend>Returning User:</legend>
			<div>
				<strong>Name:</strong>
				<input type="text" name="name" size="16"/>
			</div>
			<div>
				<input type="submit" value="View My Matches"/>
			</div>
		</fieldset>
	</form>
<?php include("bottom.html")?>
