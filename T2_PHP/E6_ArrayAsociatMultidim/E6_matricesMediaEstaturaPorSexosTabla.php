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
?>
<style>
    table, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
Contenido de la Matriz <br>
====================== <br>

<table>
    <tr>
        <td>Altura: </td>
        <?php
            for ($i=0; $i < count($personas[0]); $i++) { 
                echo("<td>" . $personas[0][$i] ."</td>");
            }
        ?>
    </tr>
    <tr>
        <td>Sexo: </td>
        <?php
            for ($i=0; $i < count($personas[1]); $i++) { 
                echo("<td>" . $personas[1][$i] ."</td>");
            }
        ?>
    </tr>
</table>
Tabla Resultado <br>
====================== <br>
<table>
    <thead>
        <td></td>
        <th>Mujeres</th>
        <th>Hombres</th>
    </thead>
    <tbody>
        <tr>
            <td><b>Número</b></td>
            <td><?= $numMujeres ?></td>
            <td><?= $numHombres ?></td>
        </tr>
        <tr>
            <td><b>Suma Alturas</b></td>
            <td><?= $alturaMujeres ?></td>
            <td><?= $alturaHombres ?></td>
        </tr>
        <tr>
            <td><b>Media Alturas</b></td>
            <td><?= $alturaMujeres / $numMujeres ?></td>
            <td><?= $alturaHombres / $numHombres?></td>
        </tr>
    </tbody>
</table>