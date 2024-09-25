<?php
    $jugadores = array(
        array("Benzema","Mo Salah","Mbappé"),
        array("Messi", "Lewandowski", "De bruyne"),
        array("Kounde", "Lamine", "Raphiña")
    );
    echo("<ul>");
    for ($i=0; $i < count($jugadores); $i++) { 
        for ($j= 0; $j < count($jugadores[$i]); $j++) {
            echo("Fila " . $i . "-Col " . $j . ":<br>");
            echo ("<li>" . $jugadores[$i][$j] . "</li>");
        }
    }
    echo("</ul>");
?>
<style>
    ul li{
        list-style: square;
    }
</style>