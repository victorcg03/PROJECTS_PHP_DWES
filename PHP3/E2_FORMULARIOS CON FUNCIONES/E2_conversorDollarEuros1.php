<?php
  echo "Usted indicó la siguiente información: <br>";
  echo 'Cantidad = '. $_GET['euros'] . " Euros<br>";
  echo "Resultado de la conversión = " . $_GET['euros'] * 1.09 . " US Dollars";
?>