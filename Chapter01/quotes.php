<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Quotation Marks</title>
</head>
<body>
<?php # Script 1.10 - quotes.php

// Set the variables:
$quantity = 30; // Buying 30 widgets.
$price = 119.95;
$taxrate = .05; // 5% sales tax.

// Calculate the total.
$total = $quantity * $price;
$total = $total + ($total * $taxrate); // Calculate and add the tax.

// Format the total:
$total = number_format ($total, 2);

// Print the results using double quotation marks:
echo "<h3>Using double quotation marks:</h3>";
echo "<p>You are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n";

// Print the results using single quotation marks:
echo '<h3>Using single quotation marks:</h3>';
echo '<p>You are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n';

?>
</body>
</html>