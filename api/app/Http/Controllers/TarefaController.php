<?php

namespace App\Http\Controllers;

use App\Models\Tarefa as Tarefa;
use App\Http\Resources\Tarefa as TarefaResource;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tarefas = Tarefa::paginate(15);
        $tarefas = Tarefa::all();
        return TarefaResource::collection($tarefas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tarefa = new Tarefa;
        $tarefa->titulo = $request->input('titulo');
        $tarefa->data_inclusao = $request->input('data_inclusao');
        $tarefa->data_conclusao = $request->input('data_conclusao');

        
        // $verificaTarefa = Tarefa::findOrFail( $tarefa->titulo );

        // if(empty($verificaTarefa)){
            if( $tarefa->save() ){
                return new TarefaResource( $tarefa );
            }
        // }else{
        //     $tarefaRes = new TarefaResource($tarefa);
        //     return $tarefaRes->Erros("Já existe uma tarefa com esse título. Defina uma outra.");
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarefa = Tarefa::findOrFail( $id );
        return new TarefaResource( $tarefa );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail( $request->id );
        $tarefa->titulo = $request->input('titulo');
        $tarefa->data_inclusao = $request->input('data_inclusao');
        $tarefa->data_conclusao = $request->input('data_conclusao');

        if( $tarefa->save() ){
            return new TarefaResource( $tarefa );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::findOrFail( $id );
        if( $tarefa->delete() ){
        return new TarefaResource( $tarefa );
        }
    }
}
