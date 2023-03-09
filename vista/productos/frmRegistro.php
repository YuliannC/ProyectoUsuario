<div class="col-md-6 appointment ftco-animate fadeInUp ftco-animated">
	    			<h3 class="mb-3">Contact Us</h3>
	    			<form action="recursos/subir.php" method="post" enctype="multipart/form-data" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="titulo">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="number" class="form-control" placeholder="Cantidad">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>
<?php 
  include('recursos/confi.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>
<!-- 
  <div class="container">
    <div class="row">
       <div class="col-lg-12">
         <h1 style="text-align:left;">Subir un producto</h1>
         <hr>
         <form action="recursos/subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
              Seleccione una Imagen
              <input id="my-input"  type="file" name="imagen">
          </div>
          <div class="form-group">
              Nombre del producto
              <input id="my-input" class="search_input menu_mm" type="text" name="titulo" placeholder="Ingresar nombre delproducto">
          </div>
          <div class="form-group">
              Cantidad
              <input id="my-input" class="search_input menu_mm" type="text" name="cantidad" placeholder="Ingresar cantidad delproducto">
          </div>
          <div class="form-group">
              Descripcion
              <input id="my-input" class="search_input menu_mm" type="text" name="descripcion" placeholder="Ingresar descripcion delproducto">
          </div>
          <div class="form-group">
              Precio
              <input id="my-input" class="search_input menu_mm" type="number" name="precio" placeholder="Ingresar precio delproducto">
          </div>
          <div class="form-group">
              Color
              <input id="my-input" class="search_input menu_mm" type="text" name="color" placeholder="Ingresar color delproducto">
          </div>
          <select class="form-control" name="secciones" id="seccion" >  
           <option type="number" value="pant">1</option>
           <option type="number" value="corset">2</option>
           <option type="number" value="falda">3</option>
           <option type="number" value="vestido">4</option>
           <option type="number" value="chaqueta">5</option>
           <option type="number" value="conjunto">6</option>
         </select>
          <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
       <button type="button" class="promo_link" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
     </button>
       </div>
          <?php session_unset(); } ?>
          <input type="submit" value="aceptar" class="btn btn-primary" name="Guardar">
         </form>
       </div>
       </div>
     <hr> <br><br> -->