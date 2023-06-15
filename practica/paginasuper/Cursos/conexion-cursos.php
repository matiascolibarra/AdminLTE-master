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
    $nomb= $_POST['nomb'];
    $duracion= $_POST['duracion'];
    $id_instructor= $_POST['id_instructor'];
    $cupototal= $_POST['cupototal'];
    $imagen= $_POST['imagen'];
}
$sql='INSERT INTO cursos (id,nomb,duracion,id_instructor,cupototal,imagen) values ("'.$ID.'","'.$nomb.'","'.$duracion.'","'.$id_instructor.'","'.$cupototal.'","'.$imagen.'")';
$resultado=$conexion->query($sql);
?>
<script>window.location="cursos.php";</script>
<?php

$conexion->close();

?>