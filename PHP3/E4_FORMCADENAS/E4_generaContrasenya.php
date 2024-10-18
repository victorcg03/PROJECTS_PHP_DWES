<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        $longitudBasicos = $_POST['basicos'];
        $longitudEspeciales = $_POST['especiales'];
        $disposicion = $_POST['orden'];

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

        if ($disposicion == 1) {
            $password = $basicos . $especiales;    
        } else {
            $password = $especiales . $basicos;
        }

        echo "<b>El password generado aleatoriamente es: <br><br>";
        echo $password . "</b>";
    }
?>