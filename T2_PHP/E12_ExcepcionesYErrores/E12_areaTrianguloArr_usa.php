<?php
    require_once("./E12_areaTrianguloArr.php");
    $E12_areaTrianguloArr = new E12_areaTrianguloArr();

    echo "Caso 1: Todas las bases y alturas positivos o cero <br>";
    $bases1 = [1,6,4];
    $alturas1 = [2,6,4];
    echo "<b>ÁREA DEL TRIÁNGULO</b><br><br>";
    echo $E12_areaTrianguloArr->areaTriangulo($bases1, $alturas1);

    echo "Caso 2: Alguna negativa <br>";
    $bases1 = [-1,6,4];
    $alturas1 = [2,-6,4];
    echo "<b>ÁREA DEL TRIÁNGULO</b><br><br>";
    echo $E12_areaTrianguloArr->areaTriangulo($bases1, $alturas1);
?>