<?php
    require 'admin/functions.php';
    $error = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
        $pass = $_POST['contrasena'];
        $pass = hash('sha512', $pass);

        if(empty($correo) or empty($pass)){
            $error .= '<i>Favor de rellenar todos los campos.</i>';
        }else{
            $conexion1 = conexion1();
            if(!$conexion1){
                header('Location: error.php');
            }

            $consulta = $conexion1->prepare(
                'SELECT * FROM t_usuario WHERE correo= :correo AND contrasena = :pass'
            );
            $consulta ->execute(array(
                ':correo' => $correo,
                ':pass' => $pass
            ));

            $resultado = $consulta -> fetch();

            if($resultado !== false){
                $_SESSION['correo'] = $correo;
                $_SESSION['nombre'] = $resultado['nombre'];
                $_SESSION['appaterno'] = $resultado['appaterno'];
                $_SESSION['apmaterno'] = $resultado['apmaterno'];
                $_SESSION['fecha_ultimo_ingreso'] = $resultado['fecha_ultimo_ingreso'];
            
                header('location: bienvenido.php');
                $enviado = true;
            }else{
                $error .= '<li>El usuario o contraseña son incorrectos</li>';
            }
        }
    }

    require 'views/index.view.php';
?>