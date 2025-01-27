<?php
require_once "./conexionBD.php";
if ($conexion) {
    $sentencia = "SELECT * FROM usuarios";
    $stmt = $conexion->prepare($sentencia, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
    $usuarios = "";
    $pass = "";
    $tipo = "";
    try {
        $stmt->execute();
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
            $usuarios .= "<option>" . $fila['User'] . "</option>";
            $pass .= "<option>" . $fila['Pass'] . "</option>";
            $tipo .= "<option>" . $fila['Tipo'] . "</option>";
        }
    } catch (PDOException $e) {
        echo "Error al obtener usuarios: " .  $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ppal.php" method="POST">
        <table border="1" align="center" style="text-align:center;font-size:1.3rem;" >
            <thead>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Tipo user</th>
            </thead>
            <tbody>
                <tr>
                    <td>Seleccione User <select name="user" id="user"> <?= $usuarios ?> </select></td>
                    <td>Seleccione Pass <select name="pass" id="pass"> <?= $pass ?> </select></td>
                    <td>Seleccione Tipo <select name="tipo" id="tipo"> <?= $tipo ?> </select></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit">Enviar</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>