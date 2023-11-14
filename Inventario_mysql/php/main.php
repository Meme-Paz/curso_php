<?php
    //Nueva instancia para conectarse a la base de datos
    function conexion(){
        $pdo = new PDO('mysql:host=localhost;dbname=inventario','root','');
        return $pdo;
    }

    # Verificar datos
    function verificar_datos($filtro, $cadena){
        if (preg_match("/^".$filtro."$/",$cadena)) {
            return false;
        } else {
            return true;
        }        
    }

    # Limpiar cadenas de texto para evitar inyeccion sql
    function limpiar_cadena($cadena){
        //Eliminando espacios en blanco al inicio o final de la cadena
        $cadena = trim($cadena);
        //Quitando barras con un string con comillas escapadas
        $cadena = stripslashes($cadena);
        //Reemplaza texto mediante busqueda ya sea mayuscula o minuscula
        $cadena = str_ireplace("<script>","",$cadena);
        $cadena = str_ireplace("</script>","",$cadena);
        $cadena = str_ireplace("<script src>","",$cadena);
        $cadena = str_ireplace("<script type=>","",$cadena);
        $cadena = str_ireplace("select * from","",$cadena);
        $cadena = str_ireplace("delete from","",$cadena);
        $cadena = str_ireplace("insert into","",$cadena);
        $cadena = str_ireplace("drop table","",$cadena);
        $cadena = str_ireplace("drop database","",$cadena);
        $cadena = str_ireplace("truncate table","",$cadena);
        $cadena = str_ireplace("show tables;","",$cadena);
        $cadena = str_ireplace("show databases;","",$cadena);
        $cadena = str_ireplace("<?php","",$cadena);
        $cadena = str_ireplace(">?","",$cadena);
        $cadena = str_ireplace("--","",$cadena);
        $cadena = str_ireplace("^","",$cadena);
        $cadena = str_ireplace("<","",$cadena);
        $cadena = str_ireplace("[","",$cadena);
        $cadena = str_ireplace("]","",$cadena);
        $cadena = str_ireplace("==","",$cadena);
        $cadena = str_ireplace(";","",$cadena);
        $cadena = str_ireplace("::","",$cadena);
        $cadena = stripslashes($cadena);
        return $cadena;
    }

    # Funcion renombrar fotos
    function renombrar_fotos($nombre){
        $nombre = str_ireplace(" ", "_", $nombre);
        $nombre = str_ireplace("/", "_", $nombre);
        $nombre = str_ireplace("#", "_", $nombre);
        $nombre = str_ireplace("-", "_", $nombre);
        $nombre = str_ireplace("$", "_", $nombre);
        $nombre = str_ireplace(".", "_", $nombre);
        $nombre = str_ireplace(",", "_", $nombre);
        $nombre = $nombre . "_" . rand(0,100);
        return $nombre;
    }

    # Funcion para paginador de tablas
    function paginador_tabla($actual_pag, $total_pag, $url, $botones){
        $tabla='<nav class="pagination is-centered is-rounded" role="navigation" arial-label="pagination">';
        
        if ($actual_pag<=1) {
            $tabla.='
            <a class="pagination-previous is-disabled" disabled>Anterior</a>
            <ul class="pagination-list">
            ';
        } else {
            $tabla.='
            <a href="'.$url.($actual_pag-1).'" class="pagination-previous">Anterior</a>
            <ul class="pagination-list">
                <li><a href="'.$url.'1" class="pagination-link">1</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
            ';
        }

        $cont_it=0;
        for ($i=$actual_pag; $i <=$total_pag ; $i++) { 
            if ($cont_it>=$botones) {
                break;
            }
            if ($actual_pag==$i) {
                $tabla.='
                <li><a href="'.$url.$i.'" class="pagination-link is-current">'.$i.'</a></li>
                ';
            } else {
                $tabla.='
                <li><a href="'.$url.$i.'" class="pagination-link">'.$i.'</a></li>
                ';
            }
            $cont_it++;
        }

        if ($actual_pag==$total_pag) {
            $tabla.='
            </ul>
            <a class="pagination-next is-disabled">Siguiente</a>
            ';
        } else {
            $tabla.='
                <li><span class="pagination-ellipsis">&hellip;</span></li>        
                <li><a href="'.$url.$total_pag.'" class="pagination-link">'.$total_pag.'</a></li>
            </ul>
            <a href="'.$url.($actual_pag+1).'" class="pagination-next">Siguiente</a>
            ';
        }        
        
        $tabla.='</nav>';
        return $tabla;
    }
    