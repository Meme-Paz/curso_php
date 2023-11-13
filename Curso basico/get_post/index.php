<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="18_get_post.php" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br><br>
        <label for="opcion1">
            <input type="checkbox" name="frutas[]" id="opcion1" value="Manzana">Manzana
        </label>
        <label for="opcion2">
            <input type="checkbox" name="frutas[]" id="opcion2" value="Mango">Mango
        </label>
        <label for="opcion3">
            <input type="checkbox" name="frutas[]" id="opcion3" value="Melon">Melon
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
