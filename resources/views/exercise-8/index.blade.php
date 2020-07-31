@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 8 - Diagrama de Relacionamento: Gerenciador de pedidos simples</h2>
</div>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-12">
<div class="card">
    <div class="card-header">Exercício 8:</div>
    <div class="card-body">
        <img src="img/diagrama-de-relacionamento.png" class="img-fluid mx-auto d-block" alt="Imagem responsiva">
    </div>
</div>
</div>
</div>
    <div class="alert alert-success" role="alert">
    <b>Script para contar quantos produtos existem em uma Ordem</b><br>
    <i>SELECT</i> ordens.id, <i>COUNT</i>(produtos_has_ordens.ordens_id) <i>FROM</i> ordens <i>INNER JOIN</i> produtos_has_ordens on produtos_has_ordens.ordens_id=ordens.id <i>GROUP BY</i> id
    </div>

    <div class="alert alert-primary" role="alert">
    <b>INDEXES:</b><br>
    <b>Tabela <i>"produtos_has_ordens:</i></b> fk_produtos_has_ordens_ordens1_idx => <i>Coluna ordens_id</i><br>
    <b>Tabela <i>"produtos_has_ordens:</i></b> fk_produtos_has_ordens_produtos_idx => <i>Coluna produtos_id</i><br>
    <b>Tabela <i>"ordens:</b></i> fk_ordens_clientes1_idx => <i>Coluna clientes_id</i><br>
    </div>
</div>
</div>

@endsection
