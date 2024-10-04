<?php
    $emailComprobar = " nombreApellido@gmail.com ";

    echo "Dirección a analizar: <br>";
    echo "'" . $emailComprobar ."'<br><br>";
    echo "Tiene " . strlen($emailComprobar) . " letras.<br>";

    if ($emailComprobar[strlen($emailComprobar)-1] == " " || $emailComprobar[0] == " ") {
        echo "Se han encontrado blancos.<br>";
        echo "Los eliminamos....<br><br>";
        $emailComprobar = trim($emailComprobar);
    } else {
        echo "No se han encontrado blancos.<br><br>";
    }
    echo "Hasta ahora <br>";
    echo "email= " . $emailComprobar . "<br><br>";
    echo "Buscamos .com en email..... <br>";
    $separada = explode(".", $emailComprobar);
    if ($separada[1] == "com") {
        $emailComprobar = $separada[0] . ".es"; 
        echo "Hemos encontrado <b>com</b><br>";
        echo "Dirección corregida: '" . $emailComprobar . "'.";
    } else {
        echo "No se ha encontrado <b>com</b><br>";
        echo "La dirección ha quedado así: " . $emailComprobar;
    }
?>