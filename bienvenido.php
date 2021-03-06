<?php session_start();
    require 'admin/functions.php';
    $resultados = '';
    $error='';

    if(!isset($_SESSION['correo'])) {

        //header('location: index.php');
    }
    
    $conexion2 = conexion2();
    if(!$conexion2){
        $error = 'true';
        header('location: index.php');
    }

    
    $statement = $conexion2->prepare (
        'SELECT * FROM t_productos'
    );
    
    $statement->execute(array(            
    ));
    $resultados = $statement->fetchAll();   
     

    require 'views/bienvenido.view.php';
?>