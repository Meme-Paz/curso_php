<?php
    //Compara expresiones regulares. "Expresion regular","cadena a verificar" 
    if (!preg_match("/^[a-zA-Z]{3,10}$/",$_POST['usuario'])
    && !preg_match("/^[a-zA-Z0-9$@.-]{4,10}$/",$_POST['clave'])) {
        echo "El usuario o clave no coincide con el formato solicitado";
        exit();
    }

    if ($_POST['usuario']=="Jose" && $_POST['clave']=="12345") {
        session_name("LOGIN");
        session_start();
        
        $_SESSION['Nombre']="Jose";
        $_SESSION['Apellido']="Garcia";
        $_SESSION['Empleo']="Ingeniero SC";
        
        //Si hay salidas script, sino php
        if (headers_sent()) {
            echo "<script> window.location.href='contador.php'; </script>";
        } else {
            //Mandar a otra pagina (No debe de haber nada de mostrar pantalla antes de header)
            header("Location: contador.php");
        }
        
    } else {
        echo 'Datos incorrectos';
    }
    
?>