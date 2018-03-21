<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update pull from git to server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="get" action="index.php">
<input type="submit" class="buttonOn" value="update" name="update">
</form>
 <?php

 if(isset($_GET['update'])){
         $gpio_on = shell_exec("/home/hans/./update.sh");
         echo "<p><br>server update</p>";
 }
?>

</body>
</html>
