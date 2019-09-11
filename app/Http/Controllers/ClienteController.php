<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $cliente = \App\Cliente::get();
    return view('cliente.index', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $cliente = new \App\Cliente();
    
    $cliente->nomcat = $request->get('nomcli');
    
    $cliente->save();
    
   return redirect('/cliente')->with('msg', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function show($codcli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function edit($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
       return view('cliente.edit', compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codcli)
    {
           $cliente = \App\Categoria::find($codcli);
       $cliente->nomcat = $request->get('nomcli');
       $cliente->save();
       
       return redirect('/cliente')->with('alterado', 'Cliente alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function destroy($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
       $cliente->delete();
       
       return redirect('/cliente')->with('cliEliminar', 'Cliente eliminada');
    }
}
