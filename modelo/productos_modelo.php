<?php
class productos_modelo{
    public static function mdlRegistrar($datos){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "INSERT INTO imagenes
        (nombre , imagen, descripcion, precio, cantidad, colores)
        VALUES(?, ?, ?, ?, ?, ?)";
        $s = $con->prepare($sql);
        $v = array(
            $datos["nombre"],
            $datos["imagen"],
            $datos["descripcion"],
            $datos["precio"],
            $datos["cantidad"],
            $datos["color"]
        );
        return $s->execute($v);
    }

    public static function mdlEditar($datos){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "UPDATE T_TP_REVISION SET TPREV_REV_ID  = ?, TPREV_FECHA = ?, TPREV_TIPO = ?, TPREV_OBS = ?  WHERE TPREV_ID = ? ";
        $s   = $con->prepare($sql);
        $v   = array(
            $datos["tprev_rev_codigo"],
            $datos["tprev_fecha"],
            $datos["tprev_tipo"],
            $datos["tprev_obs"],
            $datos["tprev_id"]
        );
        return $s->execute($v);
    }

    public static function mdlEliminar($id){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "UPDATE imagenes SET estado = 2 WHERE cod_imagen = ?";
        $s   = $con->prepare($sql);
        $v   = array($id);
        return $s->execute($v);
    }

    public static function mdlDetalles($id){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "SELECT * FROM imagenes WHERE cod_imagen = ?";
        $s   = $con->prepare($sql);
        $v   = array($id);
        $s->execute($v); 
        return $s->fetch();
    }


    public static function mdlconsultarXnombre($titulo){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "SELECT * FROM imagenes WHERE titulo LIKE '$titulo%' AND estado = 1";
        $s = $con->prepare($sql);
        $v = array($titulo);
        $s->execute();   
        return $s->fetchAll();
    }
    public static function mdlconsultarXfecha($fecha){
        $o = new conexion();
        $c = $o->getConexion();
        $sql = "SELECT * FROM imagenes WHERE nombre LIKE '$fecha%' AND estado = 1";
        $s = $c->prepare($sql);
        $v = array($fecha);
        $s->execute();        
        return $s->fetchAll();
    }
    
    public static function mdlconsultarXcodigo($codigo){
        $obj = new conexion();
        $con = $obj -> getConexion();
        $sql = "SELECT * FROM imagenes WHERE nombre LIKE '$codigo%' AND estado = 1";
        $s = $con->prepare($sql);
        $v = array($codigo);
        $s->execute();   
        return $s->fetchAll();
    }
}