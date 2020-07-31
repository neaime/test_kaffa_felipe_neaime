@extends('layout.app')

@section('content')
<div class="text-center">
    <h2 class="mt-4">Exercício 5 - Lista de Tarefas Simples</h2>
</div>

<div class="row">
@include('exercise-5.modals.modalTarefas')
<div class="col-sm-12">
    <div class="card">
    <div class="card-header">
        <!-- Button call modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tarefaModal">
            Adicionar Tarefa
        </button>
    </div>
    <div class="card-body">
    @include('exercise-5.table.table')
    </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){


    /**
     *  Function ajax getData table in BD MySQL.
    **/
    $('#tableTarefas').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route('getData') !!}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action'}
        ]
    });

    /**
     ** Function ajax insertData table in DB MySQL.
     **/
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#insertTodo').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: "POST",// Set the form submission method
            url: "{{ route('todo.store') }}",//Call URL store DB
            data: $(this).serialize(), // Store form data in variable 'data'

            /**
             ** If you have successfully inserted the data, print a return on the console,
             ** hide the modal and call the function to update the table.
             **/
            success: function(response) {
                console.log(response);//Print Console
                $('#insertTodo')[0].reset();
                $('#tarefaModal').modal('hide');// Hide Modal
                $('#tableTarefas').DataTable().ajax.reload();//Reload Table Tarefas
                //alert('Tarefa Criada');
            },
            /**
             ** If you have erro inserted the data, print a return on the console.
            **/
            error: function(error) {
                alert(error)
            }
        });
    });

    /**
     * Function to delete records in the database. First, when clicking on the delete button,
     * I displayed the Confirmation Modal. When you click on 'REMOVE TASK',
     * you call the function to delete the record from the database. After confirming the deletion,
     * he closes Modal and updates the table.
     **/
    var tarefa_id;
    $(document).on('click', '.delete', function(){
        /**
         * Assigns a value to the variable 'tarefa_id', this value refers to the value passed
         * by the 'DELETE' button
        */
        tarefa_id = $(this).attr('id');
        $('#messageTarefa').text('Tem certeza que deseja remover a tarefa: '+ tarefa_id);

        $('#confirmDeleteModal').modal('show');// Show modal
    });

    $('#confirmDelete').click(function(){
        $.ajax({
            type: 'delete',
            data: {
                "id": tarefa_id
            },
            url: "/exercise-5/destroy/"+tarefa_id,
            beforeSend: function(){
                //After clicking on 'REMOVER TAREFA', it updates the button text to 'DELETANDO',
                $('#confirmDelete').text('Deletando...');
            },
            success: function(data){
                console.log(data);
                $('#confirmDeleteModal').modal('hide');//Hide Modal
                $('#confirmDelete').text('Remover Tarefa');//Return button text
                $('#tableTarefas').DataTable().ajax.reload();//Update the table
            }
        })
    });
});
</script>
@endsection
