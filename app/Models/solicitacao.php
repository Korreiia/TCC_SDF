<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone1',
        'telefone2',
        'endereco',
        'cpf',
        'email',
        'curso',
        'rm',
        'descpedido',
    ];
}
