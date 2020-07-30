@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 2 - Validar se o CNPJ é verdadeiro de acordo com a Receita Federal</h2>
</div>

<div class="row">
    <div class="mb-3">
    @include('exercise-2.alerts.alerts')
        <form action="{{ route('cnpj.verify.true') }}" method="post">
            @csrf
            <label for="cnpj">Digite um CNPJ</label>
            <div class="input-group">
                <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" required>
            </div>
            <button type="submit" class="btn btn-dark mt-2">Cadastrar</button>
        </form>
    </div>
</div>
@endsection
