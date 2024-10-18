<?php
    function generarPassword($longitudBasicos, $longitudEspeciales){
        $cadenaBasicos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $cadenaEspeciales = "@$%/()?=!-";
        $disposicion = $_POST['orden'];
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
        $password = $disposicion == 1 ? $basicos . $especiales : $especiales . $basicos;
        return $password;
    }
?>