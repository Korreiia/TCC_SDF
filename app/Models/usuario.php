<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
            'nome',
            'cpf',
            'telefone',
            'endereco',
            'email',
            'senha',
            'usuario',
            'admin',
    ];

    public function solicitacao(): HasMany
    {
        return $this->hasMany(solicitacao::class);
    }
}