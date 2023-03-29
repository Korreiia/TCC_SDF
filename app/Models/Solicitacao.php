<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;
    protected $table = 'Solicitacao';
    public $created_at;
    public $updated_at;
    
}
