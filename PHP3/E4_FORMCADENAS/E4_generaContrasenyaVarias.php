<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        include('./E4_libGeneraContrasenya.php');
        $longitudBasicos = $_POST['basicos'];
        $longitudEspeciales = $_POST['especiales'];
        $orden = $_POST['orden'];
        $passwords = [];
        $numPasswords = $_POST['num'];
        for ($i=0; $i < $numPasswords; $i++) { 
            array_push($passwords, generarPassword($longitudBasicos, $longitudEspeciales));
        }
        echo "<b>Las password generado aleatoriamente es: <br><br>";
        foreach ($passwords as $password) {
            echo $password . "<br>";
        }
    }
?>