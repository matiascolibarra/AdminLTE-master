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
    $ID = $_POST['id'];
    $ID_ALUMNO = $_POST['id_alumno'];
    $ID_CURSO = $_POST['id_curso'];
    $FECHA_DE_INSCRIPCION = $_POST['fecha_de_inscripcion'];
    
}
$sql='INSERT INTO inscripcion (id,id_alumno,id_cursos,fecha_de_inscripcion) values ("'.$ID.'","'.$ID_ALUMNO.'","'.$ID_CURSO.'","'.$FECHA_DE_INSCRIPCION.'")';
$resultado=$conexion->query($sql);
?>
<script>window.location="inscripcion.php";</script>
<?php

$conexion->close();

?>