<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2'])) {
        $nombre = comprobarCadena($_POST['nombre'], 4);
        $apellido1 = comprobarCadena($_POST['apellido1'], 3);
        $apellido2 = comprobarCadena($_POST['apellido2'], 2);
        $login = substr($nombre, 0, 4) . substr($apellido1, 0, 3) . substr($apellido2, strlen($apellido2)-2);
        $password = generarPassword(6,6);

        $rutaCarpetaDestino = './E5_usuarios';
        $archivoDestino = $rutaCarpetaDestino . '/E5_loginPass.txt';
        if (!@opendir($rutaCarpetaDestino)) {
            mkdir($rutaCarpetaDestino);
        }

        $ficheroAbierto = fopen($archivoDestino, 'a+');
        if (!$ficheroAbierto) {
            echo "Ha habido un error al abrir el fichero, no se continuará<br>";
        }else{
            if (!fwrite($ficheroAbierto, $login."\t".$password)) {
                echo "Ha habido un error al escribir en el archivo.";
            } else {
                echo "Se ha guardado correctamente el usuario " . $login . " y la password " . $password;
            }
            fclose($ficheroAbierto);
        }
    }

    function comprobarCadena($cadena, $cantidad, ){
        $cadenaCaracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        while (strlen($cadena) < $cantidad) {
            $cadena .= $cadenaCaracteres[rand(0, strlen($cadenaCaracteres))];
        }
        return $cadena;
    }

    function generarPassword($longitudBasicos, $longitudEspeciales){
        $cadenaBasicos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $cadenaEspeciales = "@$%/()?=!-";
        $basicos = "";
        while(strlen($basicos) != $longitudBasicos){
            $caracter = $cadenaBasicos[rand(0, strlen($cadenaBasicos)-1)];
            if (strpos($basicos, $caracter) == false) {
                $basicos .= $caracter;
            }
        }

        $especiales = "";
        while(strlen($especiales) != $longitudEspeciales){
            $caracter = $cadenaEspeciales[rand(0, strlen($cadenaEspeciales)-1)];
            if ((strpos($especiales, $caracter) == false)) {
                $especiales .= $caracter;
            }
        }
        return $basicos . $especiales;;
    }
?>