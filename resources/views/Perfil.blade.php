<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="Perfil_user.css">
    <title>Perfil AutoWake</title>
    <link rel="icon" href="img/Icon.png" type="image/x-icon">
</head>
<body>

<header class="topo">
<div class="textinho_de_cima">
    <img src="img/escudo.png">
    <p><b>TECNOLOGIA PARA SEGURANÇA</b></p>
</div>
</header>
<div class="container">
<div class="profile">

    <img src="img/caminhão.webp" alt="Foto de perfil">

  <a href="{{ route('exibe_editarperfil') }}" class="editar-btn" title="Editar Perfil">
  <i class="fa-solid fa-pen"></i>
</a>


<div class="iniciar">
    <button class="rota">Iniciar rota segura</button>
</div>
</div>
<div class="profile_info">
    <h2>Pedro Duarte</h2>
    <p>duartepedroalves12@gmail.com</p>
    <p><b>ID</b>:1wt57h</p>
<div class="mais_info">
    <p><b>Motorista desde</b>: 2022</p>
    <p><b>Base</b>: Boituva-sp</p>
    <p><b>Ùtima sincronização</b>: hoje, 07:05</p>
</div>
</div>
</div>
<div class="cards">
<div class="card">
    <h3>Score de Segurança</h3>
    <h2>94/100</h2>
    <p>Baixo risco</p>
</div>

<div class="card">
    <h3>Rotas monitoradas</h3>
    <h2>128</h2>
    <p>Nesta semana: 4</p>
</div>

<div class="card">
    <h3>Alertas evitados</h3>
    <h2>36</h2>
    <p>Ùltimos 30 dias</p>
</div>
</div>
<div class="box">
<div class="tabs">
    <button class="tab-btn active" data-tab="tab1">Sobre</button>
    <button class="tab-btn" data-tab="tab2">Veículo</button>
    <button class="tab-btn" data-tab="tab3">Atividade</button>
    <button class="tab-btn" data-tab="tab4">Configurações</button>
</div>

<div class="tab-content active" id="tab1">
    <div class="panel active" id="panel-sobre" role="tabpanel" data-testid="panel-sobre">
    <div class="grid-2">
      <div class="card1">
        <h3>Bio</h3>
        <p> Caminhoneiro profissional, Rodando o Brasil de ponta a ponta</p>
      </div>
      <div class="card1">
        <h3>Conquistas</h3>
        <div class="list">
          <div class="row"><div class="left"><div class="icon">🏆</div><div>
            <div><strong>100 Rotas</strong></div>
            <div class="muted">Completou 100 rotas monitoradas</div>
          </div></div><span class="tag">2025</span></div>
          <div class="row"><div class="left"><div class="icon">🛡️</div><div>
            <div><strong>Resposta Rápida</strong></div>
            <div class="muted">Abaixo de 4s em média</div>
          </div></div><span class="tag">Nível Ouro</span></div>
          <div class="row"><div class="left"><div class="icon">⛽</div><div>
            <div><strong>Eco Driver</strong></div>
            <div class="muted">+8% eficiência média</div>
          </div></div><span class="tag">Últimos 90d</span></div>
        </div>
      </div>
    </div>

    <div class="card1">
      <h3>Saúde do Perfil</h3>
      <div class="list">
        <div>
          <div class="row"><div class="left"><div class="icon">🔒</div><div><strong>Autenticação</strong><div class="muted">2FA ativo no número final **82</div></div></div><span class="tag">OK</span></div>
          <div class="progress" aria-label="Progresso de completude do perfil" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"><div class="bar" style="width:84%"></div></div>
        </div>
        <div class="row"><div class="left"><div class="icon">🧭</div><div><strong>Telemetria</strong><div class="muted">Dispositivo pareado e ativo</div></div></div><span class="tag">ONLINE</span></div>
      </div>
    </div>
  </div>
</div>

<div class="tab-content" id="tab2">
    <div class="panel" id="panel-veiculo" role="tabpanel" data-testid="panel-veiculo">
    <div class="grid-2">
      <div class="card1">
        <h3>Dados do Caminhão</h3>
        <div class="list">
          <div class="row"><span class="muted">Modelo</span><strong>Volvo FH 540</strong></div>
          <div class="row"><span class="muted">Ano</span><strong>2022</strong></div>
          <div class="row"><span class="muted">Placa</span><strong>RST-9F21</strong></div>
          <div class="row"><span class="muted">Rastreador</span><strong>AW-TRK-0087</strong></div>
        </div>
      </div>
      <div class="card1">
        <h3>Manutenção</h3>
        <div class="list">
          <div class="row"><div class="left"><div class="icon">🧰</div><div><strong>Próxima revisão</strong><div class="muted">em 3.200 km</div></div></div><button class="btn">Agendar</button></div>
          <div class="row"><div class="left"><div class="icon">🧪</div><div><strong>Análise de óleo</strong><div class="muted">Normal</div></div></div><span class="tag">OK</span></div>
          <div class="row"><div class="left"><div class="icon">🛞</div><div><strong>Pneus</strong><div class="muted">Pressão ideal</div></div></div><span class="tag">36 PSI</span></div>
        </div>
      </div>
    </div>

    <div class="card1">
      <h3>Consumo & Eficiência</h3>
      <div class="list">
        <div class="row"><span class="muted">Média</span><strong>2,9 km/l</strong></div>
        <div class="row"><span class="muted">Melhor rota</span><strong>3,3 km/l (Curitiba → Joinville)</strong></div>
        <div class="progress" aria-label="Meta de eficiência" aria-valuemin="0" aria-valuemax="100" aria-valuenow="68"><div class="bar" style="width:68%"></div></div>
      </div>
    </div>
  </div>
</div>

<div class="tab-content" id="tab3">
    <div class="panel" id="panel-atividade" role="tabpanel" data-testid="panel-atividade">
    <div class="card1">
      <h3>Linha do tempo</h3>
      <div class="list">
        <div class="row"><div class="left"><div class="icon">🛰️</div><div>
          <strong>Rota SP → Curitiba monitorada</strong>
          <div class="muted">Hoje 18:42 • Sem incidentes</div>
        </div></div><span class="tag">100% seguro</span></div>
        <div class="row"><div class="left"><div class="icon">⚠️</div><div>
          <strong>Alerta de parada não programada</strong>
          <div class="muted">Ontem 23:10 • Resposta 2.9s</div>
        </div></div><span class="tag" style="background:rgba(245,158,11,.15)">Resolvido</span></div>
        <div class="row"><div class="left"><div class="icon">📦</div><div>
          <strong>Entrega confirmada • Joinville</strong>
          <div class="muted">16/08 • OCR de nota fiscal anexada</div>
        </div></div><button class="btn">Ver NF</button></div>
      </div>
    </div>
  </div>
</div>

<div class="tab-content" id="tab4">
    <div class="panel" id="panel-config" role="tabpanel" data-testid="panel-config">
    <div class="grid-2">
      <div class="card1">
        <h3>Preferências</h3>
        <label class="muted" for="themeSel">Tema</label>
        <div class="row" style="margin-top:6px">
          <select id="themeSel" class="btn" style="width:100%">
            <option value="auto">Automático (sistema)</option>
            <option value="dark">Escuro</option>
            <option value="light">Claro</option>
          </select>
        </div>
        <div style="height:10px"></div>
        <label class="muted" for="phone">Telefone para SOS</label>
        <input id="phone" class="btn" style="width:100%" placeholder="(11) 9XXXX-XXXX" value="(15) 9 9999-9982" />
      </div>

      <div class="card1">
        <h3>Privacidade</h3>
        <div class="list">
          <label class="row"><span class="left">Compartilhar status em tempo real</span>
            <input type="checkbox" id="shareLive" checked />
          </label>
          <label class="row"><span class="left">Ocultar placa nas capturas</span>
            <input type="checkbox" id="hidePlate" />
          </label>
        </div>
      </div>
    </div>

    <div class="card1">
      <h3>Exportar dados</h3>
      <div class="row">
        <div class="left"><div class="icon">📁</div><div>
          <strong>Baixar histórico (CSV)</strong>
          <div class="muted">Rotas, alertas e telemetria</div>
        </div></div>
        <button class="btn" id="btnExport">Exportar</button>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabButtons.forEach(button => {
    button.addEventListener("click", () => {
    
    tabButtons.forEach(btn => btn.classList.remove("active"));
    tabContents.forEach(content => content.classList.remove("active"));

    button.classList.add("active");
    document.getElementById(button.dataset.tab).classList.add("active");
});
});
  const themeSel = document.getElementById("themeSel");

  function applyTheme(theme) {
  document.body.classList.remove("light", "dark");
  if (theme === "light") {
  document.body.classList.add("light");
  } else if (theme === "dark") {
  document.body.classList.add("dark");
  } else {
    if (window.matchMedia("(prefers-color-scheme: light)").matches) {
  document.body.classList.add("light");
  } else {
  document.body.classList.add("dark");
  }
  }
  }

  themeSel.addEventListener("change", () => {
    const theme = themeSel.value;
    localStorage.setItem("theme", theme);
    applyTheme(theme);
  });

  applyTheme(localStorage.getItem("theme") || "auto");
  themeSel.value = localStorage.getItem("theme") || "auto";
</script>

</body>
</html>