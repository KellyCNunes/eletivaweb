<?php

namespace App\Http\Controllers;

use App\Models\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    public function index()
    {
        $proprietario = Proprietario::all();
        return view('proprietario.index', compact('proprietario'));
    }

    public function create()
    {
        return view('proprietario.create');
    }

    public function store(Request $request)
    {
        Proprietario::create($request->all());
        return redirect()->route('proprietario.index')->with('success', 'Proprietário cadastrado com sucesso.');
    }

    public function show(int $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        return view('proprietario.show', compact('proprietario'));
    }

    public function edit(int $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        return view('proprietario.edit', compact('proprietario'));
    }

    public function update(Request $request, int $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietario->update($request->all());
        return redirect()->route('proprietario.index')->with('success', 'Proprietário atualizado com sucesso.');
    }

    public function destroy(int $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietario->delete();
        return redirect()->route('proprietario.index')->with('success', 'Proprietário excluído com sucesso.');
    }
}
