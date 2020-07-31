<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Models\TodoList;

class TodoListController extends Controller
{
    private $repository;

    public function __construct(TodoList $tarefa)
    {
        $this->repository = $tarefa;
    }

    public function index()
    {
        return view('exercise-5.index');
    }

    public function getData()
    {
        /**
        **  Returns all records from the todo_list table,
        **  and adds a column called 'action' in which adds a 'DELETE' button for each record.
        **/
        return DataTables::of($this->repository->get())
                ->addColumn('action', function($data){
                    $button = '<button type="button"
                    name="delete" data-toggle="modal" id='.$data->id.'
                    class="btn btn-danger delete"> Delete</button>';
                    return $button;
                })->rawColumns(['action'])
                ->make(true);
    }

    public function store(Request $request)
    {
        /**
        **  Attempts to insert the record, if successful,
        **  return a JSON success; otherwise, it will return ERROR
        **/
        if($this->repository->create($request->all())){
            return response()->json(['sucess' => "Tarefa Cadastrada com sucesso!"]);
        }else{
            return response()->json(['error' => "ERROR!"]);
        }
    }

    public function destroy($id)
    {
        $tarefa = $this->repository->find($id);//Recover the deleted user

        /**
        **  Attempts to delete according to the recovered record,
        **  if it succeeds it returns a JSON success, otherwise it returns ERROR
        **/
        if($tarefa->delete()){
            return response()->json(['messagem' => 'Tarefa exluida com sucesso!']);
        }else{
            return response()->json(['error' => 'ERRO!']);
        }
    }
}
