<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>utiliza fpassthru()</b>
    <br>
    <br>
    <b>Visualizamos el contenido del fichero E6_mensajes4.txt</b>
    <ul>
        <li>Archivo completo mediante readfile()</li>
        <li>La primera línea en negrita, utilizando función fopen() y fgets()</li>
        <li>Volcar el resto del fichero salida estándar con fpassthru()</li>
    </ul>
    <?php
        $archivoAbrir = "E6_mensajes4.txt";
        //Compruebo si existe el archivo para evitar fallos
        if (!file_exists($archivoAbrir)) {
            echo "El archivo no existe";
        }else{
            //Si el archivo existe, procedo con las operaciones

            //Primero con readfile
            echo "Visualizamos con readfile():<br>";
            readfile($archivoAbrir);
            echo "<br>";

            //Ahora con fopen y fgets, controlo si se puede abrir
            $archivoAbierto = @fopen($archivoAbrir, 'r');
            if (!$archivoAbierto) {
                echo "No se ha podido abrir el archivo";
            }else{
                echo "<b>" . fgets($archivoAbierto, 255) . "</b><br>";
                echo "Resto con fpassthru():<br>";
                fpassthru($archivoAbierto);
                fclose($archivoAbierto);
            }
        }
    ?>
</body>
</html>