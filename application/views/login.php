<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- CSS  -->
  <link href="<?= base_url() ?>public/css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body class="body">
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="<?= base_url() ?>public/img/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <div id="alert"></div>

            <form id="loginform">
				        
                <div id="email" class="form-group">
                    <input class="form-control" placeholder="Ingrese Correo Electronico" name="email" type="text" required>
                    <div class="invalid-feedback"></div>
                </div>
                
                <div class="form-group" id="password">
                    <input class="form-control" placeholder="Ingrese Contraseña" name="password" type="password" required>
                    <div class="invalid-feedback"></div>
                </div>
                
                <button type="submit" class="btn btn-lg btn-success btn-block btn-signin">Iniciar Sesión</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="<?= base_url() ?>public/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>public/js/login.js"></script>

  </body>
</html>
