<?php
    require_once("./E11_coche.php");
    $coche1 = new Coche1();
    $coche1 -> marca = "Audi";
    $coche1 -> modelo = "Q5";
    $coche1 -> potencia = 140;
    $coche1 -> precio = 37000;

    $coche2 = new Coche1();
    $coche2 -> marca = "Audi";
    $coche2 -> modelo = "Q7";
    $coche2 -> potencia = 240;
    $coche2 -> precio = 58000;

    echo "Datos coche 1 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche1 -> marca ."<br>";
    echo "Modelo: " . $coche1 -> modelo ."<br>";
    echo "Potencia: " . $coche1 -> potencia ."<br>";
    echo "Precio: " . $coche1 -> precio ."<br><br>";

    echo "Datos coche 2 <br>";
    echo "==============<br>";
    echo "Marca: " . $coche2 -> marca ."<br>";
    echo "Modelo: " . $coche2 -> modelo ."<br>";
    echo "Potencia: " . $coche2 -> potencia ."<br>";
    echo "Precio: " . $coche2 -> precio ."<br>";
?>