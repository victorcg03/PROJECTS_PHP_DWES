<?php
include("./E4_compraArticulosHeader.php");

        if($frenosComprados != 0 && $aceiteComprado != 0 && $ruedasCompradas != 0){
            $precioSinIva = $frenosComprados * FRENOS + $aceiteComprado * ACEITE + $ruedasCompradas * RUEDAS;
            echo "<h1>Se han comprado todos los articulos</h1>";
            echo "<p>Su petición es la siguiente:</p>";
            echo "<p>Frenos: " . $frenosComprados;
            echo "<p>Aceite: " . $aceiteComprado;
            echo "<p>Ruedass: " . $ruedasCompradas;         
            echo "<br><br><b>Número de elementos solicitados: " . $frenosComprados + $ruedasCompradas + $aceiteComprado . "</b>";
            echo "<br><b>Subtotal: " . $precioSinIva . " euros </b>";
            echo "<br><b>Total con el IVA: " . $precioSinIva + ($precioSinIva * 0.21) . " euros </b>";
        } else{
            echo "No comprados: " . ($frenosComprados == 0 ? "frenos, " : "") . ($ruedasCompradas == 0 ? "ruedas, " : "") . ($aceiteComprado == 0 ? "aceite" : "");
            echo "<h1>La petición ha de contener todos los tipos de artículo!!</h1>";
        }
    ?>
</body>
<?php
include("./E4_compraArticulosFooter.php");
?>