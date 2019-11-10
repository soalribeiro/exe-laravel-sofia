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
        'image',
        'user_id',
        'jornal_id',
        'seccao_id',
        'tipo_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function jornal()
    {
        return $this->belongsTo('App\Jornal', 'jornal_id');
    }

    public function seccao()
    {
        return $this->belongsTo('App\Seccao', 'seccao_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }
}
