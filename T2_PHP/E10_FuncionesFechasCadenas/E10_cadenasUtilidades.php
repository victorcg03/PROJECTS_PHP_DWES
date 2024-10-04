<?php
    $frase = "Esta es la frase que voy a comprobar\n";
    echo "Frase a comprobar: " . $frase . "<br>";
    $letrasEncontradas = array();
    $i = 0;
    while ($frase[$i] != "\n") { 
        if (!in_array($frase[$i], $letrasEncontradas)) {
            array_push($letrasEncontradas, $frase[$i]);
        }
        $i++;
    }
    $palabrasFrase = explode(" ", $frase);
    echo "<br>El numero de letras de la frase es: $i";
    echo "<br>El numero de letras totales (sin repetirse) en la frase es: " . count($letrasEncontradas);
    echo "<br>Esas letras han sido: " . implode(",", $letrasEncontradas);
    echo "<br>El número de palabras de la frase es: " . count($palabrasFrase);
    $letrasPalabra = "";
    foreach ($palabrasFrase as $palabra) {
        $letrasPalabra .= "<br>Palabra: " . $palabra . ", longitud: " . strlen($palabra) . ".";
    }
    echo $letrasPalabra;
?>