@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 6 - Consumir REST retornando JSON</h2>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            Data e hora - Retorno api http://worldclockapi.com/api/json/utc/now:
        </div>
        <div class="card-body">
            <h3 id="UTC"></h3>
            @include('exercise-6.form.form')
            <p id="currentDateTime"></p>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){
    $("button").click(function(){
        var locate = $("#locate").val();

        $.ajax({
        type: "GET",//
        url: "http://worldclockapi.com/api/json/utc/now",//URL API

        success: function(response) {
            document.getElementById("UTC").innerHTML = "UTC: "+JSON.stringify(response.currentDateTime);

            //Explito a variavel para poder tirar o Z
            currentDateTime = response.currentDateTime.split('Z');
            //Em seguida adiciono os segundos e o Z novamente para poder fazer a conversão para a localidade desejada.
            currentDateTime = currentDateTime[0]+":00.000Z";

            data = new Date(currentDateTime).toLocaleString("pt-BR", {timeZone: locate});

            document.getElementById("currentDateTime").innerHTML = locate+": "+data;
            console.log(data);
            console.log(currentDateTime);
            //console.log(data.toISOString());
            /*
            var currentDateTime = response.currentDateTime;
            currentDateTime = currentDateTime.split('T');
            utc = currentDateTime[1].split('Z');
            time = utc[0].split(':');
            hora = time[0];
            minuto = time[1];*/

        },
        /**
        ** If you have erro inserted the data, print a return on the alert.
        **/
        error: function(error) {
            alert(error)
        }
        });
    });
});
</script>
@endsection
