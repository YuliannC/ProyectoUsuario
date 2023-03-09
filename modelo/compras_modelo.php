<?php
class compras_modelo{
    public static function mdlListar(){
      $o = new conexion();
      $c = $o->getConexion();
      $sql = "SELECT * FROM product_cart";
      $s = $c->prepare($sql); 
      $s->execute();  
      return $s->fetchAll();
  }
}
?>