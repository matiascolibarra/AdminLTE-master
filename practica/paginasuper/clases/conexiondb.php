<?php

$host="localhost";
$user= "root";
$contra="";
$nombre= "centro3";

#conexion
$conexion = new mysqli($host,$user,$contra,$nombre);

#comprobar si se produce un error
if ($conexion->connect_error) {
    die ("Error al conectar a la base de datos");
}


?>