<x-app-layout>

    <h5>Alterar Proprietario</h5>

    <form action="/proprietario/" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome do proprietário:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" class="form-control"/>
            </div>
            <div class="col">
                <label for="email" class="form-label">Informe o email:</label>
                <input type="text" name="email" class="form-control"/>
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