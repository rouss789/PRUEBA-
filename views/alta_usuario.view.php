<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

    <?php include_once 'partials/headers.php'; ?>
</head>
<body>
    <div class="wrap">
        <div class="display-4 text-center">
            Registro
        </div>
        <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
                <p class="texto-registrate"> Ingrese su correo electrónico y una contraseña</p>
            </div> 
            <div class="form-group">
                <i class="icono izquierda fa fa-envelope-o fa-fw"></i><input type="text" class="usuario" id="Correo" name="correo" placeholder="Correo electrónico" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock fa-fw"></i><input type="password" class="password" id="Contrasena" name="contrasena" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock fa-fw"></i><input type="password" class="password_btn" id="Contrasena" name="contrasena2" placeholder="Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>
            <div class="form-group">
                <i class="icono izquierda  fa-fw"></i><input type="nombre" class="nombre" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <i class="icono izquierda  fa-fw"></i><input type="appaterno" class="appaterno" id="appaterno" name="appaterno" placeholder="Apellido Paterno"> 
                </div> 
            <div class="form-group">
                <i class="icono izquierda  fa-fw"></i><input type="apmaterno" class="apmaterno" id="apmaterno" name="apmaterno" placeholder="Apellido Materno"> </div>
          <div class="form-group">
                <i class="icono izquierda  fa-fw"></i><input type="fecha_ultimo_ingreso" class="fecha_ultimo_ingreso" id="fecha_ultimo_ingreso" name="fecha_ultimo_ingreso" placeholder="Fecha de ingreso"> 
                </div>
          
        
        
           
            
            <?php if(!empty($error)): ?>
                <div class="h3 error">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
        </form>
        <p class="texto-registrate">
			¿ Ya tiene cuenta ?
			<a class="tecnm" href="index.php">Iniciar Sesión</a>
		</p>
    </div>
    <?php include_once 'partials/footers.php'?>
</body>
</html>