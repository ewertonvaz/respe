<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;
use App\Http\Requests\CargosFormRequest;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cargos = Cargo::paginate(10);
        return view('cargos.index', compact('cargos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session()->has('redirect_to'))
        {
           session(['redirect_to' => url()->previous()]);
        }
        return view('cargos.create', ['action'=>route('cargos.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargosFormRequest $request)
    {
        //
        if (! $request->has('cancel') ){
            $dados = $request->all();
            Cargo::create($dados);
            $request->session()->flash('message', 'Cargo cadastrado com sucesso');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(session()->pull('redirect_to'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Cargo $cargo, CargosFormRequest $request)
    {
        //
        if (! $request->has('cancel') ){
            $cargo->tipo_cargo = $request->input('tipo_cargo');
            $cargo->sigla_cargo = $request->input('sigla_cargo');
            $cargo->update();
            $request->session()->flash('message', 'Cargo atualizado com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(session()->pull('redirect_to'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo, Request $request)
    {
        if (! $request->has('cancel') ){
            $strEqp = $cargo->tipo_cargo . ', tipo: ' . ', sigla:' . $cargo->sigla_cargo . '}';
            $cargo->delete();
            $request->session()->flash('message', '{cargo: ' . $strEqp . ' excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->to(session()->pull('redirect_to'));
    }
}
