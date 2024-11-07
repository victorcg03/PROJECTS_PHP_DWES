<?php
    $nombre_cookie = 'visitas';
    echo "Intentamos borrar manualmente la cookie....<br>";
    borra_cookie($nombre_cookie);
    function borra_cookie($nombre_cookie){
        if (isset($_COOKIE[$nombre_cookie])) {
            setcookie($nombre_cookie);
            unset($_COOKIE[$nombre_cookie]);

            echo "Borrado el cookie $nombre_cookie<br>";

            echo "Intentamos ver su contenido....<br>";

            if (empty($_COOKIE[$nombre_cookie])) {
                echo "No tiene contenido";
            } else {
                echo "Contenido: " . $_COOKIE[$nombre_cookie];
            }
            
        } else {
            echo "No se ha podido borrar la cookie porque no existe";
        }
    }
?>