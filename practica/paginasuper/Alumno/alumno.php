<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

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
$sql="SELECT*FROM alumno";
$resultado=$conexion->query($sql);
?>
  <header class="header-2">
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
              <th>ID Persona</th>
            </tr>
            
          </thead>
          <tbody>
           
<?php
echo  '<header class="header-1>"<h3 class="card-title-1">Alumnos</h3></header><br>';

while ($fila=$resultado->fetch_assoc()) {
  #imprimir los datos de cada fila
  echo '

  <tr><td>'.$fila["id"].'</td>
              <td>'.$fila["id_persona"].'</td>
              </tr>';
}
?>

          </tbody>
        </table>
      </div>
      
    </div>
   
  </div>
</div>
</header>
<?php
$conexion->close();
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
            <h3 class="card-title">Nuevo alumno</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="conexion-alumno.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" name="ID" id="exampleInputEmail1" placeholder="Ingresar ID...">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ID Persona</label>
                <input type="number" class="form-control" name="ID_Persona" id="exampleInputPassword1" placeholder="Ingresar ID Persona...">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">

            <button onClick="submit;">Refresh Page</button>
            </div>
          </form>
        </div>
        </div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
