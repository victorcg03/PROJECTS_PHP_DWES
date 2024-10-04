<?php
    $hora = getdate();
    echo "<b>-----------------------------------------</b> <br>";
    echo "<b>Ahora son las: " . $hora["hours"] . " y " . $hora["minutes"] . " minutos.</b><br>";
    echo "<b>-----------------------------------------</b><br><br>";

    if ($hora["hours"] >= 0 && $hora["hours"] < 11) {
        echo "<b>Tenga Vd Buenos Días.</b>";
    } else if ($hora["hours"] >= 11 && $houra["hours"] < 21){
        echo "<b>Buenas Tardes, Sr-Sra</b>";
    } else{
        echo "<b>A Dormir Bien, Caballero/Señora</b>";
    }
?>