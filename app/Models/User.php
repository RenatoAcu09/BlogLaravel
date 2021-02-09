<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relacion  uno a uno
    public function profile()
    {
        //$profile = Profile::where('user_id', $this->id)->first();
        //return $profile;

        //return $this->hasOne('App\Models\Profile','foregin_key' ,'local_key');

        return $this->hasOne(Profile::class);
    }

    //Relacion uno a muchos
    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    //Relacion muchos a muchos
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }


    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    //Relacion polimorfica de uno a uno
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}