<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./E4_generaContrasenyaFuncion.php" method="post">
        <div>Long. de Básicos <input type="text" name="basicos"></div>
        <div>Long. de Especiales <input type="text" name="especiales"></div>
        <div>
            <label for="1">Carácteres Básicos - Caracteres especiales</label>
            <input type="radio" name="orden" value="1" id="1" checked>
        </div>
        <div>
            <label for="2">Carácteres Básicos - Caracteres especiales</label>
            <input type="radio" name="orden" value="2" id="2">
        </div>
        <button type="submit">
            Enviar consulta
        </button>
    </form>
</body>
</html>