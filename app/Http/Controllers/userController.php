<?php 
namespace App\Http\controllers;
use App\User;
use illuminate\http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use illuminate\Support\Fascades\File;
use illuminate\Support\Fascades\Storage;

class userController extends controller
{
    public function getsignin(){
        return view ('pages.home');
    }
    
    public function getsignup(){
        return view ('pages.signin');
    }
    public function getSaveAccount(){
        return view('userController@getAccount');
    }
    public function postsignup(Request $request)
    {
      
        $this -> validate($request,[
            'first_name' => 'required|max:120',
            'second_name'  =>'required|max:120',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:5',  
              ]);


       $email =$request['email'];
        $first_name =$request['first_name'];
        $second_name=$request['second_name'];
        $password =bcrypt($request['password']);



        $user =new user();
        $user->email=$email;
        $user->first_name=$first_name;
        $user->second_name=$second_name;
        $user->password=$password;

        $user->save();
       
        Auth::login($user);
        return redirect()->route('signin');

        

  }

      
    public function postsignin(Request $request)
    { 

        $this -> validate($request,[
            'email' => 'required',
            'password'  => 'required'
              ]);

              
        if  (Auth::attempt(['email' =>$request['email'],'password'=>$request['password']])) {
            return redirect() -> route ('home');
        }else { 
        return redirect() ->back();
    }
    
}

 public function getLogout()
 {
     Auth::logout();
     return redirect() -> route('welcome');
 }
 public function getAccount()
 {
     return view('pages.account', ['user' => Auth::user()]);
 }
   public function  postSaveAccount(Request $request)
   {
       $this -> validate($request,[
           'first_name' => 'required|max:120'
       ]);
       $user = Auth::user();
       $user ->first_name =$request ['first_name'];
       $user ->email =$request ['email'];
       $user -> update();
       $file =$request->file('image');
       $filename =$request['first_name'] . '-' . $user->id . '.jpg';
   if($file){
       Storage::disk('local')->put($filename, File::get($file));
   }
      return redirect() -> route('account');

   }
   public function getuserimage($filename)
   {
       $file = Storage::disk('local')->get($filename);
       return new Response($file, 200);
   }
}
