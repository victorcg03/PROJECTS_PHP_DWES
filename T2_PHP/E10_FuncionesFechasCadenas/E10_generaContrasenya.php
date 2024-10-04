<?php
    $longitudBasicos = rand(4,8);
    $longitudEspeciales = rand(4,8);
    $disposicion = 0; //0 es basicos-especiales, 1 es especiales-basicos

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

    if ($disposicion == 0) {
        $password = $basicos . $especiales;    
    } else {
        $password = $especiales . $basicos;
    }

    echo "<b>El password generado aleatoriamente es: <br><br>";
    echo $password . "</b>";
?>