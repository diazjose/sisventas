<nav class="navbar navbar-expand-lg  bg-primary navbar-dark">
  <a class="navbar-brand" href="#"> <i class="fas fa-home"></i> SisVentas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>home/facturas"><i class="fas fa-clipboard-list"></i> Facturas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-barcode"></i> Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Configuracion</a>
      </li>
      
    </ul>
    <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url() ?>login/logout"> <i class="fas fa-redo-alt"></i> Cerrar Sesion</a>
        </li>
    </ul>
    
  </div>
</nav>


