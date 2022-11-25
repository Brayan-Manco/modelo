<?php
/*=============================================
tabla caridad
=============================================*/

// funcion actualizar

static public function mdlActualizarCaridad($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreCaridad=:NombreCaridad, DescripcionCaridad=:DescripcionCaridad, LogoCaridad=:LogoCaridad WHERE id = :id");

    $stmt->bindParam(":NombreCaridad", $datos["NombreCaridad"], PDO::PARAM_STR);
    $stmt->bindParam(":DescripcionCaridad", $datos["DescripcionCaridad"], PDO::PARAM_STR);
    $stmt->bindParam(":LogoCaridad", $datos["LogoCaridad"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla posicion
=============================================*/

// funcion actualizar

static public function mdlActualizarPosicion($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombrePosicion=:NombrePosicion, DescripcionPosicion=:DescripcionPosicion, TarifaPago=:TarifaPago WHERE id = :id");

    $stmt->bindParam(":NombrePosicion", $datos["NombrePosicion"], PDO::PARAM_STR);
    $stmt->bindParam(":DescripcionPosicion", $datos["DescripcionPosicion"], PDO::PARAM_STR);
    $stmt->bindParam(":TarifaPago", $datos["TarifaPago"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}


/*=============================================
tabla pais
=============================================*/

// funcion actualizar

static public function mdlActualizarPais($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombrePais=:NombrePais, BanderaPais=:BanderaPais WHERE id = :id");

    $stmt->bindParam(":NombrePais", $datos["NombrePais"], PDO::PARAM_STR);
    $stmt->bindParam(":BanderaPais", $datos["BanderaPais"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}


/*=============================================
tabla hojatiempo
=============================================*/

// funcion actualizar

static public function mdlActualizarHojaTiempo($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET FechaInicio=:FechaInicio, FechaFinal=:FechaFinal, ValorPagar=:ValorPagar, FK_PersonalID=:FK_PersonalID WHERE id = :id");

    $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
    $stmt->bindParam(":FechaFinal", $datos["FechaFinal"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorPagar", $datos["ValorPagar"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_PersonalID", $datos["FK_PersonalID"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla usuario
=============================================*/

// funcion actualizar 

static public function mdlActualizarUsuario($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Email=:Email, Contrasena=:Contrasena, Nombres=:Nombres, Apellido=:Apellido, FK_RolID=:FK_RolID WHERE id = :id");

    $stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
    $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
    $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_RolID", $datos["FK_RolID"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla voluntario
=============================================*/

// funcion actualizar 

static public function mdlActualizarVoluntario($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombres=:Nombres, Apellidos=:Apellidos, FK_CodigoPais=:FK_CodigoPais, FK_Genero=:FK_Genero WHERE id = :id");

    $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_CodigoPais", $datos["FK_CodigoPais"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_Genero", $datos["FK_Genero"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla TipoEvento
=============================================*/

// funcion actualizar 

static public function mdlActualizarTipoEvento($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET NombreTipoEvento=:NombreTipoEvento WHERE id = :id");

    $stmt->bindParam(":NombreTipoEvento", $datos["NombreTipoEvento"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla Rol
=============================================*/

// funcion actualizar 

static public function mdlActualizarRol($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Rol=:Rol WHERE id = :id");

    $stmt->bindParam(":Rol", $datos["Rol"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla personal
=============================================*/

// funcion actualizar 

static public function mdlActualizarPersonal($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombres=:Nombres, Apellidos=:Apellidos, FechaNacimiento=:FechaNacimiento, Genero=:Genero, Comentarios=:Comentarios, FK_RolID=:FK_RolID, FK_PosicionID=:FK_PosicionID WHERE id = :id");

    $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
    $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);
    $stmt->bindParam(":Comentarios", $datos["Comentarios"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_RolID", $datos["FK_RolID"], PDO::PARAM_STR);
    $stmt->bindParam(":FK_PosicionID", $datos["FK_PosicionID"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla Genero
=============================================*/

// funcion actualizar 

static public function mdlActualizarGenero($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Genero=:Genero WHERE id = :id");

    $stmt->bindParam(":Genero", $datos["Genero"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla EstadoRegistro
=============================================*/

// funcion actualizar
static public function mdlActualizarEstadoRegistro($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET EstadoRegistro=:EstadoRegistro WHERE id = :id");

    $stmt->bindParam(":EstadoRegistro", $datos["EstadoRegistro"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}

/*=============================================
tabla kitcompeticion
=============================================*/

// funcion actualizar
static public function mdlActualizarKitcompeticion($tabla, $datos){
	
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET OpcionKit=:OpcionKit, ValorKit=:ValorKit  WHERE id = :id");

    $stmt->bindParam(":OpcionKit", $datos["OpcionKit"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorKit", $datos["ValorKit"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    if($stmt->execute()){

        return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();

    $stmt = null;	

}
