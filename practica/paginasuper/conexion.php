<!DOCTYPE html lang="es">
<head>

<style>
body {
  background-color: white;
}

h1 {
  color: black;
  text-align: left;
}

p {
  color: black;  
  font-family: comic;
  font-size: 15px;
}
</style>
</head>

<?php






#datos de conexion
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
$sql="SELECT*FROM persona";
$resultado=$conexion->query($sql);
echo "<h1>Personas</h1>";

while ($fila=$resultado->fetch_assoc()) {

  #imprimir los datos de cada fila
  echo $fila["id"]." | ".$fila["nombre"]. " | ".$fila["apellido"]." | ".$fila["direccion"]." | ".$fila["telefono"]." | ".$fila["DNI"]."<br>-------------------------------------------------------------------------------------</br>";
}
#consulta
$sql="SELECT*FROM alumno";
$resultado=$conexion->query($sql);


#comprobar si se produce un error
if ($conexion->error) {
    die ("Error al ejecutar la consulta");
}
echo "<h1>Alumnos</h1>";
#recorrer los resultados de la consulta
while ($fila=$resultado->fetch_assoc()) {

    #imprimir los datos de cada fila
    echo "<p>".$fila["id"]." | ".$fila["id_persona"]."</p><br>---------------------------------------------------------------</br>";
}
$sql="SELECT*FROM instructores";
$resultado=$conexion->query($sql);
echo "<h1>Instructores</h1>";

while ($fila=$resultado->fetch_assoc()) {

  #imprimir los datos de cada fila
  echo $fila["id"]." | ".$fila["id_persona"]. " | ".$fila["Area"]."<br>---------------------------------------------------------------------------------------------------</br>";
}


$sql="SELECT*FROM cursos";
$resultado=$conexion->query($sql);
echo "<h1>Cursos</h1>";

while ($fila=$resultado->fetch_assoc()) {

    #imprimir los datos de cada fila
    echo $fila["id"]." | ".$fila["nomb"]. " | ".$fila["duracion"]." | ".$fila["id_instructor"]." | ".$fila["cupototal"]." | ".$fila["imagen"]." | "."<br>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
}

$sql="SELECT*FROM inscripcion";
$resultado=$conexion->query($sql);
echo "<h1>Inscripcion</h1>";

while ($fila=$resultado->fetch_assoc()) {

    #imprimir los datos de cada fila
    echo $fila["id"]." | ".$fila["id_alumno"]. " | ".$fila["id_cursos"]." | ".$fila["fecha_de_inscripcion"]."<br>----------------------------------------------------------------------------------------------------------------------------</br>";
}

$sql="SELECT*FROM usuarios";
$resultado=$conexion->query($sql);
echo "<h1>Usuarios</h1>";

while ($fila=$resultado->fetch_assoc()) {

  #imprimir los datos de cada fila
  echo $fila["id"]." | ".$fila["n_usuario"]. " | ".$fila["clave"]. " | ".$fila["id_persona"]. " | ".$fila["ft_perfil"]." | "."<br>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
}

  $conexion->close();
?>
</body>
</html>
♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫♪♫
