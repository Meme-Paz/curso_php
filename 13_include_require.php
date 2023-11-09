<?php
    //Añadir ficheros a Scripts en PHP

    //Include: Sin existencia o error muestra un 'Waring' y se sigue ejecutando.
    
    /*
    include "9_funciones.php";
    include ("9_.php");*/

    include_once "9_funciones.php";
    include_once "9_funciones.php";    

    //Require: Sin existencia o error muestra un 'Fatal error' y no se sigue ejecutando.
    
    /*require ("9_funciones.php");
    require "funciones.php";

    require_once "9_funciones.php";
    require_once "9_funciones.php";*/
?>