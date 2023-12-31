<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tablas de Usuarios</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../estilos.css">
</head>
<body class="hold-transition sidebar-mini">
<?php
include "../clases/conexiondb.php";


$sql="SELECT*FROM usuarios";
$resultado=$conexion->query($sql);
?>


 <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre de usuario</th>
              <th>Clave</th>
              <th>ID Persona</th>
              <th>Foto de Perfil</th>
            </tr>
            
          </thead>
          <tbody>

<?php
echo  '<h3 class="card-title">Usuarios</h3><br>';

while ($fila=$resultado->fetch_assoc()) {
echo'            <tr>
              <td>'.$fila["id"].'</td>
              <td>'.$fila["n_usuario"].'</td>
              <td>'.$fila["clave"].'</td>
              <td>'.$fila["id_persona"].'</td>
              <td>'.$fila["ft_perfil"].'</td>
            </tr>';
}
?>
            </tbody>
        </table>
      </div>
      
    </div>
   
  </div>
</div>

 

<?php
require("../clases/close.php");      
?> 


<div class="formulario">
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nuevo usuario</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->       
          <form action="conexion-usuarios.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" name="ID" id="exampleInputEmail1" placeholder="Ingresar ID...">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre del usuario</label>
                <input type="text" class="form-control" name="n_usuario" id="exampleInputPassword1" placeholder="Ingresar Nombre del usuario...">
              </div>
              <div class="form-group">
                <label for="exampleInput">Clave</label>
                <input type="text" class="form-control" name="clave" id="exampleInput" placeholder="Ingresar Clave...">
              </div>
              <div class="form-group">
                <label for="exampleInput2">ID Persona</label>
                <input type="number" class="form-control" name="ID_Persona" id="exampleInput2" placeholder="Ingresar ID Persona...">
              </div>
              <div class="form-group">
                <label for="exampleInput4">Foto de perfil</label>
                <input type="text" class="form-control" name="ft_perfil" id="exampleInput4" placeholder="Ingresar Foto de perfil...">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
            <button onClick="submit;" class="btn btn-primary">ENVIAR</button>
            </div>
          </form>
          <div>
            <a href="../../indez.php">VOLVER AL INICIO</a>
</div>
        </div>
        </div>


<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
</body>
</html>