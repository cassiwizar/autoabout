<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    // Se a tabela for maiúscula, informe aqui:
    protected $table = 'dados'; // Use minúsculo, e renomeie sua migration para usar 'dados'

    // Se você quiser liberar a atribuição em massa para os campos
    protected $fillable = ['nome', 'email', 'senha'];
}
