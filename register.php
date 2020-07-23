<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../index.php"><b>Clinica </b>Amigos En Apuros</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Datos Generales</p>

      <form action="../../index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="NombrePersona" class="form-control" placeholder="Nombre Completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
			<select name="TipoIdentidad" class="form-control" >
			    <option disabled selected>Tipo de Identidad</option>
                            <option value="f">Identidad</option>
			    <option value="m">Pasaporte</option>
                            <option value="m">Visa de trabajo</option>
			</select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <input type="text" name="num_identidad" class="form-control" placeholder="# Identidad" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
             <select name="genero" class="form-control">
			    <option disabled selected>Genero</option>
                            <option value="f">Femenino</option>
			    <option value="m">Masculino</option>
	     </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
        <input type="text" name="num_telefono" class="form-control" placeholder="Telefono" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
         <input type="text" name="fecha_nacimiento" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="Fecha de nacimiento 'dd-mm-yyyy'" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
         <textarea name="direccion" class="form-control" placeholder="Dirección"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
          <div class="input-group mb-3">
         <select name="tipo_sangre" class="form-control">
			    <option disabled selected>Tipo De Sangre</option>
                            <option value="A+">A+</option>
			    <option value="A-">A-</option>
			    <option value="B+">B+</option>
			    <option value="B-">B-</option>
			    <option value="O+">O+</option>
			    <option value="O-">O-</option>
			</select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="CorreoElectronico" class="form-control" placeholder="Correo Electronico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Contraseña" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Contraseña2" class="form-control" placeholder="Repetir Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">Ya Estoy Registrado</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
