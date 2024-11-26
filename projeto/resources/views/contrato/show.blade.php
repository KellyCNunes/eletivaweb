@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Contrato</h1>
    <p><strong>ID:</strong> {{ $contrato->id }}</p>
    <p><strong>Imóvel:</strong> {{ $contrato->imovel->nome }}</p>
    <p><strong>Proprietário:</strong> {{ $contrato->proprietario->nome }}</p>
    <p><strong>Locatário:</strong> {{ $contrato->locatario->nome }}</p>
    <p><strong>Data de Início:</strong> {{ $contrato->data_inicio }}</p>
    <p><strong>Data de Fim:</strong> {{ $contrato->data_fim }}</p>
    <a href="{{ route('contrato.index') }}" class="btn btn-secondary">Voltar</a>
    <a href="{{ route('contrato.edit', $contrato->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('contrato.destroy', $contrato->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
    </form>
</div>
@endsection
