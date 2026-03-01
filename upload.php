<?php

$host = "db.sjbfpfmgljfczetvhoii.supabase.co";
$db   = "postgres";
$user = "postgres";
$pass = "VXClJCJcFIZC4UvI";
$port = "5432";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

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