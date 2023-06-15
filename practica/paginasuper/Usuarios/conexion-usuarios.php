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
    $N_USUARIO = $_POST['n_usuario'];
    $CLAVE= $_POST['clave'];
    $ID_PERSONA = $_POST['ID_Persona'];
    $FT_PERFIL= $_POST['ft_perfil'];


}
$sql='INSERT INTO usuarios (id,n_usuario,clave,id_persona,ft_perfil) values ("'.$ID.'","'.$N_USUARIO.'","'.$CLAVE.'","'.$ID_PERSONA.'","'.$FT_PERFIL.'")';
$resultado=$conexion->query($sql);
?>
<script>window.location="usuarios.php";</script>
<?php

$conexion->close();

?>