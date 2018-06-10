<?php
use App\post;
use App\User;
use App\like;
namespace App;

use Illuminate\Database\Eloquent\Model;

class football_data extends Model
{
     public static $table = 'football_datas';
        
     public function user()
     {
         return $this ->belongsTo('App/user');
     }
     public function post()
     {
         return $this ->belongsTo('App/Post');
     }

}
