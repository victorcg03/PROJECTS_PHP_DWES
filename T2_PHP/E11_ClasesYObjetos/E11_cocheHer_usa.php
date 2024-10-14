<?php
    require_once("./E11_cocheHer.php");
    $coche1 = new CocheHijo("Audi", "Q5", 140, 37000, "rojo", ["Descapotable","EngancheBola","Limusina"]);
    $coche2 = new CocheHijo("Audi", "Q8", 240, 58000, "azul", ["Extra1","Extra2", "Extra3"]);

    echo "Datos coche 1 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche1 -> getMarca() ."<br>";
    echo "Modelo: " . $coche1 -> getModelo() ."<br>";
    echo "Potencia: " . $coche1 -> getPotencia() ."<br>";
    echo "Precio: " . $coche1 -> getPrecio() ."<br><br>";
    $coche1 -> mostrarColor();
    $coche1 -> mostrarExtras();


    echo "Datos coche 2 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche2 -> getMarca() ."<br>";
    echo "Modelo: " . $coche2 -> getModelo() ."<br>";
    echo "Potencia: " . $coche2 -> getPotencia() ."<br>";
    echo "Precio: " . $coche2 -> getPrecio() ."<br>";
    $coche2 -> mostrarColor();
    $coche2 -> mostrarExtras();
?>