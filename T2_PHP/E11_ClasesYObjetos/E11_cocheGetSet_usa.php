<?php
    require_once("./E11_cocheGetSet.php");
    $coche1 = new Coche2();
    $coche2 = new Coche2();
    $coche1 -> setMarca("Audi");
    $coche2 -> setMarca("Audi");
    $coche1 -> setModelo("Q5");
    $coche2 -> setModelo("Q8");
    $coche1 -> setPotencia(140);
    $coche2 -> setPotencia(240);
    $coche1 -> setPrecio(37000);
    $coche2 -> setPrecio(58000);

    echo "Datos coche 1 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche1 -> getMarca() ."<br>";
    echo "Modelo: " . $coche1 -> getModelo() ."<br>";
    echo "Potencia: " . $coche1 -> getPotencia() ."<br>";
    echo "Precio: " . $coche1 -> getPrecio() ."<br><br>";

    echo "Datos coche 2 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche2 -> getMarca() ."<br>";
    echo "Modelo: " . $coche2 -> getModelo() ."<br>";
    echo "Potencia: " . $coche2 -> getPotencia() ."<br>";
    echo "Precio: " . $coche2 -> getPrecio() ."<br>";
?>