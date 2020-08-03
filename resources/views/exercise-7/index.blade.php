@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 7 - Servidor REST retornando JSON</h2>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            Data e hora:
        </div>
        <div class="card-body" id="currentDateTime">
        </div>
    </div>
</div>
</div>
<div class="alert alert-info" role="alert">
    <b>Explicação:</b><br>
    <p>
        Criei uma api com o link <i><u>http:/seu-dominio/api/v1/currentDateTime</u></i>, requisição através
        do metodo GET. Na view usei ajax para recuperar o retorno em JSON e imprimir na tela.
    </p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){

    $.ajax({
        type: "GET",
        url: "api/v1/currentDateTime",//Call URL store DB

        success: function(response) {
            document.getElementById("currentDateTime").innerHTML = JSON.stringify(response);//Write currentDateTime in div id currentDateTime
        },
        /**
         ** If you have erro inserted the data, print a return on the alert.
        **/
        error: function(error) {
            alert(error)
        }
    });
});
</script>
@endsection
