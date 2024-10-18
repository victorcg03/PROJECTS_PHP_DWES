<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        include('./E4_libGeneraContrasenya.php');
        $longitudBasicos = $_POST['basicos'];
        $longitudEspeciales = $_POST['especiales'];
        $orden = $_POST['orden'];
        $password = generarPassword($longitudBasicos, $longitudEspeciales);
        echo "<b>El password generado aleatoriamente es: <br><br>";
        echo $password . "</b>";
    }
?>