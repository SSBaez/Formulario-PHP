<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
<?php

	// Muestra la fecha 
	echo "<p>Order processed at ".date("H:i, jS F Y")."</p>";

	$totalQty = 0;

	$tireQty = $_POST["tireQty"];
	$oilQty = $_POST['oilQty'];
	$sparkQty = $_POST['sparkQty'];
	$find = $_POST['find']

	$totalQty = $tireQty + $oilQty + $sparkQty;

	echo '<p>Your order is as follows: </p>';
	$tireQty = htmlspecialchars($tireQty);
	echo "$tireQty tires<br/>";
	
	echo htmlspecialchars($oilQty).' bottles of oil<br/>';
	echo htmlspecialchars($sparkQty)." spark plugs<br/>";

	echo "<p>Items ordered: ".$totalQty."<br />";
	$totalAmount = 0.00;

	define('TIREPRICE', 100);
	define('OILPRICE', 10);
	define('SPARKPRICE', 4);

	$totalAmount = $tireQty * TIREPRICE 
				+ $oilQty * OILPRICE 
				+ $sparkQty * SPARKPRICE;

	echo "Subtotal: $".number_format($totalAmount, 2)."<br />";

	$taxRate = 0.10; // el impuesto de vtas local es del 10%
	$totalAmount *= (1 + $taxRate);
	echo "Total incluiding tax: $".number_format($totalAmount, 2)."</p>";

	echo 'isset ($tireQty): '.isset ($tireQty).'<br />';
	echo 'isset ($nothere): '.isset ($nothere).'<br />';
	echo 'empty ($tireQty): '.empty ($tireQty).'<br />';
	echo 'empty ($nothere): '.empty ($nothere).'<br />';

	if(empty($tireQty)){
		echo "<p> esta huevada es true";
	}
	else if(!empty($tireQty))
		echo "<p> esto es false";

?>
</body>
</html>