<?php
    # Requerir solo una vez la implementacion de la base de datos
    require_once "main.php";

    # Almacenamos datos
    $nombre = limpiar_cadena($_POST['usuario_nombre']);
    $apellido = limpiar_cadena($_POST['usuario_apellido']);
    $usuario = limpiar_cadena($_POST['usuario_usuario']);
    $email = limpiar_cadena($_POST['usuario_email']);
    $clave1 = limpiar_cadena($_POST['usuario_clave_1']);
    $clave2 = limpiar_cadena($_POST['usuario_clave_2']);

    # Verificando los campos obligatorios
    if ($nombre == "" || $apellido == "" || $usuario == "" || $clave1 == "" || $clave2 == "") {
        echo '
        <div class="notification is-danger is-light">
            <strong>Ocurrio un error inerperado</strong><br>
            No has llenado todos los campos que son obligatorios
        </div>
        ';
        exit();
    }

    #Verificando integridad de los datos
    if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $nombre)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El Nombre no coincide con el formato solicitado
        </div>
        ';
        exit();
    }

    if (verificar_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}", $apellido)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El Apellido no coincide con el formato solicitado
        </div>
        ';
        exit();
    }    
    
    if (verificar_datos("[a-zA-Z0-9_]{4,20}", $usuario)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El Usuario no coincide con el formato solicitado
        </div>
        ';
        exit();
    }

    if (verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave1) || verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave2)) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            Las contraseñas no coinciden con el formato solicitado
        </div>
        ';
        exit();
    }

    # Verificando email
    if ($email !== "") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check_email = conexion();
            $check_email = $check_email->query("select usuario_email from usuario where usuario_email = '$email'");
            if ($check_email->rowCount()>0) {
                echo '
                <div class="notification is-danger is-light">
                    <strong>¡Ocurrio un error inerperado!</strong><br>
                    El email ingresado ya se encuentra registrado.
                </div>
                ';
                exit();
            }
            $check_email = null;
        } else {
            echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inerperado!</strong><br>
                El Email ingresado no es valido
            </div>
            ';
            exit();
        }
    }

    #Verificando usuario
    $check_usuario = conexion();
    $check_usuario = $check_usuario->query("select usuario_usuario from usuario where usuario_usuario = '$usuario'");
    if ($check_usuario->rowCount()>0) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            El usuario ingresado ya se encuentra registrado.
        </div>
        ';
        exit();
    }
    $check_usuario = null;

    # Verificando claves
    if ($clave1 != $clave2) {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            Las claves ingresadas no coinciden
        </div>
        ';
        exit();
    } else {
        $clave = password_hash($clave1, PASSWORD_BCRYPT,["cost"=>10]);
    }
    
    # Guardando datos
    $guardar_usuario = conexion();

    $guardar_usuario = $guardar_usuario -> prepare("insert into usuario (usuario_nombre, usuario_apellido, usuario_usuario, usuario_clave, usuario_email) values (:nombre, :apellido, :usuario, :clave, :email);");

    $marcadores = [
        ":nombre" => $nombre,
        ":apellido" => $apellido,
        ":usuario" => $usuario,
        ":clave" => $clave,
        ":email" => $email
    ];

    $guardar_usuario -> execute($marcadores);

    if ($guardar_usuario -> rowCount()==1) {
        echo '
        <div class="notification is-info is-light">
            <strong>¡Usuario Registrado!</strong><br>
            Usuario registrado exitosamente
        </div>
        ';
    } else {
        echo '
        <div class="notification is-danger is-light">
            <strong>¡Ocurrio un error inerperado!</strong><br>
            No se pudo registrar el usuario
        </div>
        ';
    }
    $guardar_usuario = null;
?>