<?php
require 'conexion.php';

try {
    $stmt = $conn->query("SELECT * FROM archivos ORDER BY fecha DESC");
    $archivos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($archivos) {
        foreach ($archivos as $row) {
            echo "<a href='" . $row['ruta'] . "' download>" . $row['nombre'] . "</a><br>";
        }
    } else {
        echo "No hay archivos registrados.";
    }

} catch (PDOException $e) {
    echo "Error al consultar: " . $e->getMessage();
}
?>