@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Novo Contrato</h1>
    <form action="{{ route('contrato.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="imovel_id">Imóvel</label>
            <select name="imovel_id" id="imovel_id" class="form-control" required>
                @foreach($imoveis as $imovel)
                <option value="{{ $imovel->id }}">{{ $imovel->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="proprietario_id">Proprietário</label>
            <select name="proprietario_id" id="proprietario_id" class="form-control" required>
                @foreach($proprietarios as $proprietario)
                <option value="{{ $proprietario->id }}">{{ $proprietario->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="locatario_id">Locatário</label>
            <select name="locatario_id" id="locatario_id" class="form-control" required>
                @foreach($locatarios as $locatario)
                <option value="{{ $locatario->id }}">{{ $locatario->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_inicio">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data_fim">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
