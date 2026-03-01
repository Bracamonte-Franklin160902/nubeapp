<?php
require 'conexion.php';

$nombre = $_FILES["archivo"]["name"];
$ruta = "uploads/" . $nombre;

if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta)) {

    $sql = "INSERT INTO archivos (nombre, ruta) VALUES (:nombre, :ruta)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':ruta' => $ruta
    ]);

    echo "Archivo subido y registrado correctamente.<br>";
    echo "<a href='index.php'>Volver</a>";

} else {
    echo "Error al subir archivo.";
}
?>