<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/Icon.png" type="image/x-icon">
    <link rel="stylesheet" href="estiloss.css">
    <title>Autowake.com.br</title>
</head>
<body>

    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>


    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" id="toggleBtn"></div>
        <img src="/img/icon.png" alt="Logo" class="logo">

        <a class="active" href="#">
            <i class="bi bi-house-door-fill"></i>
            <span class="link-text">Inicial</span>
        </a>

        <a href="{{ route('exibe_meu_perfil') }}">
            <i class="bi bi-person-circle"></i>
            <span class="link-text">Perfil</span>
        </a>

        <a href="{{ route('exibe_todas_as_telas') }}">
            <i class="bi bi-wrench-adjustable"></i>
            <span class="link-text">Tabelas</span>
        </a>


        <a class="active" href="#">
            <i class="bi bi-chat-dots-fill"></i>
            <span class="link-text">Chat</span>
        </a>
    </div>

      <div class="loop-wrapper">
      <div class="mountain"></div>
      <div class="hill"></div>
      <div class="tree"></div>
      <div class="tree"></div>
      <div class="tree"></div>
      <div class="rock"></div>
      <div class="truck"></div>
      <div class="wheels"></div>
    </div> 


    <section class="hero">
        <p>Nosso foco é <span id="animated-text">Inovação</span></p>
    </section>

    <div style="display: flex; justify-content:space-evenly">
      
      <div class="dashboard-layout">
  
  <!-- Avisos rápidos -->
  <section class="avisos-wrapper">
    <div class="container-avisos">
      <h2 class="container-title">Avisos Rápidos</h2>
      <div class="blocos-container">Passar Abastecer</div>
      <div class="blocos-container">Calibrar Pneus</div>
      <div class="blocos-container">Trocar o óleo</div>
      <div class="blocos-container">Encomenda em Ipéro</div>
    </div>
  </section>


  <div class="cards-wrapper">
    <div class="card-itemms">
      <img class="card-imagems" src="img/3.jpg" alt="Imagem 2">
      <div class="card-textss">
        <h3>Alertas de riscos nas estradas</h3>
        <p>Sempre te informmamos sobre obras, climass severos, acidentes e muito mais</p>
      </div>
    </div>

    <div class="cards-wrapper">
    <div class="card-itemms">
      <img class="card-imagems" src="img/6.jpg" alt="Imagem 2">
      <div class="card-textss">
        <h3>Monitoramento de fadiga</h3>
        <p>Abordamos sugestões de paradas e descanços</p>
      </div>
    </div>

    <div class="card-itemms">
      <img class="card-imagems" src="img/2.jpg" alt="Imagem 3">
      <div class="card-textss">
        <h3>Checklist de segurança do transporte e principalmente a do caminhoeiro</h3>
        <p>Checklist de segurança do transporte e principalmente do usuario.</p>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
  
    <footer>
        <div class="footer-waves">
            <img src="/img/wave.svg" alt="Ondas decorativas">
        </div>
    </footer>

    <ul id="particles-container"></ul>
    <script src="sidebar.js"></script>
    <script src="style.js"></script>
</body>
</html>
