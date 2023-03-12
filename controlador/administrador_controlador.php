<?php
require_once "modelo/administrador_modelo.php";
class administrador_controlador{
    //FUNCION UNIR LA ESTRUCTURA
    public function __construct(){
        $this->vista= new  estructura();
        //  if(!isset($_SESSION["USU_ID"])){
        //     header("location: /AESTHETIC90SMC");
        // }
    }
    // FUNCION UNIR CONTENIDO
    public function  principal(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("administrador/principal",false);
        
    }
    //FUNCION LISTAR PQR(PETICIONES,QUEJAS Y SUGERENCSIAS)
    public function  listarPQR(){
        $this->vista->datos = administrador_modelo::mdlListar();
        $this->vista->unirContenido("administrador/pqr",false);
        
    }
    //FUNCION UNIR REGISTRO
     public function registros(){
         $this->vista->unirContenido("administrador/registro");
        //  if($_SESSION['CLI_ROL'] == "Administrador" ||
        //         $_SESSION['CLI_ROL'] == "Mecanico")
    }
    //FUNCION UNIR CONTACTANOS
    public function contactanos(){
        $this->vista->unirContenido("administrador/contactanos");
       //  if($_SESSION['CLI_ROL'] == "Administrador" ||
       //         $_SESSION['CLI_ROL'] == "Mecanico")
    }
    public function verblog(){
        $this->vista->unirContenido("administrador/blog");
       //  if($_SESSION['CLI_ROL'] == "Administrador" ||
       //         $_SESSION['CLI_ROL'] == "Mecanico")
    }
    public function verpedidos(){
        $this->vista->datos = administrador_modelo::mdlListarpedido();
        $this->vista->unirContenido("administrador/pedido",false);
    }
    //FUNCION UNIR REGISTRO DE PQR(PETICIONES,QUEJAS Y SUGERENCIIAS)
    public function registrarPqr(){
        extract($_POST);
        $datos["nombres"]   = $nombres;
        $datos["apellidos"]   = $apellidos;
        $datos["whatsapp"] = $whatsapp;
        $datos["correo"]      = $correo;
        $datos["mensaje"] = $mensaje;

        $r = administrador_modelo::mdlRegistrarPqr($datos);
        if($r > 0){
        echo json_encode(array("mensaje" => "PQR registrado",
                        "icono"=> "success"));
        }else{
            echo json_encode(array("mensaje" => "Error al registrar PQR",
                        "icono"=> "error"));
        }
    } 
    //FUNCION ELIMINAR USUARIO(NO ELIMINA,SOLO DESACTIVA Y ACTIVA AL USUARIO)
  public function eliminar(){
    $id = $_GET["cli_id"];
    $e=administrador_modelo::mdleliminar($id);
    if($e > 0){
        echo json_encode(array("mensaje" => "Se finalizo el pedido" , "icono"=>"success"));
    }else{
        echo json_encode(array("mensaje" => "No se finalizo el pedido" , "icono"=>"error"));
    }
  } 
  public function eliminarcontacto(){
    $id = $_GET["cli_id"];
    $e=administrador_modelo::mdlEliminarcontactanos($id);
    if($e > 0){
        echo json_encode(array("mensaje" => "Se finalizo el pedido" , "icono"=>"success"));
    }else{
        echo json_encode(array("mensaje" => "No se finalizo el pedido" , "icono"=>"error"));
    }
  } 
}
?>