<?php
    //Definir zona horaria (zona horaria: https://www.php.net/manual/es/timezones.php)
    date_default_timezone_set("America/Mexico_City");
    
    echo date("d");//dia
    echo '<br>'. date("l");//dia de la semana

    $fecha_us = date("Y/m/d");
    echo '<br>'.$fecha_us;

    $fecha_mx = date("d-m-Y");
    echo '<br>' . $fecha_mx;

    $fecha = date("l d-F-Y");
    echo '<br>' . $fecha;

    $hora_12 = date("h:i a");
    echo '<br>' . $hora_12;

    $hora_24 = date("H:i A");
    echo '<br>' . $hora_24;

    $fecha_completa = date("d-m-Y h:i a");
    echo '<br>' . $fecha_completa;
?>  
