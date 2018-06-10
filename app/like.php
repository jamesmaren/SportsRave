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
    public function post()
    {
        return $this ->belongsTo('App/Post');
    }
}
