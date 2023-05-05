<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}