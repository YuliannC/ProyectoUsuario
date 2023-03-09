
<br><br><br><br><br>
    <div class="ol-lg-8">
                  <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                   <h6 class="text-black text-capitalize ps-3">LISTADO DE PQR</h6>
                  </div>
                    <table class="table table-Light table-hover border-radius-lg pt-4 pb-3 ">
                      <tr>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10">Nombres</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10">Apellidos</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10 ">Telefono</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10">Correo</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10 ">Descripcion</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10">ESTADO</th>
                        <th class="text-uppercase text-primary font-weight-bolder opacity-10"></th>
                        
                      </tr>
                      <tr>
                          <?php
                            foreach($this->datos as $valor){
                              $id = $valor["CON_ID"];
                                echo "<tr>";
                                          
                                  echo "<td class='atext-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_NOMBRES"]."</td>";
                                  echo "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_APELLIDO"]."</td>";
                                  echo "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_TELEFONO"]."</td>";
                                  echo "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_CORREO"]."</td>";
                                  echo "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_DESCRIPCION"]."</td>";
                                  echo "<td class='text-uppercase text-primary font-weight-bolder opacity-10'>".$valor["CON_ESTADO"]."</td>";
                                  echo "<td class='s'><a href='?controlador=administrador&accion=eliminar&id=$id' class='eliminar btn btn-info'>
                                  Solucionado</a></td>";
                                echo "</tr>";
                            }
                          ?>
                      </tr>  
                    </table>
                  </div>
                </div>
              </div>
              </div>