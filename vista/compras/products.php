<?php
// Este archio muestra los productos en una tabla.

include "recursos/confi.php";
include "recursos/configuracion.php";
?>
<?php
// Esta es la consula para obtener todos los productos de la base de datos.
//$products = $con->query("select * from product");
$products = $conn->query("select * from imagenes where estado=1 ORDER BY cod_imagen");
?>
<?php
// Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
echo "<div class='row'>";
while ($r = $products->fetch_object()) : ?>
	<div class="col-lg-4">
		<div class="card" style="width: 21rem;">
			<a href="?controlador=productos&accion=detalles&id=<?php echo $r->cod_imagen; ?>">
				<img src="public/images/productos/<?php echo $r->imagen; ?>" class="card-img-top"  >
			</a>
			<div class="card-body">
				<h2 class="card-title" style="color:black;"><?php echo $r->nombre; ?></h2>
				<p class="card-text"><strong><?php echo MONEDA . number_format($r->precio, 0, '.', ','); ?></strong></p>
				<?php
				$found = false;
				if (isset($_SESSION["cart"])) {
					foreach ($_SESSION["cart"] as $c) {
						if ($c["product_id"] == $r->cod_imagen) {
							$found = true;
							break;
						}
					}
				}
				?>
				<?php if ($found) : ?>
					<a href="?controlador=compras&accion=carrolista" class="btn btn-primary">Agregado</a>
				<?php else : ?>
					<form method="post" action="?controlador=compras&accion=agregaralcarrito">
						<label for="">Cantidad</label>
						<input type="hidden" name="product_id" value="<?php echo $r->cod_imagen; ?>">
						<input type="number" name="q" value="1" style="text-align:center;" style="width:100px;" min="1" class="btn btn-primary py-3 px-5" placeholder="Cantidad"><br>
						<button type="submit" class="btn btn-primary">Agregar al carrito</button>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
<?php endwhile; ?>
</div>