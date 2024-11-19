<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::all();
        return view('imovel.index', compact('imoveis'));
    }

    
    public function create()
    {
        return view('imovel.create');
    }

   
    public function store(Request $request)
    {
        Imovel::create($request->all());
        return redirect()->route('imovel.index')->with('success', 'Imóvel cadastrado com sucesso.');
    }

   
    public function show(int $id)
    {
        $imovel = Imovel::findOrFail($id);
        return view('imovel.show', compact('imovel'));
    }

    
    public function edit(int $id)
    {
        $imovel = Imovel::findOrFail($id);
        return view('imovel.edit', compact('imovel'));
    }

    public function update(Request $request, int $id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovel->update($request->all());
        return redirect()->route('imovel.index')->with('success', 'Imóvel atualizado com sucesso.');
    }

    
    public function destroy(int $id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovel->delete();
        return redirect()->route('imovel.index')->with('success', 'Imóvel excluído com sucesso.');
    }
}

