<?php
  // INICIO DE LA CLASE ADMINISTRADOR MODELO
class administrador_modelo{
    // FUNCION REGISTRAR PQR(PETICIONES, QUEJAS Y SUGERENCIAS)
    public static function mdlRegistrarPqr($datos){
      $o = new conexion(); 
      $c = $o->getConexion();
      $sql = "INSERT INTO t_contacto
              (CON_NOMBRES, CON_APELLIDO, CON_TELEFONO, CON_CORREO, CON_DESCRIPCION)
              VALUES
              (? , ? , ? , ? , ?)";
      $s = $c->prepare($sql);
      $v = array($datos["nombres"],$datos["apellidos"],$datos["whatsapp"],$datos["correo"],$datos["mensaje"]);        
      return $s->execute($v);
    }
    //FUNCION MODELO EDITAR
    public static function mdlEditar($datos){
      $o = new conexion();
      $c = $o->getConexion();
      $sql = "UPDATE t_contacto SET CON_NOMBRES = ?, CON_APELLIDO = ?, CON_TELEFONO = ?, CON_CORREO = ?, CON_DESCRIPCION = ? WHERE CON_ID = ?";       
      $s = $c->prepare($sql);
      $v = array($datos["nombres"],$datos["apellidos"],$datos["whatsapp"],$datos["correo"],$datos["mensaje"],$datos["cli_id"]);        
      return $s->execute($v);
    }
    //FUNCION MODELO LISTAR
    public static function mdlListar(){
      $o = new conexion();
      $c = $o->getConexion();
      $sql = "SELECT * FROM t_contacto";
      $s = $c->prepare($sql); 
      $s->execute();  
      return $s->fetchAll();
    }
    //FUNCION MODELO DETALLE
    public static function mdlDetalles($id){
    $obj = new conexion();
    $con = $obj -> getConexion();
    $sql = "SELECT * FROM t_contacto WHERE CON_ID = ?";
    $s   = $con->prepare($sql);
    $v   = array($id);
    $s->execute($v); 
    return $s->fetch();
    }
  // FIN DE LA CLASE ADMINISTRADOR MODELO
}
?>