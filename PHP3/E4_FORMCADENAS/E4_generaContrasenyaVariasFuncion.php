<?php
    function generaArrayPasswords($num, $basicos, $especiales){
        include('./E4_libGeneraContrasenya.php');
        $passwords = [];
        for ($i=0; $i < $num; $i++) { 
            array_push($passwords, generarPassword($basicos, $especiales));
        }
        return $passwords;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['basicos']) && !empty($_POST['especiales'])) {
        $longitudBasicos = $_POST['basicos'];
        $longitudEspeciales = $_POST['especiales'];
        $numPasswords = $_POST['num'];
        $passwords = generaArrayPasswords($numPasswords, $longitudBasicos, $longitudEspeciales);
        echo "<b>Las password generado aleatoriamente ess: <br><br>";
        foreach ($passwords as $password) {
            echo $password . "<br>";
        }
    }
?>