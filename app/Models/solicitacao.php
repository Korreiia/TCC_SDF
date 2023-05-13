<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class solicitacao extends Model
{
    use HasFactory;

    protected $table = 'solicitacaos';
    
    protected $fillable = [
        'descpedido',
        'quantidade',
        'visto',
        'id_usuario',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'id');
    }
}
