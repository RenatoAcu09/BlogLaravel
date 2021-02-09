<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    //Relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    //Relacion polimorfica de uno a uno
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}