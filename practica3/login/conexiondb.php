<?php


$host="localhost";
$user= "root";
$contra="";
$nombre= "login";

#conexion
$conexion = new mysqli($host,$user,$contra,$nombre);
$conexion->set_charset("utf8");

#comprobar si se produce un error
if ($conexion->connect_error) {
    die ("Error al conectar a la base de datos");
}



?>