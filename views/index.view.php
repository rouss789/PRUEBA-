<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

    <?php include_once 'partials/headers.php'; ?>

</head>
<body class="index">
    <div class="wrap">
		<div class="display-4 text-center">
        	Iniciar Sesión
        </div>        
        <form class="formulario" name="login" id ="Formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
				<i class="icono izquierda fa fa-envelope-o fa-fw"></i><input class="usuario" type="text" name="correo" placeholder="Correo" id="Usuario">
			</div>
            <div class="form-group">
				<i class="icono izquierda fa fa-key fa-fw"></i><input class="password_btn" type="password" name="contrasena" placeholder="Contraseña" id="Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>

           <!-- Comprobamos si la variable errores esta seteada, si es asi mostramos los errores -->
			<?php if(!empty($error)): ?>
				<div class="h3 error">
					<ul>
						<?php echo $error; ?>--
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p class="texto-registrate">
			¿ Aún no tiene cuenta ?
			<a class="uam" href="alta_usuario.php">Registro</a>
		</p>
		<p class="texto-registrate">
			¿ Olvidó su contraseña ?
			<!-- <a class="uam" href="solicita_pass.php">Recuperar</a> -->
			<a class="uam" href="recover_pass.php">Recuperar</a>
		</p>
    </div>
    
    <?php include_once 'partials/footers.php'?>
	<!--<script>
		function submit(){
			let  usuario = document.getElementById('Usuario').value;
			let contra = document.getElementById('Contraseña').value;
			if(usuario == "" || contra == ""){
				alert("LLena todo para poder continuar...")
			}
			else{
				$('#Formulario').submit();
			}
    }--->
	</script>
</body>
</html>