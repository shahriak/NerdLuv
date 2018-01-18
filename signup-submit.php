<?php include("top.html")?>
<!--
	Shahria Kazi, CSE 190M, Section MK, TA: Tyler Rigsby, April 27th, 2012
	This webpage submits its data's as a post request to
	the server, and the server saves the data. This page
	also stores the user's information in a specific format
	to a file along with other contents already existing in the file.
-->
	<?php
	# Saving all the users data in variables
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$personalitytype = $_POST["personalitytype"];
	$favoriteos = $_POST["favoriteos"];
	$min = $_POST["min"];
	$max = $_POST["max"];
	
	$contents = "$name,$gender,$age,$personalitytype,$favoriteos,$min,$max\n";
	# adding the long string containing users information to the end of the file
	file_put_contents("singles.txt", $contents, FILE_APPEND);
	?>
	
	<h1>Thank you!</h1>
	<p>Welcome to NerdLuv, <?= $name ?>!</p>
	<p>Now <a href="matches.php">log in to see your matches!</a></p>

<?php include("bottom.html") ?>
