<?php

if (!empty($_POST['ingresarbtn'])) {
    if (empty($_POST['usuario']) and empty($_POST['password'])) {
        echo "Los campos estan vacios";
    } else {
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['password'];
        $sql=$conexion->query("SELECT * FROM users where usuario='$usuario' and contraseña='$contraseña' ");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo "Acesso Denegado";
        }
    }

 }









?>