	<?php 
  include('recursos/confi.php');
  $query = "SELECT * FROM t_usuario limit 1";
  $resultado = mysqli_query($conn,$query);
?>
<br><br><br><br><br><br>
	<!-- <?php foreach($resultado as $row){ ?>
		<div class="card" style="align-items: center;">
			<div class="img">
				<img src="public/images/productos/perfil.png" alt="" >
			</div>
			<div class="content">
				<h2><?php echo $row['USU_NOMBRES']; ?></h2>
				<h2><?php echo $row['USU_ROL']; ?></h2>

				<a href="?controlador=compras&accion=carrolista" class="btn">Mi carrito</a><br>
				<a href="?controlador=cliente&accion=frmEditar&id=<?php echo $row['USU_ID']; ?>" class="btn">Actualizar mis datos</a><br>
			</div>
		</div>
		<?php }?>
	<br><br><br><br><br><br> -->
	<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="public/images/productos/perfil.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $row['USU_NOMBRES']; ?></h5>
            <p class="text-muted mb-1"><?php echo $row['USU_ROL']; ?></p>
            <div class="d-flex justify-content-center mb-2">
              <a type="button" class="btn btn-primary"  href='?controlador=cliente&accion=frmEditar&cli_id=<?php echo $row['USU_ID']; ?>'>Actualizar datos</a>
            </div>
          </div>
        </div>
		</div>
      <div class="col-lg-8">
	  <br><br>
        <div class="card mb-4">
          <div class="card-body">
			
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['USU_NOMBRES']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['USU_APELLIDOS']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telefono</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['USU_TELEFONO']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Correo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $row['USU_CORREO']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
