<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/kk.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="edite.css">
</head>
<body>
</head>
<body>

        <img src="{{ asset('Img/Icon.png') }}" alt="Ícone" class="img-icon">
        @section('content')
        <div class="container">
        <h2>Editar Relatório</h2>

    <form action="{{ route('relatorios.update', $relatorio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Motorista:</label>
        <input type="text" name="motorista" value="{{ $relatorio->motorista }}" required><br>

        <label>Data:</label>
        <input type="date" name="data" value="{{ $relatorio->data }}" required><br>

        <label>Placa:</label>
        <input type="text" name="placa" value="{{ $relatorio->placa }}" required><br>

        <label>Origem:</label>
        <input type="text" name="origem" value="{{ $relatorio->origem }}" required><br>

        <label>Destino:</label>
        <input type="text" name="destino" value="{{ $relatorio->destino }}" required><br>

        <label>Quilometragem:</label>
        <input type="number" name="km" value="{{ $relatorio->km }}" required><br>

        <label>Tempo de Viagem:</label>
        <input type="text" name="tempo" value="{{ $relatorio->tempo }}" required><br>

        <label>Combustível:</label>
        <input type="text" name="combustivel" value="{{ $relatorio->combustivel }}" required><br>

        <label>Paradas:</label>
        <input type="text" name="paradas" value="{{ $relatorio->paradas }}" required><br>

        <label>Eventos Críticos:</label>
        <textarea name="eventos">{{ $relatorio->eventos }}</textarea><br>

        <label>Ocorrências:</label>
        <textarea name="ocorrencias">{{ $relatorio->ocorrencias }}</textarea><br>

        <button type="submit">Atualizar</button>
        <a href="{{ route('relatorios.index') }}">Cancelar</a>
    </form>
</div>
@endsection
</body>
</html>