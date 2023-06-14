<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Base de datos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<?php
 echo  '<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Base De Datos</h3>

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
                      <th>Tablas creadas</th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>Ultima modificacion</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="./paginasuper/Usuarios/usuarios.php">Usuarios</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-success">...</span></td>
                      <td>Ayer</td>
                    </tr>
                    <tr>
                      <td><a href="./paginasuper/Persona/persona.php">Personas</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-warning">...</span></td>
                      <td>25/3/2022</td>
                    </tr>
                    <tr>
                      <td><a href="./paginasuper/Instructores/instructores.php">Instructores</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-primary">...</span></td>
                      <td>14/4/2022</td>
                    </tr>
                    <tr>
                      <td><a href="./paginasuper/Alumno/alumno.php">Alumnos</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-danger">...</span></td>
                      <td>30/1/2021</td>
                    </tr>
                    <tr>
                      <td><a href="./paginasuper/Cursos/cursos.php">Cursos</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-success">...</span></td>
                      <td>29/2/2023</td>
                    </tr>
                    <tr>
                      <td><a href="./paginasuper/Inscripcion/inscripcion.php">Inscripcion</a></td>
                      <td>...</td>
                      <td>...</td>
                      <td><span class="tag tag-success">...</span></td>
                      <td>18/5/2009</td>
                    </tr> 
                  </tbody>
                </table>
              </div>
              
            </div>
           
          </div>
        </div>';
     
?>
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
