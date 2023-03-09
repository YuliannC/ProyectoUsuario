<?php
// Este archio muestra los productos en una tabla.

session_start();
include "recursos/confi.php";
?>
<br><br><br><br><br><br>
<?php
//  Esta es la consula para obtener todos los productos de la base de datos.

//$products = $con->query("select * from product");
$products = $conn->query("SELECT * FROM imagenes WHERE estado=1 AND secciones= 6 ORDER BY cod_imagen DESC");
?>           
<?php 
//   Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
while($r=$products->fetch_object()):?>
<div class="col-lg-14">
<div class="container-items">
            <div class="item" >
            <a href="?controlador=productos&accion=detalles&id=<?php echo $r->cod_imagen;?>">
      <img src="public/images/<?php echo $r->imagen; ?>" class="card-img-top" alt="...">
      </a>
       <div class="info-product">
       <h4 class="card-title"><strong><?php echo $r->nombre;?></strong></h4>
       <h1 class="price"><strong><?php echo $r->precio;?></strong></h1>
	<?php
	$found = false;
	if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->cod_imagen){ $found=true; break; }}}
	?>
	<?php if($found):?>
		<a href="?controlador=compras&accion=carrolista" class="info-product">Agregado</a>
	<?php else:?>
	<form  method="post" action="?controlador=compras&accion=agregaralcarrito">
	<input type="hidden" name="product_id" value="<?php echo $r->cod_imagen; ?>">
	    <input type="number" name="q" value="1" style="text-align:center;" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
	  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>	
	<?php endif; ?>
	</div>
    </div>
  </div>
  </div>

  <br><br><br>
<?php endwhile; ?>
</div>