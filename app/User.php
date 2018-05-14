<?php

namespace App;
use illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
 use\illuminate\Auth\Authenticatable;
      
 public function posts()
 { 
      return  $this -> hasMany('App\Post');
 }
 public function likes()
    {
        return $this ->hasMany('App/like');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
