<?php
    require_once("./E12_areaTriangulo.php");
    $E12_areaTriangulo = new E12_areaTriangulo();

    echo "Caso 1: base y altura positivos o cero <br>";
    echo "<b>Área del TRIÁNGULO de base 5 y altura 4 = " . $E12_areaTriangulo->areaTriangulo(5,4) . "</b><br>";
    echo "Caso 2: Alguna negativa ";
    echo $E12_areaTriangulo->areaTriangulo(5,-5)
?>