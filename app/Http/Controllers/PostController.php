<?php 
namespace App\Http\controllers;
use App\post;
use Illuminate\Http\Request;


class postcontroller extends controller
{
    public  function stream(){
        $posts =Post::all();
         return view('pages.stream', ['posts' => $posts]);
    }
       public function postCreatePost(Request $request){
           
      $this -> validate($request,[
          'body'  => 'required|max:1000'
      ]);
      $post = new Post();
      $post ->body  =$request['body'];
      $message ='there was an error';
   if (    $request ->user()->posts()->save($post)) {
       $message ='post succesfully created' ;
   }
      return redirect() -> Route('stream') -> with(['message' =>$message]);

       }

      public function getDeletePost ($post_id)
      {
          $post = Post::where('id', $post_id) -> first();
          $post->delete();
          return redirect() -> route('stream')-> with (['message' => 'succesfully deleted']);
          
      }
}