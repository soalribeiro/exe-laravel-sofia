<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticia extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'titulo-not',
        'corpo-not',
        'jornal_id',
        'seccao_id'
    ];
}
