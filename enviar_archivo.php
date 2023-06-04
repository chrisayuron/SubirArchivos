<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBIR ARCHIVOS AL SERVER</title>
</head>
<body>
    <form name="enviar_archivo" method="POST" action="subir_archivo.php" enctype="multipart/form-data">
    <!-- Siempre que mandemos archivos, sera con el metodo post -->
    <input type="file" name="archivo">
    <input type="submit" name="subir" value="Subir Archivo">
    </form>
</body>
</html>