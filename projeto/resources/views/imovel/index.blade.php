<x-app-layout>

    <h5 class="mt-3">Gerenciar Imóveis</h5>

    <a class="btn btn-success" href="/imovel/create">
        Inserir novo Imóvel
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Valor</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($imoveis as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>
                    <a href="/imovel/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/imovel/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>