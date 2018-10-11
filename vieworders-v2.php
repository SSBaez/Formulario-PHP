<?php
  // se carga archivo en una matriz
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

  $orders = file('$document_root/../data/orders/order.txt');
  // file carga el archivo entero en una matri, c/linea de archivo se convierte
  // en un elemento de la matriz

  $number_of_orders = count($orders);
  // count cuenta el numero de elementos de una matriz en este caso el numero de lineas

  if($number_of_orders == 0){
    echo "<p><strong>No orders pending.<br />
		Please try again later.</strong></p>";
  }

  for($i = 0; $i < $number_of_orders; $i++){
    echo $orders[$i].'<br>';
  }


	 ?>
</body>
</html>
