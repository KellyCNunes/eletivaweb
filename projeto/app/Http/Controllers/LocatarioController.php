<?php

namespace App\Http\Controllers;

use App\Models\Locatario;
use Illuminate\Http\Request;

class LocatarioController extends Controller
{
    public function index()
    {
        $locatarios = Locatario::all();
        return view('locatarios.index', compact('locatarios'));
    }

    public function create()
    {
        return view('locatarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email|unique:locatarios'
        ]);

        Locatario::create($request->all());
        return redirect()->route('locatarios.index')->with('success', 'Locatário cadastrado com sucesso.');
    }

    public function show(Locatario $locatario)
    {
        return view('locatarios.show', compact('locatario'));
    }

    public function edit(Locatario $locatario)
    {
        return view('locatarios.edit', compact('locatario'));
    }

    public function update(Request $request, Locatario $locatario)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email|unique:locatarios,email,' . $locatario->id
        ]);

        $locatario->update($request->all());
        return redirect()->route('locatarios.index')->with('success', 'Locatário atualizado com sucesso.');
    }

    public function destroy(Locatario $locatario)
    {
        $locatario->delete();
        return redirect()->route('locatarios.index')->with('success', 'Locatário excluído com sucesso.');
    }
}
