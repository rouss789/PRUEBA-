<?php
//require 'config_bd.php';

    function conexion1(){
        try {
       // $conexion = new PDO('mysql:host=localhost;dbname='.$bd1_config['basedatos'], $bd1_config['usuario'], $bd1_config['pass']);
       
       $conexion = new PDO('mysql:host=localhost;dbname=usuario1', 'paty', '1999Rodri*');
        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->query("SET NAMES 'utf8';");
            return $conexion;
    
        } catch (PDOException $e) {
            return false;		
        }
    }

    function conexion2(){
        try {
      //  $conexion = new PDO('mysql:host=localhost;dbname='.$bd2_config['basedatos'], $bd2_config['usuario'], $bd2_config['pass']);
        $conexion = new PDO('mysql:host=localhost;dbname=productos', 'alva', '17parsh1999');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->query("SET NAMES 'utf8';");
            return $conexion;
    
        } catch (PDOException $e) {
            return false;		
        }
    }
?>