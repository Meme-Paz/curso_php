<?php
    /*
    echo 'Nombre: '.$_FILES['fichero']['name'].'<br>';
    echo 'Ruta temporal: '.$_FILES['fichero']['tmp_name'].'<br>';
    echo 'Tipo de archivo: '.$_FILES['fichero']['type'].'<br>';
    echo 'Error: '.$_FILES['fichero']['error'].'<br>';
    echo 'Tamaño en bytes: '.$_FILES['fichero']['size'].'<br>';
    */

    //Ficheros distintos a los pedidos
    if (mime_content_type($_FILES['fichero']['tmp_name'])!="image/jpeg" 
        && mime_content_type($_FILES['fichero']['tmp_name'])!="image/png") {
        echo "Tipo de fichero no admitido";
        exit();
    }  
    
    //Limitamos el tamaño del archivo
    if (($_FILES['fichero']['size']/1024)>300) {
        echo "Limite permitido alcanzado";
        exit();
    }

    // Verifica si el directorio "archivos" no existe
    if (!file_exists("archivos")) {
        // Intenta crear el directorio con permisos 0777 (lectura y escritura para todos)
        if (!mkdir("archivos", 0777)) {
            // Si hay un error al crear el directorio, muestra un mensaje y sale del script
            echo 'Error al crear el directorio';
            exit();
        } 
    }

    // Cambia los permisos del directorio "archivos" a 0777
    chmod("archivos", 0777);

    // Verifica si se ha subido correctamente el archivo desde el formulario
    if (move_uploaded_file($_FILES['fichero']['tmp_name'], "archivos/" . $_FILES['fichero']['name'])) {
        // Si se ha subido correctamente, muestra un mensaje de éxito
        echo 'Archivo subido con éxito';
    } else {
        // Si hay un error al subir el archivo, muestra un mensaje de error
        echo 'Error al subir el archivo';
    }
?>