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
$sql="SELECT*FROM inscripcion";
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
              <th>ID Alumno</th>
              <th>ID Curso</th>
              <th>Fecha de inscripcion</th>
            </tr>
            
          </thead>
          <tbody>
       
<?php
echo  '<h3 class="card-title">Inscripcion</h3><br>';

          while ($fila=$resultado->fetch_assoc()) {
            #imprimir los datos de cada fila
         echo '  <tr>
              <td>'.$fila["id"].'</td>
              <td>'.$fila["id_alumno"].'</td>
              <td>'.$fila["id_cursos"].'</td>
              <td>'.$fila["fecha_de_inscripcion"].'</td>
            </tr>';
}
?>

<?php
$conexion->close();
?>

          </tbody>
        </table>
      </div>
      
    </div>
   
  </div>
</div>

<div class="formulario">
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nueva Inscripcion</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="conexion-inscripcion.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="number" class="form-control" name= "id" id="exampleInputEmail1" placeholder="Ingresar ID...">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">ID Alumno</label>
                <input type="number" class="form-control" name="id_alumno" id="exampleInputPassword1" placeholder="Ingresar ID Alumno...">
              </div>
              <div class="form-group">
                <label for="exampleInput2">ID Curso</label>
                <input type="number" class="form-control" name="id_curso" id="exampleInput2" placeholder="Ingresar ID Curso...">
              </div>
              <div class="form-group">
                <label for="exampleInput3">Fecha de inscripcion</label>
                <input type="date" class="form-control" name="fecha_de_inscripcion" id="exampleInput3" placeholder="Ingresar fecha de inscripcion...">
              </div>
            </div>
            <!-- /.card-body btn btn-primary -->

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


<!-- 

class inscripcion{
    public $id_inscripcion;
    public $id_alumno;
    public $id_cursos;
    public $fecha_de_inscripcion;


    


public function __construct($id_alumno,$id_cursos,$fecha_de_inscripcion){
    $this-> id_alumno = $id_alumno;
    $this-> id_cursos = $id_cursos;
    $this-> fecha_de_inscripcion = $fecha_de_inscripcion;
}

public function nuevainscrip(){
    $sql="INSERT INTO inscripcion (id_alumno,id_cursos,fecha_de_inscripcion) values (".$this-> id_alumno.",".$this-> id_cursos.",".$this-> fecha_de_inscripcion.");";
    $resultado=$conexion->query($sql);

 }
}
$inscrip=new inscripcion("5","3","10/12/2015");
$inscrip->nuevainscrip();

$conexion->close();


 -->