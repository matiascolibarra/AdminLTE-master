<?php 

require '../login/conexiondb.php';

if ($_POST){
    $USUARIO= $_POST['usuario'];
    $CONTRASEÑA=$_POST['password'];
}
$sql='INSERT INTO users (usuario,contraseña) values ("'.$USUARIO.'","'.$CONTRASEÑA.'")';
$resultado=$conexion->query($sql);
?>
<script>window.location="signup.php";</script>
<?php

$conexion->close();


?>