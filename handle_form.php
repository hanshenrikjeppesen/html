<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php # Script 2.2 handle_form.php

// defining variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];

// printing the information submitted information from the html form.

echo "<h2>Hallo $name</h2><p>thank you for the following comment</p>
<pre>$comments</pre>
<p>We wil get back to you on the following email: <em>$email</em></p>"; 


?>
</body>
</html>