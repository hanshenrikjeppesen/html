<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Feedback nr. 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="topbox">
    <h1>Form data returned from handle_form2</h1>
</div>
    <?php # Script 2.3 handle_form2.php

// defining variables
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$age = $_REQUEST['age'];

// Create the $gender variable;

if (isset($_REQUEST['gender'])){
    $gender = $_REQUEST['gender'];
} else {
    $gender = NULL;
}

// printing the information submitted information from the html form.

echo "<h2>Hallo</br>$name</h2><p>thank you for the following comment</p>
<pre>$comments</pre>
<p>We wil get back to you on the following email: <em>$email</em></p>"; 

// print a message based upon the gender value;

if ($gender =='M') {
    echo '<h1><stong>Have a nice day, Sir!</strong></h1>';
} elseif ($gender == 'F') {
    echo '<h1><stong>Have a nice day, Madam!</strong></h1>';
} else {
    // No gender is selected
    echo '<h1><stong>You forgot to enter your data</strong></h1>';
}

?>
</body>
</html>