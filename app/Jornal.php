<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jornal extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'titulo-jor',
        'descricao-jor',
        'image',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
