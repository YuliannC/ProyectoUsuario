<?php
require_once "modelo/compras_modelo.php";
class compras_controlador{
    public function __construct(){
        $this->vista= new  estructura();
        //  if(!isset($_SESSION["USU_ID"])){
        //     header("location: /AESTHETIC90SMC");
        // }

    }
    public function  principal(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("compras/principal");
        
    }
    public function  agregaralcarrito(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("compras/addtocart");
        
    }
    public function  proceso(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("compras/process");
        
    }
    public function  carrolista(){
        $this->vista->unirContenido("compras/cart");
        
    }
    public function  productos(){
        $this->vista->unirContenido("compras/products");
        
    }
    public function  quitar(){
        $this->vista->unirContenido("compras/delfromcart");
        
    }
    public function  listar(){
        $this->vista->unirContenido("compras/listar");
        
    }

    
}
?>