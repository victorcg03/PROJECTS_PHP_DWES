<?php
    function funcionCreaEmail($nombre, $proveedor, $extension, &$salida){
        $extensionesValidas = array("com", "es", "net");
        if (!in_array($extension, $extensionesValidas)) {
            $salida = "Extensión incorrecta: <b>" . $extension . "</b>";
        } else{
            echo "Email completo es ..... <br><b>";
            $salida = $nombre . "@" . $proveedor . "." . $extension . "</b>";
        }
    }
    echo "Invocando a la función..... <br>";
    $nombre = "victorcorral";
    $proveedor = "hotmail";
    $dominio = "es";
    funcionCreaEmail($nombre, $proveedor, $dominio, $salida);
    echo $salida;
?>