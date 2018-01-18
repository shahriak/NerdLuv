<?php include("top.html")?>
<!--
	Shahria Kazi, CSE 190M, Section MK, TA: Tyler Rigsby, April 27th, 2012
	This webpage is for geeks looking for singles. it has a form which signs up the user
	and has different data fields to be filled.
-->
	<form action="signup-submit.php" method="post">
		<fieldset>
			<legend>New User Signup:</legend>
			<div>
				<strong>Name:</strong> 
				<input type="text" name="name" size="16"/>
			</div>
			<div>
				<strong>Gender:</strong>
				<label><input type="radio" name="gender" value="M" /> Male</label>
				<label>
					<input type="radio" name="gender" value="F" checked="checked" /> Female
				</label>
			</div>
			<div>
				<strong>Age:</strong> 
				<input type="text" name="age" maxlength="2" size="6"/>
			</div>
			<div>
				<strong>Personality type:</strong>
				<input type="text" name="personalitytype" maxlength="4" size="6"/>
				(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
			</div>
			<div>
				<strong>Favorite OS:</strong>
				<select name="favoriteos">
					<option selected="selected">Windows</option>
					<option>Mac OS X</option>
					<option>Linux</option>
				</select>
			</div>
			<div>
				<strong>Seeking age:</strong> 
				<input type="text" name="min" maxlength="2" size="6" placeholder="min"/> to
				<input type="text" name="max" maxlength="2" size="6" placeholder="max"/>
			</div>
			<div>
				<input type="submit" value="Sign Up" />
			</div>
		</fieldset>
	</form>
<?php include("bottom.html")?>