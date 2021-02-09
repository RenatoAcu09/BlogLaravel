<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Podemos definir el nombre de la tabla.
    //protected $table = "users";

    /*
    protected $fillable = [
        'name',
        'description',
        'category'
    ];
    */

    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}