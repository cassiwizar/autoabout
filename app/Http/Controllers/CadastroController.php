<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dado;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('cadastro');
    }
    public function store(Request $request)
        {
        // Validação dos dados
        $validatedData = $request->validate([
            'email' => 'required|email|unique:dados,email',
            'username' => 'required|string|max:255',
            'senha' => 'required|string|min:6',
        ]);
    
        // Criar um novo registro no banco de dados
        Dado::create([
            'email' => $validatedData['email'],
            'nome' => $validatedData['username'],
            'senha' => bcrypt($validatedData['senha']), // Criptografar a senha
        ]);
    
        // Redirecionar com mensagem de sucesso
        return redirect()->route('cadastro')->with('success', 'Cadastro realizado com sucesso!');
    }
}