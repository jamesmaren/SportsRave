<?php 
namespace App\Http\controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class football_datacontroller extends controller
{
       public function football(){
             $football_datas =football_data::all();
             return view('pages.football', ['football_datas' => $football_data]);

       }

      public function getfootball(){
            return view('pages.football');
      }
    public function postfootball(Request  $request){


    
         $country= $request['country'];
         $day=$request['day'];

         $football_datas->country=$country;
         $football_datas->day=$day;
       $football_datas->save();

    }
    
    protected $connection = 'football_datas';
    
}

