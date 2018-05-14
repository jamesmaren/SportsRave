@extends('layouts.master')
@section('head')
     <title> man-city vs man-u</title>
     <style>
        /*  #stream-head{
          
          width:1060px;
          height:420px;
          padding-left:50px;

        }
        .stream-video{
           float:left;
           width:700px;
           height:400px;
           border:2px solid red;
           border-radius: 6px;
        }
        .stream-comments{
           float:left;
           height:400px;
           width:300px;
           border:2px solid red;
           border-radius: 6px;
        } */
        #stream-links{
                
        }
        #comments{
          
        }
        .new-post{
          padding: :16px 0;
          border-bottom:2px solid #ccc;
          padding-bottom:15px;
        }
        .new-post header,
        .posts header{
           margin-bottom:15px;        
        }
        .posts .post{
           padding-left: 10px;
           border-left: 3px solid tomato;
           margin-bottom: 30px;
        }
         .posts .post .info{
           color: #aaa;
           font-style:italics;
         }
         </style>
@endsection

@section('content')
     <!--
       <div id="stream-head"> 
             <div class="stream-video" > 
 
             </div>
              <div class="stream-comments">
                 
              </div> -->
       </div>
           <div  id="stream-links">
             <ol> 
              <li><a href="" ><p>link1:  </p>   </a></li>
              <li><a href="" ><p>link2:  </p></a></li>
              <li><a href=""><p>link:  </p></a></li>
               <li> <a href=""> <p>link4: </p></a></li>
           </div> 
          </ol> 
     <!-- comments section start  -->  <!-- comments section start  -->   <!-- comments section start  -->
           <div id="comments">
   @include('includes.message-block')
            <section class="row new-post">
               <div  class ="col-md-6 col-md-offset-3">
                    <header><h3> what do you have to say </h3> </header>
               <form action="{{route('post.create')}}" method="post">
                       <div class="form-group">
                      <textarea class="form-control" name="body" id="new-post" rows="6" placeholder="Your post">  </textarea>     
                       </div>
                       <button type="submit"  class="btn btn-primary" >Create Post </button>
                      <input type="hidden" value="{{Session::token()}}"  name="_token" />
                      </form>
                    </div>
                  </section>
            <section class="row posts">
                    <div class="col-md-6 col-md-offset-3">
<header><h3> what people said..... </h3></header> 
                      @foreach($posts as $post) 
                       <article class="post">
                       <p> {{ $post->body }}</p>
                         <div class="info">
                           posted by {{$post ->user->first_name}} | <br>
                           {{$post ->created_at}}
                         </div>
                         <div class="interaction">
                           <a href="#">like</a>|
                           <a href="#">dislike</a>|
                           @if(Auth::user() == $post->user) 
                           <a href=""> edit</a>|
                         <a href="{{Route('post.delete', ['post_id' => $post ->id])}}"> delete</a>
                             @endif
                        </article>
                        @endforeach
                      </div>
            </section>
 <div class="modal fade" tabindex="_1" role="dialog" id="edit-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" date-dismiss="modal" aria-label="Close"><span aria-hidden="hidden">&times;</span></button>  
      <h4 class="modal-title"> Edit Post</h4>
          </div>
  <div class="modal-body">
       <p>one fine body &hellip;</p>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
             <button type="button" class"btn btn-primary" > save changes </button> 
           </div>
          </div>
        </div>
      </div>
    </div>

     <script>
        var token ='{{Session::toekn}}';
        var urlEdit ='{{route('edit')}}'
       </script>
    
@endsection