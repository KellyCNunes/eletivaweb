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
        $contrato = Contrato::all();
        return view('contrato.index', compact('contrato'));
    }

    public function create()
    {
        $imovel = Imovel::all();
        $proprietario = Proprietario::all();
        $locatario = Locatario::all();
        return view('contrato.create', compact('imovel', 'proprietario', 'locatario'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imovel_id' => 'required|exists:imovel,id',
            'proprietario_id' => 'required|exists:proprietario,id',
            'locatario_id' => 'required|exists:locatario,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio'
        ]);

        Contrato::create($request->all());
        return redirect()->route('contrato.index')->with('success', 'Contrato registrado com sucesso.');
    }

    public function show(int $id)
    {
        $contrato = Contrato::findOrFail($id);
        return view('contrato.show', compact('contrato'));
    }

    public function edit(int $id)
    {
        $contrato = Contrato::findOrFail($id);
        $imovel = Imovel::all();
        $proprietario = Proprietario::all();
        $locatario = Locatario::all();
        return view('contrato.edit', compact('contrato', 'imovei', 'proprietario', 'locatario'));
    }

    public function update(Request $request, int $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->update($request->all());
        return redirect()->route('contrato.index')->with('success', 'Contrato atualizado com sucesso.');
    }

    public function destroy(int $id)
    {
        $contrato = Contrato::findOrFail($id);
        $contrato->delete();
        return redirect()->route('contrato.index')->with('success', 'Contrato excluído com sucesso.');
    }
}
