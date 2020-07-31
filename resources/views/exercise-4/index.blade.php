@extends('layout.app')

@section('content')

    <div class="text-center">
        <h2 class="mt-4">Exercício 4 - Calcular a area de intersecção entre os retangulos!</h2>
    </div>

<div class="row">
<div class="col-sm-6">
    <div class="card">
    <div class="card-header">Exercício 3:</div>
    <div class="card-body">
    <form>
        @csrf
        <label style="color:blue;">Digite as coordenadas Retangulo 1 - AZUL: x1, y1, x2, y2</label>
        <div class="input-group">
            <input type="text" class="form-control" id="rect1X" name="rect1X" placeholder="Retangulo 1 X" required>
            <input type="text" class="form-control" id="rect1Y" name="rect1Y" placeholder="Retangulo 1 Y" required>
            <input type="text" class="form-control" id="rect1W" name="rect1W" placeholder="Retangulo 1 Width" required>
            <input type="text" class="form-control" id="rect1H" name="rect1H" placeholder="Retangulo 1 Height" required>
        </div>

        <label style="color:red;" class="mt-3">Digite as coordenadas Retangulo 2 - Vermelho: x1, y1, x2, y2</label>
        <div class="input-group">
            <input type="text" class="form-control" id="rect2X" name="rect2X" placeholder="Retangulo 2 X" required>
            <input type="text" class="form-control" id="rect2Y" placeholder="Retangulo 2 Y" required>
            <input type="text" class="form-control" id="rect2W" placeholder="Retangulo 2 Width" required>
            <input type="text" class="form-control" id="rect2H" name="rect2H" placeholder="Retangulo 2 Height" required>
        </div>

        <label style="color:green;" class="mt-3">Digite as coordenadas Retangulo 3 - Verde: x1, y1, x2, y2</label>
        <div class="input-group">
            <input type="text" class="form-control" id="rect3X" name="rect2X" placeholder="Retangulo 3 X" required>
            <input type="text" class="form-control" id="rect3Y" placeholder="Retangulo 3 Y" required>
            <input type="text" class="form-control" id="rect3W" placeholder="Retangulo 3 Width" required>
            <input type="text" class="form-control" id="rect3H" name="rect2H" placeholder="Retangulo 3 Height" required>
        </div>
    </form>
        <div class="form-group">
            <div class="col-md-2 mt-3 pl-0">
                <button class="btn btn-primary">
                    Verificar
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-sm-6">
    <div class="card">
    <div class="card-header">Resultados:</div>
        <div class="card-body left">
            <label><h2 id="axb">A - B</h2></label><br>
            <label><h2 id="axc">A - C</h2></label><br>
            <label><h2 id="bxc">B - C</h2></label>
            </div>
        </div>
    </div>
</div>
@endsection

@section('canvas')
    <div class="canvas">
        <div class="azul" id="azul"></div>
        <div class="vermelho" id="vermelho"></div>
        <div class="green" id="green"></div>

        <div class="cinza" id="cinza"></div>
        <div class="laranja" id="laranja"></div>
        <div class="preto" id="preto"></div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="js/rectangles2.js"></script>
