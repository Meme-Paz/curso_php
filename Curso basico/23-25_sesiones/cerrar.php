<?php
    session_name("LOGIN");
    session_start();

    session_destroy();
    
    //Si hay salidas script, sino php
    if (headers_sent()) {
        echo "<script> window.location.href='abrir.php'; </script>";
    } else {
        //Mandar a otra pagina (No debe de haber nada de mostrar pantalla antes de header)
        header("Location: abrir.php");
    }
?>