$(document).ready(function (){


    /**
     *  Function ajax getData table in BD MySQL.
**/
    $('#tableTarefas').DataTable({
        processing: true,
        serverSide: true,
        ajax: "http://test-kaffa-felipe-neaime.test/exercise-5/getData",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action'}
        ]
    });
});
