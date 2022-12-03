<?php

class ModeloRol {
    
    /*=============================================
    tabla Rol
    =============================================*/

    //funcio crear 

    static public function mdlRol($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Rol) 
        VALUES (:Rol)");

        $stmt->bindParam(":Rol", $datos["Rol"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRol($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}