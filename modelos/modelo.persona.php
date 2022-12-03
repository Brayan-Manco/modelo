<?php

class ModeloPersona{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlPersonal($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombres, Apellidos, FechaNacimiento, Genero,Comentarios,FK_RolID,FK_PosicionID) 
        VALUES (:Nombres, :Apellidos,:FechaNacimiento,:Genero,:Comentarios,:FK_RolID,:FK_PosicionID)");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);
        $stmt->bindParam(":Comentarios", $datos["Comentarios"], PDO::PARAM_STR);
        $stmt->bindParam(":FK_RolID", $datos["FK_RolID"], PDO::PARAM_STR);
        $stmt->bindParam(":FK_PosicionID", $datos["FK_PosicionID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPersonal($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}