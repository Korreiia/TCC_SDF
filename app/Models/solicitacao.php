<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class solicitacao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'solicitacaos';
    
    protected $fillable = [
        'descpedido',
        'quantidade',
        'visto',
        'id_usuario',
    ];

    protected $dates = ['deleted_at'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(usuario::class, 'id_usuario', 'id');
    }
}
