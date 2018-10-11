<?php
  // se carga archivo en una matriz y se da formato
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
  <style>
    table, th, td{
      border-collapse: collapse;
      border: 1px solid black;
      padding: 6px;
    }
    th{
      background: #ccccff;
    }
  </style>
</head>
<body>
	<h1>Bob's Auto Parts</h1>
	<h2>Customer Orders</h2>
	<?php

  $orders = file('$document_root/../data/orders/order.txt');
  // file carga el archivo entero en una matriz, c/linea de archivo se convierte
  // en un elemento de la matriz

  $number_of_orders = count($orders);
  // count cuenta el numero de elementos de una matriz en este caso el numero de lineas

  if($number_of_orders == 0){
    echo "<p><strong>No orders pending.<br />
		Please try again later.</strong></p>";
  }

  echo "<table>\n";
  echo "<tr>
      <th>Order Date</th>
      <th>Tires</th>
      <th>Oil</th>
      <th>Spark Plugs</th>
      <th>Total</th>
      <th>Address</th>
    </tr>";

  for($i = 0; $i < $number_of_orders; $i++){
    // explode para dividir todo el renglon en cadenas
    $line = explode("\t", $orders[$i]);
		// cuando se almacenaron los datos se utilizo \t para delimitar los datos
		// es decir, este codigo divide las cadenas pasada en partes. cada caracter
		// de tabulacion separa los elementos

    // intval extrae los numeros de las cadenas, intval convierte una cadena en un entero
		// ignorara todo aquello que no se pueda convertir en un entero
    $line[1] = intval($line[1]); // corresponde a Tires
    $line[2] = intval($line[2]); // corresponde a Oil
    $line[3] = intval($line[3]); // corresponde a Spark plugs

    // mostrar c/orden
    echo "<tr>
        <td>".$line[0]."</td>
        <td style=\"text-align: right;\">".$line[1]."</td>
        <td style=\"text-align: right;\">".$line[2]."</td>
        <td style=\"text-align: right;\">".$line[3]."</td>
        <td style=\"text-align: right;\">".$line[4]."</td>
        <td>".$line[5]."</td>
      </tr>";
  }
  echo "</table>";
	 ?>
</body>
</html>
