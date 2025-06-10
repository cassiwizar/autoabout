<?php

namespace App\Http\Controllers;

use App\Models\Dado;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        $dados = Dado::all();
        return view('cadastro', compact('dados'));
    }

    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $dados = new Dado();
        $dados->nome = $request->nome;
        $dados->email = $request->email;
        $dados->senha = $request->senha;
        $dados->save();

        return redirect()->route('cadastro')->with('success', 'Cadastro realizado com sucesso.');
    }

    public function show(string $id)
    {
        return view('show', ['dados' => Dado::findOrFail($id)]);
    }

    public function edit(string $id)
    {
        $dados = Dado::findOrFail($id);
        return view('create', compact('dados'));
    }

    public function update(Request $request, string $id)
    {
        $dados = Dado::findOrFail($id);
        $dados->nome = $request->nome;
        $dados->email = $request->email;
        $dados->senha = $request->senha;
        $dados->save();

        return redirect()->route('cadastro')->with('success', 'Cadastro atualizado com sucesso.');
    }

    public function destroy(string $id)
    {
        $dados = Dado::findOrFail($id);
        $dados->delete();

        return redirect()->route('cadastro')->with('success', 'Cadastro excluído com sucesso.');
    }
}
