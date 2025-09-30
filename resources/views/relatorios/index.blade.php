<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/kk.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="relatorio.css" >
  <title>Relatorio</title>

  
</head>
<body>

  <div class="container">
    <h1>Relatórios de Caminhões</h1>
    <img src="{{ asset('Img/Icon.png') }}" alt="Ícone" class="img-icon">

    <form method="GET" action="{{ route('relatorios.index') }}" class="filter-form">
      <input type="text" name="motorista" placeholder="Motorista" value="{{ request('motorista') }}">
      <input type="text" name="placa" placeholder="Placa" value="{{ request('placa') }}">
      <input type="date" name="data" value="{{ request('data') }}">
      <button type="submit">Filtrar</button>
      <a href="{{ route('relatorios.index') }}">
        <button type="button">Limpar</button>
      </a>
    </form>

    <div style="text-align: right; margin: 10px 0;">
      <a href="{{ route('relatorios.create') }}">
        <button type="button">+ Novo Relatório</button>
      </a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Motorista</th>
          <th>Placa</th>
          <th>Data</th>
          <th>Origem</th>
          <th>Destino</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @if ($relatorios->count() > 0)
          @foreach ($relatorios as $relatorio)
            <tr>
              <td>{{ $relatorio->id }}</td>
              <td>{{ $relatorio->motorista }}</td>
              <td>{{ $relatorio->placa }}</td>
              <td>{{ $relatorio->data }}</td>
              <td>{{ $relatorio->origem }}</td>
              <td>{{ $relatorio->destino }}</td>
              <td class="actions">
                <a href="{{ route('relatorios.show', $relatorio->id) }}">
                  <button type="button">Ver</button>
                </a>
                <a href="{{ route('relatorios.edit', $relatorio->id) }}">
                  <button type="button">Editar</button>
                </a>
                <form action="{{ route('relatorios.destroy', $relatorio->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit">Excluir</button>
                </form>
              </td>
            </tr>
          @endforeach
        @else
          <tr>
            <td colspan="7">Nenhum relatório encontrado.</td>
          </tr>
        @endif
      </tbody>
    </table>
  </div>

</body>
</html>
