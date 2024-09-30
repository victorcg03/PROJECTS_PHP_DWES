<?php
    function porDefecto($param1="You", $param2="my", $param3="Blue"){
        return $param1 . " " . $param2 . " " . $param3;
    }
    $argum1="Hello";
    $argum2="World";
    $argum3="Moon";
    echo "Invocamos con tres argumentos <br>";
    echo porDefecto($argum1, $argum2, $argum3);
    echo "<br><br>Invocamos con dos argumentos<br>";
    echo porDefecto($argum1, $argum2);
    echo "<br><br>Ahora Invocamos con un solo argumento<br>";
    echo porDefecto($argum1);
    echo "<br><br>Ahora sin argumentos<br>";
    echo porDefecto();
?>