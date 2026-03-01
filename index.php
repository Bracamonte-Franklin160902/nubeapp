<!DOCTYPE html>
<html>
<head>
    <title>Nube App</title>
</head>
<body>

<h2>Subir Archivo</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo" required>
    <button type="submit">Subir</button>
</form>

<hr>

<h2>Archivos disponibles</h2>
<a href="listar.php">Ver archivos</a>

</body>
</html>