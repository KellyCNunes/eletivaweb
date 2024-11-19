<x-app-layout>

    <h5>Excluir Imóvel</h5>

    <form action="/imovel/{{$imovel->id}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
        <div class="col">
                <label for="nome" class="form-label">Informe o nome do imóvel:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
            <div class="col">
                <label for="endereco" class="form-label">Informe o endereço do imóvel:</label>
                <input type="text" name="endereco" class="form-control"/>
            </div>
            <div class="col">
                <label for="valor" class="form-label">Informe o valor do imóvel:</label>
                <input type="number" name="valor" class="form-control"/>
            </div>
            <div class="col">
                <label for="tipo" class="form-label">Informe o tipo de imóvel:</label>
                <input type="text" name="tipo" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>