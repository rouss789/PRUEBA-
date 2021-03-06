<?php 
require 'admin/functions.php';

    $enviado = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];        
        $contrasena2 = $_POST['contrasena2'];
        $nombre=$_POST['nombre'];
        $appaterno=$_POST['appaterno'];
        $apmaterno=$_POST['apmaterno'];
        $fecha_ultimo_ingreso=$_POST['fecha_ultimo_ingreso'];
        
        $error = '';
        
        if(!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $error .= '<i>Ingrese una dirección de correo válida</i>';
            }
        }else{
            $error .= '<i>Por favor, ingrese una dirección de correo electrónico</i>';
        }

        if (empty($correo) or empty($contrasena) or empty($contrasena2)){
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion1 = conexion1();
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion1->prepare('SELECT * FROM t_usuario WHERE correo = :correo LIMIT 1');
            //$statement = $conexion1->prepare('SELECT * FROM t_usuario WHERE  correo = :correo LIMIT 1');
            $statement->execute(array(':correo' => $correo));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }

            $contrasena = hash('sha512', $contrasena);
            $contrasena2 = hash('sha512', $contrasena2);

            if ($contrasena != $contrasena2) {
                $error .= '<li>Las contraseñas NO son iguales</li>';
            }   
        }

        if ($error == ''){
            //$statement = $conexion1->prepare('INSERT INTO usuarios (usuario_id, correo, contrasena) VALUES (null, :correo, :contrasena)');
            //$statement = $conexion->prepare('INSERT INTO usuarios (usuario_id, apellidop, apellidom, nombre, correo, contrasena) VALUES (null, :apellido_paterno, :apellido_materno, :nombre, :sufijo, :correo, :contrasena)');
           
            $statement = $conexion1->prepare('INSERT INTO t_usuario (id_usuario,correo,contrasena,nombre, appaterno, apmaterno,fecha_ultimo_ingreso) VALUES (null, :correo, :contrasena, :nombre, :appaterno, :apmaterno, :fecha_ultimo_ingreso)');
            $statement->execute(array(
                //':apellido_paterno' => $apellidop,
                //':apellido_materno' => $apellidom,
                //':nombre' => $nombre,

              
                ':correo' => $correo,
                ':contrasena' => $contrasena,
                ':nombre' => $nombre,
                ':appaterno' => $appaterno,
               ':apmaterno' => $apmaterno,
               ':fecha_ultimo_ingreso' => $fecha_ultimo_ingreso
                
                
                
            ));

            echo '<script language="javascript">alert("Usuario registrado exitósamente");</script>';
            //$alert .= '<i style="color: green;">Usuario registrado exitosamente</i>';
           // mysqli_close($conexion);
            $enviado = 'true';
            header('Location: index.php');
        }
    }
    require './views/alta_usuario.view.php';
?>