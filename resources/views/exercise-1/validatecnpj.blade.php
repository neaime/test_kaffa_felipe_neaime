@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 1 - Verificar se a string digitada se parece com um CNPJ</h2>
</div>

<div class="row">
    <div class="mb-3">
    @include('exercise-1.alerts.alerts')
        <form action="{{ route('cnpj.validate') }}" method="post">
            @csrf
            <label for="cnpj">Digite um CNPJ</label>
            <div class="input-group">
                <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" required>
            </div>
            <button type="submit" class="btn btn-dark mt-2">Verificar</button>
        </form>
    </div>
</div>
@endsection
