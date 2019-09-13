<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $produto = \App\Produto::get();
    return view('produto.index', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $produto = new \App\Produto();
    
    $produto->nompro = $request->get('nompro');
    
    $produto->save();
    
   return redirect('/produto')->with('msg', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function show($codpro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function edit($codpro)
    {
        $produto = \App\Produto::find($codpro);
       return view('produto.edit', compact("produto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codpro)
    {
           $produto = \App\Produto::find($codpro);
       $produto->nompro = $request->get('nompro');
       $produto->save();
       
       return redirect('/produto')->with('alterado', 'Produto alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $codcli
     * @return \Illuminate\Http\Response
     */
    public function destroy($codpro)
    {
        $produto = \App\Produto::find($codpro);
       $produto->delete();
       
       return redirect('/produto')->with('proEliminar', 'Produto eliminada');
    }
}
