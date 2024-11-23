<x-app-layout>

    <h5 class="mt-3">Gerenciar Proprietario</h5>

    <a class="btn btn-success" href="/proprietario/create">
        Inserir novo Proprietario
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($proprietario as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>
                    <a href="/proprietario/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/proprietario/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>