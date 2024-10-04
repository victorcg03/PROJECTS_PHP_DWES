<?php
    $emailComprobar = "nombreApellido@gmail.com";

    echo "Email a analizar: <br>";
    echo "'" . $emailComprobar ."'<br><br>";
    echo "Tiene " . strlen($emailComprobar) . " letras.<br>";
    $separados = explode("@", $emailComprobar);
    if (count($separados) == 1 || strpos($separados[1],".") == false) {
        echo "Es una dirección de email NO válida <br>";
    } else {
        echo "Es una dirección de email válida <br><br>";
        echo "El nombre de usuario es: <b>" . $separados[0] . "</b><br>";
        echo "El dominio es: <b>" . $separados[1] . "</b><br>";
    }
?>