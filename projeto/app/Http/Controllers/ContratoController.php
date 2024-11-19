<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Imovel;
use App\Models\Proprietario;
use App\Models\Locatario;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index()
    {
        $contratos = Contrato::all();
        return view('contratos.index', compact('contratos'));
    }

    public function create()
    {
        $imoveis = Imovel::all();
        $proprietarios = Proprietario::all();
        $locatarios = Locatario::all();
        return view('contratos.create', compact('imoveis', 'proprietarios', 'locatarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imovel_id' => 'required|exists:imoveis,id',
            'proprietario_id' => 'required|exists:proprietarios,id',
            'locatario_id' => 'required|exists:locatarios,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio'
        ]);

        Contrato::create($request->all());
        return redirect()->route('contratos.index')->with('success', 'Contrato registrado com sucesso.');
    }

    public function show(Contrato $contrato)
    {
        return view('contratos.show', compact('contrato'));
    }

    public function edit(Contrato $contrato)
    {
        $imoveis = Imovel::all();
        $proprietarios = Proprietario::all();
        $locatarios = Locatario::all();
        return view('contratos.edit', compact('contrato', 'imoveis', 'proprietarios', 'locatarios'));
    }

    public function update(Request $request, Contrato $contrato)
    {
        $request->validate([
            'imovel_id' => 'required|exists:imoveis,id',
            'proprietario_id' => 'required|exists:proprietarios,id',
            'locatario_id' => 'required|exists:locatarios,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio'
        ]);

        $contrato->update($request->all());
        return redirect()->route('contratos.index')->with('success', 'Contrato atualizado com sucesso.');
    }

    public function destroy(Contrato $contrato)
    {
        $contrato->delete();
        return redirect()->route('contratos.index')->with('success', 'Contrato excluído com sucesso.');
    }
}
