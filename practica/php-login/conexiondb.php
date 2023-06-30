<?php
$host="localhost";
$user= "root";
$contra="";
$nombre= "login";

#conexion
$conexion = new mysqli($host,$user,$contra,$nombre);


#comprobar si se produce un error
if ($conexion->connect_error) {
    die ("Error al conectar a la base de datos");
}

session_start();

if ($_POST){
    $USUARIO = $_POST['usuario'];
    $CONTRASENA= $_POST['password'];
}

$sql='SELECT * FROM usuario';
$resultado=$conexion->query($sql);
?>
<script>window.location="login.php";</script>
<?php
$conexion->close();

?>