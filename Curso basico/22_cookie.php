<?php
    //Creacion de cookies
    //setcookie("Nombre", valor, expiracion, dir, dominio, secure=siempre seguro, httponly=solo en http);
    setcookie("Idioma", "es", time()+60*60*24*365, "/", "localhost", false, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1><?php
        echo $_COOKIE['Idioma'];
    ?></h1>
</body>
</html>