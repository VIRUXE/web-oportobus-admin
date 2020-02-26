    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3">Plataforma de Gestão</div>
      </a>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Acesso Rápido</div>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Resumo Geral</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ver=frota&categoria=conducao">
          <i class="fas fa-steering-wheel"></i>
          <span>Sessão de Condução</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ver=frota&categoria=abastecimentos#adicionarAbastecimento">
          <i class="fas fa-fw fa-gas-pump"></i>
          <span>Abastecimento</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">Transporte Escolar</div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-child"></i>
          <span>Crianças</span>
        </a>
        <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-route"></i>
          <span>Rotas</span>
        </a>
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div> -->
      </li>

      <!-- <hr class="sidebar-divider">
      <div class="sidebar-heading">Turismo</div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-road"></i>
          <span>Serviços</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <hr class="sidebar-divider">
      <div class="sidebar-heading">Empresa</div>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ver=clientes">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServicos" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-road"></i>
          <span>Serviços</span>
        </a>
        <div id="collapseServicos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Login Screens:</h6> -->
            <a class="collapse-item" href="index.php?ver=servicos&accao=adicionar"><i class="fas fa-plus-circle"></i> Adicionar</a>
            <a class="collapse-item" href="index.php?ver=servicos"><i class="fas fa-list-ol"></i> Consultar</a>
            <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFrota" aria-expanded="true" aria-controls="collapseFrota">
          <i class="fad fa-car-bus"></i>
          <span>Frota</span></a>
        </a>
        <div id="collapseFrota" class="collapse" aria-labelledby="headingFrota" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?ver=frota"><i class="fas fa-garage-car"></i> Viaturas</a>
            <a class="collapse-item" href="index.php?ver=frota&categoria=abastecimentos"><i class="fas fa-gas-pump"></i> Abastecimentos</a>
            <a class="collapse-item" href="index.php?ver=frota&categoria=conducao"><i class="fas fa-steering-wheel"></i> Sessões de Condução</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?ver=utilizadores">
          <i class="fas fa-fw fa-users"></i>
          <span>Utilizadores</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>