@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 3 - Verficar se dois retangulos se interseguem!</h2>
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
            <input type="text" class="form-control" id="rect1X" name="rect1X" placeholder="Ret 1 X">
            <input type="text" class="form-control" id="rect1Y" name="rect1Y" placeholder="Ret 1 Y">
            <input type="text" class="form-control" id="rect1W" name="rect1W" placeholder="Ret 1 Width">
            <input type="text" class="form-control" id="rect1H" name="rect1H" placeholder="Ret 1 Height">
        </div>

        <label style="color:red;" class="mt-3">Digite as coordenadas Retangulo 2 - Vermelho: x1, y1, x2, y2</label>
        <div class="input-group">
        <input type="text" class="form-control" id="rect2X" name="rect2X" placeholder="Ret 2 X">
        <input type="text" class="form-control" id="rect2Y" placeholder="Ret 2 Y">
        <input type="text" class="form-control" id="rect2W" placeholder="Ret 2 Width">
        <input type="text" class="form-control" id="rect2H" name="rect2H" placeholder="Ret 2 Height">
        </div>

        <label style="color:green;" class="mt-3">Digite as coordenadas Retangulo 3 - Verde: x1, y1, x2, y2</label>
        <div class="input-group">
            <input type="text" class="form-control" id="rect3X" name="rect2X" placeholder="Ret 3 X">
            <input type="text" class="form-control" id="rect3Y" placeholder="Ret 3 Y">
            <input type="text" class="form-control" id="rect3W" placeholder="Ret 3 Width">
            <input type="text" class="form-control" id="rect3H" name="rect2H" placeholder="Ret 3 Height">
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
</div>
@endsection

@section('canvas')
    <div class="canvas">
        <div class="azul" id="azul"></div>
        <div class="vermelho" id="vermelho"></div>
        <div class="green" id="green"></div>
    </div>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="js/rectangles.js"></script>
