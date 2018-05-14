<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    //
    public function user()
    {
        return $this ->belongsTo('App/user');
    }
    public function likes()
    {
        return $this ->hasMany('App/like');
    }
}
