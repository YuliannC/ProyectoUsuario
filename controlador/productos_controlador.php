<?php
require_once "modelo/productos_modelo.php";
class productos_controlador{
    
    public function __construct(){
    //FUNCION CONSTRUIR ESTRUCTURA
        $this->vista = new estructura();
        // if(!isset($_SESSION["USU_ID"])){
        //     header("location: /AESTHETIC90SMC");
        // }
    }
    //FUNCION UNIR CONTENIDO 
    public function principal(){
        $this->vista->unirContenido("productos/principal");
    }
    //FUNCION UNIR CONTENIDO FRM REGISTRO
    public function frmRegistrar(){
       $this->vista->unirContenido("productos/frmRegistro",false);
    }
    //FUNCION UNIR CONTENIDO CARRITO
    public function vercarrito(){
        $this->vista->unirContenido("productos/carrito");
    }
    //FUNCION UNIR CONTENIDO VER CATEGORIA VESTIDOS
    public function vervestido(){
        $this->vista->unirContenido("productos/vestidos");
    }
    //FUNCION UNIR CONTENIDO VER CATEGORIA CORSET
    public function vercorset(){
        $this->vista->unirContenido("productos/corset");
    }
    //FUNCION UNIR CONTENIDO VER CATEGORIA CONJUNTOS
    public function verconjunto(){
        $this->vista->unirContenido("productos/pant");
    }
     //FUNCION UNIR CONTENIDO VER CATEGORIA CHAQUETAS
    public function verchaquetas(){
        $this->vista->unirContenido("productos/chaqueta");
    }
    //FUNCION UNIR CONTENIDO VER CATEGORIA PANTS
    public function verpant(){
        $this->vista->unirContenido("productos/pant");
    }
    public function buscar(){
        $this->vista->unirContenido("productos/buscador");
    }
    //FUNCION UNIR CONTENIDO DETALLE DE PRODUCTO
    public function detalles(){
        $id = $_GET["id"];
        $this->vista->datos=productos_modelo::mdlDetalles($id);
        $this->vista->unirContenido("productos/detalle");
        // $this->vista->datos=productos_modelo::mdlDetalles($id);
    }
    //FUNCION UNIR CONTENIDO VER CARRITO DE COMPRAS
    public function verbolsa(){
        $this->vista->unirContenido("productos/bolsa");
    }
    //FUNCION UNIR CONTENIDO LISTA DE PRODUCTOS
    public function listarProduct(){
        $this->vista->unirContenido("productos/listadoProductos",false);
    }
    //FUNCION REGISTRAR PRODUCTOS
    public function registrar(){
        extract($_POST);
        $datos["prov_pro"]  = $prov_id;
        $re=proveedoores_modelo::mdlBuscarXCOD($prov_id);
        // $datos["tprev_rev_id"]    = $rev_id;
        $datos["imagen"]      = $imagen;
        $datos["nombre"]      = $titulo;
        $datos["descripcion"] = $descripcion;
        $datos["precio"]      = $precio;
        $datos["cantidad"]    = $cantidad;
        $datos["colores"]     = $color;


        if($re > 0){
            $datos["prov_id"]  = $re["PRO_ID"];
            $r=proveedores_modelo::mdlRegistrar($datos);
            if($r > 0){
                echo json_encode(array("mensaje" => "Registrado" , "icono"=>"success"));
            }
             else{
              echo json_encode(array("Error al registrar" , "icono"=>"error"));
             }
        }
    }
    //FUNCION EDITAR PRODUCTOS
    public function editar(){
        extract($_POST);
        $rta = revision_modelo::consultarBYid($id);
        $datos["nombre"]  = $nombre;
        $datos["imagen"]      = $imagen;
        $datos["colores"]       = $colores;
        $datos["cantidad"]        = $cantidad;
        $datos["cod_imagen"]     = $id;
        $r = productos_modelo::mdlEditar($datos);
        if( $r > 0){
            echo json_encode(array("mensaje" => "Editado Correctamente" , "icono"=>"success"));
        }else{
            echo json_encode(array("mensaje" => "Error al editar" , "icono"=>"error"));
        }    
    }
    //FUNCION ELIMINAR PRODUCTOS
    public function eliminar(){
        $id = $_GET["id"];
        $e = productos_modelo::mdlEliminar($id);
        if($e > 0){
            echo json_encode(array("mensaje" => "Se elimino el producto" , "icono"=>"success"));
        }else{
            echo json_encode(array("mensaje" => "No se elimino" , "icono"=>"error"));
        }
    }
    //FUNCION CONSULTAR POR NOMBRE PRODUCTOS
    public function consultarXfecha(){
        extract($_POST);
        $datos = productos_modelo::mdlconsultarXfecha($fecha);
        $tbl   = "<div class='col-lg-14'>";
        $tbl   .= "<div class='container-items'>";
        foreach($datos as $v){
        $id = $v["cod_imagen"];
        $e = "<a href='?controlador=productos&accion=eliminar&id=$id' class='eliminar'>Eliminar</a>";
        $ed = "<a href='?controlador=productos&accion=frmEditar&id=$id' class='search_input menu_mm'>Editar</a>";
        $d ="<a  href='?controlador=productos&accion=detalles&id=$id'class='nav-link'><h3>
        ♡ ".$v["nombre"]."</h3></a>";
        $y = "<a  href=''class=''>
        Añadir al carrito</a>";
        //$estado = $v["estado"] == 1 ? "Disponible":"Agotado";
        //$tbl   .= "<img src='public/images/productos/ ".$v["imagen"]."
        // class='card-img-top' alt='...'>";
        $tbl   .= "</a>";
        $tbl   .= "<div class='info-product'>";
        //$tbl   .= "<h4 class='card-title'><strong>".$v["nombre"]."</strong></h4>";
        //$tbl   .= "<h1 class='price'><strong>".$v["precio"]."</strong></h1>";
        //$tbl   .= "<td>$estado</td>";
        $tbl   .= "<td>$d</td>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
    }
        $tbl   .= "</table>";
        if($fecha == ''){
            echo json_encode(array("mensaje"=>''));
        }else{
        echo json_encode(array("mensaje"=>$tbl));
    }
    }
    public function consultarXcodigo(){
        extract($_POST);
        $datos = productos_modelo::mdlconsultarXcodigo($codigo);
        $tbl   = "<div class='col-lg-14'>";
        $tbl   .= "<div class='container-items'>";
        foreach($datos as $v){
        $id = $v["cod_imagen"];
        $e = "<a href='?controlador=productos&accion=eliminar&id=$id' class='eliminar'>Eliminar</a>";
        $ed = "<a href='?controlador=productos&accion=frmEditar&id=$id' class='search_input menu_mm'>Editar</a>";
        $d ="<a  href='?controlador=productos&accion=detalles&id=$id'class=''>
             Detalles</a>";
        $y = "<a  href=''class=''>
        Añadir al carrito</a>";
        $estado = $v["estado"] == 1 ? "Disponible":"Agotado";
        $tbl   .= "<a href='?controlador=productos&accion=frmEditar&id=$id' class='search_input menu_mm'>";
        $tbl   .= "<img src='public/images/productos/".$v["imagen"]." class='card-img-top' alt='...'>";
        $tbl   .= "</a>";
        $tbl   .= "<div class='info-product'>";
        $tbl   .= "<h4 class='card-title'><strong>".$v["nombre"]."</strong></h4>";
        $tbl   .= "<h1 class='price'><strong>".$v["precio"]."</strong></h1>";
        $tbl   .= "<td>$estado</td>";
        $tbl   .= "<td>$d</td>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
        $tbl   .= "</div>";
    }
        $tbl   .= "</table>";
        if($codigo == ''){
            echo json_encode(array("mensaje"=>''));
        }else{
        echo json_encode(array("mensaje"=>$tbl));
    } 
    }
    // public function consultarXfecha(){
    //     extract($_POST);
    //     $datos = productos_modelo::mdlconsultarXfecha($fecha);
    //     foreach ($datos as $v){
    //         $id = $v["PRO_ID"];
    //         $e = "<a  href='?controlador=productos&accion=eliminar&rev_id=$id'class='eliminar btn btn-danger'>
    //         Agotado</a>";
    //         $f ="<a  href='?controlador=productos&accion=frmEditar&rev_id=$id'class='btn btn-info'>
    //         Editar</a>";
    //         $d ="<a  href='?controlador=productos&accion=frmDetalles&rev_id=$id'class='btn btn-light'>
    //         Detalles</a>";
    //         $tbl .= "<div class='info-product'>";
    //         $tbl .= "<h4 class='card-title'>.$v["nombre"].</h4>";
    //         $tbl .= "       <h1 class='price'><strong>.$v["precio"].</strong></h1>";
    //         // if($_SESSION['CLI_ROL'] == "Administrador" ||
    //         //         $_SESSION['CLI_ROL'] == "Mecanico"){
    //         //     $tbl .= "<td>$f</td>";
    //         //     $tbl .= "<td>$e</td>";
    //         // }
    //         $tbl .= "<td>$d</td>";
    //         $tbl .= "<td>$f</td>";
    //         $tbl .= "<td>$e</td>";
    //         $tbl .= "</tr>";
    //     }
    //     $tbl .= "</table></div>";
    //     echo json_encode(array("mensaje"=> $tbl));
    // }

    
}
?>