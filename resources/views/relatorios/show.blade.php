
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            padding: 30px;
            background-image: url("{{ asset('fundo.png') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            color: #dce0e6;
        }

        .container {
            background-color: rgba(31, 31, 32, 0.6);
            padding: 30px;
            border-radius: 12px;
            max-width: 1000px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        h1 {
            color: #4eaff7;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2b2b2b;
            margin-top: 20px;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #444;
            text-align: left;
        }

        table th {
            background-color: #3b3b3b;
            color: #ffffff;
        }

        input, select, button {
            padding: 8px;
            margin: 5px;
            border: none;
            border-radius: 6px;
        }

        input[type="text"], input[type="date"] {
            width: 180px;
        }

        button {
            background-color: #4eaff7;
            color: white;
            cursor: pointer;
        }

        .form-inline {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .actions form {
            display: inline;
        }

        .img-icon {
            width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
        {{-- Ícone --}}
        <img src="{{ asset('img/Icon.png') }}" alt="Ícone" class="img-icon">
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