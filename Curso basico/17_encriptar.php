<?php
    $clave = "contraseña123";

    echo md5($clave); //Convierte la clave a otro string
    echo '<br>' . sha1($clave);
    echo '<br>' . hash("md5",$clave) . '<br>';
    echo '<hr>';

    //funciones que soporta hash 
    foreach (hash_algos() as $algoritmos) {
        echo "$algoritmos - " . hash($algoritmos, $clave) . "<br>" ;
    }

    echo '<hr>';

    //Passpord_hash: Crea una contraseña encriptada distinta
    echo password_hash($clave, PASSWORD_DEFAULT);
    echo '<br>' . password_hash($clave, PASSWORD_BCRYPT, ["cost" =>11]);

    $procesar_clave = password_hash($clave, PASSWORD_BCRYPT, ["cost" =>11]);

    if(password_verify($clave, $procesar_clave)){
        echo '<br>Las claves coinciden';
    } else {
        echo '<br>Las claves no coinciden';
    }
?>