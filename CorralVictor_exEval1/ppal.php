<?php
require_once "./conexionBD.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['tipo'])) {
    echo "Validando usuario... ";
    if ($conexion) {
        $sentencia = "SELECT * FROM usuarios WHERE User=? && Pass=? && Tipo=?";
        $stmt = $conexion->prepare($sentencia);
        try {
            $stmt->execute([$_POST['user'], $_POST['pass'], $_POST['tipo']]);
            if ($stmt->rowCount() != 0) {
                echo "Credenciales correctas!";
                ejecutarFunciones($conexion);
            } else {
                echo "Crecendiales incorrectas.";
            }
        } catch (PDOException $e) {
            echo "Error al borrar la tabla: " .  $e->getMessage();
        }
    }
}
function ejecutarFunciones($conexion){
    echo "<br><br>Ejecutando las funciones... <br><br><br>";
    $matprim =    $matprim = [["ALUMNO", "MEDIA 1º", "FECHA APROB"]];
    echo "<h4>CARGA datos de BD - tabla NOTASPRIM:</h4>";
    fcargaNotasPriBDaMat($matprim, $conexion);
    echo "<h4>VISUALIZA datos de MATRIZ - tabla NOTASPRIM:</h4>";
    fVisualizaDatosMATPRI($matprim);
    echo "<h4>ESCRIBE datos de MATRIZ en Archivo notasPrimero.txt:</h4>";
    fEscribeDatosMATPRIaARCH("notasPrimero.txt", $matprim);
    $MATNOTASSEG_BD = [["ALUMNO", "ASIGNATURA", "NOTA"]];
    echo "<h4>Lee de BD datos de Segundo y los pasa MATRIZ:</h4>";
    fcargaNotasSegBDaMat($MATNOTASSEG_BD, $conexion);
    $medias = [ ["ALUMNO", "MEDIA 1º", "MEDIA 2º", "MEDIA CICLO"], 
                ["PILAR", 9, 7, 7.3], 
                ["HUGO", 8, 7.4, 7.5],
                ["JESÚS", 7, 6.2, 6.3],
                ["RICARDO", 6, 5.8, 5.8],
                ["ARTURO", 5, 8, 7.6],
                ["MELISSA", 5, 6.8, 6.5]];
    echo "<h4>ESCRIBE Matriz MEDIAS en la tabla MEDIAS de la BD:</h4>";
    fEscribeMediasaBD($medias, "medias", $conexion);
    echo "<h4>ESCRIBE Matriz MEDIAS en el archivo NOTASCICLO.dat:</h4>";
    fEscribeMediasaArchivo($medias);
    echo "<h4>VISUALIZA contenido del archivo NOTASCICLO.dat:</h4>";
    fvisualizaMediasDeArch();
}
function fcargaNotasPriBDaMat(&$matprim, $conexion){
    echo "Funcion fcargaNotasPriBDaMat <br><br>";
    if ($conexion) {
        $sentencia = "SELECT * FROM notasprim";
        $stmt = $conexion->prepare($sentencia, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
        try {
            $stmt->execute();
            echo "Número de filas encontradas: " . $stmt->rowCount() . "<br><br>";
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                array_push($matprim, [$fila['NomAlum'], $fila['MediaPrim'], $fila["FechAprobado"]]);
            }
        } catch (PDOException $e) {
            echo "Error al obtener notas: " .  $e->getMessage();
        }
    }
    echo "Fin función fcargaNotasPriBDaMat <br><br>";
}
function fVisualizaDatosMATPRI($matprim){
    echo "Funcion fVisualizaDatosMATPRI <br><br>";
    echo    "<table border=1>
                <thead>
                    <th>".$matprim[0][0]."</th>
                    <th>".$matprim[0][1]."</th>
                    <th>".$matprim[0][2]."</th>
                </thead>
                <tbody>";
                for ($i=1; $i < count($matprim); $i++) { 
                    echo "<tr>
                            <td>".$matprim[$i][0]."</td>
                            <td>".$matprim[$i][1]."</td>
                            <td>".$matprim[$i][2]."</td>
                         </tr>";
                }   
    echo       "</tbody>
            </table>";
    echo "<br>Fin función fVisualizaDatosMATPRI <br><br>";
}
function fEscribeDatosMATPRIaARCH($nombreArchivo, $matprim){
    echo "Funcion fEscribeDatosMATPRIaARCH <br><br>";
    $archivo = fopen($nombreArchivo, 'w+');
    if (!$archivo) {
        echo "Ha habido un error al abrir el fichero, no se continuará<br>";
    }else{
        for ($i=0; $i < count($matprim); $i++) { 
            for ($e=0; $e < count($matprim[$i]); $e++) { 
                fwrite($archivo, $matprim[$i][$e]."\t");
            }
            fwrite($archivo,"\n");
        }
        fclose($archivo);
    }
    echo "<br>Fin funcion fEscribeDatosMATPRIaARCH <br><br>";
}
function fcargaNotasSegBDaMat(&$MATNOTASSEG_BD, $conexion){
    echo "Funcion fcargaNotasSegBDaMat <br><br>";
    if ($conexion) {
        $sentencia = "SELECT * FROM notasseg";
        $stmt = $conexion->prepare($sentencia, [PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL]);
        try {
            $stmt->execute();
            echo "Número de filas encontradas: " . $stmt->rowCount() . "<br><br>";
            while ($fila = $stmt->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)) {
                array_push($MATNOTASSEG_BD, [$fila['NomAlum'], $fila['NomAsig'], $fila["NotaAsig"]]);
            }
        } catch (PDOException $e) {
            echo "Error al obtener notas: " .  $e->getMessage();
        }
    }
    echo "Mostramos la información en una tabla: <br><br>";
    echo "<table border=1 style='border-collapse: collapse;'>";
    for ($i=0; $i < count($MATNOTASSEG_BD); $i++) {
        echo "<tr>"; 
        for ($j=0; $j < count($MATNOTASSEG_BD[$i]); $j++) { 
            echo "<td>" . $MATNOTASSEG_BD[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br> Fin función fcargaNotasSegBDaMat <br><br>";
}
function fEscribeMediasaBD($medias, $tabla, $conexion){
    echo "Función fEscribeMediasaBD: <br><br>";
    if ($conexion) {
        $sentenciaSQL = "INSERT INTO $tabla VALUES (?,?,?,?)";
        $stmt = $conexion->prepare($sentenciaSQL);
        try{
            $conexion->beginTransaction();
            $filas = 0;
            foreach ($medias as $fila) {
                if ($filas != 0) {
                    $stmt->execute($fila);
                }
                $filas++;
            };
            $conexion->commit();
        } catch (PDOException $e){
            echo "Error al insertar filas: ".  $e->getMessage();
            $conexion->rollBack();
        }
        echo "Filas insertadas: $filas<br>";
    }
    echo "<br>Fin función fEscribeMediasaBD<br><br>";
}
function fEscribeMediasaArchivo($medias){
    echo "Funcion fEscribeMediasaArchivo<br>";
    $nombreArchivo = "NOTASCICLO.dat";
    $archivo = fopen($nombreArchivo, 'w+');
    if (!$archivo) {
        echo "Ha habido un error al abrir el fichero, no se continuará<br>";
    }else{
        for ($i=0; $i < count($medias); $i++) { 
            for ($e=0; $e < count($medias[$i]); $e++) { 
                fwrite($archivo, $medias[$i][$e]."\t");
            }
            fwrite($archivo,"\n");
        }
        fclose($archivo);
    }
    echo "<br>Fin funcion fEscribeMediasaArchivo <br><br>";
}
function fvisualizaMediasDeArch(){
    echo "Funcion fvisualizaMediasDeArch<br><br>";
    $nombreArchivo = "NOTASCICLO.dat";
    if (!file_exists($nombreArchivo)) {
        echo "El archivo no existe, no se continuará.";
    } else{
        $archivoAbierto = @fopen($nombreArchivo, 'r');
        if (!$archivoAbierto) {
            echo "El archivo no se ha podido abrir, no se seguirá ejecutando...";
        } else {
            while (!feof($archivoAbierto)) {
                $linea = fgets($archivoAbierto);
                echo $linea . "<br>";
            }
            fclose($archivoAbierto);
        }
    }
    echo "<br>Fin funcion fvisualizaMediasDeArch <br><br>";
}
?>
