<?php

	define('APP_NAME', "Formulario");
	define('HTTP_SERVER', 'http://localhost/');
	define('SITE_NAME', 'http://localhost/');
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'].APP_NAME);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bob's Auto Parts - Order Results</title>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php

	@$fp = fopen('$document_root/../data/orders/order.txt', 'rb');
	flock($fp, LOCK_SH); // bloquear archivo para lectura

	if(!$fp){
		echo "<p><strong>No orders pending.<br />
		Please try again later.</strong></p>";
		exit;
	}

	while(!feof($fp)){
		$order = fgets($fp);
		echo htmlspecialchars($order)."<br />";
	}

	flock($fp, LOCK_UN); // liberar bloqueo de lectura
	fclose($fp);

	 ?>
</body>
</html>
