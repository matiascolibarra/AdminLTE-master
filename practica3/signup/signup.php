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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  
</head>
<body>

<?php

 ?>

<!-- Horizontal Form -->

<!-- 
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Registrarse</h3>
              </div>
             
              <form class="form-horizontal" method="POST" action="controladores.php">
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
             
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" value="Iniciar Sesion" name="ingresarbtn">Registrarse</button>
                  <a class="register" class="btn btn-info" href="../paginaprincipal.html">Volver al Inicio</a>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
             
              </form>
            </div>
          

          </div>

 -->
 <nav class="navbar bg-primary" data-bs-theme="dark">
 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
     Registrarse
    </a>
  </div>
</nav>
          <form method="POST" action="controladores.php" class="bg-warning p-2 text-white bg-opacity-75">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-black" >Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" placeholder="Ingresar Correo electronico">
    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-black">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Ingresar Contraseña">
  </div>
  <button type="submit" class="btn btn-primary " value="Iniciar Sesion" name="ingresarbtn">Registrarse</button>
  <a class="register" class="btn btn-info" href="../paginaprincipal.html">Volver al Inicio</a>
</form>


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








 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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