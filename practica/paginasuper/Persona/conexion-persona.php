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
    $NOMBRE = $_POST['nombre'];
    $APELLIDO = $_POST['apellido'];
    $DIRECCION = $_POST['direccion'];
    $TELEFONO = $_POST['telefono'];
    $DNI = $_POST['dni'];
    /* $DELETE = $_POST['delete']; */
    
    
}
$sql='INSERT INTO persona (id,nombre,apellido,direccion,telefono,DNI) values ("'.$ID.'","'.$NOMBRE.'","'.$APELLIDO.'","'.$DIRECCION.'","'.$TELEFONO.'","'.$DNI.'")';
$resultado=$conexion->query($sql);
/* 
$sql="DELETE FROM persona where id == $DELETE ";
$resultado=$conexion->query($sql);
*/
?>
<script>window.location="persona.php";</script>
<?php

$conexion->close();

?>