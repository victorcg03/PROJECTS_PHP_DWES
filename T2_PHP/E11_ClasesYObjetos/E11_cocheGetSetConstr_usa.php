<?php
    require_once("./E11_cocheGetSetConstr.php");
    $coche1 = new Coche3("Audi", "Q5", 140, 37000);
    $coche1 = new Coche3("Audi", "Q8", 240, 58000);

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