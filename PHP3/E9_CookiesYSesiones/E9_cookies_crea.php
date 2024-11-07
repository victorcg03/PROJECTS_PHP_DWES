<?php
    $tiempo = time() + 365*24*60*60;
    if (isset($_COOKIE['visitas'])) {
        setcookie('visitas', $_COOKIE['visitas']+1, $tiempo);
        echo "Número de visitas a la web:" . $_COOKIE['visitas'];
    } else {
        setcookie('visitas', 1, $tiempo);
        echo "Has visitado la página por primera vez";
    }
?>