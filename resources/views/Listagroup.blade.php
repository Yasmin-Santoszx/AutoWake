<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AutoWake - Monitoramento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --cor-escura: #1C1C1C;
      --azul-escuro: #274472;
      --azul: #4A75C0;
      --cinza-azulado: #5C6B7A;
      --cinza-claro: #DDE2E6;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, var(--azul-escuro), var(--cor-escura));
      color: var(--cinza-claro);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      background-color: var(--cor-escura);
    }
    .navbar-brand {
      font-weight: bold;
      color: var(--cinza-claro);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .navbar-brand img {
      height: 35px;
      width: auto;
    }
    .navbar-brand:hover {
      color: var(--azul);
    }
    .nav-link {
      color: var(--cinza-claro);
    }
    .nav-link:hover {
      color: var(--azul);
    }

    .container {
      flex: 1;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    h1 {
      text-align: center;
      font-weight: bold;
      margin-bottom: 30px;
      color: var(--cinza-claro);
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
    }

    .list-group-item {
      border: none;
      margin-bottom: 10px;
      border-radius: 12px;
      padding: 18px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .list-group-item:nth-child(1) { background: var(--azul-escuro); color: white; }
    .list-group-item:nth-child(2) { background: var(--azul); color: white; }
    .list-group-item:nth-child(3) { background: var(--cinza-azulado); color: white; }
    .list-group-item:nth-child(4) { background: var(--cinza-claro); color: var(--cor-escura); }

    .list-group-item:hover {
      transform: scale(1.03);
      box-shadow: 0px 4px 12px rgba(0,0,0,0.3);
    }

    #relogio {
      text-align: center;
      margin-top: 30px;
      font-size: 1.4rem;
      font-weight: bold;
      color: var(--cinza-claro);
    }

    footer {
      background-color: var(--cor-escura);
      color: var(--cinza-claro);
      padding: 15px 0;
      text-align: center;
      font-size: 0.9rem;
      margin-top: auto;
    }
    footer a {
      color: var(--azul);
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/logosegunda.png" alt="Logo AutoWake"> AutoWake
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="dashboard.html">Monitoramento</a></li>

        </ul>
      </div>
    </div>
  </nav>  

  <div class="container">
    <h1>Monitoramento Inteligente</h1>
    <div class="list-group">
      <div class="list-group-item"><i class="bi bi-speedometer2"></i> Monitoramento em tempo real</div>
      <div class="list-group-item"><i class="bi bi-truck"></i> Identificação de motorista, carga e rota</div>
      <div class="list-group-item"><i class="bi bi-exclamation-triangle"></i> Detecção de emergências</div>
      <div class="list-group-item"><i class="bi bi-bell-fill"></i> Alertas imediatos e resposta rápida</div>
    </div>
    <div id="relogio"></div>
  </div>

  <footer>
    <p>© 2025 AutoWake. Todos os direitos reservados. | <a href="#">Política de Privacidade</a></p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Relógio em tempo real
    function atualizarRelogio() {
      const agora = new Date();
      document.getElementById('relogio').textContent = agora.toLocaleTimeString();
    }
    setInterval(atualizarRelogio, 1000);
    atualizarRelogio();
  </script>
</body>
</html>