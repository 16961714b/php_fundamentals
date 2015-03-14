<html>
<head>
	<title>My Website</title>
</head>
<body>
	<h1>My Website</h1>
	<?php

	$name = "Jeffrey Way";

	echo "Hello $name";
	//"" double quotes will show the stored value of the $name variable
	echo 'Hello $name';
	//'' single quotes will show $name as a string
	echo 'Hello ' . $name;
	//'' or use single quotes and concatenation (= add to)
	echo "Hello " . $name;
	//"" or use double quotes and concatenation
	?>
	<!--php does not recognize white space, so we need to add a new line.
	We do it by putting the strings between <p>paragraph tags</p>
	However, <p></p> tags are not part of php language, these are html tags.
	We can put linebreak like this:-->
	<?php
	$name = "Jeffrey Way";
	?>
	<p> <?php echo "Hello $name"; ?> </p>
	<p> <?php echo 'Hello $name'; ?> </p>
	<p> <?php echo 'Hello ' . $name; ?> </p>
	<p> <?php echo "Hello " . $name; ?> </p>
	<!--But this is not considered a well organized and clean code.
	So rather than closing up php every time, we can add paragraph within the echo statement like this:-->
	<?php
	
	$name = "Jeffrey Way";

	echo '<p>Hello ' . $name . '</p>';

	?>
</body>
</html>