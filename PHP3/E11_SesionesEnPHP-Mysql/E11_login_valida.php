<?php
    session_start();
    $error = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_POST['usuario']) && !empty($_POST['password'])) {
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "bd1_dwes";
        $conexion = mysqli_connect($host, $user, $password, $bd);
        if ($conexion) {
            $sentenciaPreparada = "SELECT user FROM usuarios WHERE user = ? AND pass = ?";
            if ($stmt = mysqli_prepare($conexion, $sentenciaPreparada)) {
                mysqli_stmt_bind_param($stmt, "ss", $_POST['usuario'], $_POST['password']);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $userID);
                mysqli_stmt_fetch($stmt);
                if (!empty($userID)) {
                    $_SESSION['userID'] = $userID;
                    header("Location: E11_members_only.php");
                } else {
                    $error = "Credenciales no válidas.";
                }
            }
            mysqli_close($conexion);
        } else {
            $error = "Ha habido un problema al conectar a la bd";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página principal</h1>
    <?php
        if(isset($_SESSION["userID"])){?>
            <p>Estás conectado como: <?=$_SESSION["userID"]?></p>
            <a href="./E11_logout.php">Salir (Log out)</a><br>
        <?php } else{?>
            <p>No estás conectado.</p>
            <form action="./E11_login_valida.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label for="usuario">Usuario:</label>
                        </td>
                        <td>
                            <input type="text" id="usuario" name="usuario" value="<?= !empty($_POST['usuario']) ? $_POST['usuario'] : "" ?>">
                        </td>
                    </tr>
                    <tr>
                    <td>
                            <label for="password">Password:</label>
                        </td>
                        <td>
                            <input type="text" id="password" name="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : ""?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button type="submit">Conectar</button>
                        </td>
                    </tr>
                </table>
            </form>
            <p style="color:red;"><?= $error ?></p>
    <?php }?>
    <br>
    <a href="E11_members_only.php">Sección Privada (sólo socios)</a>
</body>
</html>