<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Frete.css">
    <title>cadastrosdefrete.com.br</title>
</head>
<body>
<body>
    <section class="containerPai">
    <div class="card">
        <img src=".png" alt="">
    <div class="FormCadastro">
        <h2>Cadastre seu Frete</h2>
    <form>
        <input type="text" placeholder="Email Comerciante" required>
                
        <label class="modelo">Marcas Produtos:</label>
    <select>
        <option value="">Selecione o modelo</option>
        <option value="volvo">Carreto 2 eixos</option>
        <option value="scania">Carreto 2 eixos</option>
        <option value="mercedes">Cavalo Mecânico</option>
    </select>
                
        <input type="text" placeholder="Ano de fabricação" id="anoInput" maxlength="4" required>
        <input type="text" placeholder="Nome do motorista" required>
        <input type="tel" placeholder="Telefone">
                
        <label class="tipo">Tipo de carga:</label>
    <select>
        <option value="">Selecione o tipo</option>
        <option value="alimentícia">Alimentícia</option>
        <option value="combustível">Combustível</option>
        <option value="industrial">Industrial</option>
    </select>
                
        <input type="number" placeholder="Capacidade de carga (ton)" step="0.1">
        <input type="text" placeholder="Observações">
                
        <button type="submit">Cadastrar caminhão</button>
    </form>
    </div>
    </div>
</section>
</body>
</html>