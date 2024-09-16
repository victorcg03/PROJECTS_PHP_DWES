<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E3_sumaMutiplos5entreAB</title>
    <style>
        table, th, td{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $a = 5;
        $b = 50;
        $limite = $b / $a;
        $suma = 0;
        if ($a > 0 && $b > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Listado de Múltiplos</th>
                        <th>Suma Acumulada</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        for ($i=1; $i <= $limite; $i++) { 
                            $resultado = $i * $a;
                            $suma += $resultado;
                            echo "<tr><td>$resultado</td><td>$suma</td></tr>";
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><b>Múltiplos Generados: <?=$limite?></b></td>
                    </tr>
                </tfoot>
            </table>
        <?php } else {
            echo "<b>No podemos usar números negativos</b><br>";
            if ($a < 0 && $b < 0) {
                echo "<b>Has definido A y B negativos</b><br>";
            }else if($a > 0){
                echo "<b>Has definido B negativo</b><br>";
            }else{
                echo "<b>Has definido A negativo</b><br>";
            }
            echo "<b>VALORES INTRODUCIDOS</b><br>";
            echo "<b>A= $a</b><br>";
            echo "<b>B= $b</b><br>";
        }
    ?>
</body>
</html>