@extends('layouts.master')
@section('head')
<script type="text/javascript"   src="{{ URL::asset('src/js/app.js') }}"> </script>

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
        #stream-links li{
          
        }
        #stream-links ol{
          
          
            font-size: 24px;
            color:#ed6050;
            padding-left: 270px; 
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
       
           <div  id="stream-links">
             <h3 style="color:green;font-family: 'Sofia';font-size:30px;padding-left:360px;text-decoration:underline;"> LINKS </h3>
             <ol> 
              <li><a href="" > manchester  city vs real madrid </a><span>(skysports) </span></li>
              <li><a href="" > manchester  city vs real madrid </a><span>(skysports) </span></li>
              <li><a href="" > manchester  city vs real madrid </a><span>(skysports) </span></li>
              <li><a href="" > manchester  city vs real madrid </a><span>(skysports) </span></li>
              <li><a href="" > manchester  city vs real madrid </a><span>(skysports) </span></li>
             </ol>
           </div> 
          
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
                           <a href="#"  class="like">like</a>|
                           <a href="#" class="like">dislike</a>|
                           
                           @if(Auth::user() == $post->user) 
                           <a href="#" class="edit"> edit</a>|
                         <a href="{{Route('post.delete', ['post_id' => $post ->id])}}"> delete</a>
                             @endif
                        </article>
                        @endforeach
                      </div>
            </section>
 

    <div class="modal fade" tabindex="_1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form> 
                   <div class="form-group">
                     <label for="post-body">Edit the Post </label>
                     <textarea  class="form-control" name="post-body" id="post-body" row="5"></textarea>
                   </div>
               </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
         <script>
        var token='{{Session::token()}}';
         var urllike ='{{route('like')}}' ;
           </script>

    </div>

     
@endsection