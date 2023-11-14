<?php
    # Almacenamos datos
    $usuario = limpiar_cadena($_POST['login_usuario']);
    $clave = limpiar_cadena($_POST['login_clave']);

    # Verificando los campos obligatorios
    if ($usuario == "" && $clave == "") {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inerperado</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>
        ';
        exit();
    }

    #Verificando integridad de los datos
    if (verificar_datos("[a-zA-Z0-9_]{4,20}", $usuario)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El usuario NO coincide con el formato solicitado
        </div>
        ';
        exit();
    }

    if (verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            La clave NO coinciden con el formato solicitado
        </div>
        ';
        exit();
    }  

     #Verificando usuario
      #Verificando usuario
    $check_usuario = conexion();
    $check_usuario = $check_usuario->query("select * from usuario where usuario_usuario = '$usuario'");

    if ($check_usuario->rowCount()==1) {
        $check_usuario = $check_usuario -> fetch();
        if ($check_usuario['usuario_usuario'] == $usuario && password_verify($clave, $check_usuario['usuario_clave'])) {

            $_SESSION['id'] = $check_usuario['usuario_id'];
            $_SESSION['nombre'] = $check_usuario['usuario_nombre'];
            $_SESSION['apellido'] = $check_usuario['usuario_apellido'];
            $_SESSION['usuario'] = $check_usuario['usuario_usuario'];

            if (headers_sent()) {
                echo "<script>window.location.href='index.php?vista=home'</script>";
            }else {
                header("Location: index.php?vista=home");
            }

        } else {
            echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inerperado!</strong><br>
                El usuario o clave incorrecto.
            </div>
        ';
        }
        
    }else {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El usuario o clave no existe.
        </div>
        ';
    }
    $check_usuario = null;
?>