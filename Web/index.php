<?php 
    require_once('./connectdb.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAPARECIDOS - VALENCIA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DESAPARECIDOS EN VALENCIA</h1>
    <a href="formulario.php">Reportar un desaparecido</a>
    <?php
    $desaparecidos = null;
        try {
            // Preparar la consulta
            $sql = "SELECT * FROM desaparecidos";
            $stmt = $conexion->prepare($sql);
            
            // Ejecutar la consulta
            $stmt->execute();
            
            // Obtener todos los resultados
            $desaparecidos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        if ($desaparecidos != null) {?>
                <p style="margin-bottom:30px;font-size:30px">Numero de desaparecidos: <?= count($desaparecidos) ?></p>
                <div id="desaparecidos">
                <?php
                        foreach ($desaparecidos as $desaparecido) {?>
                            <div class="desaparecido">
                                <div class="foto" style="background-image:url('./imagenes/<?= $desaparecido['url'] ?>')"></div>
                                <div class="nombre">Nombre: <?= $desaparecido['nombre'] ?></div>
                                <div class="apellidos">Apellidos: <?= $desaparecido['apellidos'] ?></div>
                                <div class="ubicacion">Ultima ubicación: <?= $desaparecido['ubicacion'] ?></div>
                                <div class="tlf">Teléfono de contacto: <?= $desaparecido['tlf'] ?></div>
                            </div>
                    <?php }?>
                </div>
            <?php 
        }else{
            echo "<p>No hay desaparecidos</p>";
        }
    ?>
</body>
</html>