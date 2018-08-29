<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bob's Autoparts - Freight Costs</title>
</head>
<body>
	<table style="border: 0px; padding: 3px">
		<tr>
			<td style="background: #cccccc; text-align: center;">Distance</td>
			<td style="background: #cccccc; text-align: center;">Cost</td>
		</tr>
<!-- Para no hacer esto  manualmente
		<tr>
			<td style="text-align: right;">50</td>
			<td style="text-align: right;">5</td>
		</tr>
		<tr>
			<td style="text-align: right;">100</td>
			<td style="text-align: right;">10</td>
		</tr>
		<tr>
			<td style="text-align: right;">150</td>
			<td style="text-align: right;">15</td>
		</tr>
		<tr>
			<td style="text-align: right;">200</td>
			<td style="text-align: right;">20</td>
		</tr>
		<tr>
			<td style="text-align: right;">250</td>
			<td style="text-align: right;">25</td>
		</tr>
	se puede utilizar un bucle en php para automatizarlo -->
		<?php 
		$distance = 50;
		while ($distance <= 250){
			echo "<tr>
				<td style=\"text-align: right;\">".$distance."</td>
				<td style?\"text-align: right;\">".($distance / 10)."</td>
				</tr>\n";
				$distance += 50;
		}
		?>
	</table>
</body>
</html>