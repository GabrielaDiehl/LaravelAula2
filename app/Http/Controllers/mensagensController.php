<?php

namespace App\Http\Controllers;

use App\Mensagem;
use Illuminate\Http\Request;

class mensagensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_msg = Mensagem::all();
        return view('mensagens.list', ["mensagens" => $lista_msg]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $mensagens = Mensagem::find($id);
        return view('mensagens.show',['mensagens' => $mensagens]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensagens $mensagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensagens $mensagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensagens $mensagens)
    {
        //
    }
}
