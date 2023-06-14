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

if ($_POST){
    $ID = $_POST['ID'];
    $ID_PERSONA = $_POST['ID_Persona'];
}
$sql="INSERT INTO alumno (id,id_persona) values ($ID,$ID_PERSONA)";
$resultado=$conexion->query($sql);
?>
<script>window.location="alumno.php";</script>
<?php

$conexion->close();

?>