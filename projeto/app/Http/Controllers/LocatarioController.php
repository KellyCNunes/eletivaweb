<?php

namespace App\Http\Controllers;

use App\Models\Locatario;
use Illuminate\Http\Request;

class LocatarioController extends Controller
{
    public function index()
    {
        $locatario = Locatario::all();
        return view('locatario.index', compact('locatario'));
    }

    public function create()
    {
        return view('locatario.create');
    }

    public function store(Request $request)
    {
        Locatario::create($request->all());
        return redirect()->route('locatario.index')->with('success', 'Locatário cadastrado com sucesso.');
    }

    public function show(int $id)
    {
        $locatario = Locatario::findOrFail($id);
        return view('locatario.show', compact('locatario'));
    }

    public function edit(int $id)
    {
        $locatario = Locatario::findOrFail($id);
        return view('locatario.edit', compact('locatario'));
    }

    public function update(Request $request, int $id)
    {
        $locatario = Locatario::findOrFail($id);
        $locatario->update($request->all());
        return redirect()->route('locatario.index')->with('success', 'Locatário atualizado com sucesso.');
    }

    public function destroy(int $id)
    {
        $locatario = Locatario::findOrFail($id);
        $locatario->delete();
        return redirect()->route('locatario.index')->with('success', 'Locatário excluído com sucesso.');
    }
}
