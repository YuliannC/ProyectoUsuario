<!-- <div class="promo">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center"><br>
						<div class="section_title">ADMINISTRACION</div>
						<p> <strong>AESTHETIC 90S MC</strong></p>
					</div>
				</div>
			</div>
			<div class="row promo_container">

				<div class="col-lg-3 promo_col">
					<div class="promo_item">
						<a href="?controlador=cliente&accion=principal">
							<img src="public/images/productos/iconclientes.jpeg" alt="">
						</a>
					</div>
				</div>

				<div class="col-lg-3 promo_col">
					<div class="promo_item">
						<a href="?controlador=proveedores&accion=principal">
							<img src="public/images/productos/iconproveedores.jpeg" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-3 promo_col">
					<div class="promo_item">
						<a href="?controlador=productos&accion=principal">
							<img src="public/images/productos/iconproductos.jpeg" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-3 promo_col">
					<div class="promo_item">
						<a href="?controlador=administrador&accion=listarPQR">
							<img src="public/images/productos/iconpqr.jpeg" alt="">
						</a>
					</div>
				</div>
				

			</div>
		</div>
	</div> -->
	<div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="public/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="public/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="public/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Usuario</h5>
                  <span>Rol</span>
                </div>
              </div>
          <li class="nav-item menu-items">
            <a class="nav-link" href="?controlador=administrador&accion=principal">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Inicio</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="?controlador=cliente&accion=principal" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Clientes</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Proveedores</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Productos</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Promociones</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Subir al blog</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Ver pedidos</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle"  href="" >
                  AESTHETIC 90S MC
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Mensajes</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="public/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="public/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="public/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Mensajes</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notificaciones</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Notificaciones</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="public/assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Mi perfil</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Configuraciones</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1"> Cerrar sesion</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Perfil</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <div class="card-body">
                    <h4 class="card-title">Administracion</h4>
                    <img src="public/asset/images/carousel/logorosa.jpeg" alt="" style="with: 100px;">
                    <p class="card-description"><code>Aesthetic 90s mc</code></p>
                    <div class="template-demo">
                    <a type="button" class="btn btn-primary btn-lg btn-block" href="?controlador=cliente&accion=principal">
                        <i class="mdi mdi-account"></i>Cliente</a>
                      <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i>Proveedores</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i>Productos</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i>Promociones</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i>Subir al blog</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block">
                        <i class="mdi mdi-account"></i>Ver pedidos</button>
                    </div>
                  </div>
		</div>
		</div>
			
