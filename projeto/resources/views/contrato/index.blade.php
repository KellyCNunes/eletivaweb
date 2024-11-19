@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Contratos</h1>
    <a href="{{ route('contratos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Contrato</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imóvel</th>
                <th>Proprietário</th>
                <th>Locatário</th>
                <th>Data de Início</th>
                <th>Data de Fim</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contratos as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->imovel->nome }}</td>
                <td>{{ $contrato->proprietario->nome }}</td>
                <td>{{ $contrato->locatario->nome }}</td>
                <td>{{ $contrato->data_inicio }}</td>
                <td>{{ $contrato->data_fim }}</td>
                <td>
                    <a href="{{ route('contratos.show', $contrato->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('contratos.edit', $contrato->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('contratos.destroy', $contrato->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Nenhum contrato encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
