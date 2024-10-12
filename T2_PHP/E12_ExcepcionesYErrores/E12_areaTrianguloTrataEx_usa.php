<?php
        require_once("./E12_areaTrianguloTrataEx.php");
        $E12_areaTrianguloTrataEx = new E12_areaTrianguloTrataEx();
    
        echo "Caso 1: base y altura positivos o cero <br>";
        echo "<b>Área del TRIÁNGULO de base 5 y altura 4 = " . $E12_areaTrianguloTrataEx->areaTriangulo(5,4) . "</b><br>";
        echo "Caso 2: Alguna negativa <br>";
        try{
            echo $E12_areaTrianguloTrataEx->areaTriangulo(5,-5);
        }catch(Exception $e){
            echo "<b>Excepción capturada: <br> " . $e->getMessage();
        }
?>