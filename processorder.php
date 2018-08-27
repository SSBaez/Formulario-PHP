<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Order Results</h2>
<?php
	/*
	echo "<p>Order processed at "; # Commit
	echo date("H:i, jS F Y");
	echo "</p>";
	*/

	echo "<p>Order processed at ".date("H:i, jS F Y")."</p>";
	/*
		Commit
	*/

	// Commit

	$tireQty = $_POST["tireQty"];
	$oilQty = $_POST['oilQty'];
	$sparkQty = $_POST['sparkQty'];

	echo '<p>Your order is as follows: </p>';
	$tireQty = htmlspecialchars($tireQty);
	echo "$tireQty tires<br/>";
	// echo '$tireQty tires<br/>'; así no o lo mandara literal
	echo htmlspecialchars($oilQty).' bottles of oil<br/>';
	echo htmlspecialchars($sparkQty)." spark plugs<br/>";

// Commit ?>
</body>
</html>