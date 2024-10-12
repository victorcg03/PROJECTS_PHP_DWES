<?php
    require_once("./E12_areaTriExMult.php");
    $E12_areaTriExMult = new E12_areaTriExMult();

    echo "Caso 1: base y altura positivos o cero <br>";
    echo "<b>Área del TRIÁNGULO de base 5 y altura 4 = " . $E12_areaTriExMult->areaTriangulo(5,4) . "</b><br>";

    try{
        echo "Caso 2: Base negativa <br>";
        echo $E12_areaTriExMult->areaTriangulo(5,-5);
    }catch(Exception $e){
        echo "<b>Excepción capturada: <br> " . $e->getMessage() . "</b><br>";
    }
    try{
        echo "Caso 3: Altura negativa <br>";
        echo $E12_areaTriExMult->areaTriangulo(-5,4);
    }catch(Exception $e){
        echo "<b>Excepción capturada: <br> " . $e->getMessage() . "</b><br>";
    }
    try{
        echo "Caso 2: Base o altura superan límite superior <br>";
        echo $E12_areaTriExMult->areaTriangulo(5005,15);
    }catch(Exception $e){
        echo "<b>Excepción capturada: <br> " . $e->getMessage() . "</b><br>";
    }
?>