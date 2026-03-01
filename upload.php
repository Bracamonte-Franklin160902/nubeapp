<?php

$conn = new mysqli("localhost", "root", "", "nube");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = $_FILES["archivo"]["name"];
$ruta = "uploads/" . $nombre;

if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta)) {

    $sql = "INSERT INTO archivos (nombre, ruta) 
            VALUES ('$nombre', '$ruta')";

    if ($conn->query($sql) === TRUE) {
        echo "Archivo subido y registrado correctamente.<br>";
        echo "<a href='index.php'>Volver</a>";
    } else {
        echo "Error al guardar en base de datos.";
    }

} else {
    echo "Error al subir archivo.";
}

$conn->close();
?>