<x-app-layout>

<div class="container">
    <h1>Lista de Contratos</h1>
    <a href="{{ route('contrato.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Contrato</a>

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
            @forelse($contrato as $contrato)
            <tr>
                <td>{{ $contrato->id }}</td>
                <td>{{ $contrato->imovel->nome }}</td>
                <td>{{ $contrato->proprietario->nome }}</td>
                <td>{{ $contrato->locatario->nome }}</td>
                <td>{{ $contrato->data_inicio }}</td>
                <td>{{ $contrato->data_fim }}</td>
                <td>
                    <a href="{{ route('contrato.show', $contrato->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('contrato.edit', $contrato->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('contrato.destroy', $contrato->id) }}" method="POST" style="display:inline;">
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
</x-app-layout>
