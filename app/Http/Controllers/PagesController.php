<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function welcome(){
         return view ('welcome');
    }
    public function home(){
        return view ('vendor.home');
    }
    public function basketball(){
        return view ('pages.basketball');
   }
    public function signin(){
        return view('pages.signin');
    }
    public function rugby(){
        return view ('pages.rugby');
    }
    public function football(){
        return view ('pages.football');
    }
    public function cricket(){
        return view ('pages.cricket');
    }
    public function signup(){
        return view('pages.signup');
    }

    public function premium(){
        return view ('pages.premium');
    }
    public function  formula1(){
        return view ('pages.formula1');
    }
    public function account(){
        return view ('pages.account');
    }
    
}
