<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivos</title>
</head>
<body>
    <h3>Subir archivos con PHP</h3>
    <form action="20_carga.php" method="POST" enctype="multipart/form-data" class="formAjax">
        <!-- Selecciona archivos de tu pc, limitando a cierto tipo de archivos -->
        <input type="file" name="fichero" accept=".jpg, .jpeg, .png">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <form action="20_carga.php" method="POST" enctype="multipart/form-data" class="formAjax">
        <!-- Selecciona archivos de tu pc, limitando a cierto tipo de archivos -->
        <input type="file" name="fichero" accept=".jpg, .jpeg, .png">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <script src="21_ajax.js"></script>
</body>
</html>