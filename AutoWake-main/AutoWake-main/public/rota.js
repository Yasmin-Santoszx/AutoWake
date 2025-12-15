const origemSelect = document.getElementById('origem');
const destinoSelect = document.getElementById('destino');
const duracao = document.getElementById('duracao');
const distancia = document.getElementById('distancia');

// Mapeamento dos iframes (para mostrar o mapa do destino)
const iframes = {
  guapiara: document.getElementById('mapa-guapiara'),
  tatui: document.getElementById('mapa-tatui'),
  sorocaba: document.getElementById('mapa-sorocaba'),
  itapetininga: document.getElementById('mapa-itapetininga')
};

// Banco de rotas (origem-destino)
const rotas = {
  "guapiara-itapetininga": { distancia: "104 km", duracao: "2h 15min" },
  "tatui-itapetininga": { distancia: "55 km", duracao: "1h 05min" },
  "guapiara-tatui": { distancia: "127 km", duracao: "2h 40min" },
  "tatui-sorocaba": { distancia: "52 km", duracao: "1h 00min" },
  "guapiara-sorocaba": { distancia: "116,6 km", duracao: "2h 27min" },
  "sorocaba-itapetininga": { distancia: "67 km", duracao: "1h 20min" }
};

// Atualiza o mapa e as informações
function atualizarRota() {
  const origem = origemSelect.value;
  const destino = destinoSelect.value;

  // Oculta todos os mapas
  Object.values(iframes).forEach(iframe => iframe.classList.remove('ativo'));

  // Mostra o mapa do destino
  if (iframes[destino]) {
    iframes[destino].classList.add('ativo');
  }

  // Verifica se a rota existe
  const chave = `${origem}-${destino}`;
  const chaveInvertida = `${destino}-${origem}`; // caso o motorista escolha ao contrário

  if (rotas[chave]) {
    distancia.textContent = rotas[chave].distancia;
    duracao.textContent = rotas[chave].duracao;
  } else if (rotas[chaveInvertida]) {
    distancia.textContent = rotas[chaveInvertida].distancia;
    duracao.textContent = rotas[chaveInvertida].duracao;
  } else {
    distancia.textContent = "--";
    duracao.textContent = "--";
  }
}

// Eventos
origemSelect.addEventListener('change', atualizarRota);
destinoSelect.addEventListener('change', atualizarRota);

// Padrão inicial
document.addEventListener('DOMContentLoaded', () => {
  origemSelect.value = "guapiara";
  destinoSelect.value = "itapetininga";
  atualizarRota();
});

