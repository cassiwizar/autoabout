<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservaController extends Controller
{
    public function reserva()
    {
        return view('reserva'); 
    }
}