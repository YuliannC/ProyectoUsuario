<?php
//  Este archio muestra los productos en una tabla.

include "recursos/confi.php";
?>
<br><br><br>
<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center"><br>
						<h1 class="" style="color:white;">MI CARRITO</h1>
						<p style="color:pink;"> <strong>AESTHETIC 90S MC</strong></p>
					</div>
</div>
			</div>
<?php

//  Esta es la consula para obtener todos los productos de la base de datos.

//$products = $con->query("select * from product");
$products = $conn->query("select * from imagenes ");
if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
?>
<table class="table table-bordered">
<thead>
	<th style="color:white">Cantidad</th>
	<th style="color:white">Nombre</th>
	<th style="color:white">Descripcion</th>
	<th style="color:white">Colores</th>
	<th style="color:white">Precio Unitario</th>
	<th style="color:white">Total</th>
	<th></th>
</thead>
<?php 
//   Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
foreach($_SESSION["cart"] as $c):
//$products = $con->query("select * from product where id=$c[product_id]");
$products = $conn->query("select * from imagenes where cod_imagen=$c[product_id]");
$r = $products->fetch_object();
	?>
<tr>
<th  style="color:pink"><?php echo $c["q"];?></th>
	
	<td style="color:pink"><?php echo $r->nombre;?></td>
	<td  style="color:pink">$ <?php echo $r->descripcion;?></td>
	<td  style="color:pink">$ <?php echo $r->colores; ?></td>
	<td  style="color:pink"><?php echo $r->precio;?></td>
	<td  style="color:pink">$ <?php echo $c["q"]*$r->precio; ?></td>
	<td  style="width:150px;">
	<?php
	$found = false;
	foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->cod_imagen){ $found=true; break; }}
	?>
		<a href="?controlador=compras&accion=quitar&cod_imagen=<?php echo $c["product_id"];?>" class="btn btn-danger">Quitar del carrito</a>
	</td>
</tr>
<?php endforeach; ?>
</table>

<form class="form-horizontal" method="post" action="?controlador=compras&accion=proceso" id="procesar">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
    <div class="col-sm-5">
      <input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Direccion a donde se hara el envio">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Procesar Venta</button>
    </div>
  </div>
</form>


<?php else:?>
	<p class="alert alert-warning">El carrito esta vacio.</p>
<?php endif;?>
<br><br><hr>

		</div>
	</div>
</div>
</section>