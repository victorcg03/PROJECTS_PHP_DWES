<?php
    function mediaValores(){
        echo "<h2>Función Media Valores</h2>";
        echo "=========================";
        $numArgs = func_num_args();
        echo "Número de argumentos utilizados: " . $numArgs . "<br>";
        $suma = 0;
        echo "Valor de los argumentos utilizados: <br>";
        echo "======================================== <br>";
        $valores = func_get_args();
        for ($i=0; $i < count($valores); $i++) { 
            echo "Parámetro " . $i . " ==> valor: " . $valores[$i] . "<br>";
            $suma += $valores[$i];
        }
        $media = $suma / $numArgs;
        echo "<h1>La media de dichos argumentos es: " . $media . "</h1>";
    }
    function mediaArray($valores){
        echo "<h2>Función MediaArray</h2>";
        echo "<b>==================</b><br>";
        echo "Número de elementos del array recibido: " . count($valores) . "<br>";
        echo "<br>";
        echo "El contenido del array recibido es: <br>";
        print_r($valores);

        $suma = 0;
        foreach($valores as $valor){
            $suma += $valor;
        }
        echo "<h1>La media de dichos argumentos es: " . $suma / count($valores);
    }
    function mediaValoresRefer($val1, &$val2){
        echo "<h2>Función MediaValoresRerfer</h2>";
        echo "<b>==================</b><br>";
        echo "Valor de los argumentos utilizados: <br>";
        echo $val1 . " y " . $val2;
        $val2 = ($val1 + $val2) / 2;
    }
?>