<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
    // Exibe lista com filtro
    public function index(Request $request)
    {
        $query = Relatorio::query();

        if ($request->filled('motorista')) {
            $query->where('motorista', 'like', '%' . $request->motorista . '%');
        }

        if ($request->filled('placa')) {
            $query->where('placa', 'like', '%' . $request->placa . '%');
        }

        if ($request->filled('data')) {
            $query->whereDate('data', $request->data);
        }

        $relatorios = $query->get();

        return view('relatorios.index', compact('relatorios'));
    }

    // Mostra o formulário para criar um novo relatório
    public function create()
    {
        return view('relatorios.create');
    }

    // Salva o novo relatório no banco
    public function store(Request $request)
    {
        $request->validate([
            'motorista' => 'required|string',
            'data' => 'required|date',
            'placa' => 'required|string',
            'origem' => 'required|string',
            'destino' => 'required|string',
            'km' => 'required|numeric',
            'tempo' => 'required|string',
            'combustivel' => 'required|string',
            'paradas' => 'required|integer',
            'eventos' => 'nullable|string',
            'ocorrencias' => 'nullable|string',
        ]);

        $relatorio = Relatorio::create($request->all());

        return redirect()->route('relatorios.index')
            ->with('success', 'Relatório salvo com sucesso!');
    }

    // Mostra o formulário para editar um relatório
    public function edit($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios.edit', compact('relatorio'));
    }

    // Atualiza um relatório existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'motorista' => 'required|string',
            'data' => 'required|date',
            'placa' => 'required|string',
            'origem' => 'required|string',
            'destino' => 'required|string',
            'km' => 'required|numeric',
            'tempo' => 'required|string',
            'combustivel' => 'required|string',
            'paradas' => 'required|integer',
            'eventos' => 'nullable|string',
            'ocorrencias' => 'nullable|string',
        ]);

        $relatorio = Relatorio::findOrFail($id);
        $relatorio->update($request->all());

        return redirect()->route('relatorios.edit')
            ->with('success', 'Relatório atualizado com sucesso!');
    }

    // Deleta um relatório
    public function destroy($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        $relatorio->delete();

        return redirect()->route('relatorios.index')
            ->with('success', 'Relatório deletado com sucesso!');
    }

    // Exibe um relatório (visualização simples)
    public function show($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios.show', compact('relatorio'));
    }

    

    }