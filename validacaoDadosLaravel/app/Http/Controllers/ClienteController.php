<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        /* para validação abaixo usar com este método = public function store(Request $request)
        $this->validate($request, [
            'nome' => 'required|min:5|max:100',
            'email' => 'required|max:200|email'
        ],[
            'nome.required' => 'Digite um Nome!',
            'nome.min' => 'Digite no mínimo 5 caracteres!',
            'email.required' => 'Digite um E-mail!',
            'email.max' => 'Máximo de 200 caracteres!',
            'email.email' => 'Prencha um e-mail válido!'
        ]); */

        return response()->json(['data' => 'Ok']);
        //dd($request->all());
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
