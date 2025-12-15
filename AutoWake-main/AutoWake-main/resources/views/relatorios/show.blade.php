<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Detalhes do Relatórios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="show.css">
</head>
<body>

    <img src="{{ asset('Img/Icon.png') }}" alt="Ícone" class="img-icon">

    @section('content')
        <h1>Detalhes do Relatório</h1>

        <p><strong>Motorista:</strong> {{ $relatorio->motorista }}</p>
        <p><strong>Data:</strong> {{ $relatorio->data }}</p>
        <p><strong>Placa:</strong> {{ $relatorio->placa }}</p>
        <p><strong>Origem:</strong> {{ $relatorio->origem }}</p>
        <p><strong>Destino:</strong> {{ $relatorio->destino }}</p>
        <p><strong>Quilometragem:</strong> {{ $relatorio->km }} km</p>
        <p><strong>Tempo:</strong> {{ $relatorio->tempo }}</p>
        <p><strong>Consumo de combustível:</strong> {{ $relatorio->combustivel }}</p>
        <p><strong>Paradas:</strong> {{ $relatorio->paradas }}</p>
        <p><strong>Eventos:</strong> {{ $relatorio->eventos }}</p>
        <p><strong>Ocorrências:</strong> {{ $relatorio->ocorrencias }}</p>

        <a href="{{ route('relatorios.index') }}">Voltar à lista</a>
    @endsection

</body>

</html>
