<br><br>


<div class="modalDialog">
	<div>
 
    <img src="public/images/productos/<?php echo $this->datos['imagen']; ?>" class="imgModal" alt="...">
	<br><br>
	<h1><strong><?php echo $this->datos['nombre']; ?></strong></h1>
  <br><br>
	<p><strong><?php echo $this->datos['descripcion']; ?></strong></p>
  <br><br>
	<h1 class="price"><strong><?php echo $this->datos['precio']; ?></strong></h1>
  <br><br>
  <h3 ><?php echo $this->datos['colores']; ?></h3>
	<br>
  
  <div>
    <div style="text-align:center;">
      <input value="-" class="inputdetalle"></input><input value="0" class="inputdetalle"></input><input value="+" class="inputdetalle"></input>
      <br><br><br>
    <div style="text-align:center;">
    <button class="btnCompra">Comprar</button>
    </div>
    </div>
    </div>
	<br><br><br><br>

    </div>
	</div>
