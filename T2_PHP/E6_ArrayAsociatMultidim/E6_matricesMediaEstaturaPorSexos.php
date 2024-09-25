<?php
    $personas = array(
        array(172,165,179,163,170,174),
        array("H", "M", "H", "M", "M", "H")
    );
    $numHombres = 0;
    $numMujeres = 0;
    $alturaHombres = 0;
    $alturaMujeres = 0;
    for ($i=0; $i < count($personas[1]); $i++) { 
        if ($personas[1][$i] == "H") {
            $numHombres++;
            $alturaHombres+= $personas[0][$i];
        }else{
            $numMujeres++;
            $alturaMujeres+= $personas[0][$i];
        }
    }
    echo("Número de Hombres de la muestra: <br>");
    echo($numHombres);
    echo("<br>Número de Mujeres de la muestra: <br>");
    echo($numMujeres);
    echo("<br>La media de altura de los Hombres (en cm) es:<br>");
    echo($alturaHombres/$numHombres);
    echo("<br>La media de altura de las Mujeres (en cm) es:<br>");
    echo($alturaMujeres/$numMujeres);
    ?>