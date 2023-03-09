<br><br><br><br><br><br>
<!-- Menu -->

<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="?controlador=inicio&accion=principal">Aesthetic 90s Mc</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="public/images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="?controlador=inicio&accion=principal">Inicio</a></li>
				<li class="menu_mm"><a href="?controlador=compras&accion=productos">Prendas</a></li>
				<li class="menu_mm"><a href="https://api.whatsapp.com/send?phone=573026876413&text=Hola!!%20Quiero%20hacer%20un%20pedido%20o%20tengo%20una%20consulta%20%E2%9C%A8">Atencion personalizada</a></li>
				<li class="menu_mm"><a href="?controlador=administrador&accion=contactanos">PQR</a></li>
			</ul>
		</nav>
	</div>
	
<?php
// Este archio muestra los productos en una tabla.

session_start();
include "recursos/confi.php";
?>
<br><br><br><br><br><br>
<?php
//  Esta es la consula para obtener todos los productos de la base de datos.

//$products = $con->query("select * from product");
$products = $conn->query("SELECT * FROM imagenes WHERE estado=1 AND secciones= 4 ORDER BY cod_imagen DESC");
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

