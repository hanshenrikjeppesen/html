<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Script1_9 Constants</title>
</head>
<body>
<div>
<h1>Script 1.9 Constants</h1>
</div>
<?php

// set todays date as a constant
define('TODAY', 'Marts 15, 2018');

//print a message using predefined constants and the TODAY constant
echo '<p>Today is ' . TODAY . '.<br>This server is running version <strong>' . PHP_VERSION . 
'</strong> of PHP on the <strong>' . PHP_OS . '</strong> operating system.</p>'
?>
<h2>Next Script</h2>	
    <h2><a href="script1_10.php" target="_blank">Script 1.10</a></h2>
    <h2><a href="index.php" target="_blank">Frontpage</a></h2>
</body>
</html>