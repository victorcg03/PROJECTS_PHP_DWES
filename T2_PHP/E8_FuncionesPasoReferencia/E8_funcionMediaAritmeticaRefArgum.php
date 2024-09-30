<?php
    function mediaAritmetica($val1, $val2, $val3, $val4, &$suma, &$media){
        $suma = $val1 + $val2 + $val3 + $val4;
        $media = $suma / 4;
        echo "<b>Estamos en Función Media Aritmética <br>";
        echo "======================================= </b> <br>";
        echo "Valor de los argumentos utilizados: <br>";
        echo "<ul>";
        echo "<li> Parámetro 1 ==> $val1 </li><br>";
        echo "<li> Parámetro 2 ==> $val2 </li><br>";
        echo "<li> Parámetro 3 ==> $val3 </li><br>";
        echo "<li> Parámetro 4 ==> $val4 </li><br>";
        echo "</ul>";
        echo "Valor del parámetro SUMA=" . $suma;
        echo "<br>Valor del parámetro MEDIA=" . $media;
    }

    echo "<b>Programa Principal <br> =============== </b><br><br>";
    echo "El valor de los parámetros lo establecemos desde él. <br><br>";
    echo "Invocamos a la función <br> ================= <br><br>";
    mediaAritmetica(10, 20, 30, 40, $suma, $media);
    echo "<br><br><b>Estamos de nuevo en el Programa Principal<br>";
    echo "=================================</b><br>";
    echo "La SUMA está en el parámetro suma y es: <b>" . $suma . "</b>";
    echo "<br>La MEDIA está en el parámetro media y es: <b>" . $media . "</b>";
?>
<style>
    ul{
        list-style: square;
    }
</style>