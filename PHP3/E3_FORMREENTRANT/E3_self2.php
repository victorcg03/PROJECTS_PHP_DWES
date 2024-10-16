
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['nombre']) && !empty($_POST['empresa']) && !empty($_POST['telefono']) && $_POST['telefono'] != '+34'){
            echo "<p>Datos del formulario</p>";
            echo "<p><b>Nombre: </b>" . $_POST['nombre'] . "</p>";
            echo "<p><b>Empresa: </b>" . $_POST['empresa'] . "</p>";
            echo "<p><b>Telefono: </b>" . $_POST['telefono'] . "</p>";
        } else { ?>
            <form action="./E3_self2.php" method="POST">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" id="empresa">
                </div>
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" value="+34">
                </div>
                <button type="submit">Enviar</button>
            </form>
    <?php } ?>
</body>
</html>