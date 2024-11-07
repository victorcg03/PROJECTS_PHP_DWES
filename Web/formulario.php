<?php
require_once('./connectdb.php'); // Conexión a la base de datos

// Verificar si el formulario se envió correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $ubicacion = $_POST['ubicacion'];
    $tlf = $_POST['tlf'];
    $foto = $_FILES['foto'];
    
    // Verificar si se ha subido la imagen correctamente
    if ($foto['error'] == 0) {
        // Generar un nombre aleatorio para la imagen
        $nombreImagen = uniqid() . "_" . basename($foto['name']);
        $rutaImagen = "./imagenes/" . $nombreImagen;
        
        // Mover la imagen a la carpeta ./imagenes
        if (move_uploaded_file($foto['tmp_name'], $rutaImagen)) {
            try {
                // Preparar la consulta SQL para insertar los datos
                $sql = "INSERT INTO desaparecidos (nombre, apellidos, url, ubicacion, tlf) VALUES (:nombre, :apellidos, :url, :ubicacion, :tlf)";
                $stmt = $conexion->prepare($sql);
                
                // Asignar los valores y ejecutar la consulta
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':apellidos', $apellidos);
                $stmt->bindParam(':url', $nombreImagen); // Guardamos solo el nombre del archivo en la base de datos
                $stmt->bindParam(':tlf', $tlf);
                $stmt->bindParam(':ubicacion', $ubicacion);
                
                $stmt->execute();
                
                $success = "Reporte enviado correctamente.";
                
            } catch (PDOException $e) {
                $error = "Error al guardar los datos: " . $e->getMessage();
            }
        } else {
            $error = "Error al subir la imagen.";
        }
    } else {
        $error = "Error al subir la imagen.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportar Desaparecido</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <h1>Reportar Desaparecido</h1>
    <form action="formulario.php" method="POST" enctype="multipart/form-data" class="formulario">
        <!-- Otros campos -->
        <label for="foto">Fotos (puede seleccionar varias):</label>
        <p style="text-align:left">(si puede ser, de la persona a solas y 'tamaño carnet', para correcta visualización)</p>
        <input type="file" id="foto" name="foto[]" accept="image/*" multiple required>

        <label for="descripcion">Descripción adicional (ej: última ropa vista, señas particulares, etc.):</label>
        <textarea id="descripcion" name="descripcion" rows="4"></textarea>

        <button type="submit">Enviar Reporte</button>
    </form>
    <?php
        if (isset($error)) {
            echo "<p id='error' class='mensaje'>$error</p>";
        }
        if (isset($success)) {
            echo "<p id='success' class='mensaje'>$success</p>";
        }
    ?>
    <a href='index.php' id="volver">Volver a la página principal</a>
    <script>
    const telInput = document.getElementById('tlf');

    telInput.addEventListener('input', function () {
        // Remover todos los caracteres no numéricos antes de procesar
        let input = telInput.value.replace(/\D/g, '');

        // Aplicar el formato "123-123-123"
        if (input.length > 6) {
            input = input.slice(0, 3) + '-' + input.slice(3, 6) + '-' + input.slice(6, 9);
        } else if (input.length > 3) {
            input = input.slice(0, 3) + '-' + input.slice(3, 6);
        }

        telInput.value = input;
    });
</script>
</body>
</html>
