  <?php
  if (isset($_POST['submit'])) {
    $nombres = $_POST  ['nombres'];
    $apellidos = $_POST  ['apellidos'];
    $telefono = $_POST  ['telefono'];
    $correo = $_POST  ['correo'];
  }
  ?>
  
  <!-- FORMULARIO DE REGISTRO DE USUARIO -->
  <form action="?controlador=cliente&accion=Registrar" autocomplete="off" id="frmRegR" method="post">
			<h2 style="color:black; text-align:left;">Registrar Clientes</h2>
					<br>	
			<label for="nombre">nombres</label>
			<input type="text" class="search_input menu_mm" name="nombres" id="nombres" placeholder="Ingresar nombre" required />
			<br><br>
			<label for="nombre">apellidos</label>
			<input type="text" class="search_input menu_mm" name="apellidos" id="apellidos" placeholder="Ingresar apellidos" required />
			<br><br>
			<label for="apellidos">Telefono</label>
			<input type="number" class="search_input menu_mm" name="telefono" id="telefono" placeholder="Ingresar telefono" required />
			<br><br>
			<label for="email" >correo</label>
			<input type="email" class="search_input menu_mm" name="correo" id="correo" placeholder="Ingresar correo" required  />
			<br><br>
			<br><br>
      <label for="asunto">Rol</label>
      <select class="search_input menu_mm" name="srol" id="srol">  
          <option value="Administrador">Administrador</option>
          <option value="Cliente">Cliente</option>
      </select>
      <br><br>
			<input type="submit" name="submit" class="promo_link" value="enviar datos">
      <?php
      include("recursos/validarForm.php");
      ?>
			</form>

	<!-- FIN DE MENU -->

<!-- 
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
            <div class=" p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <br><br><br><br>
                <h6 class="text-white text-capitalize ps-3">REGISTRO DE CLIENTES</h6>
              </div>
            </div>
                <div class="row">
                  <div class="col-lg-3">
                    <form action="?controlador=cliente&accion=Registrar" autocomplete="off" id="frmRegistrar" method="post">
                   
                    <div class="input-group input-group-outline mb-3">
                    Nombres
                    <input type="text" name="nombres" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    Apellidos
                    <input type="text" name="apellidos" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    telefono
                    <input type="number" name="telefono" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    Correo
                    <input type="text" name="correo" class="form-control">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                    contraseña
                    <input type="number" name="contrasena" class="form-control">
                    </div>
                
                    <select class="form-control" name="srol" id="srol">  
                    <option value="Administrador">Administrador</option>
                    <option value="Cliente">Cliente</option>
                  </select>
                    
                    </div>
                    <input type="submit" name="aceptar" class="btn bg-gradient-primary">
                    </form>
                </div>
                </div>
             
            </div>
          </div>
        </div>
      </div>
      </div> 
 -->
