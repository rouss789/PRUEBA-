<?php session_start();
    require 'admin/functions.php';
    $resultados2 = '';

    if(!isset($_SESSION['correo'])) {
        //header('location: index.php');
    }
    
    $clave = $_GET['Id_producto'];

    $conexion2 = conexion2();
    if(!$conexion2){
        $error = 'true';
        header('location: index.php');
    }

    if(!is_null($clave)){
        $statement = $conexion2->prepare (
            'SELECT * FROM t_productos WHERE Id_producto = :clave'
        );
        $statement->execute(array(
            ':clave' => $clave
        ));
        $resultados2 = $statement->fetch();
    } 

    require 'views/consulta_producto.view.php';
?>