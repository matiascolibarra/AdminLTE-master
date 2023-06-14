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
    $ID_Persona= $_POST['ID_persona'];
    $Area=$_POST['area'];
}
$sql="INSERT INTO instructores (id,id_persona,Area) values ($ID,$ID_Persona,$Area)";
$resultado=$conexion->query($sql);
?>
<script>window.location="cursos.php";</script>
<?php

$conexion->close();

?>