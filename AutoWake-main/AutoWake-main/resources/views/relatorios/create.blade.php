<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatórios</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('create.css') }}">
</head>
<body>

    <img src="{{ asset('Img/Icon.png') }}" alt="Ícone" class="img-icon">

    <div class="container">
        <h2>Novo Relatório</h2>
        <form action="{{ route('relatorio.salvar') }}" method="POST">
            @csrf

            @php
                $userId = 1;
                use App\Models\UserToken;

                $user_token = UserToken::where('user_id', $userId)->first();
            @endphp

            <input type="hidden" name="user_id" id="user_id" value="{{ $user_token->user_id }}">

            <input type="hidden" name="token" id="token" value="{{ $user_token->token }}">


            <label>Motorista:</label>
            <input type="text" name="motorista" required>

            <label>Data:</label>
            <input type="date" name="data" required>

            <label>Placa:</label>
            <input type="text" name="placa" required>

            <label>Origem:</label>
            <input type="text" name="origem" required>

            <label>Destino:</label>
            <input type="text" name="destino" required>

            <label>Quilometragem:</label>
            <input type="number" name="km" required>

            <label>Tempo de Viagem:</label>
            <input type="text" name="tempo" required>

            <label>Combustível:</label>
            <input type="text" name="combustivel" required>

            <label>Paradas:</label>
            <input type="text" name="paradas" required>

            <label>Eventos Críticos:</label>
            <textarea name="eventos"></textarea>

            <label>Ocorrências:</label>
            <textarea name="ocorrencias"></textarea>

            <button type="submit">Salvar</button>
            <a href="{{ route('relatorios.index') }}">Cancelar</a>
        </form>
    </div>
</body>
</html>