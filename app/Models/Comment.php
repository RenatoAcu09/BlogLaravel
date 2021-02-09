<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Relacion Polimorfica
    public function commentable()
    {
        return $this->morphTo();
    }
}