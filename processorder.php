<?php

	define('APP_NAME', "Formulario");
	define('HTTP_SERVER', 'http://localhost/');
	define('SITE_NAME', 'http://localhost/');
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].APP_NAME);

	$tireQty = $_POST['tireQty'];
	$oilQty = (int) $_POST['oilQty'];
	$sparkQty = (int) $_POST['sparkQty'];
	$address = preg_replace('/\t|\R/', ' ', $_POST['address']);
	$document_root = $_SERVER['DOCUMENT_ROOT'];
	$date = date('H:i, jS F Y');

?>

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
			echo '<p>Your order is as follows: </p>';

			$totalQty = 0;
			$totalAmount = 0.00;

			define('TIREPRICE', 100);
			define('OILPRICE', 10);
			define('SPARKPRICE', 4);

			$totalQty = $tireQty + $oilQty + $sparkQty;
			echo "<p>Items ordered: ".$totalQty."<br />";

			if($totalQty == 0){
				echo "You did nor order anything on the previous page! <br />";
			}
			else{
				if($tireQty > 0){
					echo htmlspecialchars($tireQty).' tires<br />';
				}
				if($oilQty > 0){
					echo htmlspecialchars($oilQty).' bottles of oil<br />';
				}
				if($sparkQty > 0){
					echo htmlspecialchars($sparkQty).' spark plugs<br />';
				}
			}

			$totalAmount = $tireQty * TIREPRICE
						+ $oilQty * OILPRICE
						+ $sparkQty * SPARKPRICE;

			echo "Subtotal: $".number_format($totalAmount, 2)."<br />";

			$taxRate = 0.10;
			$totalAmount *= (1 + $taxRate);
			echo "Total including tax: $".number_format($totalAmount, 2)."</p>";

			echo "<p>Address to ship to is ".htmlspecialchars($address)."</p>";

			$outputstring = $date."\t".$tireQty." tires \t".$oilQty." oil\t"
						.$sparkQty." spark plugs\t\$".$totalAmount
						."\t".$address."\n";

			// abrir archivo para adjuntar
			@$fp = fopen('$document_root/../data/orders/order.txt', 'ab');
			if(!$fp){
				echo "<p><strong> Your order could not be processed at this time.
				Please try again later.</strong></p>";
				exit;
			}

			flock($fp, LOCK_EX);
			fwrite($fp, $outputstring, strlen($outputstring));
			flock($fp, LOCK_UN);
			fclose($fp);

			echo "<p>Order written.</p>";
			?>
	</body>
</html>
