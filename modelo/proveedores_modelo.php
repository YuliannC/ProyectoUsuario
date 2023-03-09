<?php
class proveedores_modelo{
  public static function mdlRegistrar($datos){
    $o = new conexion();
    $c = $o->getConexion();
    $sql = "INSERT INTO t_proveedores
            (PROV_NIT,PROV_NOMBRE, PROV_TELEFONO, PROV_DIRECCION, PROV_SECCION)
            VALUES
            (?, ? , ? , ? , ?)";
    $s = $c->prepare($sql);
    $v = array($datos["nit"],$datos["nombre"],$datos["telefono"],$datos["direccion"],$datos["seccion"]);        
    return $s->execute($v);
  }
  //funcion de editar
 //funcion de editar
 public static function mdlBuscarXID($cli_id){
  $o = new conexion();
  $c = $o->getConexion();
  $sql = "SELECT * FROM t_proveedores WHERE PROV_ID = ?";
  $s = $c->prepare($sql);
  $v = array($cli_id);
  $s->execute($v);
  return $s->fetch();

}
  
  //validacion de que exista el cliente
  public static function mdlConsultarXDOC($cli_documento){
      $o = new conexion();
      $c = $o->getConexion();
      $sql = "SELECT * FROM t_clientes WHERE CLI_DOCUMENTO = ?";
      $s = $c->prepare($sql);
      $v = array($cli_documento);
      $s->execute($v);
      return $s->fetch();
  }
  
  public static function mdlEditar($datos){
    $o = new conexion();
    $c = $o->getConexion();
    $sql = "UPDATE t_proveedores SET PROV_NIT = ?, PROV_NOMBRE = ?, PROV_TELEFONO = ?, PROV_DIRECCION = ?, PROV_SECCION = ? WHERE PROV_ID = ?";       
    $s = $c->prepare($sql);
    $v = array($datos["nit"],$datos["nombre"],$datos["telefono"],$datos["direccion"],$datos["seccion"],$datos["cli_id"]);        
    return $s->execute($v);
  }
  public static function mdlListar(){
    $o = new conexion();
    $c = $o->getConexion();
    $sql = "SELECT * FROM t_proveedores";
    $s = $c->prepare($sql); 
    $s->execute();  
    return $s->fetchAll();
}
public static function mdlEliminar($datos){
  $o = new conexion();
  $c = $o->getConexion();
  $sql = "UPDATE t_proveedores SET PROV_ESTADO = 2 WHERE PROV_ID = ?";
  $s = $c->prepare($sql);
  $v = array($datos);        
  return $s->execute($v);

}
// public static function mdlconsultarBynombre($nombre){
//   $o = new conexion();
//   $c = $o->getConexion();
//   $sql = "SELECT * FROM t_proveedores WHERE PROV_NOMBRE LIKE '$nombre%' AND PROV_ESTADO = 1";
//   $s = $c->prepare($sql);
//   $v = array($nombre);
//   $s->execute();        
//   return $s->fetchAll();
// }
public static function mdlconsultarByMatricula($matricula){
  $o = new conexion();
        $c = $o->getConexion();
        $sql = "SELECT * FROM t_proveedores WHERE PROV_NOMBRE LIKE '$matricula%' AND PROV_ESTADO = 1";
        $s = $c->prepare($sql);
        $v = array($matricula);
        $s->execute();        
        return $s->fetchAll();
}
public static function mdlDetalles($id){
  $obj = new conexion();
  $con = $obj -> getConexion();
  $sql = "SELECT * FROM T_CLIENTES WHERE CLI_ID = ?";
  $s   = $con->prepare($sql);
  $v   = array($id);
  $s->execute($v); 
  return $s->fetch();
}
// public static function mdlvalidar($datos){
//   $o = new conexion();
//   $c =$o->getConexion();
//  $sql = "SELECT * FROM T_CLIENTES WHERE CLI_DOCUMENTO = ? AND CLI_PASS = ?";
//   $s= $c->prepare($sql);
//   $v= array($datos["usuario"], sha1($datos["password"]));
//   $s-> execute($v);
//   return $s->fetch();
// }
public static function mdlvalidar($datos){
$obj = new conexion();
  $con = $obj -> getConexion();
  $sql = "SELECT * FROM t_clientes WHERE CLI_DOCUMENTO= ? AND CLI_PASS=?";
  $s   = $con->prepare($sql);
  $v   = array($datos["usuario"], Sha1($datos["password"]));
  $s->execute($v); 
  return $s->fetch();
}
  
}
?>