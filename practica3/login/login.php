<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>

    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>

<?php
 include("conexiondb.php");
 include("controlador.php");
 ?>

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Iniciar Sesion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3"  name="usuario" placeholder="Ingresar Usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Ingresar Contraseña">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Iniciar Sesion" name="ingresarbtn">Iniciar Sesion</button>
                  <a class="register" class="btn btn-info" href="../paginaprincipal.html">Volver al Inicio</a>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>

<!-- <main>
    <form method="POST" action="">
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Ingresar Usuario">
        <br><br>
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Ingresar Contraseña">
        <br><br>
        <input type="submit" value="Iniciar Sesion" name="ingresarbtn" >
    </form>
    </main>
    

 -->








    
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>