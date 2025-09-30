<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>cadastrocaminhoneiro.com.br</title>
    <link rel="icon" href="img/kk.png" type="image/x-icon">
    <link rel="stylesheet" href="caminhao.css">
</head>
<body>
    <section class="containerPai">
    <div class="card">
        <img src="/img/bem.png" alt="">
    <div class="FormCadastro">
        <h2>Cadastro caminhão</h2>
    <form>
        <input type="text" placeholder="Placa do caminhão" required>
                
        <label class="modelo">Modelo:</label>
    <select>
        <option value="">Selecione o modelo</option>
        <option value="volvo">Carreta 2 eixos</option>
        <option value="scania">Carreta 3 eixos</option>
    </select>
                
        <input type="text" placeholder="Ano de fabricação" id="anoInput" maxlength="4" required>
        <input type="text" placeholder="Número do chassi">
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