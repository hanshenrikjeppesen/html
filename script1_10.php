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

//Text explaining the reason for this script
echo "<h3>Why is it importent to know about Quotation marks?</h3>";
echo "<p>In<strong>PHP</strong>, values enclosed within single quotation marks will be treated literally, 
whereas those within double quotation marks will be interpreted</p>"
echo "<p>Meaning placing variables and special characters (escape Sequences) within double quotes will result
in their represented values printed, not their literal values"
?>

<table style="width:30%">
  <tr>
    <th>Code</th>
    <th>Meaning</th> 
  </tr>
  <tr>
    <td>\"</td>
    <td>Double quotes</td>
  </tr>
  <tr>
    <td>\'</td>
    <td>Single quotes</td>
  </tr>
  <tr>
    <td>\\</td>
    <td>Backslash</td>
  </tr>
  <tr>
    <td>\n</td>
    <td>Newline</td>
  </tr>
  <tr>
    <td>\r</td>
    <td>Carriage return</td>
  </tr>
  <tr>
    <td>\t</td>
    <td>Tab</td>
  </tr>
  <tr>
    <td>\$</td>
    <td>Dollar sign</td>
  </tr>
</table>

<?php

//print the resukt using double quoation
echo "<h3>Using double quotation marks:</h3>";
echo "<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong> each- With tax, the total comes to <strong> \$$total</strong></p>\n";


?>
<h2>Next Script</h2>	
    <h2><a href="script1_10.php" target="_blank">Script 1.10</a></h2>
    <h2><a href="index.php" target="_blank">Frontpage</a></h2>
</body>
</html>