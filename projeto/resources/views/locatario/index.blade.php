<x-app-layout>

    <h5 class="mt-3">Gerenciar locatario</h5>

    <a class="btn btn-success" href="/locatario/create">
        Inserir novo Locatario
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
            @foreach($locatario as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>
                    <a href="/locatario/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/locatario/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>