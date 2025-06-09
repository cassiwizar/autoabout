<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetosController extends Controller
{
    public function projetos()
    {
        return view('projetos'); 
    }
} 