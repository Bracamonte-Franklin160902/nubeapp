<?php

$conn = new mysqli("localhost", "root", "", "nube");

$result = $conn->query("SELECT * FROM archivos");

while ($row = $result->fetch_assoc()) {
    echo "<a href='".$row['ruta']."' download>".$row['nombre']."</a><br>";
}

$conn->close();
?>