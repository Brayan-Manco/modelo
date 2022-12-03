<?php


class ModeloCaridad {
    /*=============================================
    tabla caridad
    =============================================*/

    //funcio crear 

    static public function mdlCaridad($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreCaridad, DescripcionCaridad, LogoCaridad) 
        VALUES (:NombreCaridad, :DescripcionCaridad, :LogoCaridad)");

        $stmt->bindParam(":NombreCaridad", $datos["NombreCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":DescripcionCaridad", $datos["DescripcionCaridad"], PDO::PARAM_STR);
        $stmt->bindParam(":LogoCaridad", $datos["LogoCaridad"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarCaridad($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;	
    }
}
