<?php 
  include('recursos/confi.php');
  $query = "SELECT * FROM cart_productos INNER JOIN ";
  $resultado = mysqli_query($conn,$query);
?>
  <div class="col-lg-14">
           <div class="container-items">
               <?php foreach($resultado as $row){ ?>
         <div class="item">
            <a href="?controlador=productos&accion=detalles&cli_id=<?php echo $row['cod_imagen']; ?>">
      <img src="public/images/productos/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
      </a>
       <div class="info-product">
       <h4 class="card-title"><strong><?php echo $row['nombre']; ?></strong></h4>
       <h1 class="price"><strong><?php echo $row['precio']; ?></strong></h1>
       <button type="submit">Agregar al carrito</button>
       <button>a</button>


    </div>
	
               
  </div>
  <?php }?>
       </div>
    </div>
  </div>
