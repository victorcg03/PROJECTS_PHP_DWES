<?php
$fecha = shell_exec("date");
echo "<b>Versión con shell_exec</b><br>";
echo "comando 1:<br>";
echo "FECHA:<br>";
echo $fecha . "<br><br>";

$cuentaPalabras = shell_exec("ls | wc -w");
echo "<br>comando 2:<br>";
echo "CUENTA PALABRAS DE LISTADO:<br>";
echo $cuentaPalabras;
?>
