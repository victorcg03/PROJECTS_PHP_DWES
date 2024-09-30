<?php
    function funcionCreaUrl($protocolo, $servicio, $nombre, $entidad, $pais, &$salida){
        $salida = $protocolo . "://" . $servicio .".". $nombre .".". $entidad . "." . $pais;
    }
    echo "Invocando a la función.... <br>";
    $url;
    funcionCreaUrl("http", "www", "lagaceta", "com", "ar", $url);
    echo "La URL completa es.... <br>";
    echo "<b>" . $url . "</b>";
?>