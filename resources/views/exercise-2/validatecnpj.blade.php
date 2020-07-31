@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 2 - Validar se o CNPJ é verdadeiro de acordo com a Receita Federal</h2>
</div>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
    <div class="card-header">Exercício 2:</div>
    <div class="card-body">
        <form method="POST" action="{{ route('cnpj.verify.true') }}">
        @csrf
        <div class="form-group row">
            <label for="cnpj" class="col-sm-4 col-form-label text-md-right">CNPJ:</label>
            <div class="col-md-6">
                <input name="cnpj" class="form-control" placeholder="Digite um numero de CNPJ..." required autofocus>
                <span class="invalid-feedback" role="alert">
                    <strong></strong>
                </span>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Verificar
                </button>
            </div>
        </div>
        </form>
        @include('exercise-2.alerts.alerts')
    </div>
</div>
@endsection
