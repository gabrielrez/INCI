<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hub</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/styles/hub/hub.css">
</head>

<body>
  <header class="header-container">
    <div class="header">
      <nav class="nav-menu">
        <div class="header-logo">
          <a href="../view/lp.php"><img src="../public/img/_INCI_.png" alt="Logo INCI"></a>
        </div>
        <!-- <p class="--c0">Suas funções mais utilizadas:</p> -->
        <a href="#" class="--c0">Analytics</a>
        <a href="#" class="--c0">Cursos</a>
        <a href="#" class="--c0">Alunos</a>
        <a href="#" class="--c0">Pagamentos</a>
      </nav>
      <div class="input-menu">
        <input type="text" placeholder="Pesquisar">
        <img src="../public/img/avatar_2.png">
      </div>
    </div>
  </header>

  <main class="main-container">
    <div class="sidebar">
      <ul class="sidebar-menu">
        <button class="expand-btn"><img src="../public/img/btn_lateral_open.png" alt=""></button>
        <a href="#">
          <li><img src="../public/img/_home_.svg"><span class="menu-text --c1">Início</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_group_.svg"><span class="menu-text --c1">Alunos</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_monetization_on_.svg"><span class="menu-text --c1">Pagamentos</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_low_density_.svg"><span class="menu-text --c1">Cursos</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_help_.svg"><span class="menu-text --c1">Central de Ajuda</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_premium_.svg"><span class="menu-text --c1">Certificado impresso</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_ladder_.svg"><span class="menu-text --c1">Recursos</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_analytics_.svg"><span class="menu-text --c1">Analytcs</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/campaign.svg"><span class="menu-text --c1">Whats Push</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_settings_.svg"><span class="menu-text --c1">Configuração</span></li>
        </a>
        <a href="#">
          <li><img src="../public/img/_mode_off_on_.svg"><span class="menu-text --c1">Sair</span></li>
        </a>
      </ul>
    </div>

    <div class="main-content">
      <div class="main">
        <h2 id="plataformas" class="plataformas-title cBase01">Nossas plataformas</h2>
        <p class="--c1">Escolha o ícone para entrar</p>
        <div class="plataformas-container cBase01"></div>
        <h2 id="ferramentas" class="ferramentas-title cBase01">Nossas ferramentas</h2>
        <p class="--c1">Escolha o ícone para entrar</p>
        <div class="ferramentas-container"></div>
      </div>
    </div>
  </main>

</body>

<script src="../public/script/fetchItens.js"></script>
<script src="../public/script/sidebar.js"></script>

</html>