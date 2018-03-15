<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Script 1_10 quations and math</title>
</head>
<body>
<div>
<h1>Script 1.10 quation and math</h1>
</div>
<?php
// set the variables:
$quantity = 30;
$price = 119.95;
$taxrate = 0.25;

//calculating the total
$total = $quantity + $price;
$total = $total + ($total * $taxrate);

//format the number
$total = number_format ($total, 2);

//print the resukt using double quoation
echo "<h3>Using double quoation marks:</h3>";
echo "<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong> each- With tax, the total comes to <strong> \$$total</strong></p>\n";


?>
<h2>Next Script</h2>	
    <h2><a href="script1_10.php" target="_blank">Script 1.10</a></h2>
    <h2><a href="index.php" target="_blank">Frontpage</a></h2>
</body>
</html>