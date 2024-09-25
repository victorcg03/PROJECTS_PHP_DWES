<?php
    $personas = array(
                        "Victor" => "Corral",
                        "Berti" => "Vasile",
                        "Donovan" => "Ramirez",
                        "Paco" => "Gonzalez",
                        "Marcos" => "Perez");
?>
<style>
    table, th, td{
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($personas as $nombre => $apellido) {
            echo ("<tr>");
                echo("<td>" . $nombre ."</td>");
                echo("<td>" . $apellido ."</td>");
            echo ("</tr>");
        }
    ?>
    </tbody>
</table>