<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = new cliente();
        $clientes = $clientes->all();
        return view('index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->timestamps = $request->timestamps;

        $cliente->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'aqui';

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = new Cliente();
        $cliente = $cliente->where('id', $id)->first();

        return view('create', compact(['pokemon']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = new Cliente();
        $cliente->id = $request->id;
        $cliente = $cliente->where('id', $id)->first();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->timestamps = $request->timestamps;

        $cliente->save();

        return redirect()->route('cadastro.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = new Cliente();
        $cliente = $cliente->where('id', $id)->first();

        $cliente->delete();

        return redirect()->route('cadastro.index');
    }
}