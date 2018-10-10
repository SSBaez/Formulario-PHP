<?php

$pictures = ['brakes.png', 'headlight.png',
             'spark_plug.png', 'steering_wheel.png',
             'tire.png', 'whiper_blade.png'];

shuffle($pictures);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bob's Auto Parts</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <div class="contenedor">
      <table style="width: 100%; border: 0">
        <tr>
          <?php
            for($i = 0; $i < 3; $i++){
              echo "<td style=\"width: 33%; text-align: center\">
              <img src=\"";
              echo $pictures[$i];
              echo "\"/></td>";
            }
          ?>
        </tr>
      </table>
    </div>
  </body>
</html>
