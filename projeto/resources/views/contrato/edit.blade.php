<x-app-layout>

<div class="container">
    <h1>Editar Contrato</h1>
    <form action="{{ route('contrato.update', $contrato->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="imovel_id">Imóvel</label>
            <select name="imovel_id" id="imovel_id" class="form-control" required>
                @foreach($imoveis as $imovel)
                <option value="{{ $imovel->id }}" {{ $contrato->imovel_id == $imovel->id ? 'selected' : '' }}>
                    {{ $imovel->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="proprietario_id">Proprietário</label>
            <select name="proprietario_id" id="proprietario_id" class="form-control" required>
                @foreach($proprietarios as $proprietario)
                <option value="{{ $proprietario->id }}" {{ $contrato->proprietario_id == $proprietario->id ? 'selected' : '' }}>
                    {{ $proprietario->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="locatario_id">Locatário</label>
            <select name="locatario_id" id="locatario_id" class="form-control" required>
                @foreach($locatarios as $locatario)
                <option value="{{ $locatario->id }}" {{ $contrato->locatario_id == $locatario->id ? 'selected' : '' }}>
                    {{ $locatario->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_inicio">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ $contrato->data_inicio }}" required>
        </div>
        <div class="form-group">
            <label for="data_fim">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{ $contrato->data_fim }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('contratos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</x-app-layout>
