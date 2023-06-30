<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
session_start();

if ( !empty($_POST['usuario']) && !empty($_POST['password'])) {
$records = $conn->prepare ('SELECT id, usuario, contrasena FROM usuario WHERE usuario=:usuario');
$records->bindParam (':usuario', $_POST['usuario']);
$records->execute();
$results = $records->fetch(PDO::fetch_assoc);



if(count($results) > 0 && password_verify ($_POST ['password'], $results ['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header ('Location: ../indez.php');
}else{
    $message = 'Sorry, These credentials do not match';
}

}







?>


   <form action="conexiondb.php" method="POST">
    <label for="usuario" >Usuario</label>
    <input type="text" name="usuario" placeholder="Ingresar Usuario">
    <br><br>
    <label for="contraseña" >Contraseña</label>
    <input type="password" name="password" placeholder="Ingresar Contraseña">
    <br><br>
    <input type="submit" >
</form>
</body>
</html>