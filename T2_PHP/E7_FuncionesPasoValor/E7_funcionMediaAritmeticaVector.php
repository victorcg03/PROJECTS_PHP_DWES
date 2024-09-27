<?php
    echo "<b>Programa principal</b><br>";
    echo "Creamos el vector de valores.<br>";
    $valores = array(10,20,30);
    echo "Hacemos la llamada a la función con dicho vector<br><br>";
    media_array($valores);

    function media_array($valores){
        echo "<b>Función Media Aritmética con array</b><br>";
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
?>