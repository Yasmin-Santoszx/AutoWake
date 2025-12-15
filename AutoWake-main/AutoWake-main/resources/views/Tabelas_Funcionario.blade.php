<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="Tabela.css">
    <title>TABELA DE EMERGENCIAS</title>
</head>

<body>

<div class="container-tabelas">
    <h1 class="tabelas-container">Tabelas de informações de Contato</h1>

    <!-- FILTRO -->
    <div style="display: flex; align-items:center; margin-right: 30%">
        <div class="filtros">
            <label>Categoria</label>
            <select id="categoria" class="categoria">
                <option value="">Selecione uma categoria</option>
                <option value="emergencia">Contatos de Emergência</option>
                <option value="locais">Locais de Segurança</option>
                <option value="checklist">Checklist de Segurança</option>
            </select>
        </div>
        <button id="btn-filtrar" class="btn-filtrar">Aplicar Filtros</button>
    </div>

    <!-- TABELA 1 -->
    <div id="tabela-emergencia" class="bloco-tabela">
        <h2>Contatos de Emergência</h2>
        <table>
            <tr>
                <th>Tipo de Serviço</th>
                <th>Nome / Local</th>
                <th>Telefone</th>
                <th>Observações</th>
            </tr>
            <tr><td>Polícia Rodoviária</td><td>PRF Posto KM 100</td><td>191</td><td>24h</td></tr>
            <tr><td>Oficina Mecânica</td><td>Mecânica do João</td><td>(11) 99323-4422</td><td>Próxima ao km 85</td></tr>
            <tr><td>Posto de Combustível</td><td>Posto Petro Truck</td><td>(11) 99732-3445</td><td>24h</td></tr>
        </table>
    </div>

    <!-- TABELA 2 -->
    <div id="tabela-locais" class="bloco-tabela">
        <h2>Locais de Segurança</h2>
        <table>
            <tr>
                <th>Lugares Seguros</th>
                <th>Nome / Local</th>
                <th>Telefone</th>
                <th>Observações</th>
            </tr>
            <tr><td>Posto de Gasolina, Iperó-SP</td><td>Posto Ipiranga - Av. Castelo Branco, 185</td><td>(11) 99890-5634</td><td>24h</td></tr>
            <tr><td>Posto de Gasolina, Iperó-SP</td><td>Posto Padovan - Av. Castelo Branco, 620</td><td>(32) 32322-4422</td><td>Próxima ao km 85</td></tr>
            <tr><td>Posto Graal 56, Jundiaí-SP</td><td>Rod. dos Bandeirantes</td><td>(11) 4582-8000</td><td>24h</td></tr>
            <tr><td>Área de Descanso, Taquarituba-SP</td><td>SP-255 - km 311</td><td>(11) 99732-3445</td><td>Vestiário gratuito, 24h</td></tr>
        </table>
    </div>

    <!-- TABELA 3 -->
    <div id="tabela-checklist" class="bloco-tabela">
        <h2>Checklist de Segurança</h2>
        <table>
            <tr><th>Item de Verificação</th><th>Status</th></tr>
            <tr><td>Pneus calibrados</td><td>✅</td></tr>
            <tr><td>Freios revisados</td><td>✅</td></tr>
            <tr><td>Documentos em dia</td><td>⚠️</td></tr>
            <tr><td>Carga bem fixada</td><td>✅</td></tr>
        </table>
    </div>

</div>

<footer>
    <div class="footer-waves">
        <img src="/img/wave.svg" alt="Ondas decorativas">
    </div>
</footer>

<script src="filtro.js"></script>
</body>
</html>
