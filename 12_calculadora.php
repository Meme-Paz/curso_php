<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form class="caja" action="12_calculadora.php" method="get">
    <h1>Suma de Numeros</h1>    
    <input type="number" name="num1" value="" placeholder= "Introduce numero 1">
        <input type="number" name="num2" value="" placeholder= "Introduce numero 2">
        <input type="submit" value="Calcular">
        <output type = "number" name= "">
    </form>
</body>
</html>

<?php
    if (isset($_GET['num1']) && isset($_GET['num2']) 
        && is_numeric($_GET['num1']) && is_numeric($_GET['num2'])) {
        
        if (empty($_GET['num1']) || empty($_GET['num2'])) {
            echo 'Ingrese numeros validos';
        } else {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            echo 'Resultado: ', $num1 + $num2;
        }        
        
    }
?>