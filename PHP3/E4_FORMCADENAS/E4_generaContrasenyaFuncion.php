<?php
    function generarPassword($longitudPasswBasico, $longitudPasswEspecial){
        $cadenaBasicos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $cadenaEspeciales = "@$%/()?=!-";
        $basicos = "";
        while(strlen($basicos) != $longitudPasswBasico){
            $caracter = $cadenaBasicos[rand(0, strlen($cadenaBasicos)-1)];
            if (strpos($basicos, $caracter) == false) {
                $basicos .= $caracter;
            }
        }

        $especiales = "";
        while(strlen($especiales) != $longitudPasswEspecial){
            $caracter = $cadenaEspeciales[rand(0, strlen($cadenaEspeciales)-1)];
            if ((strpos($especiales, $caracter) == false)) {
                $especiales .= $caracter;
            }
        }

        if ($_POST['orden'] == 1) {
            $passwordTotal = $basicos . $especiales;    
        } else {
            $passwordTotal = $especiales . $basicos;
        }
        return $passwordTotal;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        $totalBasicos = $_POST['basicos'];
        $totalEspeciales = $_POST['especiales'];
        $contraseña = generarPassword($totalBasicos, $totalEspeciales);
        
        echo "<b>El password generado aleatoriamente es: <br><br>";
        echo $contraseña . "</b>";
    }
?>