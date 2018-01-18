<?php include("top.html")?>
<!--
	Shahria Kazi, CSE 190M, Section MK, TA: Tyler Rigsby, April 26th, 2012
	This page retrieves the users information to find suitable
	matches for them based on few constaints.
-->
	<div>
		<h1>Matches for <?= $_GET["name"] ?></h1>
		<?php
		# finds the users information through looping over the file
		foreach(file("singles.txt") as $singles) {
			list($name, $gender, $age, $personalitytype, $os, $min, $max) = explode(",", $singles);
			if($name == $_GET["name"]) {
				# array containing user's information
				$user = array ($name, $gender, $age, $personalitytype, $os, $min, $max);
				break;
			}
		}
		# finding matches for the user through looping over the file
		foreach(file("singles.txt") as $singles) {
			list($name, $gender, $age, $personalitytype, $os, $min, $max) = explode(",", $singles);
			$other_user = array($name, $gender, $age, $personalitytype, $os, $min, $max);
			# checking for whether the singles meet the users criteria to be a match
			if(issoulmate($user, $other_user)) {
			?>
				<div class="match">
					<p>
						<img 
							src="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/user.jpg"
							alt="icon" />
						<?= $name ?>
					</p>
					<ul>
						<li><strong>gender:</strong> <?= $gender; ?></li>
						<li><strong>age:</strong> <?= $age; ?> </li>
						<li><strong>type:</strong> <?= $personalitytype; ?> </li>
						<li><strong>OS:</strong> <?= $os; ?></li>
					</ul>
				</div>
			<?php } ?>
		<?php } ?>	
	</div>
	
	<?php
	# This function takes two strings as parameters and checks whether there is
	# any letter in common between the two and returns true if there is
	function contains($s1, $s2) {
		for($i = 0; $i < strlen($s1); $i++) {
			for($j = 0; $j < strlen($s2); $j++) {
				if($s1[$i] == $s2[$j]) {
					return true;
				}
			}
		}
	}
	# this function takes two users as parameters and checks whether they
	# are compatible based on certain constraints and returns true if they are
	function issoulmate($user, $other_user) {
		return (strcmp($other_user[1], $user[1]) != 0) and ($other_user[4] == $user[4]) and
			$user[2] >= $other_user[5] and $user[2] <= $other_user[6] and
			$other_user[2] >= $user[5] and $other_user[2] <= $user[6] and
			contains($user[3], $other_user[3]);
	}
	?>
<?php include("bottom.html")?>