<?php

static public function mdlCaridad($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreCaridad, DescripcionCaridad, LogoCaridad) VALUES (:NombreCaridad, :email, :DescripcionCaridad)");

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

/*=============================================
Seleccionar Registros
=============================================*/

static public function mdlSeleccionarRegistros($tabla, $item, $valor){

    if($item == null && $valor == null){

        $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

        $stmt->execute();

        return $stmt -> fetchAll();

    }else{

        $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");

        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt -> fetch();
    }

    $stmt->close();

    $stmt = null;	

}
