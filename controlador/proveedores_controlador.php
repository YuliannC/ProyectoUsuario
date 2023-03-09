<?php
require_once "modelo/proveedores_modelo.php";
class proveedores_controlador{
    // FUNCION UNIR LA ESTRUCTURA
    public function __construct(){
        $this->vista= new  estructura();
        //  if(!isset($_SESSION["USU_ID"])){
        //     header("location: /AESTHETIC90SMC");
        // }

    }
    // FUNCION UNIR CONTENIDO
    public function  principal(){
        //$this->vista->datos = cliente_modelo::mdlListar();
        $this->vista->unirContenido("proveedores/principal");
        
    }
        //FUNCION UNIR FRM REGISTRO
    public function frmRegistro(){
         $this->vista->unirContenido("proveedores/frmRegistro");
        //  if($_SESSION['CLI_ROL'] == "Administrador" ||
        //         $_SESSION['CLI_ROL'] == "Mecanico")
    }
    public function frmEditar(){
        $id = $_GET["id"];
        $this->vista->datos=proveedores_modelo::mdlBuscarXID($id);
          $this->vista->unirContenido("proveedores/frmEditar");
       //  if($_SESSION['CLI_ROL'] == "Administrador" ||
       //         $_SESSION['CLI_ROL'] == "Mecanico")
   }
    //FUNCION LISTAR PROVEEDORES
    public function listar(){
        $this->vista->datos = proveedores_modelo::mdlListar();
        $this->vista->unirContenido("proveedores/listar");
    }
    //FUNCION REGISTRAR PROVEEDORES
    public function registrar(){
        extract($_POST);
        $datos["nit"]   = $nit;
        $datos["nombre"]   = $nombre;
        $datos["telefono"] = $telefono;
        $datos["direccion"] = $direccion;
        $datos["seccion"]    = $seccion;

        $r = proveedores_modelo::mdlRegistrar($datos);
        if($r > 0){
        echo json_encode(array("mensaje" => "proveedores registrado",
                        "icono"=> "success"));
        }else{
            echo json_encode(array("mensaje" => "Error al registrar un cliente",
                        "icono"=> "error"));
        }
    }
    //FUNCION UNIR CONTENIDO FRM
    public function editar(){
        extract($_POST);
        $datos["cli_id"]    = $cli_id;
        $datos["nit"]   = $nit;
        $datos["nombre"]      = $nombre;
        $datos["telefono"] = $telefono;
        $datos["direccion"] = $direccion;
        $datos["seccion"]    = $seccion;
        $rpta = proveedores_modelo::mdlEditar($datos);
        if($rpta > 0){
        echo json_encode(array("mensaje" => "proveedores actualizado",
                        "icono"=> "success"));
        }else{
            echo json_encode(array("mensaje" => "Error al actualizar un proveedores",
                        "icono"=> "error"));
        }
    }
    // FUNCION ELIMINAR(NO ELIMINA, ATIVA Y DESACTIVA)
    public function eliminar(){
        $id   = $_GET["id"];
        $r    = proveedores_modelo::mdlEliminar($id);
        if($r > 0){
            echo json_encode(array("mensaje" => "proveedor borrado", "icono"=> "success"));
          
        }else{
            echo json_encode(array("mensaje" => "Error al borrar un proveedor",
                        "icono"=> "error"));
        }
      }
    //FUNCION BUSCAR POR NOMBRE
    public function consultarByMatricula(){
        extract($_POST);
        $datos = proveedores_modelo::mdlconsultarByMatricula($matricula);
        $tbl   = "<table class='table'>";
        $tbl   .= "<tr>";
        $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>NIT</td>";
        $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>NOMBRE</td>";
        $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>TELEFONO</td>";
        $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>DIRECCION</td>";
        $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>SECCION</td>";
        $tbl   .= "</tr>";
        foreach($datos as $v){
        $id = $v["PROV_ID"];
        $e = "<a href='?controlador=proveedores&accion=eliminar&id=$id' class='eliminar btn btn-info''>Eliminar</a>";
        $ed = "<a href='?controlador=proveedores&accion=frmEditar&id=$id' class='btn btn-info''>Editar</a>";
        // $d ="<a  href='?controlador=proveedores&accion=frmDetalles&co_id=$id'class='btn btn-light'>
        //     Detalles</a>";
        $estado = $v["PROV_ESTADO"] == 1 ? "ACTIVO":"INACTIVO";
        $tbl   .= "<tr>";
        $tbl   .= "<td>".$v["PROV_NIT"]."</td>";
        $tbl   .= "<td>".$v["PROV_NOMBRE"]."</td>";
        $tbl   .= "<td>".$v["PROV_TELEFONO"]."</td>";
        $tbl   .= "<td>".$v["PROV_DIRECCION"]."</td>";
        $tbl   .= "<td>".$v["PROV_SECCION"]."</td>";
        $tbl   .= "<td>$ed</td>";
        $tbl   .= "<td>$e</td>";
        // $tbl   .= "<td>$d</td>";
        $tbl   .= "</tr>";
    }
        $tbl   .= "</table>";
        if($matricula == ''){
            echo json_encode(array("mensaje"=>''));
        }else{
        echo json_encode(array("mensaje"=>$tbl));
    }
      }
    //   public function consultarBynombre(){
    //     extract($_POST);
    //     $datos = proveedores_modelo::mdlconsultarBynombre($nombre);
    //     $tbl   = "<table class='table'>";
    //     $tbl   .= "<tr>";
    //     $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>NOMBRE</td>";
    //     $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>TELEFONO</td>";
    //     $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>DIRECCION</td>";
    //     $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>SECCION</td>";
    //     $tbl   .= "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>NIT</td>";
    //     $tbl   .= "<td>ESTADO</td>";
    //     $tbl   .= "</tr>";
    //     foreach($datos as $v){
    //     $id= $v["PROV_ID"];
    //     $e = "<a href='?controlador=proveedores&accion=eliminar&id=$id' class='btn btn-light'>Eliminar</a>";
    //     $ed = "<a href='?controlador=proveedores&accion=frmEditar&id=$id' class='btn btn-light'>Editar</a>";
    //     // $f ="<a  href='?controlador=proveedores&accion=frmDetalles&cli_id=$id' class='btn btn-light'>
    //     // Detalles</a>";
    //     $estado = $v["PROV_ESTADO"] == 1 ? "ACTIVO":"INACTIVO";
    //     $tbl   .= "<tr>";
    //     $tbl   .= "<td>".$v["PROV_NOMBRE"]."</td>";
    //     $tbl   .= "<td>".$v["PROV_TELEFONO"]."</td>";
    //     $tbl   .= "<td>".$v["PROV_DIRECCION"]."</td>";
    //     $tbl   .= "<td>".$v["PROV_SECCION"]."</td>";
    //     $tbl   .= "<td>".$v["PROV_NIT"]."</td>";
    //     $tbl   .= "<td>$estado</td>";
    //     // $tbl   .= "<td>".$v["CLI_ROL"]."</td>";
    //     $tbl   .= "<td>$ed</td>";
    //     $tbl   .= "<td>$e</td>";
    //     $tbl   .= "</tr>";
    // }
    //     $tbl   .= "</table>";
    //     if($nombre == ''){
    //         echo json_encode(array("mensaje"=>''));
    //     }else{
    //     echo json_encode(array("mensaje"=>$tbl));
    // }
    // }
    //FUNCION UNIR DETALLE
    public function frmDetalles(){
        $id = $_GET["PROV_ID"];
        $this->vista->datos=proveedores_modelo::mdlDetalles($id);
        $this->vista->unirContenido("proveedores/frmDetalles");
    }
}
?>