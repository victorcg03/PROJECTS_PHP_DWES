<?php
    function funcionCreaEmail(&$salida, $nombre ="nombre", $proveedor="gmail", $extension="com"){
        $extensionesValidas = array("com", "es", "net");
        if (!in_array($extension, $extensionesValidas)) {
            $salida = "Extensión incorrecta: <b>" . $extension . "</b>";
        } else{
            $salida = "Email completo es ..... <br><b>" . $nombre . "@" . $proveedor . "." . $extension . "</b>";
        }
    }
    echo "Invocando a la función..... <br>";
    $nombre = "victorcorral";
    $proveedor = "hotmail";
    $dominio = "es";
    funcionCreaEmail($salida, $nombre, $proveedor, $dominio);
    echo $salida;
?>