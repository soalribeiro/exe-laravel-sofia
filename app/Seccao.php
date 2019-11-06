<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seccao extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'titulo_sec'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
