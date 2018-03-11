<!DOCTYPE html>
<html>
<head>
	<title>RaspberryPi - learning PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style>

    body {background-color: powderblue;}
	h1   {
		
		text-align: center;
		color: blue;
		font-family: 'Ubuntu', sans-serif;
		font-size: 250%;
	}
	p    {color: red;}

</style>
</head>
<body>
	<h1>Testing and Learning PHP</h1>
	<?php
	# Script version 1.1
	# Created Marts 11 2018
	# Created by Hans Henrik Jeppesen
	# hans@eaaa.dk

	// Creating new variables with predefined values
	$file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];

	//Print the name of the script;
	echo "<h1>You are running thr file:</h1><br/><p><strong>$file</strong></p>\n";

	//Print user's information;
	echo "<h1>You are viewing this page using:</h1><br/><p><strong>$user</strong></p>\n";

	//Print the server information to the browser;
	echo "<h1>The server is running:</h1><br/><p><strong>$server</strong></p>\n";

	/*
	echo "This is a new line made in PHP";
	echo "<h1>and another line with HTML tags</h1>";
	echo "one more 'test'...";
	*/
		?>
</body>
</html>