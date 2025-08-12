
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>TABELA DE FUNCIONÁRIOS</title>
</head>
<body>
    <main class="container">
        <h1 class="Produtos">Produtos</h1>
        <div class="filtros">
        <div class="categoria-input">
            <label for="Categoria">Categoria</label>
            <select id="categoria" class="categoria">
               <option value="">Selecione uma categoria</option>
                <option value="">Contatos de Emergência</option>
                <option value="">Ocorrencia Registradas</option>
                <option value="">Tabelas de Lugares seguros na estrada</option>
            </select>
            <button id="btn-filtrar" class="btn-filtrar">Aplicar Filtros</button>
        </div>
    </div>
    </div>
    </main>

    <div class="container-tabelas">

     <h2> Contatos de Emergência</h2>
        <table>
            <tr>
                <th>Tipo de Serviço</th>
                <th>Nome / Local</th>
                <th>Telefone</th>
                <th>Observações</th>
            </tr>
            <tr>
                <td>Polícia Rodoviária</td>
                <td>PRF Posto KM 100</td>
                <td>191</td>
                <td>24h</td>
            </tr>
            <tr>
                <td>Oficina Mecânica</td>
                <td>Mecânica do João</td>
                <td>(11) 99323-4422</td>
                <td>Próxima ao km 85</td>
            </tr>
            <tr>
                <td>Posto de Combustível</td>
                <td>Posto Petro Truck</td>
                <td>(11) 99732-3445</td>
                <td>Banho e Wi-Fi</td>
            </tr>

             
        <table>
            <h2>Locais de Segurança </h2>
            <tr>
                <th>Lugares Seguros</th>
                <th>Nome / Local</th>
                <th>Telefone</th>
                <th>Observações</th>
            </tr>
            <tr>
                <td>Posto de Gasolina, Iperó-SP</td>
                <td>Posto Ipiranga - Avenida Castelo branco, 185</td>
                <td>(11) 99890-5634</td>
                <td>24h</td>
            </tr>
            <tr>
                <td>Posto de Gasolina, Iperó-SP</td>
                <td>Posto Padovan - Avenida Castelo branco, 620</td>
                <td>(32) 32322-4422</td>
                <td>Próxima ao km 85</td>
            </tr>
            <tr>
                <td>Posto Graal 56, Jundiaí-SP</td>
                <td>Rod. dos Bandeirantes</td>
                <td>(11) 4582-8000</td>
                <td>24h</td>
            </tr>
            <tr>
                <td>Área de Descanso, Taquarituba-SP</td>
                <td>SP-255 - km 311-  ViaPaulista</td>
                <td>(11) 99732-3445</td>
                <td>Vestiário gratuito, 24h</td>
            </tr>
            <tr>
                <td>Área de Descanso, Bocaina-SP</td>
                <td>SP-255 - km 136 - ViaPaulista</td>
                <td>(11) 99732-3445</td>
                <td>24h</td>
            </tr>
            <tr>
                <td>Área de Descanso, Flórida Paulista-SP</td>
                <td>SP-294 - Eixo SP</td>
                <td>(11) 99732-3445</td>
                <td>Refeitorio, 24h</td>
            </tr>
            <tr>
                <td>Área de Descanso, Martinópolis-SP</td>
                <td>SP-284 - Eixo SP</td>
                <td>(11) 99732-3445</td>
                <td>24h</td>
            </tr>
        </table>

        <h2>Checklist de Segurança</h2>
        <table>
            <tr>
                <th>Item de Verificação</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>Pneus c alibrados</td>
                <td class="status-ok">✅</td>
            </tr>
            <tr>
                <td>Freios revisados</td>
                <td class="status-ok">✅</td>
            </tr>
            <tr>
                <td>Documentos em dia</td>
                <td class="status-alerta">⚠️</td>
            </tr>
            <tr>
                <td>Carga bem fixada</td>
                <td class="status-ok">✅</td>
            </tr>
        </table>
        </div>
</head>   
</body>