<?php

    $materias = $_POST['asignatura'];

    foreach ($materias as $asignatura) {
        echo $asignatura . "<br>";
    }

    echo "<br>";

    $frutas = $_POST['frutas'];
    foreach ($frutas as $muestraFrutas) {
        echo $muestraFrutas . "<br>";
    }

    /*
    //Datos ocultos y seguros
    $nombre = "";
    $asignatura = "";
    $frutas = "";

    if (empty($_POST['nombre']) || empty($_POST['asignatura']) || empty($_POST['frutas'])) {
        echo 'No hubo respuesta';
    } else {
        $nombre = $_POST['nombre'];
        $asignatura = $_POST['asignatura'];
        $frutas = $_POST['frutas'];

        echo $nombre;
        echo '<br>' . $asignatura;
        echo '<br>' . $frutas;
    }   
    

    //Usado en mvc y Api's
    $nombre = $_GET['nombre'];
    $asignatura = $_GET['asignatura'];
    $frutas = $_GET['frutas'];

    echo $nombre;
    echo '<br>' . $asignatura;
    echo '<br>' . $frutas;
    */
?>