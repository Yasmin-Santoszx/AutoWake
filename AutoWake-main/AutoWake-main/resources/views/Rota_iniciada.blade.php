  <!DOCTYPE html>
  <html lang="PT-BR">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link rel="icon" href="img/Icon.png" type="image/x-icon">
      <link rel="stylesheet" href="rotas.css">
      <title>Iniciar rota|AutoWake</title>
  </head>
  <body>

      <div class="sidebar" id="sidebar">
      <div class="toggle-btn" id="toggleBtn"></div>
          <img src="img/mimi.png" alt="Logo" class="logo">
          <a class="" href="#">
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
          <a class="" href="#">
          <i class="bi bi-chat-dots-fill"></i>
          <span class="link-text">Chat</span>
      </a>
      </div>
      
    
  <section class="iniciar-rota">
    <div class="painel-esquerdo">
      <h2><i class="bi bi-geo-alt-fill"></i> Iniciar Rota</h2>

      <div class="campo">
        <label for="origem">Local de partida</label>
        <select id="origem">
          <option value="">-- Selecione o ponto de partida --</option>
          <option value="guapiara">Guapiara</option>
          <option value="tatui">Tatuí</option>
          <option value="sorocaba">Sorocaba</option>
          <option value="itapetininga">Itapetininga</option>
        </select>
      </div>

      <div class="campo">
        <label for="destino">Destino</label>
        <select id="destino">
          <option value="">Selecione o destino</option>
          <option value="guapiara">Guapiara</option>
          <option value="tatui">Tatuí</option>
          <option value="sorocaba">Sorocaba</option>
          <option value="itapetininga">Itapetininga</option>
        </select>
      </div>

      <div class="dados-viagem">
        <div>
          <h4><i class="bi bi-clock-history"></i> Duração</h4>
          <p id="duracao">--</p>
        </div>
        <div>
          <h4><i class="bi bi-signpost-split"></i> Distância</h4>
          <p id="distancia">--</p>
        </div>
      </div>

      <button class="btn-iniciar">
        <i class="bi bi-play-fill"></i> Iniciar Rota
      </button>
    </div>

    <div class="mapa-direita">
      <iframe id="mapa-guapiara" src="https://www.google.com/maps?q=Guapiara,+SP&output=embed" allowfullscreen loading="lazy"></iframe>
      <iframe id="mapa-tatui" src="https://www.google.com/maps?q=Tatuí,+SP&output=embed" allowfullscreen loading="lazy"></iframe>
      <iframe id="mapa-sorocaba" src="https://www.google.com/maps?q=Sorocaba,+SP&output=embed" allowfullscreen loading="lazy"></iframe>
      <iframe id="mapa-itapetininga" src="https://www.google.com/maps?q=Itapetininga,+SP&output=embed" allowfullscreen loading="lazy"></iframe>
    </div>
  </section>

  <script src="rota.js"></script>
</body>
</html>