<?php

class ModeloVoluntario {
    
    /*=============================================
    tabla voluntario
    =============================================*/

    //funcio crear 

    static public function mdlVoluntario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombres, Apellidos, FK_CodigoPais, FK_Genero) 
        VALUES (:Nombres, :Apellidos,:FK_CodigoPais,:Apellido,:FK_RolID)");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":FK_CodigoPais", $datos["FK_CodigoPais"], PDO::PARAM_STR);
        $stmt->bindParam(":FK_Genero", $datos["FK_Genero"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarVoluntario($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}