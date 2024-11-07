<?php
    session_start();
    echo 'El contenido de $_SESSION["sess_var"] es: ' . @$_SESSION["sess_var"];
    echo '<br>Hemos visto que se ha perdido el valor de la variable<br>';
    echo "A continuación vamos a destruir el identificador de sesion mediante session_destroy()<br>";
    if (session_destroy()){
        echo "<b>Sesión destruida!!</b>";
    }else{
        echo "<b>Sesión no destruida</b>";
    }
?>