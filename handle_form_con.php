<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Script 2.4 handle_form_con</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <?php
    // validate the name;

    if (!empty($_REQUEST['name'])){
        $name = $_REQUEST['name'];
    } else {
        $name = NULL;
        echo '<p class ="error">You did not enter your name</p>';
    }

    // validate the email;

    if

</body>
</html>