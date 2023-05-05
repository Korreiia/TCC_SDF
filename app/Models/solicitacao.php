<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'descpedido',
        'quantidade',
        'id_usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
}
