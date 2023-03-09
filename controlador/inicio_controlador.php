<?php
class inicio_controlador{

    public function __construct(){
      $this->vista = new estructura();
    }

    public function index(){
     $this->vista->unirContenido("inicio/login",false);
    }
    public function frmRegistrocliente(){
      $this->vista->unirContenido("inicio/frmRegistrocliente",false);
    }
    public function aaa(){
      $this->vista->unirContenido("inicio/oe");
    }
    
    public function principal(){
      // if(!isset($_SESSION["USU_ID"])){
      //     header("location: /");
      // }
      $this->vista->unirContenido("inicio/principal");
  }

}
?>
