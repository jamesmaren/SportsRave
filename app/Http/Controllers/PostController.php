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
      public function postEditPost(Request $request)
      {
          $this -> validate($request,[
              'body'=> 'required'
          ]);
          $post =Post::find($request['postid']);
            if (Auth::user() != $post->user) {
                return redirect()-> back();
            }
            $post->body =$request['body'];
            $post ->update();
            return response() ->json(['new_body'=> $post->body],200);
   }
   public function postLikePost(Request $request)
   {
       $post_id =$request['postid'];
       $is_like =$request['islike']=='true';
       

   }
}