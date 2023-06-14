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
$sql="SELECT*FROM persona";
$resultado=$conexion->query($sql);
echo  '<h3 class="card-title">Persona</h3><br>';

while ($fila=$resultado->fetch_assoc()) {
  #imprimir los datos de cada fila
  echo '<div class="row">
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
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>DNI</th>
            </tr>
            
          </thead>
          <tbody>
            <tr>
              <td>'.$fila["id"].'</td>
              <td>'.$fila["nombre"].'</td>
              <td>'.$fila["apellido"].'</td>
              <td>'.$fila["direccion"].'</td>
              <td>'.$fila["telefono"].'</td>
              <td>'.$fila["DNI"].'</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>
   
  </div>
</div>';
}
echo '<div class="formulario">
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nueva Persona</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Ingresar ID...">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Nombre</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresar Nombre...">
              </div>
              <div class="form-group">
                <label for="exampleInput">Apellido</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Ingresar Apellido">
              </div>
              <div class="form-group">
                <label for="exampleInput2">Direccion</label>
                <input type="text" class="form-control" id="exampleInput2" placeholder="Ingresar Direccion...">
              </div>
              <div class="form-group">
                <label for="exampleInput3">Telefono</label>
                <input type="number" class="form-control" id="exampleInput3" placeholder="Ingresar Telefono...">
              </div>
              <div class="form-group">
                <label for="exampleInput4">DNI</label>
                <input type="number" class="form-control" id="exampleInput4" placeholder="Ingresar DNI...">
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Subir</button>
            </div>
          </form>
        </div>
        </div>';

$conexion->close();
?>
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
###class persona{
    public $id_persona;
    public $nombre;
    public $apellido;
    public $direccion;
    public $telefono;
    public $DNI;
}





