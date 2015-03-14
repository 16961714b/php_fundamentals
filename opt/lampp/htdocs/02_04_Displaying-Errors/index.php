<html>
<head>
	<title>My Website</title>
</head>
<body>
	<h1>My Website</h1>
	<?php

	$name = "Jeffrey Smith";

	echo "Hello $name. How are you doing today $name?";

	/* To display errors, instead of just an all-encompassing server error, you
	need to change the php.ini file.
	Using LAMPP on Linux systems you can find it in 
	/opt/lampp/etc/php.ini
	
	Look for "display_errors"
	
	; This directive controls whether or not and where PHP will output errors,
	; notices and warnings too. Error output is very useful during development, but
	; it could be very dangerous in production environments. Depending on the code
	; which is triggering the error, sensitive information could potentially leak
	; out of your application such as database usernames and passwords or worse.
	; It's recommended that errors be logged on production servers rather than
	; having the errors sent to STDOUT.
	; Possible Values:
	;   Off = Do not display any errors 
	;   stderr = Display errors to STDERR (affects only CGI/CLI binaries!)   
	;   On or stdout = Display errors to STDOUT
	; Default Value: On
	; Development Value: On
	; Production Value: Off
	; http://php.net/display-errors
	display_errors=On
	
	*/

	?>
</body>
</html>