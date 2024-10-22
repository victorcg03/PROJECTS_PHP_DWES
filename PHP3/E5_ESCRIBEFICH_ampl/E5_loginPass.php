<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2'])) {
        $nombre = comprobarCadena($_POST['nombre'], 4);
        $apellido1 = comprobarCadena($_POST['apellido1'], 3);
        $apellido2 = comprobarCadena($_POST['apellido2'], 2);

        echo $nombre . " - " . $apellido1 . " - " . $apellido2;
    }
    function comprobarCadena($cadena, $cantidad){
        $cadenaCaracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        while (strlen($cadena) < $cantidad) {
            $cadena .= $cadenaCaracteres[rand(0, strlen($cadenaCaracteres))];
        }
        return $cadena;
    }
?>