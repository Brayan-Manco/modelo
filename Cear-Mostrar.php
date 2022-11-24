<?php


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

/*=============================================
tabla posicion
=============================================*/

//funcio crear 

static public function mdlPosicion($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePosicion, DescripcionPosicion, TarifaPago) 
    VALUES (:NombrePosicion, :DescripcionPosicion, :TarifaPago)");

    $stmt->bindParam(":NombrePosicion", $datos["NombrePosicion"], PDO::PARAM_STR);
    $stmt->bindParam(":DescripcionPosicion", $datos["DescripcionPosicion"], PDO::PARAM_STR);
    $stmt->bindParam(":TarifaPago", $datos["TarifaPago"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarPosicion($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;	
}


/*=============================================
tabla pais
=============================================*/

//funcio crear 

static public function mdlPais($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePais, BanderaPais) 
    VALUES (:NombrePais, :BanderaPais)");

    $stmt->bindParam(":NombrePais", $datos["NombrePais"], PDO::PARAM_STR);
    $stmt->bindParam(":BanderaPais", $datos["BanderaPais"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarPais($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;	
}


/*=============================================
tabla hojatiempo
=============================================*/

//funcio crear 

static public function mdlHojatiempo($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaInicio, FechaFinal, ValorPagar, FK_PersonalID) 
    VALUES (:FechaInicio, :FechaFinal,:ValorPagar,:FK_PersonalID)");

    $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
    $stmt->bindParam(":FechaFinal", $datos["FechaFinal"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorPagar", $datos["ValorPagar"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_PersonalID", $datos["FK_PersonalID"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarHojatiempo($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}

/*=============================================
tabla usuario
=============================================*/

//funcio crear 

static public function mdlUsuario($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Email, Contrasena, Nombres, Apellido, FK_RolID) 
    VALUES (:Email, :Contrasena,:Nombres,:Apellido,:FK_RolID)");

    $stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
    $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
    $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_RolID", $datos["FK_RolID"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarUsuario($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}

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

/*=============================================
tabla TipoEvento
=============================================*/

//funcio crear 

static public function mdlTipoEvento($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreTipoEvento) 
    VALUES (:NombreTipoEvento)");

    $stmt->bindParam(":NombreTipoEvento", $datos["NombreTipoEvento"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarTipoEvento($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}

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



/*=============================================
tabla GEnero
=============================================*/

//funcio crear 

static public function mdlGenero($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Genero) 
    VALUES (:Genero)");

    $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarGenero($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}

/*=============================================
tabla EstadoRegistro
=============================================*/

//funcio crear 

static public function mdlEstadoRegistro($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(EstadoRegistro) 
    VALUES (:EstadoRegistro)");

    $stmt->bindParam(":EstadoRegistro", $datos["EstadoRegistro"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarEstadoRegistro($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}


/*=============================================
tabla kitcompeticion
=============================================*/

//funcio crear 

static public function mdlKitcompeticion($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(OpcionKit, ValorKit) 
    VALUES (:OpcionKit,:ValorKit)");

    $stmt->bindParam(":OpcionKit", $datos["OpcionKit"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorKit", $datos["ValorKit"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarKitcompeticion($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}


/*=============================================
tabla kitcompeticion
=============================================*/

//funcio crear 

static public function mdlKitcompeticion($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(OpcionKit, ValorKit) 
    VALUES (:OpcionKit,:ValorKit)");

    $stmt->bindParam(":OpcionKit", $datos["OpcionKit"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorKit", $datos["ValorKit"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }
    $stmt->close();
    $stmt = null;	

}

// funcion mostrar

static public function mdlSeleccionarKitcompeticion($tabla){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();
    return $stmt -> fetchAll();
    $stmt->close();
    $stmt = null;
}
